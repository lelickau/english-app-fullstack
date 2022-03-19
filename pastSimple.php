<?php
session_start();
	include_once('path.php');
	$title = 'Past Simple';
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
          <section class="tense" data-tense-id="pastSimple">
            <button class="tense__arrow-prev"><img class="tense__arrow-prev-img" src="images/arrow-prev.svg" alt="prev"/></button>
            <section class="tense__wrapper">
              <div class="tense__header">
                <div class="tense__progress">
                  <h4 class="tense__header-title">Past Simple</h4>
                </div><a class="tense__header-close" href="/grammar"><img src="images/close-btn.svg" alt="Close"/></a>
              </div>
              <article class="tense__content">
                <div class="tense__main">
                  <h5 class="tense__main-title">Past Simple - простое прошедшее время.</h5>
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
                                        <p class="tense__list-text">факте или законченном действие в прошлом и никак не связанном с настоящим моментом</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">события, последовательно (друг за другом) происходившие в прошлом</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">привычки и повторяющиеся действия в прошлом</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">действие, которое произошло в определенное время в прошлом</p>
                                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Указатели времени</h5>
                  <nav class="tense__list">
                    <ul class="tense__list-box">
                                      <li class="tense__list">
                                        <p class="tense__list-word">yesterday – вчера</p>
                                        <p class="tense__list-example">Yesterday I worked hard. — Вчера я много работал.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">the day before yesterday - позавчера</p>
                                        <p class="tense__list-example">I was with my friends the day before yesterday. — Позавчера я был с друзьями.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">the other day - на днях</p>
                                        <p class="tense__list-example">They met the other day . — На днях они встречались.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">last (week, month, year, weekend) - на/в прошлой(-м) (неделе, месяце, году, выходных)</p>
                                        <p class="tense__list-example">We stayed at home last weekend - В прошлые выходные мы остались дома.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">(hour, day, week, month, year) ago - (час, день, неделя, месяц, год) назад</p>
                                        <p class="tense__list-example"> I met Jane ten days ago. - Десять дней назад я встретил Джейн.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">just now - только что</p>
                                        <p class="tense__list-example"> I saw Tom just now. - Я только что видел Тома.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">in 1890 - в 1890</p>
                                        <p class="tense__list-example">Bob met Mary in 1990. - Боб встретил Мери в 1990.</p>
                                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения утвердительной формы предложений Past Simple</h5>
                  <div class="tense__explanations">
                    <div class="tense__explanations-item">
                      <div class="tense__explanations-ico ico-2">V</div>
                      <div class="tense__explanations-description">Глагол во второй форме (форма неправильных глаголов)</div>
                    </div>
                    <div class="tense__explanations-item">
                      <div class="tense__explanations-ico">ed</div>
                      <div class="tense__explanations-description">Глагол с окончанием (ed)</div>
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
                      <div class="tense__explanations-ico">ed</div>
                      <div class="tense__words">или</div>
                      <div class="tense__explanations-ico ico-2">V</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>He finished his work yesterday.</b>— Он закончил работу вчера.</div>
                    <div class="tense__examples-item"><b>I bought a tent last summer.</b>— Прошлым летом я купил палатку.</div>
                    <div class="tense__examples-item"><b>I threw the ball very high.</b>— Я подкинул мяч очень высоко.</div>
                  </div>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения отрицательной формы предложений Past Simple</h5>
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
                      <div class="tense__subjects-item">He</div>
                      <div class="tense__subjects-item">She</div>
                      <div class="tense__subjects-item">It</div>
                    </div>
                    <div class="tense__scheme-arrow"><img class="tense__scheme-arrow-img" src="images/arrow-schama.svg" alt="---&gt;"/></div>
                    <div class="tense__words">did not</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__verb">
                      <div class="tense__explanations-ico">V</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>We did not find our car.</b>- Мы не нашли свою машину.</div>
                    <div class="tense__examples-item"><b>I did not understand this question.</b>— Я не понял этот вопрос.</div>
                    <div class="tense__examples-item"><b>I did not play.</b>—  Я не играл.</div>
                    <div class="tense__examples-item"><b>They did not forget.</b>— Они не забыли.</div>
                    <div class="tense__examples-item"><b>I did not sleep last night.</b>— Я не спал прошлой ночью.</div>
                  </div>
                  <div class="tense__scheme">
                    <p class="tense__scheme-text">Если в предложении нет глагола-действия (прыгать, играть, слушать), то используй глагол to be.</p><img src="images/to-be-ps.svg" alt="to be"/>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>I was not at my gran's house yesterday.</b>— Я не был в доме у бабушки вчера.</div>
                    <div class="tense__examples-item"><b>She was not with her friends last Saturday.</b>— В прошлую субботу она не была со своими друзьями.</div>
                    <div class="tense__examples-item"><b>We were not happy yesterday.</b>— Мы не были счстливы вчера.</div>
                  </div>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения вопросительной формы предложений Past Simple</h5>
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
                    <div class="tense__words">Did</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
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
                      <div class="tense__explanations-ico">V</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>Did you wash your hands?</b>- Ты помыл руки?</div>
                    <div class="tense__examples-item"><b>Did they sign the contract?</b>— Они подписали контракт?</div>
                    <div class="tense__examples-item"><b>Did students like the film?</b>— Студентам понравился фильм?</div>
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