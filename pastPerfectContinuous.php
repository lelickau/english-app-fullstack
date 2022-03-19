<?php
    session_start();
    $title = 'Past Perfect Continuous';
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
            <section class="tense" data-tense-id="pastPerfectContinuous">
                <button class="tense__arrow-prev"><img class="tense__arrow-prev-img" src="images/arrow-prev.svg" alt="prev"/></button>
                <section class="tense__wrapper">
                <div class="tense__header">
                    <div class="tense__progress">
                    <h4 class="tense__header-title">Past Perfect Continuous</h4>
                    </div><a class="tense__header-close" href="/grammar"><img src="images/close-btn.svg" alt="Close"/></a>
                </div>
                <article class="tense__content">
                    <div class="tense__main">
                    <h5 class="tense__main-title">Past Perfect Continuous — прошедшее совершенное длительное время.</h5>
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
                                            <p class="tense__list-text">Действие началось в прошлом и длилось до определенного момента в прошлом. Мы говорим об определенном моменте в прошлом в Past Simple, его обязательно нужно указывать в предложении.</p>
                                        </li>
                                        <li class="tense__list-point">
                                                            <div class="check-box">
                                                            <div class="check">
                                                                <div class="check__sing" id="check__part-1"></div>
                                                                <div class="check__sing" id="check__part-2"></div>
                                                            </div>
                                                            </div>
                                            <p class="tense__list-text">Действие длилось в прошлом и в прошлом был виден результат</p>
                                        </li>
                        </ul>
                    </nav>
                    </div>
                    <div class="tense__main">
                    <h5 class="tense__main-title">Указатели времени</h5>
                    <nav class="tense__list">
                        <ul class="tense__list-box">
                                        <li class="tense__list">
                                            <p class="tense__list-word">For - в течение, в продолжении</p>
                                            <p class="tense__list-example">She had been working for 5 hours when Jack called. — Она работала в течение 5-ти часов, когда позвонил Джек.</p>
                                        </li>
                                        <li class="tense__list">
                                            <p class="tense__list-word">since - с того времени. </p>
                                            <p class="tense__list-example">They had not been talking since June. — Они не разговаривали с июня.</p>
                                        </li>
                                        <li class="tense__list">
                                            <p class="tense__list-word">before - перед</p>
                                            <p class="tense__list-example">My sister had been working as a nurse for 30 years before she resigned. — Моя сестра работала медсестрой в течение 30 лет, прежде чем вышла на пенсию.</p>
                                        </li>
                                        <li class="tense__list">
                                            <p class="tense__list-word">then - тогда, затем, потом</p>
                                            <p class="tense__list-example">Kate had been looking for her phone for an hour, then she found it in her pocket. — Кейт час искала свой телефон, затем она обнаружила его у себя в кармане.</p>
                                        </li>
                                        <li class="tense__list">
                                            <p class="tense__list-word">because - потому что, поскольку</p>
                                            <p class="tense__list-example">I was tired this morning because I had been reading all night. — Я был уставшим сегодня утром, потому что всю ночь читал.</p>
                                        </li>
                                        <li class="tense__list">
                                            <p class="tense__list-word">as - так как, поскольку</p>
                                            <p class="tense__list-example"> He felt ill when he came home as he had been swimming in a cold lake. — Он почувствовал себя больным, когда пришел домой, так как купался в холодном озере.</p>
                                        </li>
                                        <li class="tense__list">
                                            <p class="tense__list-word">until - до тех пор, пока</p>
                                            <p class="tense__list-example"> I had been looking for my key until I stepped on it. — Я искал мой ключ до тех пор, пока не наступил на него.</p>
                                        </li>
                        </ul>
                    </nav>
                    </div>
                    <div class="tense__main">
                    <h5 class="tense__main-title">Схема построения утвердительной формы предложений Past Perfect Continuous</h5>
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
                        <div class="tense__words">had been</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__verb">
                        <div class="tense__explanations-ico">ed</div>
                        <div class="tense__words">или</div>
                        <div class="tense__explanations-ico ico-3">V</div>
                        </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__words">остальные слова</div>
                    </div>
                    <div class="tense__examples">
                        <div class="tense__examples-item"><b>Bob had been teaching at the university for 5 years before he moved to Moscow.</b>– Боб преподавал в университете 5 лет перед тем, как переехал в Москву.</div>
                        <div class="tense__examples-item"><b>By the time Mary woke up, Bob had been cooking breakfast for 2 hours.</b> – К тому времени как Мэри проснулась, Боб готовил завтрак 2 часа.</div>
                    </div>
                    </div>
                    <div class="tense__main">
                    <h5 class="tense__main-title">Схема построения отрицательной формы предложений Past Perfect Continuous</h5>
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
                        <div class="tense__words">had not been</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__verb">
                        <div class="tense__explanations-ico">ed</div>
                        <div class="tense__words">или</div>
                        <div class="tense__explanations-ico ico-3">V</div>
                        </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__words">остальные слова</div>
                    </div>
                    <div class="tense__examples">
                        <div class="tense__examples-item"><b>Bob had not been waiting for more than two hours when Mary’s plane finally arrived.</b>– Боб не ждал дольше двух часов, когда самолет Мэри наконец приземлился.</div>
                        <div class="tense__examples-item"><b>By the time Bob’s father retired, he had not been working in this company for 20 years.</b>– К тому моменту как отец Боба вышел на пенсию, он не проработал в этой компании и 20 лет.</div>
                    </div>
                    </div>
                    <div class="tense__main">
                    <h5 class="tense__main-title">Схема построения вопросительной формы предложений Past Perfect Continuous</h5>
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
                        <div class="tense__words">Had</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
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
                        <div class="tense__words">been</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__verb">
                        <div class="tense__explanations-ico">ed</div>
                        <div class="tense__words">или</div>
                        <div class="tense__explanations-ico ico-3">V</div>
                        </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__words">остальные слова</div>
                    </div>
                    <div class="tense__examples">
                        <div class="tense__examples-item"><b>Had Jane been studying English for 2 hours when Frank came home?</b>— Джейн занималась английским уже два часа, когда Фрэнк пришел домой?</div>
                        <div class="tense__examples-item"><b>Had students been playing football for 45 minutes when the rain started?</b>– Играли ли студенты в футбол на протяжении 45 минут, когда начался дождь?</div>
                        <div class="tense__examples-item"><b>Had Bob been waiting for more than two hours when Mary’s plane finally arrived?</b>– Ждал ли Боб больше двух часов, когда самолет Мэри наконец приземлился?</div>
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