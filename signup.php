<?php
    include_once('path.php');
    if (isset($_SESSION['id'])) {
        header('Location: ' . BASE_URL);
    }
    include_once('app/controllers/users.php');
    $title = 'Регистрация в Owl Academy!';
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
                    <h1 class="auth__title">Регистрация</h1>
                    <form
                        class="auth__signup"
                        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
                        method="POST"
                        novalidate="novalidate"
                    >
                        <label class="auth__label">
                            <span class="auth__error-msg"><?=$nameErr?></span>
                            <input
                                class="auth__input auth__username"
                                name="login"
                                type="text"
                                placeholder="* Логин"
                                autocomplete="login"
                                value="<?=$username?>"
                                required
                            />
                        </label>
                        <label class="auth__label">
                            <span class="auth__error-msg"><?=$emailErr?></span>
                            <input
                                class="auth__input auth__email"
                                name="email"
                                type="email"
                                placeholder="* Email"
                                autocomplete="username"
                                value="<?=$email?>"
                                required
                            />
                        </label>
                        <label class="auth__label">
                            <span class="auth__error-msg"><?=$passErr?></span>
                            <input
                                class="auth__input auth__password"
                                name="password"
                                type="password"
                                placeholder="* Пароль"
                                autocomplete="password"
                                required
                            />
                            <span class="auth__toggle-pass">
                                <img class="auth__show-pass-img" src="images/show-pass.svg" alt="Show"/>
                                <img class="auth__hide-pass-img auth__hidden" src="images/hide-pass.svg" alt="Hide"/>
                            </span>
                        </label>
                        <label class="auth__label">
                            <span class="auth__error-msg"><?=$rPassErr?></span>
                            <input
                                class="auth__input auth__repeatPassword"
                                name="repeat_password"
                                type="password"
                                placeholder="* Повторить пароль"
                                autocomplete="password"
                                required
                            />
                            <span class="auth__toggle-repeat-pass">
                                <img class="auth__show-repeat-pass-img" src="images/show-pass.svg" alt="Show"/>
                                <img class="auth__hide-repeat-pass-img auth__hidden" src="images/hide-pass.svg" alt="Hide"/>
                            </span>
                        </label>
                        <button
                            class="auth__btn"
                            type="submit"
                            name="do_signup"
                        >Регистрация</button>
                    </form>
                    <a href="/login" class="auth__change-auth">У меня есть аккаунт</a>
                </article>
            </section>
            </div>
        </main>
<?php include_once(SITE_ROOT.'/app/includes/footer.php');?>

