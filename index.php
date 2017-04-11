<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
  <head>
    <meta name="charset" content="<?php bloginfo( 'charset' ); ?>">
    <meta name="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="theme-color" content="">

    <meta name="apple-mobile-web-app-title" content="">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">

    <meta name="og:site_name" content="">
    <meta name="og:title" content="">
    <meta name="og:description" content="">
    <meta name="og:image" content="">
    <meta name="og:url" content="">

    <meta property="place:location:latitude" content="">
    <meta property="place:location:longitude" content="">
    <meta property="business:contact_data:locality" content="">
    <meta property="business:contact_data:country_name" content="">
    <meta property="business:contact_data:email" content="">
    <meta property="business:contact_data:phone_number" content="">
    <meta property="business:contact_data:website" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">

    <title><?php echo wp_get_document_title(); ?></title>
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/css/bundle.css" media="all">

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
    <a href="#" role="button" class="burger js-menu">
      <span class="burger__label">Открыть меню</span>
    </a>
       <!-- popup menu -->
    <div aria-hidden="true" class="popup popup_menu">
      <span class="popup_menu__decor-top">Padana</span>
      <span class="popup_menu__decor-bottom">Чистые помещения</span>
      <span class="popup__close js-menu">
        <span class="popup__close-label">Закрыть</span>
      </span>

      <nav class="popup_menu__nav">
        <ul class="popup_menu__list">
          <li class="popup_menu__item"><a href="#portfolio" class="popup_menu__link js-scroll-to js-menu">Наши проекты</a></li>
          <li class="popup_menu__item"><a href="#clients" class="popup_menu__link js-scroll-to js-menu">Отзывы</a></li>
          <li class="popup_menu__item"><a href="#certificates" class="popup_menu__link js-scroll-to js-menu">Сертификаты</a></li>
          <li class="popup_menu__item"><a href="#scheme" class="popup_menu__link js-scroll-to js-menu">Порядок работы</a></li>
          <li class="popup_menu__item"><a href="#advantages" class="popup_menu__link js-scroll-to js-menu">Преимущества</a></li>
          <li class="popup_menu__item"><a href="#contacts" class="popup_menu__link js-scroll-to js-menu">Контакты</a></li>
        </ul>
      </nav>
    </div>
    <!-- /popup menu -->
    <main role="main">
      <!-- intro -->
      <section id="intro" class="intro block">
        <header class="header"><a href="/" rel="nofollow" class="logo">
          <img src="<?= get_stylesheet_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'site_name' ); ?>" class="logo__img"></a>
          <nav class="menu header__menu">
            <?php wp_nav_menu( array( 'theme_location' => 'main', 'container' => '', 'menu_class' => 'menu__list' ) ); ?>
            <nav class="lang header__lang">
              <a href="#" class="lang__link">It</a>
              <a href="#" class="lang__link lang__link_current">Ru</a>
              <a href="#" class="lang__link">En</a>
            </nav>
          </nav>
          <nav class="callback header__callback">
            <a href="call:<?= get_option( 'site_phone' ); ?>" class="callback__phone"><?= get_option( 'site_phone' ); ?></a>
            <a href="#callback" role="button" class="callback__popup js-popup">Заказать обратный звонок</a>
          </nav>
          <span class="nav__btn-open">Меню</span>
        </header>
        <div class="intro__content">
          <div class="callback intro__callback">
            <a href="call:<?= get_option( 'site_phone' ); ?>" class="callback__phone"><?= get_option( 'site_phone' ); ?></a>
            <a href="#callback" role="button" class="callback__popup js-popup">Заказать обратный звонок</a>
          </div>
          <a href="<?= get_field( 'intro-catalog-file' ); ?>" target="_blank" class="intro__content--catalog">
            <div class="intro__content--catalog-border">
              <div class="intro__content--catalog-inner">
                <img src="<?= get_stylesheet_directory_uri();?>/img/icons/catalog.png" alt="Padana - скачать каталог" class="intro__content--catalog-icon">скачать каталог
              </div>
            </div>
          </a>
          <h3 class="intro__content--title-small">Padana <span class="intro__content--title-small-sub">чистые помещения</span></h3>
          <h1 class="intro__content--title">
            <span class="intro__content--title-sup"><?= get_field( 'intro-title-first' ); ?></span>
            <span class="intro__content--title-sub"><?= get_field( 'intro-title-second' ); ?></span>
          </h1>
          <h2 class="intro__content--subtitle">
            <?= get_field( 'intro-subtitle-first' ); ?>
            <span class="intro__content--subtitle-sub"><?= get_field( 'intro-subtitle-second' ); ?></span>
          </h2>
          <a href="#calculator" role="button" class="intro__content--button js-to-calculator">Рассчитать стоимость</a>
        </div>
        <nav class="lang intro__lang">
          <a href="#" class="lang__link">It</a>
          <a href="#" class="lang__link lang__link_current">Ru</a>
          <a href="#" class="lang__link">En</a>
        </nav>
      </section>
      <!-- /intro -->
      <!-- about -->
      <section id="about" class="about block">
        <h3 class="about__title">
          <span class="about__title--first">Почему отдают </span>
          <span class="about__title--second">предпочтение </span>
          <span class="about__title--third">европейскому </span>
          <span class="about__title--fourth">производителю</span>
        </h3>

        <?php $aboutSlider = get_field( 'about-slider' ); ?>
        <div class="about__slider js-about-slider">

          <?php foreach ( $aboutSlider as $aboutSlide ) : ?>
          <div class="about__slide">
            <div class="about__goodwork">
              <h4 class="about__slide-title">Итальянское производство<br> от Padana:</h4>
              <h5 class="about__slide-subtitle"><?= $aboutSlide['padana-title']; ?></h5>
              <p class="about__slide-desc"><?= $aboutSlide['padana-text']; ?></p>
            </div>
            <!-- <span class="about__slide-decor"></span> -->
            <p class="about__slide-advantage"><?= $aboutSlide['slide-title']; ?></p>
            <div class="about__badwork">
              <h4 class="about__slide-title">Производители<br> Китая и РФ:</h4>
              <h5 class="about__slide-subtitle"><?= $aboutSlide['china-title']; ?></h5>
              <p class="about__slide-desc"><?= $aboutSlide['china-text']; ?></p>
            </div>
          </div>
          <?php endforeach; ?>

        </div>
        <nav class="about__slider-nav js-about-nav">
          <ul class="about__slider-nav-list">

          <?php $aboutSlider = get_field( 'about-slider' ); ?>
              <?php $i = 1; ?>
              <?php foreach ( $aboutSlider as $aboutSlide ) : ?>
              <?php if($i == 1) : ?>
              <li class="about__slider-nav-item">
                <p class="about__slider-nav-item-dscr about__slider-nav-item_active"><?= $aboutSlide['slide-title']; ?></p>
                <a href=<?= "#" . $i++ . "-about-pop-up" ?> class="js-about-open about__slider-nav-item-href">Узнать больше</a> </li>
              </li>
            <?php else : ?>
              <li class="about__slider-nav-item">
                <p class="about__slider-nav-item-dscr"><?= $aboutSlide['slide-title']; ?></p>
                <a href=<?= "#" . $i++ . "-about-pop-up" ?> class="js-about-open about__slider-nav-item-href">Узнать больше</a> </li>
              </li>
            <?php endif ?>
          <?php endforeach; ?>

