<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
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
                                <div class="right-block__title">Забронировать перелет через:</div>
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
