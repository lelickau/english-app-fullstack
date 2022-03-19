<?php
include_once('app/db/db.php');
include_once(SITE_ROOT.'/app/help/vadidate.php');
include_once(SITE_ROOT.'/app/controllers/progress.php');
include_once('mail.php');

$nameErr = $emailErr = $passErr = $rPassErr = '';
$email = $username = $password = $repeatPassword = '';
$success = '';
$error = '';

function userAuth ($user) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['login'];
    $_SESSION['learnData'] = getLearnData($user['id']);

    header('Location: ' . BASE_URL.'/trainings');
}

// signup
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['do_signup'])) {

    $email = validateInput(mb_strtolower($_POST['email']));
    $username = validateInput($_POST['login']);
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeat_password'];

    if (empty($email)) {// email
        $emailErr = "Введите Email";
        return false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Неверный формат электронной почты";
        return false;
    } elseif (empty($username)) {// name
        $nameErr = "Введите имя";
        return false;
    } elseif (!preg_match("/^(([a-zA-Z0-9' -]{1,30})|([а-яА-ЯЁёІіЇїҐґЄє0-9' -]{1,30}))$/u", $username)) {
        $nameErr = "Введите корректное имя";
        return false;
    } elseif (empty($password)) {// password
        $passErr = "Введите пароль";
        return false;
    } elseif ($password !== $repeatPassword) {
        $rPassErr = "Пароли не совпадают";
        return false;
    } else { // ok

        $existence = selectOne('users', ['email' => $email]);
        if (!empty($existence['email']) && $existence['email'] === $email) {
            $emailErr = "Пользователь с таким email уже зарегестрирован";
            return false;
        } else {

            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $data = [
                'email' => $email,
                'login' => $username,
                'password' => $password
            ];
            $id = insert('users', $data);

            $nameErr = $emailErr = $passErr = $rPassErr = '';
            $password = $repeatPassword = '';

            $user = selectOne('users', ['id' => $id]);

            userAuth($user);
        }
    }
}

// login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['do_login'])) {

    $email = validateInput(mb_strtolower($_POST['email']));
    $password = $_POST['password'];

    if (empty($email)) {// email
        $emailErr = "Введите Email";
        return false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Неверный формат электронной почты";
        return false;
    } elseif (empty($password)) {// password
        $passErr = "Введите пароль";
        return false;
    } else {
        $existence = selectOne('users', ['email' => $email]);
        if (!empty($existence) && password_verify($password, $existence['password'])) {
            // login
            $emailErr = '';
            $password = '';
            userAuth($existence);
        } else {
            $emailErr = "Email или пароль не верны";
            return false;
        }
    }
}

// forgot password
unset($_SESSION['success']);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['do_forgot'])) {
    $email = validateInput(mb_strtolower($_POST['email']));

    if (empty($email)) {// email
        $emailErr = "Введите Email";
        return false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Неверный формат электронной почты";
        return false;
    } else {
        $existence = selectOne('users', ['email' => $email]);
        if (!empty($existence['email']) && $existence['email'] === $email) {
            // ok
            $email = $existence['email'];
            $user_id = $existence['id'];
            $expDate = time() + TIME_ACTIVE_LINK;
            $key = bin2hex(random_bytes(16));

            $data = [
                'email' =>  $email,
                'hash' => $key,
                'expire' => $expDate,
                'user_id' => $user_id
            ];
            $id = insert('recover', $data);

            if (!empty($id)) {

                $url = BASE_URL.'recover?key='.$key;

                $message = '<div style="padding-top:20px;text-align:left">'.$existence['login'].', Вы подали заявку на изменение пароля от Вашего аккаунта на сайте Owl Academy. Для того чтобы изменить пароль, перейдите по следующей ссылке:</div><br><br><a href="'.$url.'" title="Owl Academy" target="_blank">'.$url.'</a><br><br><div>Ссылка на изменение пароля будет дейтвительна в течении часа.</div><br><br><div>Если Вы не запрашивали смену пароля от Вашего аккаунта на сайте LostFilm.TV, проигнорируйте это письмо.</div><br><br><div>С уважением, Ваш Owl Academy.</div>';

                global $mail_settings;

                $mail = send_mail($mail_settings, [$email], 'Восcтановление пароля', $message);

                if ($mail) {
                    $_SESSION['success'] = 'На указанный email в течении 2х минут будет отправлено письмо с инструкциями для востановления пароля';

                } else {
                    unset($_SESSION['success']);
                    $error = 'Что-то пошло не так, повторите попытку позже';
                    return false;
                }

            }

        } else {
            $emailErr = "Пользователь с таким email не зарегестрирован";
            return false;
        }
    }

}

function getUserHash($hash) {
    $row = selectOne('recover', ['hash' => $hash]);
    $now = time();

    if (empty($row)) {
        return false;
    } elseif ($row['expire'] - $now < 0) {
        delete('recover', $row['id']);
        return false;
    } else {
        return $row;
    }
}

unset($_SESSION['error']);
if (!empty($_GET['key'])) {
    $hash = $_GET['key'];
    if (!getUserHash($hash)) {
        $_SESSION['error'] = "Ссылка на изменение пароля устарела или является не корректной. Попробуйте восстановить пароль снова.";
    }

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['do_recover'])) {
    unset($_SESSION['error']);
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeat_password'];
    $hash = $_POST['hash'];

    if (empty($password)) {// password
        $passErr = "Введите пароль";
        return false;
    } elseif ($password !== $repeatPassword) {
        $rPassErr = "Пароли не совпадают";
        return false;
    } else {
        $row = getUserHash($hash);
        if (!$row) {
            $_SESSION['error'] = "Ссылка на изменение пароля устарела или является не корректной. Попробуйте восстановить пароль снова.";
            return false;
        } else {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            update('users', $row['user_id'], ['password' => $password]);
            delete('recover', $row['id']);
            unset($_SESSION['success']);
            header('Location: ' . BASE_URL.'/login');
        }
    }

}

?>