<!--             <li class="about__slider-nav-item about__slider-nav-item_active"><p class="about__slider-nav-item-dscr">качество</p><a class="js-about-open about__slider-nav-item-href">Узнать больше >></a></li>
            <li class="about__slider-nav-item">
              <p class="about__slider-nav-item-dscr">комплектующие</p> 
              <a class="js-about-open about__slider-nav-item-href">Узнать больше >></a></li>
            <li class="about__slider-nav-item"><p class="about__slider-nav-item-dscr">монтаж</p><a class="js-about-open about__slider-nav-item-href">Узнать больше >></a> </li>
            <li class="about__slider-nav-item"><p class="about__slider-nav-item-dscr">сертификаты</p> <a class="js-about-open about__slider-nav-item-href">Узнать больше >></a></li>
            <li class="about__slider-nav-item"><p class="about__slider-nav-item-dscr">обратная связь</p> <a class="js-about-open about__slider-nav-item-href">Узнать больше >></a></li>
            <li class="about__slider-nav-item">
              <p class="about__slider-nav-item-dscr">внешний вид</p>
              <a class="js-about-open about__slider-nav-item-href">Узнать больше >></a> </li>
          -->

          </ul>
        </nav>


        <?php $aboutSlider = get_field( 'about-slider' ); ?>
          <?php $i = 1; ?>
          <?php foreach ( $aboutSlider as $aboutSlide ) : ?>
          <div id=<?=  $i++ . "-about-pop-up" ?> class="about__pop-up">
            <h4 class="about__pop-up-title"><?= $aboutSlide['slide-title']; ?></h5>
            <p class="about__pop-up-dscr"><?= $aboutSlide['padana-text']; ?></p>
            <span  class="js-pop-up-close about__pop-up-close">Закрыть</span>
          </div>
          <?php endforeach; ?>

       <!--    <ul class="about__list">
         <li class="about__item">
           <p class="about__item-dscr">качество</p>
           <a class="js-about-open about__item-href">Узнать больше >></a>
         </li>
         <li class="about__item">
           <p class="about__item-dscr">комплектующие</p>
           <a class="js-about-open about__item-href">Узнать больше >></a>
         </li>
         <li class="about__item">
           <p class="about__item-dscr">монтаж</p>
           <a class="js-about-open about__item-href">Узнать больше >></a>
         </li>
         <li class="about__item">
           <p class="about__item-dscr">сертификаты</p>
           <a class="js-about-open about__item-href">Узнать больше >></a>
         </li>
         <li class="about__item">
           <p class="about__item-dscr">обратная связь</p>
           <a class="js-about-open about__item-href">Узнать больше >></a>
         </li>
         <li class="about__item">
           <p class="about__item-dscr">внешний вид</p>
           <a class="js-about-open about__item-href">Узнать больше >></a>
         </li>
       </ul>
        -->

      </section>
      <!-- /about -->
      <!-- portfolio -->
      <section id="portfolio" class="portfolio block">
        <h3 class="portfolio__title">
          <span class="portfolio__title-first">Более </span>
          <span class="portfolio__title-second">260 </span>
          <span class="portfolio__title-third">реализованных проектов </span>
          <span class="portfolio__title-fourth">за 30 лет работы</span>
        </h3>
      
        <?php $portfolioSlider = get_field( 'portfolio-slider' ); ?>
        <div class="portfolio__slider js-portfolio-slider">
      
          <?php foreach ( $portfolioSlider as $portfolioSlide ) : ?>
          <article class="portfolio__slide">
            <h3 class="portfolio__slide-title"><?= $portfolioSlide['title']; ?></h3>
            <p class="portfolio__slide-square"><?= $portfolioSlide['area']; ?> м2</p>
            <img src="<?= $portfolioSlide['photo']; ?>" alt="Padana - работа для <?= $portfolioSlide['title']; ?>" class="portfolio__slide-photo">
            <div class="portfolio__slide-info">
              <p class="portfolio__slide-name"><?= $portfolioSlide['title']; ?></p>
              <h4 class="portfolio__slide-subtitle"><?= $portfolioSlide['subtitle']; ?></h4>
              <dl class="portfolio__slide-params">
                <div class="portfolio__slide-param">
                  <dt class="portfolio__slide-param-name">Страна:</dt>
                  <dd class="portfolio__slide-param-value"><?= $portfolioSlide['country']; ?></dd>
                </div>
                <div class="portfolio__slide-param">
                  <dt class="portfolio__slide-param-name">Площадь работ:</dt>
                  <dd class="portfolio__slide-param-value"><?= $portfolioSlide['area']; ?> м2</dd>
                </div>
              </dl>
            </div>
          </article>
          <?php endforeach; ?>
      
        </div>
        <a href="#callback" role="button" class="portfolio__button button js-popup">Обсудить свой проект</a>
      </section>
      <!-- /portfolio -->
      <!-- advantages -->
      <section id="advantages" class="advantages block">
        <h3 class="advantages__title">
          <span class="advantages__title-first">Преимущества </span>
          <span class="advantages__title-second">работы с "Padana"</span>
        </h3>
      
        <?php $advantages = get_field( 'advantages-list' ); ?>
        <div role="list" class="advantages__list">
      
          <?php foreach ( $advantages as $advantage ) : ?>
          <strong role="listitem" class="advantages__item"> 
            <p class="advantages__item-text"><?= $advantage['text']; ?></p>
          </strong>
          <?php endforeach; ?>
      
        </div>
        <a href="https://www.youtube.com/watch?v=_rPi9nPnJ80" role="button" class="advantages__video js-video"><span class="advantages__video-first">Посмотрите </span>видео о "Padana"</a>
      </section>
      <!-- /advantages -->
      <!-- order-1 -->
      <div id="order-1" class="order block">
        <section class="order__content">
          <h3 class="order__title">
            <span class="order__title-first">Оставьте заявку, и </span>
            <span class="order__title-second">мы свяжемся с<br> вами за 7 минут</span>
          </h3>
          <h4 class="order__subtitle">
            <span class="order__subtitle-years">30 </span>
            <span class="order__subtitle-desc">лет успешной<br> работы уже за<br> плечами</span>
          </h4>
          <form action="#" method="POST" class="form order__form">
            <input type="text" placeholder="Как к Вам обращаться?" class="form__input">
            <input type="tel" placeholder="Куда нам перезвонить?" class="form__input">
            <input type="email" placeholder="Введите Ваш email" class="form__input">
            <button type="submit" class="form__submit button">Свяжитесь со мной</button>
          </form>
        </section>
      </div>
      <!-- /order-1 -->
      <!-- certificates -->
      <section id="certificates" class="certificates block">
       <h3 class="certificates__title">
         <span class="certificates__title-first">Сертификаты ЕС </span>
         <span class="certificates__title-second">и 8 других стран, </span>
         <span class="certificates__title-third">подтверждающие качество качество продукции во всем мире</span>
       </h3>
     
       <?php $certificates = get_field( 'certificates-list' ); ?>
       <div class="certificates__list js-certificates-slider">
     
         <?php foreach ( $certificates as $certificate ) : ?>
         <a href="#" role="button" class="certificates__item">
           <img src="<?= $certificate['img']; ?>" alt="Сертификат Padana" class="certificates__item-img">
         </a>
         <?php endforeach; ?>
     
       </div>
     </section>
      <!-- /certificates -->
      <!-- clients -->
      <section id="clients" class="clients block">
        <span class="clients__decor-text">
          <span class="clients__decor-text-first">Мнения </span>
          <span class="clients__decor-text-second">клиентов</span>
        </span>
        <h3 class="clients__title">
          <span class="clients__title-first">Мнения клиентов, </span>
          <span class="clients__title-second">сэкономивших с нами более <strong class="clients__title-sum">54 млн. евро </strong>и тысячи часов личного времени</span>
        </h3>
        <div role="list" class="clients__list js-clients-slider">
          <div class="clients__slide">
            <article role="listitem" class="clients__single">
              <h5 class="clients__single-title">ООО "Abbott"</h5>
              <dl class="clients__single-params">
                <div class="clients__single-param">
                  <dt class="clients__single-param-name">Площадь работ:</dt>
                  <dd class="clients__single-param-value">2 400 м2</dd>
                </div>
              </dl>
              <div class="clients__single-scroller"><img src="<?= get_stylesheet_directory_uri(); ?>/img/clients/abbott.jpg" alt="Отзыв клиента Abbott" class="clients__single-photo"></div><a href="#" class="clients__single-contact">Узнать контакты клиента для связи</a>
            </article>
            <article role="listitem" class="clients__single">
              <h5 class="clients__single-title">ООО "Abbott"</h5>
              <dl class="clients__single-params">
                <div class="clients__single-param">
                  <dt class="clients__single-param-name">Площадь работ:</dt>
                  <dd class="clients__single-param-value">2 400 м2</dd>
                </div>
              </dl>
              <div class="clients__single-scroller"><img src="<?= get_stylesheet_directory_uri(); ?>/img/clients/abbott.jpg" alt="Отзыв клиента Abbott" class="clients__single-photo"></div><a href="#" class="clients__single-contact">Узнать контакты клиента для связи</a>
            </article>
          </div>
          <div class="clients__slide">
            <article role="listitem" class="clients__single">
              <h5 class="clients__single-title">ООО "Abbott2"</h5>
              <dl class="clients__single-params">
                <div class="clients__single-param">
                  <dt class="clients__single-param-name">Площадь работ:</dt>
                  <dd class="clients__single-param-value">2 400 м2</dd>
                </div>
              </dl>
              <div class="clients__single-scroller"><img src="<?= get_stylesheet_directory_uri(); ?>/img/clients/abbott.jpg" alt="Отзыв клиента Abbott" class="clients__single-photo"></div><a href="#" class="clients__single-contact">Узнать контакты клиента для связи</a>
            </article>
            <article role="listitem" class="clients__single">
              <h5 class="clients__single-title">ООО "Abbott2"</h5>
              <dl class="clients__single-params">
                <div class="clients__single-param">
                  <dt class="clients__single-param-name">Площадь работ:</dt>
                  <dd class="clients__single-param-value">2 400 м2</dd>
                </div>
              </dl>
              <div class="clients__single-scroller"><img src="<?= get_stylesheet_directory_uri(); ?>/img/clients/abbott.jpg" alt="Отзыв клиента Abbott" class="clients__single-photo"></div><a href="#" class="clients__single-contact">Узнать контакты клиента для связи</a>
            </article>
          </div>
          <div class="clients__slide">
            <article role="listitem" class="clients__single">
              <h5 class="clients__single-title">ООО "Abbott3"</h5>
              <dl class="clients__single-params">
                <div class="clients__single-param">
                  <dt class="clients__single-param-name">Площадь работ:</dt>
                  <dd class="clients__single-param-value">2 400 м2</dd>
                </div>
              </dl>
              <div class="clients__single-scroller"><img src="<?= get_stylesheet_directory_uri(); ?>/img/clients/abbott.jpg" alt="Отзыв клиента Abbott" class="clients__single-photo"></div><a href="#" class="clients__single-contact">Узнать контакты клиента для связи</a>
            </article>
            <article role="listitem" class="clients__single">
              <h5 class="clients__single-title">ООО "Abbott3"</h5>
              <dl class="clients__single-params">
                <div class="clients__single-param">
                  <dt class="clients__single-param-name">Площадь работ:</dt>
                  <dd class="clients__single-param-value">2 400 м2</dd>
                </div>
              </dl>
              <div class="clients__single-scroller"><img src="<?= get_stylesheet_directory_uri(); ?>/img/clients/abbott.jpg" alt="Отзыв клиента Abbott" class="clients__single-photo"></div><a href="#" class="clients__single-contact">Узнать контакты клиента для связи</a>
            </article>
          </div>
          <div class="clients__slide">
            <article role="listitem" class="clients__single">
              <h5 class="clients__single-title">ООО "Abbott4"</h5>
              <dl class="clients__single-params">
                <div class="clients__single-param">
                  <dt class="clients__single-param-name">Площадь работ:</dt>
                  <dd class="clients__single-param-value">2 400 м2</dd>
                </div>
              </dl>
              <div class="clients__single-scroller"><img src="<?= get_stylesheet_directory_uri(); ?>/img/clients/abbott.jpg" alt="Отзыв клиента Abbott" class="clients__single-photo"></div><a href="#" class="clients__single-contact">Узнать контакты клиента для связи</a>
            </article>
            <article role="listitem" class="clients__single">
              <h5 class="clients__single-title">ООО "Abbott4"</h5>
              <dl class="clients__single-params">
                <div class="clients__single-param">
                  <dt class="clients__single-param-name">Площадь работ:</dt>
                  <dd class="clients__single-param-value">2 400 м2</dd>
                </div>
              </dl>
              <div class="clients__single-scroller"><img src="<?= get_stylesheet_directory_uri(); ?>/img/clients/abbott.jpg" alt="Отзыв клиента Abbott" class="clients__single-photo"></div><a href="#" class="clients__single-contact">Узнать контакты клиента для связи</a>
            </article>
          </div>
          <div class="clients__slide">
            <article role="listitem" class="clients__single">
              <h5 class="clients__single-title">ООО "Abbott5"</h5>
              <dl class="clients__single-params">
                <div class="clients__single-param">
                  <dt class="clients__single-param-name">Площадь работ:</dt>
                  <dd class="clients__single-param-value">2 400 м2</dd>
                </div>
              </dl>
              <div class="clients__single-scroller"><img src="<?= get_stylesheet_directory_uri(); ?>/img/clients/abbott.jpg" alt="Отзыв клиента Abbott" class="clients__single-photo"></div><a href="#" class="clients__single-contact">Узнать контакты клиента для связи</a>
            </article>
            <article role="listitem" class="clients__single">
              <h5 class="clients__single-title">ООО "Abbott5"</h5>
              <dl class="clients__single-params">
                <div class="clients__single-param">
                  <dt class="clients__single-param-name">Площадь работ:</dt>
                  <dd class="clients__single-param-value">2 400 м2</dd>
                </div>
              </dl>
              <div class="clients__single-scroller"><img src="<?= get_stylesheet_directory_uri(); ?>/img/clients/abbott.jpg" alt="Отзыв клиента Abbott" class="clients__single-photo"></div><a href="#" class="clients__single-contact">Узнать контакты клиента для связи</a>
            </article>
          </div>
        </div>
        <a href="#" role="button" class="clients__button button js-clients-more">Показать еще 106 отзывов</a>
      </section>
      <!-- /clients -->
      <!-- calculator -->
      <section id="calculator" class="calculator block">
        <h3 class="calculator__title">
          <span class="calculator__title-first">Рассчитайте стоимость </span>
          <span class="calculator__title-second">конструкций для простого чистого помещения</span>
        </h3>
        <div class="calculator__content">
          <form action="order.php" method="POST" class="form calculator__form">
            <input type="text" placeholder="Введите площадь помещения (м2)" class="form__input">
            <input type="text" placeholder="Введите высоту помещения (м)" class="form__input">
            <input type="text" placeholder="Количество дверей (шт)" class="form__input">
            <input type="text" placeholder="Количество окон (шт)" class="form__input">
            <div class="form__checkbox-single">
              <input id="option-1" type="checkbox" name="options[]" value="Передаточное окно" class="form__checkbox">
              <label for="option-1" class="form__label">Передаточное окно</label>
            </div>
            <div class="form__checkbox-single">
              <input id="option-2" type="checkbox" name="options[]" value="Тамбурный шлюз" class="form__checkbox">
              <label for="option-2" class="form__label">Тамбурный шлюз</label>
            </div>
            <div class="form__group form__group-delivery"><strong class="form__group-title">Доставка конструкции в:</strong>
              <div class="form__radio-single">
                <input id="delivery-1" type="radio" name="delivery" value="Запад России" checked class="form__radio">
                <label for="delivery-1" class="form__label">Запад России</label>
              </div>
              <div class="form__radio-single">
                <input id="delivery-2" type="radio" name="delivery" value="Центр России" class="form__radio">
                <label for="delivery-2" class="form__label">Центр России</label>
              </div>
              <div class="form__radio-single">
                <input id="delivery-3" type="radio" name="delivery" value="Урал" class="form__radio">
                <label for="delivery-3" class="form__label">Урал</label>
              </div>
              <div class="form__radio-single">
                <input id="delivery-4" type="radio" name="delivery" value="Сибирь" class="form__radio">
                <label for="delivery-4" class="form__label">Сибирь</label>
              </div>
              <div class="form__radio-single">
                <input id="delivery-5" type="radio" name="delivery" value="Дальний восток" class="form__radio">
                <label for="delivery-5" class="form__label">Дальний восток</label>
              </div>
            </div>
            <button type="submit" class="form__submit button">Рассчитать стоимость</button>
          </form>
          <div class="calculator__content-checkout js-checkout js-checkout-empty">
            <p aria-hidden="false" class="calculator__content-checkout-title js-checkout-title">Здесь будет рассчитана стоимость </p>
            <p aria-hidden="false" class="calculator__content-checkout-subtitle js-checkout-title">простого чистого помещения по вашим данным</p>
          </div>
        </div>
        <a href="#" class="calculator__get-list js-popup">Скачать перечень необходимых элементов конструкции по Вашему запросу</a>
      </section>
      <!-- /calculator -->
      <!-- scheme -->
      <section id="scheme" class="scheme block">
        <h3 class="scheme__title">
          <span class="scheme__title-first">Порядок работы </span>
          <span class="scheme__title-second">Порядок работы с нами:</span>
        </h3>
      
        <?php $steps = get_field( 'scheme-list' ); $i = 0; ?>
        <div role="list" class="scheme__steps">
      
          <?php foreach ( $steps as $step ) : $i++; ?>
          <div role="listitem" class="scheme__step advantages__item">
            <div class="scheme__step-text advantages__item-text">
              <?= $step['text']; ?>
      
              <?php if ( $i == 1 ) : ?>
                <a href="#" role="button" class="scheme__step-button js-popup">Заказать звонок</a>
              <?php endif; ?>
      
            </div>
          </div>
          <?php endforeach; ?>
      
        </div>
      </section>
      <!-- /scheme -->
      <!-- faq -->
      <section id="faq" class="faq block">
        <h3 class="faq__title">
          <span class="faq__title-first">Ответы на наиболее </span>
          <span class="faq__title-second">волнующие вопросы</span>
        </h3>
        <div class="faq__content">

          <?php $faq = get_field( 'faq-list' ); $i = 0; $j = 0; ?>
          <div role="list" class="faq__questions">

            <?php foreach ( $faq as $question ) : $i++; ?>
            <div id="question-<?= $i; ?>" role="listitem" aria-controls="answer-<?= $i; ?>" class="faq__question js-faq <?= ( $i == 1 ) ? 'faq__question_active' : ''; ?>">
              <p class="faq__question-text"><?= $question['question']; ?></p>
              <span class="faq__question-to-answer">Наш ответ</span>
              <span class="faq__question-arrow"></span>
            </div>
            <?php endforeach; ?>

          </div>

          <div role="list" class="faq__answers">
            <?php foreach ( $faq as $answer ) : $j++; ?>
            <div id="answer-<?= $j; ?>" role="listitem" aria-hidden="<?= ( $j == 1 ) ? 'false' : 'true'; ?>" aria-labelledby="question-<?= $j; ?>" class="faq__answer <?= ( $j == 1 ) ? 'faq__answer_active' : ''; ?>">
              <strong class="faq__answer-title"><?= $answer['question']; ?></strong>
              <p class="faq__answer-text">
                <span class="faq__answer-label">Наш ответ: </span>
                <?= $answer['answer']; ?>
              </p>
            </div>
            <?php endforeach; ?>

          </div>
        </div>
      </section>
      <!-- /faq -->
      <!-- director -->
      <div id="director" class="director block">
       <img src="<?= get_stylesheet_directory_uri(); ?>/img/director.png" alt="Генеральный директор Padana Maria Angelo Rossi" class="director__photo">
       <section class="director__content">
         <h3 class="director__title">
           <span class="director__title-first">Лично от </span>
           <span class="director__title-second">генерального директора </span>
           <span class="director__title-third">"Padana" </span>
           <span class="director__title-fourth">Mario Angelo Rossi</span>
         </h3>
         <blockquote class="director__cite-it"><?= get_field( 'director-text-it' ); ?></blockquote>
         <blockquote class="director__cite-ru"><?= get_field( 'director-text-ru' ); ?></blockquote>
         <div class="director__info">
           <p class="director__info-name">Mario Angelo Rossi</p>
           <p class="director__info-post">генеральный директор ООО "Padana"</p>
         </div>
         <img src="<?= get_stylesheet_directory_uri(); ?>/img/signature.png" alt="Mario Angelo Rossi" class="director__sign">
       </section>
     </div>
      <!-- /director -->
      <!-- order-2 -->
      <section id="order-2" class="order2 block">
        <h3 class="order2__title">
          <span class="order2__title-first">Не нашли ответа<br> на свой вопрос? </span>
          <span class="order2__title-second">Задайте его лично<br> Mario Angelo Rossi</span>
        </h3>
        <form action="#" method="POST" class="form order2__form">
          <input type="text" placeholder="Как к Вам обращаться?" class="form__input">
          <input type="tel" placeholder="Куда нам перезвонить?" class="form__input">
          <input type="email" placeholder="Введите Ваш email" class="form__input">
          <textarea placeholder="Задайте Ваш вопрос генеральному директору «Padana»:" class="form__textarea"></textarea>
          <button type="submit" class="form__submit button">Задать свой вопрос</button>
        </form>
      </section>
      <!-- /order-2 -->
      <!-- contacts -->
      <section id="contacts" class="contacts block">
        <span class="contacts__decor-text">
          <span class="contacts__decor-text-first">Контактная </span>
          <span class="contacts__decor-text-second">информация</span>
        </span>
        <h4 class="contacts__title">Контактная информация</h4>
        <div class="contacts__info">
          <div class="contacts__info-russia">
            <h5 class="contacts__info-country">Россия:</h5>
            <a href="tel:<?= get_field( 'contacts-russia-phone' ); ?>" class="contacts__info-phone"><?= get_field( 'contacts-russia-phone' ); ?></a>
            <a href="mailto:<?= get_field( 'contacts-russia-email' ); ?>" class="contacts__info-email"><?= get_field( 'contacts-russia-email' ); ?></a>
            <address class="contacts__info-address"><?= get_field( 'contacts-russia-address' ); ?></address>
          </div>
          <div class="contacts__info-italy">
            <h5 class="contacts__info-country">Италия:</h5>
            <a href="tel:<?= get_field( 'contacts-italy-phone' ); ?>" class="contacts__info-phone"><?= get_field( 'contacts-italy-phone' ); ?></a>
            <a href="mailto:<?= get_field( 'contacts-italy-email' ); ?>" class="contacts__info-email"><?= get_field( 'contacts-italy-email' ); ?></a>
            <address class="contacts__info-address"><?= get_field( 'contacts-italy-address' ); ?></address>
          </div>
        </div><a href="#callback" role="button" class="contacts__button button js-popup">Свяжитесь со мной</a><small class="contacts__copyrights">(с) 2017 Все права защищены<br> Любое копирование материалов запрещено</small>
      </section>
      <!--/contacts -->
    </main>
    <!-- scripts -->
    <?php wp_footer(); ?>
    <script src="<?= get_stylesheet_directory_uri(); ?>/js/jquery-1.12.4.min.js"></script>
    <script src="<?= get_stylesheet_directory_uri(); ?>/js/bundle.js"></script>
    <!-- /scripts -->
  </body>
</html>