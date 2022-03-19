<?php
include_once('path.php');
include_once('app/controllers/users.php');
$title = 'Добро пожаловать в Owl Academy!';
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
    <?php include_once(SITE_ROOT.'/app/includes/header.php');?>
      <main class="main">
        <div class="container">
        <?php if(isset($_SESSION['id'])) : ?>
          <section class="home">
          <article class="home__greeting">
              <div class="home__greeting-item"><img class="home__greeting-img" src="images/owl-1.svg" alt="Tom"/>
                <p class="home__greeting-text">Добро пожаловать в мир английского языка, <?php echo $_SESSION['login'];?>! Здесь ты сможешь получить базовые знания английской грамматики и выучить повседневные слова.</p>
              </div>
            </article>
          </section>
          <?php else : ?>
          <section class="home">
            <article class="home__greeting">
              <div class="home__greeting-item"><img class="home__greeting-img" src="images/owl-1.svg" alt="Tom"/>
                <p class="home__greeting-text">Добро пожаловать в мир английского языка, Незнакомец! Здесь ты сможешь получить базовые знания английской грамматики и выучить повседневные слова.</p>
              </div>
              <div class="home__greeting-item"><img class="home__greeting-img" src="images/owl-2.svg" alt="Alex"/>
                <p class="home__greeting-text">Ты можешь отслеживать свой прогресс обучения, но для этого тебе нужно <a class="home__auth-link" href="/signup">зарегестрироваться</a> или <a class="home__auth-link" href="/login">авторизоваться</a> если ты уже стал членом академии.</p>
              </div>
            </article>
          </section>
          <?php endif;?>
          <?php if(isset($_SESSION['id'])) : ?>
          <section class="level">
            <article class="level__item-content">
              <h1 class="level__login"><?=$_SESSION['login'];?></h1>
              <h2 class="level__quality"><?=$_SESSION['learnData']['status'];?></h2>
              <div class="level__words level__all-words">Словарь:<span class="level__points"><?=$_SESSION['learnData']['total'];?></span></div>
              <div class="level__words level__learned-words">Выучено слов:<span class="level__points"><?=$_SESSION['learnData']['learned'];?></span></div>
              <div class="level__words level__process-words">Слова в процессе:<span class="level__points"><?=$_SESSION['learnData']['inProcess'];?></span></div>
              <div class="level__words level__all-points">Всего очков опыта:<span class="level__points"><?=$_SESSION['learnData']['points'];?></span></div>
            </article>
            <article class="level__item-scale">
              <div class="level__level">
                <div class="level__level-points"><?php echo $_SESSION['learnData']['level'];?></div>
              </div>
              <div class="level__scale">
                <div
                  class="level__line"
                  style="<?php if ($_SESSION['learnData']['width'] > 0): ?>
                    width: <?php echo $_SESSION['learnData']['width'];?>0%;
                    <?php endif;?>
                    <?php if ($_SESSION['learnData']['width'] > 7): ?>border-radius: 20px;
                    <?php endif;?>
                  "
                ></div>
              </div>
            </article>
            <a class="level__dictionary-btn" href="/dictionary">Мой словарь</a>
          </section>
          <?php endif;?>
        </div>
      </main>
      <?php include_once(SITE_ROOT.'/app/includes/footer.php');?>

