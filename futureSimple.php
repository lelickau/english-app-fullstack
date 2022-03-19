<?php
session_start();
include_once('path.php');
$title = 'Future Simple';
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
        <section class="tense" data-tense-id="futureSimple">
            <button class="tense__arrow-prev"><img class="tense__arrow-prev-img" src="images/arrow-prev.svg" alt="prev"/></button>
            <section class="tense__wrapper">
              <div class="tense__header">
                <div class="tense__progress">
                  <h4 class="tense__header-title">Future Simple</h4>
                </div><a class="tense__header-close" href="/grammar"><img src="images/close-btn.svg" alt="Close"/></a>
              </div>
              <article class="tense__content">
                <div class="tense__main">
                  <h5 class="tense__main-title">Future Simple - это простое будущее время.</h5>
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
                                        <p class="tense__list-text">о том, что хотим или собираемся сделать</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">что-то обещаем или вызываемся что-то сделать добровольно</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">события в будущем, которые нельзя изменить</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">когда предсказываем и предполагаем какие-то события</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">когда предупреждаем или угрожаем</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">когда принимаем спонтанные решения</p>
                                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Указатели времени</h5>
                  <nav class="tense__list">
                    <ul class="tense__list-box">
                                      <li class="tense__list">
                                        <p class="tense__list-word">soon – скоро</p>
                                        <p class="tense__list-example">Bob and Mary will get married soon. — Боб и Мэри скоро поженятся.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">later - позже</p>
                                        <p class="tense__list-example">I will call you later. — Я тебе позвоню позже.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">as soon as - как только</p>
                                        <p class="tense__list-example">I will call you back as soon as I find the ticket. — Я перезвоню тебе, как только найду билет.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">tomorrow - завтра</p>
                                        <p class="tense__list-example">I will be home tomorrow. - Завтра я буду дома.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">tonight - вечером</p>
                                        <p class="tense__list-example">It will snow tonight. — Вечером пойдёт снег.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">next (week, year) - на следующей неделе(году)</p>
                                        <p class="tense__list-example"> We will visit London next year. — Я посещу Лондон в следующем году.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">in (a month, three days, 2045) - через (месяц, три дня), в 2045</p>
                                        <p class="tense__list-example">I will serve the lunch in a minute. — Я накрою обед через минуту.</p>
                                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения утвердительной формы предложений Future Simple</h5>
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
                    <div class="tense__words">will</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__verb">
                      <div class="tense__explanations-ico">V</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>I will read an interesting book.</b>— Я буду читать интересную книгу.</div>
                    <div class="tense__examples-item"><b>You will buy a new dress.</b>— Ты купишь новое платье.</div>
                    <div class="tense__examples-item"><b>He will play tennis.</b>— Он будет играть в теннис.</div>
                    <div class="tense__examples-item"><b>We will dream of better days.</b>— Мы будем мечтать о лучших деньках.</div>
                  </div>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения отрицательной формы предложений Future Simple</h5>
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
                    <div class="tense__words">will not</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__verb">
                      <div class="tense__explanations-ico">V</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>I will not take your bag.</b>- Я не буду брать твою сумку.</div>
                    <div class="tense__examples-item"><b>We will not find the hotel tomorrow.</b>— Мы не найдем отель завтра.</div>
                    <div class="tense__examples-item"><b>My friend will not play guitar with us.</b>— Мой друг не будет играть с нами на гитаре.</div>
                    <div class="tense__examples-item"><b>They will not present the project this Friday.</b>— Они не представят проект в эту пятницу.</div>
                  </div>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения вопросительной формы предложений Future Simple</h5>
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
                    <div class="tense__verb">
                      <div class="tense__explanations-ico">V</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>Will you buy that blue car?</b>- Ты купишь ту синюю машину?</div>
                    <div class="tense__examples-item"><b>Will she call me back?</b>— Она перезвонит мне?</div>
                    <div class="tense__examples-item"><b>Will they win this match?</b>— Они выиграют этот матч?</div>
                    <div class="tense__examples-item"><b>When will we buy this house?</b>- Когда мы купим этот дом?</div>
                    <div class="tense__examples-item"><b>How long will she keep your stuff?</b>— Как долго она будет хранить твои вещи?</div>
                    <div class="tense__examples-item"><b>What will my sister buy for me?</b>— Что моя сестра купит для меня?</div>
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