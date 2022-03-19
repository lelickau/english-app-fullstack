<header class="header">
    <div class="container">
        <div class="mobile-menu" data-active="">
        <div class="mobile-menu__item"></div>
        <div class="mobile-menu__item"></div>
        <div class="mobile-menu__item"></div>
        </div>
        <nav class="menu">
            <ul class="menu__list">
                <?php if(isset($_SESSION['login'])) : ?>
                    <li class="menu__item">
                        <a class="munu__link" href="<?php echo BASE_URL; ?>">
                            <?=$_SESSION['login']?>
                        </a>
                    </li>
                <?php endif;?>
                <li class="menu__item"><a class="munu__link" href="/cards">Карточки</a></li>
                <li class="menu__item"><a class="munu__link" href="/grammar">Грамматика</a></li>
                <li class="menu__item"><a class="munu__link" href="/trainings">Тренировки</a></li>
            </ul>
        <ul class="menu__list">
            <?php if(isset($_SESSION['id'])) : ?>
                <li class="menu__item"><a class="munu__link" href="<?php echo BASE_URL . 'logout.php'; ?>">Выйти</a></li>
            <?php else : ?>
                <li class="menu__item"><a class="munu__link" href="/login">Войти</a></li>
            <?php endif;?>
        </ul>
        </nav>
    </div>
</header>