<?php
  session_start();
  include_once('path.php');
  $title = 'Базовая грамматика';
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
    <div class="wrapper wrapper__grammar">
    <?php include_once(SITE_ROOT.'/app/includes/header.php');?>
      <main class="main">
        <div class="container">
          <section class="grammar">
            <h2 class="grammar__title title">Простое (неопределенное) время - Simple Tense</h2>
            <article class="grammar__items"><a class="verb accent_4" href="presentSimple" id="presentSimple">
                <h3 class="verb__title title">Present Simple</h3>
                <p class="verb__text">Время Present Simple обозначает действие в настоящем в широком смысле слова. Оно употребляется для обозначения обычных, регулярно повторяющихся или постоянных действий, например, когда мы говорим о чьих-либо привычках, режиме дня, расписании и т. д.</p></a><a class="verb accent_2" href="pastSimple" id="pastSimple">
                <h3 class="verb__title title">Past Simple</h3>
                <p class="verb__text">Время Past Simple используется для обозначения действия, которое произошло в определенное время в прошлом и время совершения которого уже истекло.</p></a><a class="verb accent_3" href="futureSimple" id="futureSimple">
                <h3 class="verb__title title">Future Simple</h3>
                <p class="verb__text">Время Future Simple ссылается на действие, которое совершится в неопределенном или отдаленном будущем.</p></a>
            </article>
            <h2 class="grammar__title title">Длительное время - Continuous Tense</h2>
            <article class="grammar__items"><a class="verb accent_4" href="presentContinuous" id="presentContinuous">
                <h3 class="verb__title title">Present Continuous</h3>
                <p class="verb__text">Время Present Continuous указывает на процесс, длящийся непосредственно в момент речи. </p></a><a class="verb accent_2" href="pastContinuous" id="pastContinuous">
                <h3 class="verb__title title">Past Continuous</h3>
                <p class="verb__text">Время Past Continuous указывает на процесс, длившийся в определенный момент или период в прошлом. В отличие от времени Past Simple, этот момент в прошлом должен быть назван прямо или быть очевидным из контекста.</p></a><a class="verb accent_3" href="futureContinuous" id="futureContinuous">
                <h3 class="verb__title title">Future Continuous</h3>
                <p class="verb__text">Время Future Continuous указывает на процесс, который будет длиться в определенный момент в будущем. В отличие от времени Future Simple, этот момент в будущем должен быть назван прямо или быть очевидным из контекста.</p></a>
            </article>
            <h2 class="grammar__title title">Совершенное время - Perfect Tense</h2>
            <article class="grammar__items"><a class="verb accent_4" href="presentPerfect" id="presentPerfect">
                <h3 class="verb__title title">Present Perfect</h3>
                <p class="verb__text">Время Present Perfect обозначает действие, которое завершилось к настоящему моменту или завершено в период настоящего времени. </p></a><a class="verb accent_2" href="pastPerfect" id="pastPerfect">
                <h3 class="verb__title title">Past Perfect</h3>
                <p class="verb__text">Время Past Perfect обозначает действие, которое завершилось до определенного момента в прошлом.</p></a><a class="verb accent_3" href="futurePerfect" id="futurePerfect">
                <h3 class="verb__title title">Future Perfect</h3>
                <p class="verb__text">Время Future Perfect обозначает действие, которое закончится до определенного момента или начала другого действия в будущем или будет продолжать длиться после него.</p></a>
            </article>
            <h2 class="grammar__title title">Длительное совершенное время - Perfect Continuous Tense</h2>
            <article class="grammar__items"><a class="verb accent_4" href="presentPerfectContinuous" id="presentPerfectContinuous">
                <h3 class="verb__title title">Present Perfect Continuous</h3>
                <p class="verb__text">Время Present Perfect Continuous указывает на действие, которое началось в прошлом, продолжалось в течение некоторого времени и либо закончилось непосредственно перед разговором или все еще продолжается в момент разговора.</p></a><a class="verb accent_2" href="pastPerfectContinuous" id="pastPerfectContinuous">
                <h3 class="verb__title title">Past Perfect Continuous</h3>
                <p class="verb__text">Время Past Perfect Continuous указывает на действие, которое началось в прошлом, продолжалось в течение некоторого времени и либо закончилось непосредственно перед неким моментом в прошлом или все еще не закончилось к некоему моменту в прошлом.</p></a><a class="verb accent_3" href="futurePerfectContinuous" id="futurePerfectContinuous">
                <h3 class="verb__title title">Future Perfect Continuous</h3>
                <p class="verb__text">Время Future Perfect Continuous указывает на действие, которое началось и продолжалось в течение некоторого времени до определенного момента в будущем. Это время используется очень редко, а в устной речи – практически никогда.</p></a>
            </article>
          </section>
        </div>
      </main>
      <?php include_once(SITE_ROOT.'/app/includes/footer.php');?>