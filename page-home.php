<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>


<?php get_template_part('loops/content', 'home'); ?>

<div class="top-section custom-line">
    <div class="custom-line__description">Главная</div>
    <div class="top-section__column-left">
        <h1 class="top-section__main-title h4">Бронирование и продажа авиабилетов на все международные и внутренние рейсы!</h1>
        <p class="top-section__sub-title">Обслуживание корпоративных и индивидуальных клиентов.</p>
        <div class="top-section__description">Просто сообщите нам направление и дату, и мы сэкономим ваше время на поиски удобного и недорого перелета.</div>
        <button type="button" class="top-section__button">Получить консультацию</button>
        <div class="top-section__row">
            <div class="top-section__bottom-description">
                Наша компания была основана в 2009 году.
                Мы специализируемся на бронировании и
                продаже авиабилетов на все международные
                и внутренние рейсы.
            </div>
            <div class="top-section__bottom-description">
                Наши сотрудники прошли специальное
                обучение и имеют большой (более 15 лет)
                опыт работы в сфере продаж авиабилетов.
            </div>
        </div>
    </div>
    <div class="top-section__column-right">
        <div class="top-section__item">
            <p class="top-section__right-title h4">24/7</p>
            <div class="top-section__right-sub-title">поддержка клиентов</div>
        </div>
        <div class="top-section__item">
            <p class="top-section__right-title h4">2009</p>
            <div class="top-section__right-sub-title">год основания</div>
        </div>
        <div class="top-section__item">
            <p class="top-section__right-title h4">10+</p>
            <div class="top-section__right-sub-title">
                лет работы с<br>
                корпоративными<br>
                клиентами
            </div>
        </div>
    </div>
    <div class="info-section">
        <div class="info-section__phones">
            <i class="fas fa-phone-square info-section__icon"></i>
            <?php echo do_shortcode('[bw-phone]'); ?>
        </div>
        <?php echo do_shortcode('[bw-social]'); ?>
    </div>
