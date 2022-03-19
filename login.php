<?php
include_once('path.php');
if (isset($_SESSION['id'])) {
    header('Location: ' . BASE_URL);
}
$title = 'Авторизация в Owl Academy!';
include_once('app/controllers/users.php');
?>
<html>
<?php include_once(SITE_ROOT.'/app/includes/head.php'); ?>
    <body>
        <div class="preloader">
            <div class="preloader__row">
                <div class="preloader__item"></div>
                <div class="preloader__item"></div>
            </div>
        </div>
        <div class="wrapper wrapper__auth">
        <?php include_once(SITE_ROOT.'/app/includes/header.php');?>
        <main class="main">
            <div class="container">
            <section class="auth">
                <article class="auth__auth">
                    <h1 class="auth__title">Авторизация</h1>
                    <form
                        class="auth__login"
                        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
                        method="POST"
                        name="login"
                        novalidate="novalidate"
                    >
                        <label class="auth__label">
                            <span class="auth__error-msg"><?=$emailErr?></span>
                            <input
                                class="auth__input auth__email"
                                name="email"
                                type="email"
                                placeholder="* Email"
                                autocomplete="username"
                            />
                        </label>
                        <label class="auth__label">
                            <span class="auth__error-msg"></span>
                            <input
                                class="auth__input auth__password"
                                name="password"
                                type="password"
                                placeholder="* Пароль"
                                autocomplete="password"
                            />
                            <span class="auth__toggle-pass">
                                <img class="auth__show-pass-img" src="images/show-pass.svg" alt="Show"/>
                                <img class="auth__hide-pass-img auth__hidden" src="images/hide-pass.svg" alt="Hide"/>
                            </span>
                        </label>
                        <a class="auth__recover-pass" href="/forgot">Востановить пароль</a>
                        <button
                            class="auth__btn"
                            type="submit"
                            name="do_login"
                        >Войти</button>
                    </form>
                    <a href="/signup" class="auth__change-create">Создать аккаунт</a>
                </article>
            </section>
            </div>
        </main>
<?php include_once(SITE_ROOT.'/app/includes/footer.php');?>

