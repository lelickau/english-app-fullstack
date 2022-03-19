<?php
    include_once('path.php');
    if (isset($_SESSION['id'])) {
        header('Location: ' . BASE_URL);
    }
    include_once('app/controllers/users.php');
    $title = 'Создать новый пароль';

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
                    <h1 class="auth__title">Новый пароль</h1>
                    <form
                        class="auth__recover"
                        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
                        method="POST"
                        name="recover"
                    >
                    <?php if(isset($_SESSION['error'])) : ?>
                        <?=$_SESSION['error'];?>
                        <a class="auth__recover-pass" href="/forgot">Востановить пароль</a>
                        <?php else : ?>
                        <input type="hidden" name="hash" value="<?=$_GET['key'] ?? '';?>">
                        <label class="auth__label">
                            <input
                                class="auth__input auth__password"
                                name="password"
                                type="password"
                                placeholder="* Новый пароль"
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
                                placeholder="* Повторить новый пароль"
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
                            name="do_recover"
                        >Отправить</button>
                        <?php endif; ?>
                    </form>
                </article>
            </section>
            </div>
        </main>
<?php include_once(SITE_ROOT.'/app/includes/footer.php');?>
