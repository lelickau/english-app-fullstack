<?php
session_start();
    $title = 'Present Continuous';
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
          <section class="tense" data-tense-id="presentContinuous">
            <button class="tense__arrow-prev"><img class="tense__arrow-prev-img" src="images/arrow-prev.svg" alt="prev"/></button>
            <section class="tense__wrapper">
              <div class="tense__header">
                <div class="tense__progress">
                  <h4 class="tense__header-title">Present Continuous</h4>
                </div><a class="tense__header-close" href="/grammar"><img src="images/close-btn.svg" alt="Close"/></a>
              </div>
              <article class="tense__content">
                <div class="tense__main">
                  <h5 class="tense__main-title">Present Continuous - указывает на процесс, длящийся непосредственно в момент речи.</h5>
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
                                        <p class="tense__list-text">указание на процесс, происходящий непосредственно в момент разговора</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">действие, находящееся в процессе своего развития, но необязательно происходящее в момент разговора</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">описание повторяющихся действий с использованием слов always, constantly, forever (как правило это относится к характерным свойствам и поведению людей, часто с негативной окраской)</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">запланированное действие в будущем, часто с глаголами движения</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">в ситуациях, когда человек рассказывает историю или пересказывает книгу или фильм</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">используется для того, чтобы противопоставлять новое старому</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">продолжительное действие происходит на фоне другого действия, может применяться союз while</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">действие происходит при временных, непостоянных обстоятельствах. (со словами until, during, for)</p>
                                      </li>
                                      <li class="tense__list-point">
                                                        <div class="check-box">
                                                          <div class="check">
                                                            <div class="check__sing" id="check__part-1"></div>
                                                            <div class="check__sing" id="check__part-2"></div>
                                                          </div>
                                                        </div>
                                        <p class="tense__list-text">если говорим о планах в будущем. (со словами next week/month/year, tonight, tomorrow)</p>
                                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Указатели времени</h5>
                  <nav class="tense__list">
                    <ul class="tense__list-box">
                                      <li class="tense__list">
                                        <p class="tense__list-word">Currently - сейчас, теперь, в настоящее время</p>
                                        <p class="tense__list-example">You are currently working for this company. – Ты как раз сейчас работаешь на эту компанию.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">Today - сегодня</p>
                                        <p class="tense__list-example">I am visiting Jane today. — Сегодня я навещаю Джейн.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">Tonight - сегодня вечером</p>
                                        <p class="tense__list-example">I am studying tonight. — Сегодня вечером я занимаюсь.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">Now - сейчас, right now - прямо сейчас</p>
                                        <p class="tense__list-example">I am working now. — Сейчас я работаю. I am writing a letter right now. — Прямо сейчас я пишу письмо.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">At present - в настоящее время</p>
                                        <p class="tense__list-example">At present he isn’t teaching Russian – В настоящее время он не преподает русский.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">At this moment / at the moment - в данный момент, в эту минуту</p>
                                        <p class="tense__list-example">At this moment they are looking for our car. — В этот момент они ищут нашу машину.</p>
                                      </li>
                                      <li class="tense__list">
                                        <p class="tense__list-word">Still - до сих пор, все еще</p>
                                        <p class="tense__list-example">He is still watching for my cat. — Он до сих пор присматривает за моей кошкой.</p>
                                      </li>
                    </ul>
                  </nav>
                  <div class="tense__scheme">
                    <div class="tense__subjects-item">В английском языке есть глаголы, которые невозможно употребить в длительной форме, и они не используются для образования Present Continuous, для них нужен Present Simple.
                      <div class="tense__examples">
                        <div class="tense__examples-item"><b>Эмоции:</b><span> love - любить, like - нравится, want - хотеть, wish - желать, hate - ненавидеть, need - нуждаться, prefer - предпочитать</span></div>
                        <div class="tense__examples-item"><b>Мыслительные процессы:</b><span>  know - знать, agree - соглашаться, believe - верить, forget - забывать, expect - ожидать, understand - понимать, respect - уважать, remember - помнить</span></div>
                        <div class="tense__examples-item"><b>Обладание, отношение:</b><span>  be - быть, belong - принадлежать, consist - состоять, have - иметь</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения утвердительной формы предложений Present Continuous</h5>
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
                  <div class="tense__scheme"><img src="images/to-be-pc.svg" alt="to be"/></div>
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
                    <div class="tense__examples-item"><b>I am speaking.</b>- Я говорю.</div>
                    <div class="tense__examples-item"><b>He is running now.</b>— Он сейчас бежит.</div>
                    <div class="tense__examples-item"><b>We are washing the floor.</b>— Мы моем пол.</div>
                  </div>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения отрицательной формы предложений Present Continuous</h5>
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
                    <div class="tense__examples-item"><b>I am not playing the piano.</b>— Я не играю на пианино.</div>
                    <div class="tense__examples-item"><b>We are not going out right now.</b>— Мы сейчас не идем гулять.</div>
                  </div>
                </div>
                <div class="tense__main">
                  <h5 class="tense__main-title">Схема построения вопросительной формы предложений Present Continuous</h5>
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
                    <div class="tense__examples-item"><b>Are you sleeping now?</b>— Ты сейчас спишь?</div>
                    <div class="tense__examples-item"><b>Is Anna studying right now?</b>— Анна сейчас учится?</div>
                    <div class="tense__examples-item"><b>Are students swimming?</b>— Студенты плавают?</div>
                    <div class="tense__examples-item"><b>Where are we working?</b>— Где мы работаем?</div>
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