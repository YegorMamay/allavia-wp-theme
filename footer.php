<footer class="footer">
        <div class="container container--padding">
            <div class="footer__top-section">
                <div class="footer__top-caption">
                    <p class="module-section__title h5">Подпишитесь на канал с горячими предложениями</p>
                    <div class="module-section__description">Получайте новости об акциях и скидках самых популярных авиакомпаний</div>
                </div>
                <a href="#" class="footer__top-button">Подписаться на новости</a>
            </div>
        </div>
        <div class="footer__bottom-section">
            <div class="container container--padding">
                <div class="footer__wrapper">
                    <div class="logo">
                    <span class="logo-link">
                        <img src="/wp-content/themes/allavia-wp-theme/assets/img/logo.png" alt="Allavia" class="logo-img" width="200" height="50">
                    </span>
                        <span class="logo__sub-title">air tickets</span>
                    </div>
                    <div class="footer__text">&copy; 2019. Все права защищены.</div>
                    <div class="copyright">
                        <p>Сайт разработан
                            <a href="https://brainworks.pro/" target="_blank">“Brain Works”</a>
                        </p>
                    </div>
                    <div class="right-block">
                        <div class="right-block__title">Забронировать перелет через:</div>
                        <a href="#" class="right-block__button">
                            <div class="right-block__icon-wrapper">
                                <img class="right-block__icon" src="/wp-content/themes/allavia-wp-theme/assets/img/footer_icon.svg" alt="support">
                            </div>
                            <span class="right-block__button-title">Чат-бот</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>



<?php scroll_top(); ?>

<div class="is-hide"><?php svg_sprite(); ?></div>

<?php wp_footer(); ?>

<script>
    (function ($) {

        var fixedMenu = $('.js-fixed-nav');

        $(window).scroll(function () {
            if(window.pageYOffset > 50) {
                fixedMenu.addClass('active');
            } else  {
                fixedMenu.removeClass('active');
            }
        });
    })(jQuery);
</script>

</body>
</html>
