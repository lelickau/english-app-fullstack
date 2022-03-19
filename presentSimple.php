<?php
    session_start();
    $title = 'Present Simple';
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
          <section class="tense" data-tense-id="presentSimple">
            <button class="tense__arrow-prev"><img class="tense__arrow-prev-img" src="images/arrow-prev.svg" alt="prev"/></button>
            <section class="tense__wrapper">
              <div class="tense__header">
                <div class="tense__progress">
                  <h4 class="tense__header-title">Present Simple</h4>
                </div><a class="tense__header-close" href="/grammar"><img src="images/close-btn.svg" alt="Close"/></a>
              </div>
              <article class="tense__content">
                <div class="tense__main">
                  <h5 class="tense__main-title">Present Simple - это настоящее простое время.</h5>
                  <h6 class="tense__list-title">Употребляется когда хочешь рассказать о:</h6>
                  <nav class="tense__list">
                    <ul class="tense__list-box">
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">повторяющихся действиях, фактах, законах природы</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">событиях в будущем, когда действия происходять регулярно, по расписанию</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">нескольких событиях в настоящем, которые происходят одно за другим (например инструкции или указания)</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">что делаешь постоянно, каждый день (неделю и т.д.) (привычки)</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">выражение чувств, мыслей, симпатии, состояния (с глаголами see, hear, know, understand, love, hate, like, prefere, remember, want, think, mean, belive и т.д.)</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">явления природы, неопровержимые истины</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">дейстрия в &quot;будущем&quot; без периода времени</p>
                                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Указатели времени</h5>
                  <nav class="tense__list">
                    <ul class="tense__list-box">
                                      <li class="tense__list">
                                        <p class="tense__list-word">Always - всегда</p>
                                        <p class="tense__list-example">He always gets up at 7 a.m. — Он всегда встает в 7 утра.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">Often - часто</p>
                                        <p class="tense__list-example">Small children often get sick — Маленькие дети часто болеют.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">Usually - обычно</p>
                                        <p class="tense__list-example">They are usu­al­ly at home in the evening. — Они обычно дома вечером.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">Sometimes - иногда</p>
                                        <p class="tense__list-example">I help in the shop sometimes — Иногда я помогаю в магазине.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">Regularly - постоянно</p>
                                        <p class="tense__list-example">She regularly polishes her shoes – Она постоянно чистит свои туфли.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">Seldom - изредка</p>
                                        <p class="tense__list-example">She seldom goes shopping – Она изредка ходит за покупками.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">Never - никогда</p>
                                        <p class="tense__list-example">I never open the window in the evening – Я никогда не открываю окно вечером.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">From time to time - время от времени</p>
                                        <p class="tense__list-example">From time to time they travel to Europe – Время от времени они путешествуют в Европу.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">Rarely - редко</p>
                                        <p class="tense__list-example">He rarely gets up early in the morning – Он редко встаёт рано утром.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">Every day/week/month/ year - каждый день/неделю/месяц/год</p>
                                        <p class="tense__list-example">Every year my family goes to the sea in summer – Каждый год летом моя семья отправляется к морю</p>
                                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения утвердительной формы предложений Present Simple</h5>
                  <div class="tense__explanations">
                    <div class="tense__explanations-item">
                      <div class="tense__explanations-ico">V</div>
                      <div class="tense__explanations-description">Глагол</div>
                    </div>
                    <div class="tense__explanations-item">
                      <div class="tense__explanations-ico ico-s">V</div>
                      <div class="tense__explanations-description">Глагол с окончанием (s/es)</div>
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
                    <div class="tense__verb">
                      <div class="tense__explanations-ico">V</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>I live in London.</b>- Я живу в Лондоне.</div>
                    <div class="tense__examples-item"><b>I work at a bank.</b>— Я работаю в банке.</div>
                    <div class="tense__examples-item"><b>My family and I (we) eat together.</b>— Моя семья и я едим вместе.</div>
                  </div>
                  <div class="tense__scheme">
                    <div class="tense__scheme-subjects">
                      <div class="tense__subjects-item">He</div>
                      <div class="tense__subjects-item">She</div>
                      <div class="tense__subjects-item">It</div>
                    </div>
                    <div class="tense__scheme-arrow"><img class="tense__scheme-arrow-img" src="images/arrow-schama.svg" alt="---&gt;"/></div>
                    <div class="tense__verb">
                      <div class="tense__explanations-ico ico-s">V</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>The meeting (it) starts at 6 o'clock.</b>- Собрание начинается в шесть часов.</div>
                    <div class="tense__examples-item"><b>Bob (he) works in Moscow.</b>— Боб работает в Москве.</div>
                    <div class="tense__examples-item"><b>The dog (it) sleeps under the bed.</b>— Собака спит под кроватью.</div>
                  </div>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения отрицательной формы предложений Present Simple</h5>
                  <div class="tense__explanations">
                    <div class="tense__explanations-item">
                      <div class="tense__explanations-ico">V</div>
                      <div class="tense__explanations-description">Глагол</div>
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
                    <div class="tense__words">do not</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__verb">
                      <div class="tense__explanations-ico">V</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>I do not play football.</b>- Я не играю в футбол.</div>
                    <div class="tense__examples-item"><b>Students do not sit in the classroom.</b>— Студенты не сидят в классе.</div>
                    <div class="tense__examples-item"><b>I do not like black coffee.</b>— Я не люблю черный кофе.</div>
                    <div class="tense__examples-item"><b>I am not hungry.</b>— Я не голодный.</div>
                    <div class="tense__examples-item"><b>Students are not sleepy.</b>— Студенты не сонные.</div>
                  </div>
                  <div class="tense__scheme">
                    <div class="tense__scheme-subjects">
                      <div class="tense__subjects-item">He</div>
                      <div class="tense__subjects-item">She</div>
                      <div class="tense__subjects-item">It</div>
                    </div>
                    <div class="tense__scheme-arrow"><img class="tense__scheme-arrow-img" src="images/arrow-schama.svg" alt="---&gt;"/></div>
                    <div class="tense__words">does not</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__verb">
                      <div class="tense__explanations-ico">V</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>The meeting (it) starts at 6 o'clock.</b>- Собрание начинается в шесть часов.</div>
                    <div class="tense__examples-item"><b>Bob (he) works in Moscow.</b>— Боб работает в Москве.</div>
                    <div class="tense__examples-item"><b>The dog (it) sleeps under the bed.</b>— Собака спит под кроватью.</div>
                  </div>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения вопросительной формы предложений Present Simple</h5>
                  <div class="tense__explanations">
                    <div class="tense__explanations-item">
                      <div class="tense__explanations-ico">V</div>
                      <div class="tense__explanations-description">Глагол</div>
                    </div>
                    <div class="tense__explanations-item">
                      <div class="tense__explanations-ico">ВС</div>
                      <div class="tense__explanations-description">Вопросительное слово по требованию</div>
                    </div>
                  </div>
                  <div class="tense__scheme">
                    <div class="tense__explanations-ico">ВС</div>
                    <img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">Do</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__scheme-subjects">
                      <div class="tense__subjects-item">I</div>
                      <div class="tense__subjects-item">You</div>
                      <div class="tense__subjects-item">We</div>
                      <div class="tense__subjects-item">They</div>
                    </div>
                    <div class="tense__scheme-arrow"><img class="tense__scheme-arrow-img" src="images/arrow-schama.svg" alt="---&gt;"/></div>
                    <div class="tense__verb">
                      <div class="tense__explanations-ico">V</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>Do students live in a dormitory?</b>- Студенты живут в общежитии?</div>
                    <div class="tense__examples-item"><b>Do you like rock?</b>— Тебе нравится рок?</div>
                    <div class="tense__examples-item"><b>Why do you drink green tea?</b>— Почему ты пьешь зеленый чай?</div>
                  </div>
                  <div class="tense__scheme">
                    <div class="tense__explanations-ico">ВС</div>
                    <img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">Does</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__scheme-subjects">
                      <div class="tense__subjects-item">He</div>
                      <div class="tense__subjects-item">She</div>
                      <div class="tense__subjects-item">It</div>
                    </div>
                    <div class="tense__scheme-arrow"><img class="tense__scheme-arrow-img" src="images/arrow-schama.svg" alt="---&gt;"/></div>
                    <div class="tense__verb">
                      <div class="tense__explanations-ico">V</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>Does Bob study English?</b>- Боб учит английский?</div>
                    <div class="tense__examples-item"><b>Does Mary like playing piano?</b>—  Мэри нравится играть на пианино?</div>
                    <div class="tense__examples-item"><b>Where does he live in Prague?</b>— Где он живет в Праге?</div>
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