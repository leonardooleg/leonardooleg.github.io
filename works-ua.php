<?php
include_once 'core.php';
include_once 'lang/'.$site_lang.".php";
include_once "head.php";

?>

        <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Components</span>
                <h3 class="page-title"><?=$lang["works"]["h1"]?></h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card card-small card-post card-post--1">
                  <div class="card-post__image" style="background-image: url('images/works/silk.JPG');">
                    <a href="#" class="card-post__category badge badge-pill badge-dark">Business</a>
                    <div class="card-post__author d-flex">
                      <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('images/avatars/0.jpg');"></a>
                    </div>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a class="text-fiord-blue" target="_blank" href="https://silkandlace.ru/">Інтернет-магазин для нижньої білизни</a>
                    </h5>
                    <p class="card-text d-inline-block mb-3">Веб-сайт інтернет-магазину за рік був виготовлений під ключ з нуля на Laravel. Є платіж та кошик замовлень, особистий рахунок клієнтів та адміністраторів або модераторів</p>
                    <span class="text-muted">28 червеня 2020</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card card-small card-post card-post--1">
                  <div class="card-post__image" style="background-image: url('images/works/mnogo.JPG');">
                    <a href="#" class="card-post__category badge badge-pill badge-info">Shop</a>
                    <div class="card-post__author d-flex">
                      <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('images/works/mnogoprintov.jpg');"></a>
                    </div>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a class="text-fiord-blue" target="_blank" href="images/works/mnogo.JPG">Інтернет-магазин футболок на Laravel</a>
                    </h5>
                    <p class="card-text d-inline-block mb-3">Сайт інтернет-магазин футболок на Laravel з можливістю замовлення як вже готових так і з редактором зображення</p>
                    <span class="text-muted">29 січень 2019</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card card-small card-post card-post--1">
                  <div class="card-post__image" style="background-image: url('/images/works/php_img2.png');">
                    <a href="#" class="card-post__category badge badge-pill badge-primary">Technology</a>
                    <div class="card-post__author d-flex">
                      <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('/images/works/php_img.png');"></a>
                    </div>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a class="text-fiord-blue" target="_blank" href="/images/works/php_img2.png">PHP проект для галереї</a>
                    </h5>
                    <p class="card-text d-inline-block mb-3">Зробив проект з <a target="_blank" href="images/works/php_admin.jpg"> адмін-панелю</a> за місяць. Вся структура сайту була написана з нуля, дизайн взятий із шаблону і багато разів змінювався. </p>
                    <span class="text-muted">29 вересень 2018</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card card-small card-post card-post--1">
                  <div class="card-post__image" style="background-image: url('images/works/povarnya.JPG');">
                    <a href="#" class="card-post__category badge badge-pill badge-warning">Кулінарія</a>
                    <div class="card-post__author d-flex">
                      <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('images/works/pavarnya.PNG');">книга рецептів</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a class="text-fiord-blue"  target="_blank" href="http://web.archive.org/web/20160409024651/http://povarnya.com:80/">Кухня-коли готувати в радість</a>
                    </h5>
                    <p class="card-text d-inline-block mb-3">Розроблений на CSM Drupal. Сайт - книга рецептів з авто-парсингом з різних відкритих ресурсів і автопостингом публікацій</p>
                    <span class="text-muted">29 грудень 2014</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-sm-12 mb-4">
                <div class="card card-small card-post card-post--aside card-post--1">
                  <div class="card-post__image" style="background-image: url('images/works/konkord.PNG');">
                    <a href="#" class="card-post__category badge badge-pill badge-info">Афіша</a>
                    <div class="card-post__author d-flex">
                      <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('images/works/konkord2.PNG');">Кіно та афіша</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a class="text-fiord-blue" target="_blank" href="http://web.archive.org/web/20160321220927/http://konkordkino.com/">Конкорд Кіно</a>
                    </h5>
                    <p class="card-text d-inline-block mb-3">Розроблено на CSM Drupal. Сайт-афіша для кінотеатру "Конкорд" Полтава із системою розкладу сеансів та афішею на майбутні сеанси</p>
                    <span class="text-muted">29 Квітень 2016</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-sm-12 mb-4">
                <div class="card card-small card-post card-post--aside card-post--1">
                  <div class="card-post__image" style="background-image: url('images/works/steep.JPG');">
                    <a target="_blank" href="images/works/steep.JPG" class="card-post__category badge badge-pill badge-dark">Business</a>
                    <div class="card-post__author d-flex">
                      <a target="_blank" href="images/works/steep2.JPG" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('images/works/steep2.JPG');">Електронна комерція</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a class="text-fiord-blue" target="_blank" href="images/works/steep.JPG">Сайт для продажі жіночих сумочок</a>
                    </h5>
                    <p class="card-text d-inline-block mb-3">Сайт написаний для електронної комерція на CSM Opencart з реалізацією персоналізованої адмін панелі та системою замовлень</p>
                    <span class="text-muted">29 Лютий 2016</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small card-post mb-4">
                  <div class="card-body">
                    <h5 class="card-title">Парсинг чи різного роду скрипти</h5>
                    <p class="card-text text-muted"> Виконаю задачі <br> як на Node.JS, JavaScript, VueJS, PHP, Ajax, MySql, jQuery ...</p>
                  </div>
                  <div class="card-footer border-top d-flex">
                    <div class="card-post__author d-flex">
                      <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('images/works/script.jpg');">script</a>
                      <div class="d-flex flex-column justify-content-center ml-3">

                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-small card-post mb-4">
                  <div class="card-body">
                    <h5 class="card-title">Telegram бот</h5>
                    <p class="card-text text-muted">Можу створити телеграм ботів із зворотнім зв'язком (функціональними клавішами). Зможе як реагувати на команди так і аналізувати чат чи модерувати групу</p>
                  </div>
                  <div class="card-footer border-top d-flex">
                    <div class="card-post__author d-flex">
                      <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('images/works/telegram.jpg');">Telegram bots</a>
                      <div class="d-flex flex-column justify-content-center ml-3">
                        <span class="card-post__author-name">Telegram боти</span>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-small card-post mb-4">
                  <div class="card-body">
                    <h5 class="card-title">Розширення для браузера</h5>
                    <p class="card-text text-muted">Створив розширення для браузерів на Хроміум для конвертації криптовалют в "звичайні" валюти</p>
                  </div>
                  <div class="card-footer border-top d-flex">
                    <div class="card-post__author d-flex">

                      <div class="d-flex flex-column justify-content-center ml-3">
                        <span class="card-post__author-name">Karbo</span>
                        <small class="text-muted">21 березень 2011</small>
                      </div>
                    </div>
                    <div class="my-auto ml-auto">
                      <a class="btn btn-sm btn-white" target="_blank" href="https://chrome.google.com/webstore/detail/converter-karbo/hnggpcooojndddmaeblhcpgcmfakejpb?hl=uk">
                        <i class="far fa-bookmark mr-1"></i> Переглянути розширення </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">

              <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card card-small card-post h-100">
                  <div class="card-post__image" style="background-image: url('images/works/ilona.JPG');"></div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a class="text-fiord-blue" target="_blank" href="https://ilona-tour.at.ua/">Бюро подорожей "Ілона" </a>
                    </h5>
                    <p class="card-text">Сайт розміщений на платформі Ucoz. Займався дизайном, рекламою, та системою бронювання</p>
                  </div>
                  <div class="card-footer text-muted border-top py-3">
                    <span class="d-inline-block">
                        <a class="text-fiord-blue">#PHP</a>
                      <a class="text-fiord-blue" >#UCOZ</a>
                      <a class="text-fiord-blue" >#SEO</a>
                      <a class="text-fiord-blue" >#MySql</a>
                         <a class="text-fiord-blue" >#CSS</a>
                      <a class="text-fiord-blue" >#JavaScript</a>
                      <a class="text-fiord-blue" >#дизайн</a>
                    </span>
                  </div>
                </div>
              </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card card-small card-post h-100">
                        <div class="card-post__image" style="background-image: url('images/works/personal.JPG');"></div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a class="text-fiord-blue"  target="_blank" href="https://poltavastaff.at.ua/">Підбір домашнього персоналу</a>
                            </h5>
                            <p class="card-text">Сайт розміщений на платформі Ucoz. Займався дизайном, рекламою</p>
                        </div>
                        <div class="card-footer text-muted border-top py-3">
                    <span class="d-inline-block">
                       <a class="text-fiord-blue">#PHP</a>
                      <a class="text-fiord-blue" >#UCOZ</a>
                      <a class="text-fiord-blue" >#SEO</a>
                      <a class="text-fiord-blue" >#MySql</a>
                      <a class="text-fiord-blue" >#CSS</a>
                      <a class="text-fiord-blue" >#JavaScript</a>
                      <a class="text-fiord-blue" >#дизайн</a>
                    </span>
                        </div>
                    </div>
                </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card card-small card-post h-100">
                  <div class="card-post__image" style="background-image: url('images/works/zatoka.JPG');"></div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a class="text-fiord-blue" target="_blank" href="https://web.archive.org/web/20141218172026/http://more-zatoka.com.ua/">База відпочинку "Іній" в Затоці</a>
                    </h5>
                    <p class="card-text">Сайт розроблений з "нуля" на технології PHP та займався розкруткою і підтримкою</p>
                  </div>
                  <div class="card-footer text-muted border-top py-3">
                    <span class="d-inline-block">
                       <a class="text-fiord-blue">#PHP</a>
                      <a class="text-fiord-blue" >#CSM Drupa</a>
                      <a class="text-fiord-blue" >#MySql</a>
                      <a class="text-fiord-blue" >#SEO</a>
                      <a class="text-fiord-blue" >#налаштування-VPS</a>
                      <a class="text-fiord-blue" >#дизайн</a>
                         <a class="text-fiord-blue" >#CSS</a>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card card-small card-post h-100">
                  <div class="card-post__image" style="background-image: url('images/works/mobmonkey.jpg');"></div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a class="text-fiord-blue" target="_blank" href="https://web.archive.org/web/20120926064926/http://mobmonkey.ru:80/">Сайт для мобільних телефонів</a>
                    </h5>
                    <p class="card-text">Проект створений на Ucoz далі перенесений на CSM Drupal, займався SEO сайта та його розкруткою</p>
                  </div>
                  <div class="card-footer text-muted border-top py-3">
                    <span class="d-inline-block">
                      <a class="text-fiord-blue">#Ucoz</a>
                      <a class="text-fiord-blue" >#CSM Drupa</a><a class="text-fiord-blue">#PHP</a>
                      <a class="text-fiord-blue" >#MySql</a>
                      <a class="text-fiord-blue" >#SEO</a>
                      <a class="text-fiord-blue" >#налаштування-VPS</a>
                      <a class="text-fiord-blue" >#дизайн</a>
                         <a class="text-fiord-blue" >#CSS</a>
                    </span>
                  </div>
                </div>
              </div>
            </div>

              <div class="row">
                  <div class="col">
                      <div class="card card-small mb-4">
                          <div class="card-header border-bottom">
                              <h6 class="m-0">Інші невеликі проекти</h6>
                          </div>
                          <div class="card-body p-0 pb-3 text-center">
                              <table class="table mb-0">
                                  <thead class="bg-light">
                                  <tr>
                                      <th scope="col" class="border-0">Назва</th>
                                      <th scope="col" class="border-0">Короткий опис</th>
                                      <th scope="col" class="border-0">Використані технології</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td><a target="_blank"  href="https://pann.at.ua/">Новини Полтави</a> </td>
                                      <td>Полтавське агентство незалежних новин </td>
                                      <td>ucoz, шаблон, php, css</td>
                                  </tr>
                                  <tr>
                                      <td><a target="_blank"  href="http://web.archive.org/web/20160910230304/http://lustopad.in.ua/">Сайт Палацу Дозвілля "Листопад"</a> </td>
                                      <td>Сайт спочатку на Ucoz потім Drupal, із системою продажі квитків </td>
                                      <td>ucoz, drupal, шаблон, php, css, seo, продажі</td>
                                  </tr>
                                  <tr>
                                      <td><a  target="_blank" href="https://mashkina.at.ua/">Машкіна Тамара Григорівна</a> </td>
                                      <td>Сайт для Тамари Григорівни Машкіної </td>
                                      <td>ucoz, шаблон, php, css</td>
                                  </tr>
                                  <tr>
                                      <td><a target="_blank"  href="https://ememory.at.ua/">Ейдетична пам'ять</a> </td>
                                      <td>Сайт для Тамари Григорівни Машкіної </td>
                                      <td>ucoz, шаблон, php, css</td>
                                  </tr>
                                  <tr>
                                      <td><a target="_blank" href="/images/works/sumka.JPG">Односторінковий продажник</a> </td>
                                      <td>Сайт на PHP для продажі сумочок для мобільних версій</td>
                                      <td>шаблон, php, css, комерція, whatsapp api, telegram api</td>
                                  </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

<?php
include_once "footer.php";

?>