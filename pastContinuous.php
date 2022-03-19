<?php
session_start();
include_once('path.php');
$title = 'Past Continuous';
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
          <section class="tense" data-tense-id="presentContinuous">
            <button class="tense__arrow-prev"><img class="tense__arrow-prev-img" src="images/arrow-prev.svg" alt="prev"/></button>
            <section class="tense__wrapper">
              <div class="tense__header">
                <div class="tense__progress">
                  <h4 class="tense__header-title">Past Continuous</h4>
                </div><a class="tense__header-close" href="/grammar"><img src="images/close-btn.svg" alt="Close"/></a>
              </div>
              <article class="tense__content">
                <div class="tense__main">
                  <h5 class="tense__main-title">Past Continuous - это время, которое указывает на процесс, длившийся в определенный момент или период в прошлом.</h5>
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
                                        <p class="tense__list-text">для описания действий, которые длились в определенный период или конкретный момент времени в прошлом</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">прерванное действие в прошлом ( с союзом «when») </p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">длительные действия, которые происходили одновременно в прошлом (c союзом «while» и иногда просто «and») </p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">для описания атмосферы и обстановки в рассказах и историях</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">для описания повторяющихся действий или привычек, которые нас раздражали в прошлом (слова маркеры «always» и «constantly»)</p>
                                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Указатели времени</h5>
                  <nav class="tense__list">
                    <ul class="tense__list-box">
                                      <li class="tense__list">
                                        <p class="tense__list-word">at 7 a.m. – в 7 утра (вместо 7 a.m. можно подставить любое другое время, важно именно указание на конкретный период времени)</p>
                                        <p class="tense__list-example">Mr. Smith was playing football at 4 o`clock. — В 4 часа мистер Смит играл в футбол.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">all day/night (long) – весь день/всю ночь (напролет)</p>
                                        <p class="tense__list-example">We were sitting there all day.	Мы сидели там весь день.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">all the time - все время</p>
                                        <p class="tense__list-example">He was making fun of me all the time. - Он все время смеялся надо мной.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">at that moment – в тот момент</p>
                                        <p class="tense__list-example">I was teaching my pigeon to fly at that moment the day before yesterday. - Я учил своего голубя летать в то же самое время позавчера.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">while – в то время как</p>
                                        <p class="tense__list-example">I was washing the floor while he was vacuuming the carpet. - Я мыл полы, в то время как он пылесосил ковер.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">when – когда</p>
                                        <p class="tense__list-example">She was brushing her teeth when I went into the bathroom. - Она чистила зубы, когда я вошел в ванную.</p>
                                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения утвердительной формы предложений Past Continuous</h5>
                  <div class="tense__explanations">
                    <div class="tense__explanations-item">
                      <div class="tense__explanations-ico ico-ing">ing</div>
                      <div class="tense__explanations-description">Глагол с окончанием -ing</div>
                    </div>
                    <div class="tense__explanations-item">
                      <div class="tense__explanations-ico ico-tobe">to be</div>
                      <div class="tense__explanations-description">Форма глагола to be</div>
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
                    <div class="tense__verb">
                      <div class="tense__explanations-ico ico-tobe">to be</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__verb">
                      <div class="tense__explanations-ico ico-ing">ing</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>I was eating breakfast.</b>— Я ел завтрак.</div>
                    <div class="tense__examples-item"><b>Students (they) were working on essays.</b>— Студенты работали над эссе.</div>
                    <div class="tense__examples-item"><b>Bob (he) was sleeping.</b>— Боб спал.</div>
                    <div class="tense__examples-item"><b>Mary (she) was feeding the dog.</b>— Мэри кормила собаку.</div>
                  </div>
                  <div class="tense__scheme"><img src="images/to-be-ps.svg" alt="to be"/></div>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения отрицательной формы предложений Past Continuous</h5>
                  <div class="tense__explanations">
                    <div class="tense__explanations-item">
                      <div class="tense__explanations-ico ico-ing">ing</div>
                      <div class="tense__explanations-description">Глагол с окончанием -ing</div>
                    </div>
                    <div class="tense__explanations-item">
                      <div class="tense__explanations-ico ico-tobe">to be</div>
                      <div class="tense__explanations-description">Форма глагола to be</div>
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
                    <div class="tense__verb">
                      <div class="tense__explanations-ico ico-tobe">to be</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">not</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__verb">
                      <div class="tense__explanations-ico ico-ing">ing</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>I was not playing football.</b>— Я не играл в футбол.</div>
                    <div class="tense__examples-item"><b>Mary (she) was not playing he piano.</b>— Мэри не играла на пианино.</div>
                    <div class="tense__examples-item"><b>Students (they) were not sitting in the classroom.</b>— Студенты не сидели в классе.</div>
                    <div class="tense__examples-item"><b>The dog (it) was not jumping on people.</b>— Собака не прыгала на людей.</div>
                  </div>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения вопросительной формы предложений Past Continuous</h5>
                  <div class="tense__explanations">
                    <div class="tense__explanations-item">
                      <div class="tense__explanations-ico ico-ing">ing</div>
                      <div class="tense__explanations-description">Глагол с окончанием -ing</div>
                    </div>
                    <div class="tense__explanations-item">
                      <div class="tense__explanations-ico ico-tobe">to be</div>
                      <div class="tense__explanations-description">Форма глагола to be</div>
                    </div>
                    <div class="tense__explanations-item">
                      <div class="tense__explanations-ico">ВС</div>
                      <div class="tense__explanations-description">Вопросительное слово по требованию</div>
                    </div>
                  </div>
                  <div class="tense__scheme">
                    <div class="tense__explanations-ico">ВС</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">Do</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
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
                      <div class="tense__explanations-ico ico-tobe">to be</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__verb">
                      <div class="tense__explanations-ico ico-ing">ing</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>Were students (they) watching a film?</b>— Студенты смотрели фильм?</div>
                    <div class="tense__examples-item"><b>Was Bob (he) singing “Let It Be”?</b>— Боб пел “Let It Be”?</div>
                    <div class="tense__examples-item"><b>Was Mary (she) studying yesterday? — Мэри училась вчера?</b>— Мэри училась вчера?</div>
                    <div class="tense__examples-item"><b>Was I smiling? — Я улыбался?Were students (they) watching a film?</b>— Студенты смотрели фильм?</div>
                    <div class="tense__examples-item"><b>Was Bob (he) singing “Let It Be”?</b>— Боб пел “Let It Be”?</div>
                    <div class="tense__examples-item"><b>Was Mary (she) studying yesterday?</b>— Мэри училась вчера?</div>
                    <div class="tense__examples-item"><b>Was I smiling?</b>— Я улыбался?</div>
                    <div class="tense__examples-item"><b>Where were you staying when you went to Paris?</b>— Где ты останавливался, когда ездил в Париж?</div>
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