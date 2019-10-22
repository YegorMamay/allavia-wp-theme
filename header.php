<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">

    <meta property="og:locale" content="uk_UA" />
    <meta property="og:locale:alternate" content="uk_UA" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Бронювання та продаж авіаквитків на усі міжнародні та внутрішні рейси" />
    <meta property="og:description" content="Просто повідомте нам ваш напрямок та дату, а ми зекономимо ваш час на пошук зручного та недорогого перельоту">
    <meta property="og:url" content="http://all-avia.com/" />
    <meta property="og:site_name" content="Allavia" />
    <meta property="og:image" content="/wp-content/uploads/allavia-cover.jpg" />
    <meta property="og:image:secure_url" content="/wp-content/uploads/allavia-cover.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="628" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Бронювання та продаж авіаквитків на усі міжнародні та внутрішні рейси" />
    <meta name="twitter:image" content="/wp-content/uploads/allavia-cover.jpg" />

    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/wp-content/themes/allavia-wp-theme/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/wp-content/themes/allavia-wp-theme/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">

<?php wp_body_open(); ?>
    <div class="wrapper">
        <div class="page-header">
            <div class="container container--padding main">
                <div class="row">
                    <header class="page-header__nav js-fixed-nav">
                        <div class="page-header__wrapper">
                            <div class="logo">
                                <span class="logo-link">
                                    <img src="/wp-content/themes/allavia-wp-theme/assets/img/logo.png" alt="Allavia" class="logo-img" width="200" height="50">
                                </span>
                                <span class="logo__sub-title">air tickets</span>
                                <span class="logo__description">All sky of the world</span>
                            </div>

        <?php if (has_nav_menu('main-nav')) { ?>
            <nav class="nav js-menu">
                <button type="button" tabindex="0" class="menu-item-close menu-close js-menu-close"></button>
                <?php wp_nav_menu(array(
                'theme_location' => 'main-nav',
                'container' => false,
                'menu_class' => 'menu-container',
                'menu_id' => '',
                'fallback_cb' => 'wp_page_menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 3
            )); ?>
            </nav>
        <?php } ?>
                            <div class="right-block">
                                <div class="right-block__title">Забронювати переліт через:</div>
                                <a href="#" class="right-block__button">
                                    <div class="right-block__icon-wrapper">
                                        <img class="right-block__icon" src="/wp-content/themes/allavia-wp-theme/assets/img/live_support.svg" alt="support">
                                    </div>
                                    <span class="right-block__button-title">Чат-бот</span>
                                </a>
                                <button type="button" class="right-block__button right-block--mobile js-nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </header>
