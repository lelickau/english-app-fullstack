<?php
	include 'path.php';
	include 'app/controllers/trainings.php';
	$title = 'Тренировки';
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
		<div class="wrapper wrapper__training">
			<?php include_once(SITE_ROOT.'/app/includes/header.php');?>
			<main class="main">
				<div class="container">
					<section
						class="training"
						data-auth="<?php if(isset($_SESSION['id'])) : ?>true<?php else: ?><?php endif;?>"
					>
						<article class="training__item quiz-test">
							<img class="training__ico" src="images/quiz.svg" alt="`Quiz"/>
							<h3 class="training__title">Викторина</h3>
							<p class="training__description">Выбери правильный вариант ответа из четырех предложенных</p>
						</article>
						<article class="training__item believe-test">
							<img class="training__ico" src="images/believe-game.svg" alt="Believe or not believe"/>
							<h3 class="training__title">Верю - Не верю</h3>
							<p class="training__description">Определи верно или не верно подобран перевод к слову</p>
						</article>
						<article class="training__item constructor-test">
							<img class="training__ico" src="images/constructor.svg" alt="Constructor"/>
							<h3 class="training__title">Конструктор</h3>
							<p class="training__description">Составь слово из разбросанных букв</p>
						</article>
					</section>
					<section class="training__test quiz quiz__hidden">
						<div class="quiz__header">
							<img class="quiz__logo" src="images/quiz_2.svg" alt="Quiz"/>
							<div class="progress progress__quiz"></div>
							<div class="quiz__close">
								<img src="images/close-btn.svg" alt="Close"/>
							</div>
						</div>
						<div class="quiz__description">
							<div class="quiz__content-descr">
								<img class="quiz__ico-descr" src="images/question.svg" alt="Description"/>
								<div class="quiz__text-descr">
									<div class="quiz__title-descr">Как играть?</div>
									<div class="quiz__text">Выбери правельный перевод слова из четырех вариантов ответов</div>
								</div>
							</div>
							<button class="quiz__btn-start">Начать</button>
						</div>
						<div class="quiz__questions-box"></div>
					</section>
					<section class="training__test believe believe__hidden">
						<div class="believe__header">
							<img class="believe__logo" src="images/believe-game.svg" alt="believe"/>
							<div class="progress progress__believe"></div>
							<div class="believe__close">
								<img src="images/close-btn.svg" alt="Close"/>
							</div>
						</div>
						<div class="believe__description">
							<div class="believe__content-descr">
								<img class="believe__ico-descr" src="images/question.svg" alt="Description"/>
								<div class="believe__text-descr">
								<div class="believe__title-descr">Как играть?</div>
								<div class="believe__text">Определи правильно или не правильно подобран перевод к слову</div>
								</div>
							</div>
							<button class="believe__btn-start">Начать</button>
						</div>
						<div class="believe__questions-box"></div>
						<div class="believe__options believe__hidden">
							<button class="believe__btn believe__btn-true" data-answer="true">Верю</button>
							<button class="believe__btn believe__btn-false" data-answer="">Не верю</button>
						</div>
					</section>
					<section class="training__test constructor constructor__hidden">
						<div class="constructor__header">
							<img class="constructor__logo" src="images/constructor.svg" alt="constructor"/>
							<div class="progress progress__constructor"></div>
							<div class="constructor__close">
								<img src="images/close-btn.svg" alt="Close"/>
							</div>
						</div>
						<div class="constructor__description">
							<div class="constructor__content-descr">
								<img class="constructor__ico-descr" src="images/question.svg" alt="Description"/>
								<div class="constructor__text-descr">
									<div class="constructor__title-descr">Как играть?</div>
									<div class="constructor__text">Собери слово из букв</div>
								</div>
							</div>
							<button class="constructor__btn-start">Начать</button>
						</div>
						<div class="constructor__questions-box"></div>
					</section>
				</div>
			</main>
<?php include_once(SITE_ROOT.'/app/includes/footer.php');?>