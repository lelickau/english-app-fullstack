<?php
    session_start();
    $title = 'Future Perfect';
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
            <section class="tense" data-tense-id="futurePerfect">
                <button class="tense__arrow-prev"><img class="tense__arrow-prev-img" src="images/arrow-prev.svg" alt="prev"/></button>
                <section class="tense__wrapper">
                <div class="tense__header">
                    <div class="tense__progress">
                    <h4 class="tense__header-title">Future Perfect</h4>
                    </div><a class="tense__header-close" href="/grammar"><img src="images/close-btn.svg" alt="Close"/></a>
                </div>
                <article class="tense__content">
                    <div class="tense__main">
                    <h5 class="tense__main-title">Future Perfect — будущее совершенное время обозначает действия, которое уже совершится и будет закончено к определенному моменту в будущем.</h5>
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
                                            <p class="tense__list-text">действие, которое завершится к определенному моменту в будущем</p>
                                        </li>
                                        <li class="tense__list-point">
                                                            <div class="check-box">
                                                            <div class="check">
                                                                <div class="check__sing" id="check__part-1"></div>
                                                                <div class="check__sing" id="check__part-2"></div>
                                                            </div>
                                                            </div>
                                            <p class="tense__list-text">действие будет длится до определенного момента в будущем с глаголами состояния, которые не употребляются в длительных временах Continuous (to know, to think, to be, to own) </p>
                                        </li>
                                        <li class="tense__list-point">
                                                            <div class="check-box">
                                                            <div class="check">
                                                                <div class="check__sing" id="check__part-1"></div>
                                                                <div class="check__sing" id="check__part-2"></div>
                                                            </div>
                                                            </div>
                                            <p class="tense__list-text">в пассивном залоге, когда нам не так важно, кто будет выполнять действие: после конструкции will have добавляем been и V3</p>
                                        </li>
                        </ul>
                    </nav>
                    </div>
                    <div class="tense__main">
                    <h5 class="tense__main-title">Указатели времени</h5>
                    <nav class="tense__list">
                        <ul class="tense__list-box">
                                        <li class="tense__list">
                                            <p class="tense__list-word">by… – к какому-то времени/моменту</p>
                                            <p class="tense__list-example">Bob and Mary will have built a new garage by the next year. — Боб и Мэри построят новый гараж к следующему году.</p>
                                        </li>
                                        <li class="tense__list">
                                            <p class="tense__list-word">by then – к тому времени</p>
                                            <p class="tense__list-example">They will have built this house by then. – Они построят этот дом к тому времени.</p>
                                        </li>
                                        <li class="tense__list">
                                            <p class="tense__list-word">until/till – до того как — используются только в отрицательных предложениях</p>
                                            <p class="tense__list-example">He won’t have stopped playing until you distract him. – Он не закончит играть, пока ты его отвлекаешь.</p>
                                        </li>
                        </ul>
                    </nav>
                    </div>
                    <div class="tense__main">
                    <h5 class="tense__main-title">Схема построения утвердительной формы предложений Present Perfect</h5>
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
                        <div class="tense__subjects-item">He</div>
                        <div class="tense__subjects-item">She</div>
                        <div class="tense__subjects-item">It</div>
                        </div>
                        <div class="tense__scheme-arrow"><img class="tense__scheme-arrow-img" src="images/arrow-schama.svg" alt="---&gt;"/></div>
                        <div class="tense__words">will have</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__verb">
                        <div class="tense__explanations-ico">ed</div>
                        <div class="tense__words">или</div>
                        <div class="tense__explanations-ico ico-3">V</div>
                        </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__words">остальные слова</div>
                    </div>
                    <div class="tense__examples">
                        <div class="tense__examples-item"><b>Mary (she) will have married Bob by then.</b>— К тому времени Мэри выйдет замуж за Боба.</div>
                        <div class="tense__examples-item"><b>I will have helped him to do the task before the class starts.</b>— Я помогу ему сделать задание до того, как начнется урок.</div>
                        <div class="tense__examples-item"><b>At 5 o'clock, I will have been waiting for thirty minutes.</b>— К пяти часам я буду ждать 30 минут.</div>
                    </div>
                    </div>
                    <div class="tense__main">
                    <h5 class="tense__main-title">Схема построения отрицательной формы предложений Present Perfect</h5>
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
                        <div class="tense__subjects-item">He</div>
                        <div class="tense__subjects-item">She</div>
                        <div class="tense__subjects-item">It</div>
                        </div>
                        <div class="tense__scheme-arrow"><img class="tense__scheme-arrow-img" src="images/arrow-schama.svg" alt="---&gt;"/></div>
                        <div class="tense__words">will not have</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__verb">
                        <div class="tense__explanations-ico">ed</div>
                        <div class="tense__words">или</div>
                        <div class="tense__explanations-ico ico-3">V</div>
                        </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__words">остальные слова</div>
                    </div>
                    <div class="tense__examples">
                        <div class="tense__examples-item"><b>Students (they)  will not have finished this test by 3 o'clock.</b>— Студенты не закончат этот тест к трем часам.</div>
                        <div class="tense__examples-item"><b>I will not have eaten by then.</b>— Я не поем к тому времени.</div>
                        <div class="tense__examples-item"><b>Bob (he) will not have saved enough money yet.</b>— Боб еще не сохранит достаточно денег.</div>
                    </div>
                    </div>
                    <div class="tense__main">
                    <h5 class="tense__main-title">Схема построения вопросительной формы предложений Present Perfect</h5>
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
                        <div class="tense__words">Will</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__scheme-subjects">
                        <div class="tense__subjects-item">I</div>
                        <div class="tense__subjects-item">You</div>
                        <div class="tense__subjects-item">We</div>
                        <div class="tense__subjects-item">They</div>
                        <div class="tense__subjects-item">He</div>
                        <div class="tense__subjects-item">She</div>
                        <div class="tense__subjects-item">It</div>
                        </div>
                        <div class="tense__scheme-arrow"><img class="tense__scheme-arrow-img" src="images/arrow-schama.svg" alt="---&gt;"/></div>
                        <div class="tense__words">have</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__verb">
                        <div class="tense__explanations-ico">ed</div>
                        <div class="tense__words">или</div>
                        <div class="tense__explanations-ico ico-3">V</div>
                        </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__words">остальные слова</div>
                    </div>
                    <div class="tense__examples">
                        <div class="tense__examples-item"><b>Will you have come up with good ideas by the meeting on Friday?</b> — Ты придумаешь хорошие идеи к нашей встрече в пятницу?</div>
                        <div class="tense__examples-item"><b>Will students (they) have finished the task by the time the bell rings?</b>— Студенты завершат задание до того, как прозвенит звонок?</div>
                        <div class="tense__examples-item"><b>Will Mary (she) have learned enough Russian to communicate before she moves to Moscow?</b>— Мэри выучит достаточно русского языка чтобы общаться перед тем, как она переедет в Москву?</div>
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