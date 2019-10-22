<?php

/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>


<?php get_template_part('loops/content', 'home'); ?>

<div class="top-section custom-line">
    <div class="custom-line__description"><?php the_field('sn_block_name_1'); ?></div>
    <div class="top-section__column-left">
        <h1 class="top-section__main-title h4"><?php the_field('sn_first_block_title'); ?></h1>
        <p class="top-section__sub-title"><?php the_field('sn_first_block_desc'); ?></p>
        <div class="top-section__description"><?php the_field('sn_first_block_text'); ?></div>
        <button type="button" class="top-section__button">Отримати консультацію</button>
        <div class="top-section__row">
            <div class="top-section__bottom-description">
                <?php the_field('sn_first_block_text_desc_1'); ?>
            </div>
            <div class="top-section__bottom-description">
                <?php the_field('sn_first_block_text_desc_2'); ?>
            </div>
        </div>
    </div>

    <?php if (have_rows('sn_first_block_priorities')) : ?>
        <div class="top-section__column-right">
            <?php while (have_rows('sn_first_block_priorities')) : the_row(); ?>
                <div class="top-section__item">
                    <p class="top-section__right-title h4"><?php the_sub_field('sn_first_block_priorities_cunt'); ?></p>
                    <div class="top-section__right-sub-title"> <?php the_sub_field('sn_first_block_priorities_text'); ?></div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

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
                    <div class="custom-line__description"><?php the_field('sn_block_name_2'); ?></div>
                    <p class="module-section__title h5"><?php the_field('sn_tow_block_title'); ?></p>
                    <div class="module-section__description"><?php the_field('sn_tow_block_desc'); ?></div>

                    <?php if (have_rows('sn_tow_block_advantage')) : ?>
                        <div class="module-section__wrapper">
                            <?php $cunt_advant = 0; ?>
                            <?php while (have_rows('sn_tow_block_advantage')) : the_row(); ?>
                                <div class="module-section__item item-5">
                                    <p class="module-section__item-title sm-centered"><?php the_sub_field('sn_tow_block_advantage_text'); ?></p>
                                    <div class="module-section__counter">0<?php echo ++$cunt_advant ?></div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="module-overlay" id="services">
        <div class="container container--padding">
            <div class="row">
                <div class="module-section custom-line">
                    <div class="custom-line__description"><?php the_field('sn_block_name_3'); ?></div>
                    <p class="module-section__title h5"><?php the_field('sn_tree_block_title'); ?></p>
                    <div class="module-section__description"><?php the_field('sn_tree_block_desc'); ?></div>

                    <?php if (have_rows('sn_tree_block_services')) : ?>
                        <div class="module-section__wrapper">
                            <?php while (have_rows('sn_tree_block_services')) : the_row(); ?>
                                <div class="module-section__item item-3">
                                    <div class="module-section__icon">
                                        <img class="module-section__image" src="<?php the_sub_field('sn_tree_block_service_icon'); ?>" alt="icon">
                                    </div>
                                    <div class="module-section__caption">
                                        <p class="module-section__item-title"><?php the_sub_field('sn_tree_block_service_text'); ?></p>
                                        <!--      <a href="#" class="module-section__link">Подробнее <i class="module-section__arrow fas fa-long-arrow-alt-right"></i></a> -->
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="module-overlay" id="help">
        <div class="container container--padding">
            <div class="row">
                <div class="module-section custom-line">
                    <div class="custom-line__description"><?php the_field('sn_block_name_4'); ?></div>
                    <p class="module-section__title h5"><?php the_field('sn_four_block_title'); ?></p>
                    <div class="module-section__description"><?php the_field('sn_four_block_desc'); ?></div>

                    <?php if (have_rows('sn_four_block_hellps')) : ?>
                        <div class="module-section__wrapper">
                            <?php $cunt_advant = 0; ?>
                            <?php while (have_rows('sn_four_block_hellps')) : the_row(); ?>
                                <div class="module-section__item item-4">
                                    <div class="module-section__icon-round">
                                        <img class="module-section__image" src="<?php the_sub_field('sn_four_block_hellp_icon'); ?>" alt="icon">
                                        <div class="module-section__round-count">0<?php echo ++$cunt_advant ?></div>
                                    </div>
                                    <div class="module-section__caption text-center">
                                        <p class="module-section__item-title"><?php the_sub_field('sn_four_block_hellp_text'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                    <button class="module-section__button" type="button">Отримати допомогу</button>
                </div>
            </div>
        </div>
    </div>
    <div class="module-overlay" id="clients">
        <div class="container container--padding">
            <div class="row">
                <div class="module-section custom-line custom-line--offset">
                    <div class="custom-line__description"><?php the_field('sn_block_name_5'); ?></div>
                    <p class="module-section__title h5"><?php the_field('sn_five_block_title'); ?></p>
                    <div class="sp-xs-1 sp-sm-1 sp-md-6 sp-lg-8 sp-xl-8"></div>
                    <?php echo do_shortcode('[show-logos]'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-form">
       <div class="sp-xs-10"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"></div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <?php
                    if (function_exists("add_formcraft_form")) {
                        add_formcraft_form("[fc id='7'][/fc]");
                    }
                ?>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"></div>
            </div>
        </div>
      <div class="sp-xs-10"></div>
    </div>
      <hr>



</div>
</div>

<?php get_footer(); ?>
