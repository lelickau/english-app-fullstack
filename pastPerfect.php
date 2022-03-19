<?php
    session_start();
    $title = 'Past Perfect';
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
            <section class="tense" data-tense-id="pastPerfect">
                <button class="tense__arrow-prev"><img class="tense__arrow-prev-img" src="images/arrow-prev.svg" alt="prev"/></button>
                <section class="tense__wrapper">
                <div class="tense__header">
                    <div class="tense__progress">
                    <h4 class="tense__header-title">Past Perfect</h4>
                    </div><a class="tense__header-close" href="/grammar"><img src="images/close-btn.svg" alt="Close"/></a>
                </div>
                <article class="tense__content">
                <div class="tense__main">
                  <h5 class="tense__main-title">Past Perfect — это прошедшее совершенное время. </h5>
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
                                        <p class="tense__list-text">действие, которое произошло до какого-то события в прошлом</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">действие, которое произошло до определенного момента в прошлом</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">действие, которое стало причиной какого-то события в прошлом</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">когда говорим о том, что длилось в прошлом до какого-то конкретного момента с глаголами состояния, которые не употребляются в длительном времени Continuous (to know, to have, to be, to own) </p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">в условных предложениях третьего типа, которые используются для выражения сожаления о прошлом</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">с конструкцией I wish, когда также сожалеем о прошлом</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">в косвенной речи, когда хотим звучать более формально (в разговорной речи уже допускается Past Simple)</p>
                                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Указатели времени</h5>
                  <nav class="tense__list">
                    <ul class="tense__list-box">
                                      <li class="tense__list">
                                        <p class="tense__list-word">by – к</p>
                                        <p class="tense__list-example">Unfortunately, most of audience had not stayed by the end of the play. - К сожалению, к концу спектакля большая часть аудитории ушла.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">hardly … when – как только, едва, не успел я</p>
                                        <p class="tense__list-example">Hardly had they crossed the road when the accident happened. - Едва они перешли дорогу, как случилась авария.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">no sooner … than - как только, едва</p>
                                        <p class="tense__list-example">No sooner than he had came in he heard congratulations and his friends gathered around him. - Как только он вошел, он услышал поздравления и друзья собрались вокруг него.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">after – после</p>
                                        <p class="tense__list-example">After boy had done his hometask he went out to play football with his friends. - После того как мальчик сделал домашнее задание, он пошел гулять.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">earlier – ранее</p>
                                        <p class="tense__list-example">She knew how to cook a cake because she had made it earlier. - Она знала, как испечь торт, потому что делала его ранее.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">before – до</p>
                                        <p class="tense__list-example">James easily won this game because he had played it many times before. - Джеймс легко сыграл в эту игру, так как до этого играл в нее много раз.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">first – сперва</p>
                                        <p class="tense__list-example">First we had taken all our bags, then understood that we forgot our tickets on the table. - Сперва мы забрали вещи, а потом поняли, что забыли билеты на столе.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">when – когда</p>
                                        <p class="tense__list-example">John had sat to work when his boss called for him. - Джон сел за стол поработать, когда начальник позвал его.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">just – только что</p>
                                        <p class="tense__list-example">I just had sat to have lunch when my friend called me. - Я только сел пообедать как мой друг позвонил мне.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">already – уже</p>
                                        <p class="tense__list-example">We had already bought a cake when Jill called us and told that she bought a cake too. - Мы уже купили торт когда Джилл позвонила нам и сказала, что тоже купила торт.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">yet – уже, еще не</p>
                                        <p class="tense__list-example">I hadn’t served the table yet when the guests came. - Я еще не накрыла на стол, когда пришли гости.</p>
                                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения утвердительной формы предложений Past Perfect</h5>
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
                    <div class="tense__words">had</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__verb">
                      <div class="tense__explanations-ico">ed</div>
                      <div class="tense__words">или</div>
                      <div class="tense__explanations-ico ico-3">V</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>Mary did not have any money because she had lost her wallet.</b>— У Мэри не было денег, потому то она потеряла кошелек.</div>
                    <div class="tense__examples-item"><b>I knew London so well because I had visited the city several times.</b>— Я знал Лондон, потому что бывал в городе несколько раз.</div>
                    <div class="tense__examples-item"><b>Mary only understood the movie “It” because she had read the book.</b>— Мэри поняла фильм “Оно” только потому, что она читала книгу.</div>
                  </div>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения отрицательной формы предложений Past Perfect</h5>
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
                    <div class="tense__words">had not</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__verb">
                      <div class="tense__explanations-ico">ed</div>
                      <div class="tense__words">или</div>
                      <div class="tense__explanations-ico ico-3">V</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>Bob (he) had not talked much before he met Mary.</b>— Боб не говорил много до того, как встретил Мэри.</div>
                    <div class="tense__examples-item"><b>Mary (she) had not finished her make-up by the time Bob came to pick her up.</b>— Мэри не закончила краситься к тому времени, как Боб пришел за ней.</div>
                    <div class="tense__examples-item"><b>Bob and Mary (they) had not talked their marriage over before, and some questions appeared.</b>— Боб и Мэри не обсуждали свадьбу раньше, и появились некоторые вопросы.</div>
                    <div class="tense__examples-item"><b>I had not called my mom, so she called me ten times.</b>— Я не звонил маме, и она позвонила мне десять раз.</div>
                  </div>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения вопросительной формы предложений Past Perfect</h5>
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
                    <div class="tense__verb">
                      <div class="tense__explanations-ico">ed</div>
                      <div class="tense__words">или</div>
                      <div class="tense__explanations-ico ico-3">V</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>Had Bob (he) ever studied Russian before she moved to Moscow?</b>— Боб учил русский перед тем, как переехал в Москву?</div>
                    <div class="tense__examples-item"><b>Had you ever visited London before your trip in 2019?</b>— Ты когда-либо бывал в Лондоне до твоего путешествия в 2019?</div>
                    <div class="tense__examples-item"><b>Had you washed your hands before you sit at the table?</b>— Ты помыл руки перед тем, как сел за стол?</div>
                    <div class="tense__examples-item"><b>Had students (they) caused trouble in the class before professor shouted?</b>— Студенты устраивали неприятности на уроке до того, как профессор закричал?</div>
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