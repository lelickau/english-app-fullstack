<?php
  session_start();
  include_once('path.php');
  $title = 'Наборы слов';
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
    <div class="wrapper wrapper__cards">
      <?php include_once(SITE_ROOT.'/app/includes/header.php');?>
      <main class="main">
        <div class="container">
          <div class="cards">
            <article class="cards__category">
              <h2 class="cards__title">Еда</h2>
              <div class="cards__topics">
                <div class="cards__topics-item" data-topic="fish" data-level="a1" data-title="Рыба"><img src="images/cards-ico/fish.svg" alt="Fish"/>
                  <h3 class="cards__topics-item-title">Рыба</h3>
                </div>
                <div class="cards__topics-item" data-topic="meat" data-level="a1" data-title="Мясо"><img src="images/cards-ico/meat.svg" alt="Meat"/>
                  <h3 class="cards__topics-item-title">Мясо</h3>
                </div>
                <div class="cards__topics-item" data-topic="vegetables" data-level="a1" data-title="Овощи"><img src="images/cards-ico/vegetables.svg" alt="Vegetables"/>
                  <h3 class="cards__topics-item-title">Овощи</h3>
                </div>
                <div class="cards__topics-item" data-topic="fruit" data-level="a1" data-title="Фрукты"><img src="images/cards-ico/fruits.svg" alt="Fruit"/>
                  <h3 class="cards__topics-item-title">Фрукты</h3>
                </div>
              </div>
            </article>
          </div>
          <section class="dictionary dictionary__hidden">
            <div class="dictionary__header">
              <h1 class="dictionary__title">Фрукты</h1>
              <div class="dictionary__close"><img class="dictionary__close-img" src="images/close-btn.svg" alt="Close"/></div>
            </div>
            <div class="dictionary__content"></div>
            <div class="dictionary__footer"></div>
          </section>
        </div>
      </main>
      <?php include_once(SITE_ROOT.'/app/includes/footer.php');?>