</div>
</div>
</div>
</div>
<div class="content" id="content">
    <div class="module-overlay" id="benefits">
        <div class="container container--padding">
            <div class="row">
                <div class="module-section custom-line">
                    <div class="custom-line__description">Преимущетсва</div>
                    <p class="module-section__title h5">Наши ключевые преимущества</p>
                    <div class="module-section__description">Доверьте решение ваших вопросов профессионалам</div>
                    <div class="module-section__wrapper">
                        <div class="module-section__item item-5">
                            <p class="module-section__item-title sm-centered">Индивидуальный подход<br> к каждому клиенту</p>
                            <div class="module-section__counter">01</div>
                        </div>
                        <div class="module-section__item item-5">
                            <p class="module-section__item-title sm-centered">Оперативная обработка<br> запросов</p>
                            <div class="module-section__counter">02</div>
                        </div>
                        <div class="module-section__item item-5">
                            <p class="module-section__item-title sm-centered">Умение правильно<br> подобрать перелеты</p>
                            <div class="module-section__counter">03</div>
                        </div>
                        <div class="module-section__item item-5">
                            <p class="module-section__item-title sm-centered">Круглосуточная<br> поддержка</p>
                            <div class="module-section__counter">04</div>
                        </div>
                        <div class="module-section__item item-5">
                            <p class="module-section__item-title sm-centered">Помощь в онлайн<br> регистрации</p>
                            <div class="module-section__counter">05</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="module-overlay" id="services">
        <div class="container container--padding">
            <div class="row">
                <div class="module-section custom-line">
                    <div class="custom-line__description">Услуги</div>
                    <p class="module-section__title h5">Наши услуги</p>
                    <div class="module-section__description">Сделав выбор в пользу нашей компании, вам не нужно ни о чем беспокоится</div>
                    <div class="module-section__wrapper">
                        <div class="module-section__item item-3">
                            <div class="module-section__icon">
                                <img class="module-section__image" src="/wp-content/themes/allavia-wp-theme/assets/img/resource.svg" alt="icon">
                            </div>
                            <div class="module-section__caption">
                                <p class="module-section__item-title">Бронирование групп</p>
                           <!--      <a href="#" class="module-section__link">Подробнее <i class="module-section__arrow fas fa-long-arrow-alt-right"></i></a> -->
                            </div>
                        </div>
                        <div class="module-section__item item-3">
                            <div class="module-section__icon">
                                <img class="module-section__image" src="/wp-content/themes/allavia-wp-theme/assets/img/seat.svg" alt="icon">
                            </div>
                            <div class="module-section__caption">
                                <p class="module-section__item-title">Заказ спецобслуживания на борту</p>
                           <!--      <a href="#" class="module-section__link">Подробнее <i class="module-section__arrow fas fa-long-arrow-alt-right"></i></a> -->
                            </div>
                        </div>
                        <div class="module-section__item item-3">
                            <div class="module-section__icon">
                                <img class="module-section__image" src="/wp-content/themes/allavia-wp-theme/assets/img/customer-service.svg" alt="icon">
                            </div>
                            <div class="module-section__caption">
                                <p class="module-section__item-title">Заказ VIP–обслуживания в аэропорту</p>
                             <!--    <a href="#" class="module-section__link">Подробнее <i class="module-section__arrow fas fa-long-arrow-alt-right"></i></a> -->
                            </div>
                        </div>
                        <div class="module-section__item item-3">
                            <div class="module-section__icon">
                                <img class="module-section__image" src="/wp-content/themes/allavia-wp-theme/assets/img/order.svg" alt="icon">
                            </div>
                            <div class="module-section__caption">
                                <p class="module-section__item-title">Оформление страховых полисов</p>
                             <!--    <a href="#" class="module-section__link">Подробнее <i class="module-section__arrow fas fa-long-arrow-alt-right"></i></a> -->
                            </div>
                        </div>
                        <div class="module-section__item item-3">
                            <div class="module-section__icon">
                                <img class="module-section__image" src="/wp-content/themes/allavia-wp-theme/assets/img/customer-service_24.svg" alt="icon">
                            </div>
                            <div class="module-section__caption">
                                <p class="module-section__item-title">Онлайн регистрация на рейс</p>
                           <!--      <a href="#" class="module-section__link">Подробнее <i class="module-section__arrow fas fa-long-arrow-alt-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="module-overlay" id="help">
        <div class="container container--padding">
            <div class="row">
                <div class="module-section custom-line">
                    <div class="custom-line__description">Помощь</div>
                    <p class="module-section__title h5">Как получить помощь в выборе перелета</p>
                    <div class="module-section__description">Обратитесь в онлайн-чат или по телефону, и Вам предоставят качественную консультацию</div>
                    <div class="module-section__wrapper">
                        <div class="module-section__item item-4">
                            <div class="module-section__icon-round">
                                <img class="module-section__image" src="/wp-content/themes/allavia-wp-theme/assets/img/call-center.svg" alt="icon">
                                <div class="module-section__round-count">01</div>
                            </div>
                            <div class="module-section__caption text-center">
                                <p class="module-section__item-title">Рассмотрите предложенные<br> менеджером варианты</p>
                            </div>
                        </div>
                        <div class="module-section__item item-4">
                            <div class="module-section__icon-round">
                                <img class="module-section__image" src="/wp-content/themes/allavia-wp-theme/assets/img/boarding.svg" alt="icon">
                                <div class="module-section__round-count">02</div>
                            </div>
                            <div class="module-section__caption text-center">
                                <p class="module-section__item-title">
                                    Выберете и забронируйте<br>
                                    наиболее подходящий<br>
                                    вариант
                                </p>
                            </div>
                        </div>
                        <div class="module-section__item item-4">
                            <div class="module-section__icon-round">
                                <img class="module-section__image" src="/wp-content/themes/allavia-wp-theme/assets/img/mobile.svg" alt="icon">
                                <div class="module-section__round-count">03</div>
                            </div>
                            <div class="module-section__caption text-center">
                                <p class="module-section__item-title">
                                    Оплатите удобным для<br>
                                    вас способом
                                </p>
                              <!--   <a href="#" class="module-section__link">Подробнее <i class="module-section__arrow fas fa-long-arrow-alt-right"></i></a> -->
                            </div>
                        </div>
                        <div class="module-section__item item-4">
                            <div class="module-section__icon-round">
                                <img class="module-section__image" src="/wp-content/themes/allavia-wp-theme/assets/img/coupon.svg" alt="icon">
                                <div class="module-section__round-count">04</div>
                            </div>
                            <div class="module-section__caption text-center">
                                <p class="module-section__item-title">
                                    Получите билет удобны<br>
                                    для вас способом
                                </p>
                            </div>
                        </div>
                    </div>
                    <button class="module-section__button" type="button">Получить помощь</button>
                </div>
            </div>
        </div>
    </div>
    <div class="module-overlay">
        <div class="container container--padding">
            <div class="row">
                <div class="module-section custom-line custom-line--offset">
                    <div class="custom-line__description">Клиенты</div>
                    <p class="module-section__title h5">Наши клиенты</p>
                    <div class="sp-xs-8"></div>
                    <div class="sp-xs-8"></div>
                    <?php echo do_shortcode('[show-logos]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php get_footer(); ?>
