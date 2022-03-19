<?php
	include 'path.php';
	$title = '404. Страница не найдена.';
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
    <div class="wrapper">
        <main class="main">
            <div class="container">
            <section class="home">
                <article class="home__greeting">
                <div class="home__greeting-item">
                        <img class="home__greeting-img" src="images/owl-1.svg" alt="Tom"/>
                        <p class="home__greeting-text">Упс.. Кажется ты попал не туда!! Стоит вернуться на <a href="/">главную страницу.</a></p>
                </div>
                </article>
            </section>
            </div>
        </main>
        <?php include_once(SITE_ROOT.'/app/includes/footer.php');?>
