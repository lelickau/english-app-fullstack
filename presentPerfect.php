<?php
    session_start();
    $title = 'Present Perfect';
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
                <section class="tense" data-tense-id="presentPerfect">
                    <button class="tense__arrow-prev"><img class="tense__arrow-prev-img" src="images/arrow-prev.svg" alt="prev"/></button>
                    <section class="tense__wrapper">
                    <div class="tense__header">
                        <div class="tense__progress">
                        <h4 class="tense__header-title">Present Perfect</h4>
                        </div><a class="tense__header-close" href="/grammar"><img src="images/close-btn.svg" alt="Close"/></a>
                    </div>
                    <article class="tense__content">
                <div class="tense__main">
                  <h5 class="tense__main-title">Present Perfect — это настоящее совершенное время. В русском языке нет аналога для Present Perfect, мы используем только одно настоящее время. Нам сложно понять — как это действие может быть в настоящем, но совершенное.</h5>
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
                                        <p class="tense__list-text">Действие началось когда-то в прошлом и до сих пор продолжается</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">Действие много раз повторялось в относительно недавнем прошлом и до сих пор происходит</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">Действие началось в какое-то определенное время в прошлом и до сих пор продолжается</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">Действие описывает пережитый опыт вплоть до настоящего момента. В отрицательных предложениях можно использовать наречия never или ever</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">Если действие произошло в прошлом, но влияет на настоящее время</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">Когда нужно указать, что человек отсутствовал, но уже вернулся</p>
                                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Указатели времени</h5>
                  <nav class="tense__list">
                    <ul class="tense__list-box">
                                      <li class="tense__list">
                                        <p class="tense__list-word">just - как раз, точно, едва, только что, всего лишь, совсем, только-только, лишь, сейчас</p>
                                        <p class="tense__list-example">He has just started this task. – Он только начал это задание.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">already – уже, ранее, даже</p>
                                        <p class="tense__list-example">I have already bought a gift. – Я уже купил подарок.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">never – никогда</p>
                                        <p class="tense__list-example">I have never seen him. – Я никогда его не видел</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">lately – давно, в последнее время, недавно, за последнее время</p>
                                        <p class="tense__list-example">He has lately read many books. – Он недавно прочитал много книг.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">recently – недавно, на днях, в последнее время, только что, не так давно</p>
                                        <p class="tense__list-example">She has made good progress recently. – Она добилась прогресса в последнее время.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">of late – с недавних пор, за последнее время, недавно</p>
                                        <p class="tense__list-example">They have not spoken of late. – Последнее время они не разговаривали.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">before – раньше, прежде, пока не, уже, перед тем как</p>
                                        <p class="tense__list-example">I have seen this film before. – Я видел этот фильм раньше.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">not … yet – все еще нет, нет еще, еще не, нет, еще нет</p>
                                        <p class="tense__list-example">They haven’t finished their project yet. – Они еще не закончили свой проект.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">ever – когда-либо, когда бы то ни было, когда-нибудь</p>
                                        <p class="tense__list-example">Have you ever been to New York? – Ты когда-нибудь был в Нью-Йорке?</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">so far – уже, к настоящему времени, на этот час, пока, до сих пор, вплоть до этого момента</p>
                                        <p class="tense__list-example">He has so far written ten letters to her. – К этому времени он уже написал ей десять писем.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">by now – на настоящий момент</p>
                                        <p class="tense__list-example">She has read all his books by now. – К настоящему моменту она прочитала все его книги.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">up to now – до сих пор, до настоящего времени</p>
                                        <p class="tense__list-example">Up to now I haven’t found my keys. – До сих пор я не нашел мои ключи.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">still – все еще</p>
                                        <p class="tense__list-example">I still have not finished writing my composition. – Я все никак не закончу писать сочинение.</p>
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
                    <div class="tense__examples-item"><b>I have bought a new car!</b>— Я купил новую машину!</div>
                    <div class="tense__examples-item"><b>We have agreed!</b>— Мы пришли к согласию!</div>
                    <div class="tense__examples-item"><b>People (they) have travelled to the Moon.</b>— Люди посещали Луну.</div>
                  </div>
                  <div class="tense__scheme">
                    <div class="tense__scheme-subjects">
                      <div class="tense__subjects-item">He</div>
                      <div class="tense__subjects-item">She</div>
                      <div class="tense__subjects-item">It</div>
                    </div>
                    <div class="tense__scheme-arrow"><img class="tense__scheme-arrow-img" src="images/arrow-schama.svg" alt="---&gt;"/></div>
                    <div class="tense__words">has</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__verb">
                      <div class="tense__explanations-ico">ed</div>
                      <div class="tense__words">или</div>
                      <div class="tense__explanations-ico ico-3">V</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>He has lied to me.</b>— Он мне солгал.</div>
                    <div class="tense__examples-item"><b>Sue (she) has come home.</b>— Сью пришла домой.</div>
                    <div class="tense__examples-item"><b>Bob (he) has seen that movie many times.</b>— Боб видел этот фильм много раз.</div>
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
                    </div>
                    <div class="tense__scheme-arrow"><img class="tense__scheme-arrow-img" src="images/arrow-schama.svg" alt="---&gt;"/></div>
                    <div class="tense__words">have not</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__verb">
                      <div class="tense__explanations-ico">ed</div>
                      <div class="tense__words">или</div>
                      <div class="tense__explanations-ico ico-3">V</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>People (they) have not travelled to Mars.</b>— Люди не посещали Марс.</div>
                    <div class="tense__examples-item"><b>I have not read this book.</b>— Я не читал эту книгу.</div>
                  </div>
                  <div class="tense__scheme">
                    <div class="tense__scheme-subjects">
                      <div class="tense__subjects-item">He</div>
                      <div class="tense__subjects-item">She</div>
                      <div class="tense__subjects-item">It</div>
                    </div>
                    <div class="tense__scheme-arrow"><img class="tense__scheme-arrow-img" src="images/arrow-schama.svg" alt="---&gt;"/></div>
                    <div class="tense__words">has not</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__verb">
                      <div class="tense__explanations-ico">ed</div>
                      <div class="tense__words">или</div>
                      <div class="tense__explanations-ico ico-3">V</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>Mary (she) hasn’t become interested in modern art.</b>— Мэри не начала интересоваться современным искусством.</div>
                    <div class="tense__examples-item"><b>Bob (he) hasn’t studied architecture.</b>— Боб не изучал архитектуру.</div>
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
                    <div class="tense__words">Have</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__scheme-subjects">
                      <div class="tense__subjects-item">I</div>
                      <div class="tense__subjects-item">You</div>
                      <div class="tense__subjects-item">We</div>
                      <div class="tense__subjects-item">They</div>
                    </div>
                    <div class="tense__scheme-arrow"><img class="tense__scheme-arrow-img" src="images/arrow-schama.svg" alt="---&gt;"/></div>
                    <div class="tense__verb">
                      <div class="tense__explanations-ico">ed</div>
                      <div class="tense__words">или</div>
                      <div class="tense__explanations-ico ico-3">V</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>Have people (they) travelled to space?</b> — Люди путешествовали в космос?</div>
                    <div class="tense__examples-item"><b>Have you bought a car?</b>— Ты купил машину?</div>
                    <div class="tense__examples-item"><b>How long have you knocked on the door?</b>— Как давно ты стучал в дверь?</div>
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
                    <div class="tense__verb">
                      <div class="tense__explanations-ico">ed</div>
                      <div class="tense__words">или</div>
                      <div class="tense__explanations-ico ico-3">V</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>Has Bob (he) studied architecture?</b> — Боб изучал архитектуру?</div>
                    <div class="tense__examples-item"><b>Has Mary (she) read this book?</b>— Мэри читала эту книгу?</div>
                    <div class="tense__examples-item"><b>What has he just said?</b>— Что он только что сказал?</div>
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