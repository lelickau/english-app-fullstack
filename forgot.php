<?php
    include_once('path.php');
    if (isset($_SESSION['id'])) {
        header('Location: ' . BASE_URL);
    }
    $title = 'Восстановить пароль';
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
                    <h1 class="auth__title">Восстановить пароль</h1>
                    <form
                        class="auth__forgot"
                        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
                        method="POST"
                        name="forgot"
                    >
                        <?php if(isset($_SESSION['success'])) : ?>
                            <div><?=$_SESSION['success'];?></div>
                        <?php else : ?>
                        <div><?=$error?></div>
                        <label class="auth__label">
                            <span class="auth__error-msg">
                                <?=$emailErr?>
                            </span>
                            <input
                                class="auth__input auth__email"
                                name="email"
                                type="email"
                                placeholder="* Email"
                                autocomplete="username"
                            />
                        </label>
                        <a class="auth__recover-pass" href="/login">Авторизоваться</a>
                        <button
                            class="auth__btn"
                            type="submit"
                            name="do_forgot"
                        >Отправить</button>
                        <?php endif; ?>
                    </form>
                    <a href="/signup" class="auth__change-create">Создать аккаунт</a>
                </article>
            </section>
            </div>
        </main>
<?php include_once(SITE_ROOT.'/app/includes/footer.php');?>
