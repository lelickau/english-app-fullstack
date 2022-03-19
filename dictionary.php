<?php
session_start();
	include 'path.php';
    if (!isset($_SESSION['id'])) {
        header('Location: ' . BASE_URL);
    }
	include 'app/controllers/dictionary.php';
	$title = 'Мой словарь';
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
        <div class="wrapper wrapper__words">
            <?php include_once(SITE_ROOT.'/app/includes/header.php');?>
            <main class="main">
                <div class="container">
                <section class="words">
                    <?php if (empty($wordsData)) : ?>
                        <h2 class="words__level">На данный момент ваш словарь пустой. Чтобы добавить слова, пройдите любую из тренировок.</h2>
                    <?php endif; ?>
                    <?php foreach($wordsData as $key => $array) : ?>
                    <article class="words__item">
                        <h2 class="words__level"><?=$array['level']?></h2>
                            <div class="words__content">
                                <?php $words = json_decode($array['words_str']);?>
                                <?php foreach($words as $k => $word) : ?>
                                <div class="words__word">
                                    <div class="words__title"><?=$word[0]?></div>
                                    <div class="words__progress">
                                        <div
                                            class="words__progress-inside"
                                            style="background: conic-gradient(#BF8FFD <?=$word[1]?>%, transparent 0);"
                                        ></div>
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>
                    </article>
                    <?php endforeach;?>
                </section>
                </div>
            </main>
<?php include_once(SITE_ROOT.'/app/includes/footer.php');?>