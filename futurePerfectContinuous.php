<?php
    session_start();
    $title = 'Future Perfect Continuous';
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
            <section class="tense" data-tense-id="futurePerfectContinuous">
                <button class="tense__arrow-prev"><img class="tense__arrow-prev-img" src="images/arrow-prev.svg" alt="prev"/></button>
                <section class="tense__wrapper">
                <div class="tense__header">
                    <div class="tense__progress">
                    <h4 class="tense__header-title">Future Perfect Continuous</h4>
                    </div><a class="tense__header-close" href="/grammar"><img src="images/close-btn.svg" alt="Close"/></a>
                </div>
                <article class="tense__content">
                    <div class="tense__main">
                    <h5 class="tense__main-title">Future Perfect Continuous —  будущее совершенное длительное время.</h5>
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
                                            <p class="tense__list-text">Мы используем будущее завершённо-длительное, чтобы показать, что что-то будет продолжаться до определенного события или какого-то времени в будущем: «for ten minutes» – в течение десяти минут, «since Sunday» – с субботы и т.д.</p>
                                        </li>
                                        <li class="tense__list-point">
                                                            <div class="check-box">
                                                            <div class="check">
                                                                <div class="check__sing" id="check__part-1"></div>
                                                                <div class="check__sing" id="check__part-2"></div>
                                                            </div>
                                                            </div>
                                            <p class="tense__list-text">Использование Future Perfect Continuous перед иным действием в будущем — отличный способ выстроить причинно-следственные связи.</p>
                                        </li>
                        </ul>
                    </nav>
                    </div>
                    <div class="tense__main">
                    <h5 class="tense__main-title">Указатели времени</h5>
                    <nav class="tense__list">
                        <ul class="tense__list-box">
                                        <li class="tense__list">
                                            <p class="tense__list-word">Till и until - пока не</p>
                                            <p class="tense__list-example">I will have been watching TV until you come. — Я буду смотреть телевизор, пока ты не придешь.</p>
                                        </li>
                                        <li class="tense__list">
                                            <p class="tense__list-word">for hours - в течение</p>
                                            <p class="tense__list-example">When you arrive, Julia will have been working for 5 hours. — Когда ты прибудешь, Юлия будет работать уже 5 часов.</p>
                                        </li>
                                        <li class="tense__list">
                                            <p class="tense__list-word">by the end of the .. - к концу ..</p>
                                            <p class="tense__list-example">By the end of the hour she will have been waiting for him for 30 minutes. — К концу часа она будет ждать его на протяжении 30 минут.</p>
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
                        <div class="tense__words">will have been</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__verb">
                        <div class="tense__explanations-ico">ed</div>
                        <div class="tense__words">или</div>
                        <div class="tense__explanations-ico ico-3">V</div>
                        </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__words">остальные слова</div>
                    </div>
                    <div class="tense__examples">
                        <div class="tense__examples-item"><b>By 10 o'clock Jacky will have been writing the article for 3 hours non-stop.</b>— К 10 часам Джеки будет писать статью уже три часа без остановки.</div>
                        <div class="tense__examples-item"><b>By the end of the month my aunt will have been living with her husband for 10 years.</b>— К концу месяца моя тетя будет жить со своим мужем уже на протяжении 10 лет.</div>
                        <div class="tense__examples-item"><b>Next week this American scientist will have been studying the human brain for 5 years.</b>— На следующей неделе исполнится 5 лет с тех пор, как этот американский ученый изучает человеческий мозг.</div>
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
                        <div class="tense__words">will not have been</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__verb">
                        <div class="tense__explanations-ico">ed</div>
                        <div class="tense__words">или</div>
                        <div class="tense__explanations-ico ico-3">V</div>
                        </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__words">остальные слова</div>
                    </div>
                    <div class="tense__examples">
                        <div class="tense__examples-item"><b>Bob will not have been waiting for more than two hours when Mary’s plane finally arrives.</b>– Боб не будет жать дольше двух часов, когда самолет Мэри наконец приземлится.</div>
                        <div class="tense__examples-item"><b>By the time Bob retires, he will not have been working in this company for 20 years.</b>– К тому моменту как Боб выйдет на пенсию, он не будет работать на эту компанию 20 лет.</div>
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
                        <div class="tense__words">have been</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__verb">
                        <div class="tense__explanations-ico">ed</div>
                        <div class="tense__words">или</div>
                        <div class="tense__explanations-ico ico-3">V</div>
                        </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                        <div class="tense__words">остальные слова</div>
                    </div>
                    <div class="tense__examples">
                        <div class="tense__examples-item"><b>Will they have been playing football for two hours when I come to the field?</b>– Они будут играть в футбол два часа когда я приду на поле?</div>
                        <div class="tense__examples-item"><b>Will you have been waiting for more than two hours when Mary’s plane finally arrives?</b>– Ты будешь меня ждать больше двух часов когда самолет Мэри наконец приземлится?</div>
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