<?php
    session_start();
    $title = 'Future Continuous';
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
            <section class="tense" data-tense-id="futureContinuous">
                <button class="tense__arrow-prev"><img class="tense__arrow-prev-img" src="images/arrow-prev.svg" alt="prev"/></button>
                <section class="tense__wrapper">
                <div class="tense__header">
                    <div class="tense__progress">
                    <h4 class="tense__header-title">Future Continuous</h4>
                    </div><a class="tense__header-close" href="/grammar"><img src="images/close-btn.svg" alt="Close"/></a>
                </div>
                <article class="tense__content">
                <div class="tense__main">
                  <h5 class="tense__main-title">Future Continuous - это будущее длительное время.</h5>
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
                                        <p class="tense__list-text">действия в конкретный момент времени в будущем</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">когда мы хотим рассказать о том, что несколько вещей будут происходить одновременно</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">неизбежные будущие события, которые точно произойдут в результате каких-либо подготовительных действий или просто естественным путём, мы уверены, что будет так и никак иначе</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">для выражения каких-то планов на будущее</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">вежливый вопрос - конструкцию Future Continuous можно использовать, чтобы аккуратно и вежливо узнать у собеседника о планах на ближайшее будущее, при помощи такой формы мы можем поинтересоваться, совпадают ли намерения другого человека с нашими желаниями</p>
                                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Указатели времени</h5>
                  <nav class="tense__list">
                    <ul class="tense__list-box">
                                      <li class="tense__list">
                                        <p class="tense__list-word">at 3 o’clock - в три часа</p>
                                        <p class="tense__list-example">I shall be having a yoga class at 9 o’clock tomorrow — Завтра в 9 часов у меня будет занятие по йоге.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">this time next week/month/year — в это время на следующей неделе, в это время в следующем месяце/году</p>
                                        <p class="tense__list-example">This time next week I will be having dinner with Tiffany. — В это время на следующей неделе я буду ужинать с Тиффани.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">the whole morning/evening/day — целое утро, целый вечер/день</p>
                                        <p class="tense__list-example">Tom will be waiting for you the whole day. — Том будет ждать тебя весь день.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">During the evening — в течение вечера</p>
                                        <p class="tense__list-example">We will be playing Twister during the evening. — В течение вечера мы будем играть в твистер.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">From ... till — с ... до (о времени)</p>
                                        <p class="tense__list-example">They won’t be working from 9 p.m. till 11 p.m. — Они не будут работать с 9 до 11 вечера.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">For ... hours — на протяжении ... часов</p>
                                        <p class="tense__list-example">I will be fixing the bugs for 3 hours! — Я буду исправлять ошибки в программе три часа!</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">All day long — целый день</p>
                                        <p class="tense__list-example">I bet she will be sleeping all day long. — Готов поспорить, она будет спать весь день напролет.</p>
                                      </li>
                    </ul>
                  </nav>
                  <div class="tense__scheme">
                    <div class="tense__subjects-item">Есть такие глаголы, которые не употребляются в длительной форме Continuous. По-английски они называются stative verbs. Они выражают мыслительные процессы, чувства — то, что происходит у нас внутри.
                      <div class="tense__examples">
                        <div class="tense__examples-item"><b>Эмоции:</b><span> love - любить, like - нравится, want - хотеть, wish - желать, hate - ненавидеть, need - нуждаться, prefer - предпочитать</span></div>
                        <div class="tense__examples-item"><b>Мыслительные процессы:</b><span>  know - знать, agree - соглашаться, believe - верить, forget - забывать, expect - ожидать, understand - понимать, respect - уважать, remember - помнить</span></div>
                        <div class="tense__examples-item"><b>Обладание, отношение:</b><span>  be - быть, belong - принадлежать, consist - состоять, have - иметь</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения утвердительной формы предложений Future Continuous</h5>
                  <div class="tense__explanations">
                    <div class="tense__explanations-item">
                      <div class="tense__explanations-ico ico-ing">ing</div>
                      <div class="tense__explanations-description">Глагол с окончанием -ing</div>
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
                    <div class="tense__words">will be</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__verb">
                      <div class="tense__explanations-ico ico-ing">ing</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>I will be eating breakfast.</b>— Я буду завтракать.</div>
                    <div class="tense__examples-item"><b>Students (they) will be working on essays.</b>— Студенты будут работать над эссе.</div>
                    <div class="tense__examples-item"><b>Bob (he) will be sleeping.</b>— Боб будет спать.</div>
                    <div class="tense__examples-item"><b>Mary (she) will be feeding the dog.</b>— Мэри будет кормить собаку.</div>
                  </div>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения отрицательной формы предложений Future Continuous</h5>
                  <div class="tense__explanations">
                    <div class="tense__explanations-item">
                      <div class="tense__explanations-ico ico-ing">ing</div>
                      <div class="tense__explanations-description">Глагол с окончанием -ing</div>
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
                    <div class="tense__words">will not be</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__verb">
                      <div class="tense__explanations-ico ico-ing">ing</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>I will not be playing football.</b>— Я не играю в футбол.</div>
                    <div class="tense__examples-item"><b>Mary (she) won’t be playing piano.</b>— Мэри не играет на пианино.</div>
                    <div class="tense__examples-item"><b>Students (they) won’t be sitting in the classroom.</b>— Студенты не сидят в классе.</div>
                    <div class="tense__examples-item"><b>The dog (it) won’t be jumping on people.</b>— Собака не прыгает на людей.</div>
                  </div>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения вопросительной формы предложений Future Continuous</h5>
                  <div class="tense__explanations">
                    <div class="tense__explanations-item">
                      <div class="tense__explanations-ico ico-ing">ing</div>
                      <div class="tense__explanations-description">Глагол с окончанием -ing</div>
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
                    <div class="tense__words">will not be</div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__verb">
                      <div class="tense__explanations-ico ico-ing">ing</div>
                    </div><img class="tense__small-arrow" src="images/small-arrow.svg" alt="---&gt;"/>
                    <div class="tense__words">остальные слова</div>
                  </div>
                  <div class="tense__examples">
                    <div class="tense__examples-item"><b>Will I be speaking?</b>— Я буду говорить?</div>
                    <div class="tense__examples-item"><b>Will Mary (she) be studying?</b>— Мэри будет учиться?</div>
                    <div class="tense__examples-item"><b>Will Bob (he) be singing “Let It Be”?</b> — Боб будет петь “Let It Be”?</div>
                    <div class="tense__examples-item"><b>Will students (they) be watching a movie?</b> — Студенты будут смотреть фильм?</div>
                    <div class="tense__examples-item"><b>What will John and Nina be celebrating this time tomorrow?</b> — Что будут отмечать Джон и Нина в это время завтра?</div>
                    <div class="tense__examples-item"><b>What time will you be coming back from the restaurant?</b> — В какое время ты будешь возвращаться из ресторана?</div>
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