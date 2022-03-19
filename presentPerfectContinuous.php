<?php
    session_start();
    $title = 'Present Perfect Continuous';
    include_once('path.php');
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
        <div class="wrapper wrapper__tense">
        <?php include_once(SITE_ROOT.'/app/includes/header.php');?>
        <main class="main">
            <div class="container">
            <section class="tense" data-tense-id="presentPerfectContinuous">
                <button class="tense__arrow-prev"><img class="tense__arrow-prev-img" src="images/arrow-prev.svg" alt="prev"/></button>
                <section class="tense__wrapper">
                <div class="tense__header">
                    <div class="tense__progress">
                    <h4 class="tense__header-title">Present Perfect Continuous</h4>
                    </div><a class="tense__header-close" href="/grammar"><img src="images/close-btn.svg" alt="Close"/></a>
                </div>
                <article class="tense__content">
                    <div class="tense__main">
                    <h5 class="tense__main-title">Present Perfect Continuous Tense — настоящее длительное совершенное время.</h5>
                    <h6 class="tense__list-title">Случаи употребления:</h6>
                    <nav class="tense__list">
                        <ul class="tense__list-box">
                                        <li class="tense__list-point">
                                                            <div class="check-box">
                                                            <div class="check">
                                                                <div class="check__sing" id="check__part-1"></div>
                                                                <div class="check__sing" id="check__part-2"></div>
                                                            </div>
                                                            </div>
                                            <p class="tense__list-text">Действие началось в прошлом, длилось и все еще продолжается</p>
                                        </li>
                                        <li class="tense__list-point">
                                                            <div class="check-box">
                                                            <div class="check">
                                                                <div class="check__sing" id="check__part-1"></div>
                                                                <div class="check__sing" id="check__part-2"></div>
                                                            </div>
                                                            </div>
                                            <p class="tense__list-text">Действие длилось какое-то время (длительность – это важно), и виден результат</p>
                                        </li>
                                        <li class="tense__list-point">
                                                            <div class="check-box">
                                                            <div class="check">
                                                                <div class="check__sing" id="check__part-1"></div>
                                                                <div class="check__sing" id="check__part-2"></div>
                                                            </div>
                                                            </div>
                                            <p class="tense__list-text">Чтобы указать на то, что длилось недавно или в последнее время со словами lately (в последнее время) и recently (недавно)</p>
                                        </li>
                        </ul>
                    </nav>
                    </div>
                    <div class="tense__main">
                    <h5 class="tense__main-title">Указатели времени</h5>
                    <nav class="tense__list">
                        <ul class="tense__list-box">
                                        <li class="tense__list">
                                            <p class="tense__list-word">for - в течение</p>
                                            <p class="tense__list-example">I have been writing this essay for 2 days and I have not finished it yet - Я пишу это эссе уже 2 дня и еще не закончил его</p>
                                        </li>
                                        <li class="tense__list">
                                            <p class="tense__list-word">since - с</p>
                                            <p class="tense__list-example">John has been reading this book since early morning - Джон с раннего утра читает эту книгу</p>
                                        </li>
                                        <li class="tense__list">
                                            <p class="tense__list-word">all day / week - весь день / неделю</p>
                                            <p class="tense__list-example">I have been thinking about what you said all day - Я весь день думаю о том, что ты сказал</p>
                                        </li>
                                        <li class="tense__list">
                                            <p class="tense__list-word">recently - в последнее время</p>
                                            <p class="tense__list-example">I have heard a lot about you recently. – Я много слышал о тебе в последнее время.</p>
                                        </li>
                        </ul>
                    </nav>
                    </div>
                    <div class="tense__main">
                    <h5 class="tense__main-title">Схема построения утвердительной формы предложений Present Perfect Continuous</h5>
                    <div class="tense__explanations">
                        <div class="tense__explanations-item">
                        <div class="tense__explanations-ico ico-3">V</div>
                        <div class="tense__explanations-description">Глагол в третьей форме (форма неправильных глаголов)</div>
                        </div>
                        <div class="tense__explanations-item">
                        <div class="tense__explanations-ico">ed</div>
                        <div class="tense__explanations-description">Глагол с окончанием -ed</div>
                        </div>
                    </div>
                    <div class="tense__scheme">
                        <div class="tense__scheme-subjects">
                        <div class="tense__subjects-item">I</div>
                        <div class="tense__subjects-item">You</div>
                        <div class="tense__subjects-item">We</div>
                        <div class="tense__subjects-item">They</div>
                        </div>
                        <div class="tense__scheme-arrow"><img class="tense__scheme-arrow-img" src="images/arrow-schama.svg" alt="---&gt;"/></div>
                        <div class="tense__words">have been</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__verb">
                        <div class="tense__explanations-ico">ed</div>
                        <div class="tense__words">или</div>
                        <div class="tense__explanations-ico ico-3">V</div>
                        </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__words">остальные слова</div>
                    </div>
                    <div class="tense__examples">
                        <div class="tense__examples-item"><b>I have been working on my English homework since eight o'clock this morning.</b>– Я работаю на домашкой по английскому с 8 утра (и все еще не закончил).</div>
                        <div class="tense__examples-item"><b>We have been talking about our wedding.</b> – Мы разговаривали о нашей свадьбе.</div>
                        <div class="tense__examples-item"><b>I have been watching this trick all this time.</b>– Я смотрела на этот фокус всё это время.</div>
                    </div>
                    <div class="tense__scheme">
                        <div class="tense__scheme-subjects">
                        <div class="tense__subjects-item">He</div>
                        <div class="tense__subjects-item">She</div>
                        <div class="tense__subjects-item">It</div>
                        </div>
                        <div class="tense__scheme-arrow"><img class="tense__scheme-arrow-img" src="images/arrow-schama.svg" alt="---&gt;"/></div>
                        <div class="tense__words">has been</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__verb">
                        <div class="tense__explanations-ico">ed</div>
                        <div class="tense__words">или</div>
                        <div class="tense__explanations-ico ico-3">V</div>
                        </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__words">остальные слова</div>
                    </div>
                    <div class="tense__examples">
                        <div class="tense__examples-item"><b>Mary (she) has been feeling so happy all day.</b>– Мэри чувствует себя такой счастливой целый день.</div>
                        <div class="tense__examples-item"><b>Bob (he) has been watching too much TV lately.</b>– Боб в последнее время смотрит телек слишком много.</div>
                        <div class="tense__examples-item"><b>It has been raining.</b>— Шел дождь (на дорогах – лужи).</div>
                        <div class="tense__examples-item"><b>Someone has been eating my cookies at work.</b>– Кто-то ест мои печеньки на работе (коробка опустела).</div>
                    </div>
                    </div>
                    <div class="tense__main">
                    <h5 class="tense__main-title">Схема построения отрицательной формы предложений Present Perfect Continuous</h5>
                    <div class="tense__explanations">
                        <div class="tense__explanations-item">
                        <div class="tense__explanations-ico ico-3">V</div>
                        <div class="tense__explanations-description">Глагол в третьей форме (форма неправильных глаголов)</div>
                        </div>
                        <div class="tense__explanations-item">
                        <div class="tense__explanations-ico">ed</div>
                        <div class="tense__explanations-description">Глагол с окончанием -ed</div>
                        </div>
                    </div>
                    <div class="tense__scheme">
                        <div class="tense__scheme-subjects">
                        <div class="tense__subjects-item">I</div>
                        <div class="tense__subjects-item">You</div>
                        <div class="tense__subjects-item">We</div>
                        <div class="tense__subjects-item">They</div>
                        </div>
                        <div class="tense__scheme-arrow"><img class="tense__scheme-arrow-img" src="images/arrow-schama.svg" alt="---&gt;"/></div>
                        <div class="tense__words">have not been</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__verb">
                        <div class="tense__explanations-ico">ed</div>
                        <div class="tense__words">или</div>
                        <div class="tense__explanations-ico ico-3">V</div>
                        </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__words">остальные слова</div>
                    </div>
                    <div class="tense__examples">
                        <div class="tense__examples-item"><b>I have not been watching this trick all this time.</b>– Я не смотрела на этот фокус всё это время.</div>
                        <div class="tense__examples-item"><b>We have not been talking about our wedding.</b> – Мы не разговаривали о нашей свадьбе.</div>
                    </div>
                    <div class="tense__scheme">
                        <div class="tense__scheme-subjects">
                        <div class="tense__subjects-item">He</div>
                        <div class="tense__subjects-item">She</div>
                        <div class="tense__subjects-item">It</div>
                        </div>
                        <div class="tense__scheme-arrow"><img class="tense__scheme-arrow-img" src="images/arrow-schama.svg" alt="---&gt;"/></div>
                        <div class="tense__words">has not been</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__verb">
                        <div class="tense__explanations-ico">ed</div>
                        <div class="tense__words">или</div>
                        <div class="tense__explanations-ico ico-3">V</div>
                        </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__words">остальные слова</div>
                    </div>
                    <div class="tense__examples">
                        <div class="tense__examples-item"><b>She has not been waiting for you for half an hour.</b>– Она не ждала тебя на протяжении получаса.</div>
                        <div class="tense__examples-item"><b>Ann has not been living in this house for 10 years.</b>– Энн не прожила (не живет) в этом доме 10 лет.</div>
                    </div>
                    </div>
                    <div class="tense__main">
                    <h5 class="tense__main-title">Схема построения вопросительной формы предложений Present Perfect Continuous</h5>
                    <div class="tense__explanations">
                        <div class="tense__explanations-item">
                        <div class="tense__explanations-ico ico-3">V</div>
                        <div class="tense__explanations-description">Глагол в третьей форме (форма неправильных глаголов)</div>
                        </div>
                        <div class="tense__explanations-item">
                        <div class="tense__explanations-ico">ed</div>
                        <div class="tense__explanations-description">Глагол с окончанием -ed</div>
                        </div>
                        <div class="tense__explanations-item">
                        <div class="tense__explanations-ico">ВС</div>
                        <div class="tense__explanations-description">Вопросительное слово по требованию</div>
                        </div>
                    </div>
                    <div class="tense__scheme">
                        <div class="tense__explanations-ico">ВС</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__words">Have</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__scheme-subjects">
                        <div class="tense__subjects-item">I</div>
                        <div class="tense__subjects-item">You</div>
                        <div class="tense__subjects-item">We</div>
                        <div class="tense__subjects-item">They</div>
                        </div>
                        <div class="tense__scheme-arrow"><img class="tense__scheme-arrow-img" src="images/arrow-schama.svg" alt="---&gt;"/></div>
                        <div class="tense__words">been</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__verb">
                        <div class="tense__explanations-ico">ed</div>
                        <div class="tense__words">или</div>
                        <div class="tense__explanations-ico ico-3">V</div>
                        </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__words">остальные слова</div>
                    </div>
                    <div class="tense__examples">
                        <div class="tense__examples-item"><b>Have you been exercising lately?</b> – Ты занимался спортом в последнее время?</div>
                        <div class="tense__examples-item"><b>You are so fit. Have you been exercising?</b>– Ты выглядишь подтянутым. Ты занимался спортом?</div>
                        <div class="tense__examples-item"><b>Your eyes are red. Have you been crying?</b>– У тебя красные глаза. Ты плакал?</div>
                    </div>
                    <div class="tense__scheme">
                        <div class="tense__explanations-ico">ВС</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__words">Has</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__scheme-subjects">
                        <div class="tense__subjects-item">He</div>
                        <div class="tense__subjects-item">She</div>
                        <div class="tense__subjects-item">It</div>
                        </div>
                        <div class="tense__scheme-arrow"><img class="tense__scheme-arrow-img" src="images/arrow-schama.svg" alt="---&gt;"/></div>
                        <div class="tense__words">been</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__verb">
                        <div class="tense__explanations-ico">ed</div>
                        <div class="tense__words">или</div>
                        <div class="tense__explanations-ico ico-3">V</div>
                        </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__words">остальные слова</div>
                    </div>
                    <div class="tense__examples">
                        <div class="tense__examples-item"><b>Why has Mary not been taking her English classes for the last three days?</b> – Почему Мэри не берет уроки английского в последние три дня?</div>
                        <div class="tense__examples-item"><b>How long has she been waiting for you?</b>– Как долго она тебя ждала?</div>
                        <div class="tense__examples-item"><b>Has she been waiting for you for half an hour?</b>– Она ждала тебя на протяжении получаса?</div>
                    </div>
                    </div>
                    <div class="tense__list-btn">
                    <button class="tense__list-done">Освоено</button>
                    </div>
                </article>
                <div class="tense__footer"></div>
                </section>
                <button class="tense__arrow-next"><img class="tense__arrow-next-img" src="images/arrow-next.svg" alt="next"/></button>
            </section>
            </div>
        </main>
        <?php include_once(SITE_ROOT.'/app/includes/footer.php');?>