<?php

/**
 *  Template Name: Home Page
 */

get_header(); ?>
<main class="page">
    <!-- Section Hero -->
    <?php if (have_rows('section_one')) :
        while (have_rows('section_one')) : the_row();
    ?>
            <section class="header_hero" style="background-image: url(<?php the_sub_field('background_image') ?>);">


                <div class="header_hero__container">
                    <div class="header_hero__wrapper">

                        <div class="header_hero__content">
                            <?php if (get_sub_field('title')) : ?>
                                <div class="header_hero__title">
                                    <?php the_sub_field('title') ?>
                                </div>
                            <?php endif; ?>
                            <?php if (get_sub_field('since')) : ?>
                                <div class="header_hero__since"><?php the_sub_field('since') ?></div>
                            <?php endif; ?>
                            <?php if (get_sub_field('bottom_text')) : ?>
                                <div class="header_hero__bottom"><?php the_sub_field('bottom_text') ?></div>
                            <?php endif; ?>
                        </div>
                        <button class="header_hero__scroll">
                            Scroll down

                        </button>
                    </div>
                </div>
            </section>



    <?php endwhile;
    endif;
    ?>
    <!-- Section Hero END -->


    <!-- Section About -->
    <?php if (have_rows('section_two')) :
        while (have_rows('section_two')) : the_row();
    ?>
            <section class="about">
                <div class="about__container">
                    <div class="about__wrapper">
                        <div class="about__top">
                            <?php if (get_sub_field('section_title')) : ?>
                                <div class="about_top__title small_title">
                                    <?php the_sub_field('section_title') ?>
                                </div>
                            <?php endif; ?>
                            <?php if (get_sub_field('content')) : ?>
                                <div class="about_top__content">
                                    <?php the_sub_field('content') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="about__bottom">
                            <?php if (have_rows('sldier_left')) : ?>
                                <div class="about_bottom__left left_item__anim">

                                    <?php
                                    $i = 1;
                                    while (have_rows('sldier_left')) : the_row(); ?>
                                        <div class="about__title <?php if ($i == 1) {
                                                                        echo 'active';
                                                                    } ?>">
                                            <span><?php the_sub_field('left_letter') ?></span>
                                            <?php the_sub_field('left_title') ?>
                                        </div>
                                    <?php $i++;
                                    endwhile; ?>
                                </div>

                            <?php endif; ?>
                            <?php if (have_rows('sldier')) : ?>
                                <div class="about_bottom__right right_item__anim">
                                    <div class="about__swiper swiper">
                                        <div class="swiper-wrapper">
                                            <?php while (have_rows('sldier')) : the_row(); ?>
                                                <?php
                                                $image = get_sub_field('image');
                                                if (isset($image)) : ?>
                                                    <div class="swiper-slide">
                                                        <div class="about__swiper__card">
                                                            <?php echo wp_get_attachment_image($image, 'full'); ?>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endwhile; ?>
                                        </div>
                                        <div class="about_swiper__pagination"></div>
                                    </div>
                                    <div class="about_swiper__nav slider_container">
                                        <div class="about__swiper__prev slider_arrow slider_arrow__prev">Previous</div>
                                        <div class="about__swiper__next slider_arrow slider_arrow__next">Next</div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

    <?php endwhile;
    endif;
    ?>
    <!-- Section About END -->

    <!-- Section Founder -->
    <?php if (have_rows('section_three')) :
        while (have_rows('section_three')) : the_row();
    ?>
            <section class="founder">
                <div class="founder__container">
                    <div class="founder__wrapper">
                        <div class="founder_left left_item__anim">
                            <?php
                            $image = get_sub_field('photo');
                            if (isset($image)) : ?>
                                <div class="founder_left__img">
                                    <?php echo wp_get_attachment_image($image, 'full'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if (get_sub_field('linkedin_link')) : ?>
                                <a href="<?php echo get_sub_field('linkedin_link')['url'] ?>" target="_blank" class="founder_left__link"><?php echo get_sub_field('linkedin_link')['title'] ?><svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.6066 12.8033C12.1589 12.8033 12.6066 12.3555 12.6066 11.8033L12.6066 2.80326C12.6066 2.25097 12.1589 1.80326 11.6066 1.80326C11.0543 1.80326 10.6066 2.25097 10.6066 2.80326L10.6066 10.8033L2.6066 10.8033C2.05432 10.8033 1.6066 11.251 1.6066 11.8033C1.6066 12.3555 2.05432 12.8033 2.6066 12.8033L11.6066 12.8033ZM0.292893 1.90376L10.8995 12.5104L12.3137 11.0962L1.70711 0.489549L0.292893 1.90376Z" fill="#083166" />
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="founder_right right_item__anim">
                            <?php if (get_sub_field('name')) : ?>
                                <div class="founder_right__name">
                                    <?php the_sub_field('name') ?>
                                </div>
                            <?php endif; ?>
                            <?php if (get_sub_field('position')) : ?>
                                <div class="founder_right__position">
                                    <?php the_sub_field('position') ?>
                                </div>
                            <?php endif; ?>
                            <?php if (get_sub_field('title')) : ?>
                                <div class="founder_right__title">
                                    <?php the_sub_field('title') ?>
                                </div>
                            <?php endif; ?>
                            <?php if (get_sub_field('content')) : ?>
                                <div class="founder_right__content">
                                    <?php the_sub_field('content') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

    <?php endwhile;
    endif;
    ?>
    <!-- Section Founder END -->

    <!-- Section Servoces -->
    <?php if (have_rows('section_four')) :
        while (have_rows('section_four')) : the_row();
    ?>
            <section class="services">
                <div class="services__container">
                    <div class="services__wrapper">
                        <div class="services_top">
                            <?php if (get_sub_field('section_title')) : ?>
                                <div class="small_title services_small__title">
                                    <?php the_sub_field('section_title') ?>
                                </div>
                            <?php endif; ?>
                            <?php if (get_sub_field('title')) : ?>
                                <div class="services_title section_title">
                                    <?php the_sub_field('title') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if (have_rows('items')) : ?>
                            <div class="services_bottom">
                                <div class="services_slider swiper">
                                    <div class="swiper-wrapper">
                                        <?php
                                        $i = 1;
                                        while (have_rows('items')) : the_row(); ?>
                                            <div class="swiper-slide services_slider__<?php echo $i; ?>">
                                                <div class="services_card">
                                                    <?php
                                                    $image = get_sub_field('image');
                                                    if (isset($image)) : ?>
                                                        <div class="services_card__image">
                                                            <?php echo wp_get_attachment_image($image, 'full'); ?>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if (get_sub_field('title')) : ?>
                                                        <div class="services_card__title">
                                                            <?php the_sub_field('title') ?>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if (get_sub_field('description')) : ?>
                                                        <div class="services_card__description">
                                                            <?php the_sub_field('description') ?>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if (get_sub_field('link')) : ?>
                                                        <div class="services_card__link"><?php echo get_sub_field('link')['title'] ?><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.8995 1.10051C11.8995 0.54822 11.4518 0.100505 10.8995 0.100505L1.89949 0.100505C1.34721 0.100505 0.899492 0.54822 0.899492 1.10051C0.899492 1.65279 1.34721 2.10051 1.89949 2.10051L9.89949 2.10051L9.89949 10.1005C9.89949 10.6528 10.3472 11.1005 10.8995 11.1005C11.4518 11.1005 11.8995 10.6528 11.8995 10.1005L11.8995 1.10051ZM1.70711 11.7071L11.6066 1.80761L10.1924 0.393398L0.292893 10.2929L1.70711 11.7071Z" fill="white" />
                                                            </svg>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php $i++;
                                        endwhile; ?>
                                    </div>
                                    <div class="services_swiper__nav slider_container">
                                        <div class="services__swiper__prev slider_arrow slider_arrow__prev">Previous</div>
                                        <div class="services__swiper__next slider_arrow slider_arrow__next">Next</div>
                                    </div>
                                </div>
                            </div>


                        <?php endif ?>
                    </div>
                </div>
            </section>

    <?php endwhile;
    endif;
    ?>
    <!-- Section Servoces END -->


    <!-- Section Fleet -->
    <?php if (have_rows('section_five')) :
        while (have_rows('section_five')) : the_row();
    ?>
            <section class="fleet">
                <div class="fleet__container">
                    <div class="fleet__wrapper">
                        <?php if (get_sub_field('title')) : ?>
                            <div class="fleet__title section_title"><?php the_sub_field('title') ?></div>
                        <?php endif; ?>
                        <?php if (have_rows('items')) : ?>
                            <div class="fleet_list">
                                <?php while (have_rows('items')) : the_row(); ?>
                                    <div class="fleet_list__item"><?php the_sub_field('item') ?></div>
                                <?php endwhile; ?>
                            </div>
                    </div>
                <?php endif; ?>
                </div>
            </section>
    <?php endwhile;
    endif;
    ?>
    <!-- Section Fleet END -->

    <!-- Section Benefits -->
    <?php if (have_rows('section_six')) :
        while (have_rows('section_six')) : the_row();
    ?>
            <section class="benefits">
                <div class="benefits__container">
                    <div class="benefits__wrapper">
                        <?php if (get_sub_field('title')) : ?>
                            <div class="benefits_title section_title"><?php the_sub_field('title') ?></div>
                        <?php endif; ?>
                    </div>
                    <?php if (have_rows('items')) : ?>
                        <div class="benefits_items">
                            <?php while (have_rows('items')) : the_row(); ?>
                                <div class="benefits_item">
                                    <?php
                                    $image = get_sub_field('image');
                                    if (isset($image)) : ?>
                                        <div class="benefits_item__image">
                                            <?php echo wp_get_attachment_image($image, 'full'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (get_sub_field('text')) : ?>
                                        <div class="benefits_item__text">
                                            <?php the_sub_field('text') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
    <?php endwhile;
    endif;
    ?>
    <!-- Section Benefits END -->

</main>

<?php get_footer(); ?>

<?php if (have_rows('section_four')) :
    while (have_rows('section_four')) : the_row();

?>
        <?php
        if (have_rows('items')) :
            $i = 1;
            while (have_rows('items')) : the_row();
                $titleGalletrry =  get_sub_field('title');
                if (have_rows('gallery')) :
        ?>

                    <div class="services_pop services_pop_<?php echo $i ?>">
                        <div class="services_pop__container">

                            <div class="services_pop__close">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4048 11.5L7.37306e-05 21.9047L1.09531 23L11.5 12.5953L21.9048 23L23 21.9048L12.5952 11.5L23.0001 1.09524L21.9048 0L11.5 10.4048L1.09524 7.34992e-05L0 1.09531L10.4048 11.5Z" fill="white" />
                                </svg>

                            </div>
                            <div class="services_pop__top">
                                <div class="services_pop__title">
                                    <?php echo $titleGalletrry ?>
                                </div>
                                <div class="services_pop__wrapper">
                                    <div class="services_pop_slider swiper services_pop_slider__desctop">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <?php
                                                $k = 1;
                                                while (have_rows('gallery')) : the_row(); ?>

                                                    <?php
                                                    if (get_sub_field('select_item') === 'photo') :
                                                        $image = get_sub_field('item');
                                                        if (isset($image)) : ?>
                                                            <div class="services_pop__card">
                                                                <?php echo wp_get_attachment_image($image, 'full'); ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php else : ?>
                                                        <div class="services_pop__card services_pop__video">
                                                            <div class="services_pop__video__wrapper">
                                                                <video src="<?php the_sub_field('vidio_item'); ?>" controls></video>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if (!($k++ % 4)) : ?>
                                            </div>
                                            <div class="swiper-slide">
                                            <?php endif ?>
                                        <?php
                                                endwhile; ?>
                                            </div>
                                        </div>

                                        <div class="services_pop_container__arrow">
                                            <div class="services_pop__arrow services_pop__prev services_pop__prev__desctop">Previous</div>
                                            <div class="services_pop_pagination"></div>
                                            <div class="services_pop__arrow services_pop__next services_pop__next__desctop">Next</div>
                                        </div>
                                    </div>
                                    <div class="services_pop_slider swiper services_pop_slider__tablet">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <?php
                                                $k = 1;
                                                while (have_rows('gallery')) : the_row(); ?>

                                                    <?php
                                                    if (get_sub_field('select_item') === 'photo') :
                                                        $image = get_sub_field('item');
                                                        if (isset($image)) : ?>
                                                            <div class="services_pop__card">
                                                                <?php echo wp_get_attachment_image($image, 'full'); ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php else : ?>
                                                        <div class="services_pop__card services_pop__video">
                                                            <div class="services_pop__video__wrapper">
                                                                <video src="<?php the_sub_field('vidio_item'); ?>" controls></video>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if (!($k++ % 3)) : ?>
                                            </div>
                                            <div class="swiper-slide">
                                            <?php endif ?>
                                        <?php
                                                endwhile; ?>

                                            </div>
                                        </div>

                                        <div class="services_pop_container__arrow">
                                            <div class="services_pop__arrow services_pop__prev services_pop__prev__tablet">Previous</div>
                                            <div class="services_pop_pagination services_pop_pagination__tablet"></div>
                                            <div class="services_pop__arrow services_pop__next services_pop__next__tablet">Next</div>
                                        </div>
                                    </div>
                                    <div class="services_pop_slider swiper services_pop_slider__mobile">
                                        <div class="swiper-wrapper">
                                            <?php while (have_rows('gallery')) : the_row(); ?>

                                                <div class="swiper-slide">
                                                    <?php
                                                    if (get_sub_field('select_item') === 'photo') :
                                                        $image = get_sub_field('item');
                                                        if (isset($image)) : ?>
                                                            <div class="services_pop__card">
                                                                <?php echo wp_get_attachment_image($image, 'full'); ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php else : ?>
                                                        <div class="services_pop__card services_pop__video">
                                                            <div class="services_pop__video__wrapper">
                                                                <video src="<?php the_sub_field('vidio_item'); ?>" controls></video>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>


                                                </div>
                                            <?php endwhile; ?>

                                        </div>

                                        <div class="services_pop_container__arrow">
                                            <div class="services_pop__arrow services_pop__prev services_pop__prev__mobile">Previous</div>
                                            <div class="services_pop_pagination services_pop_pagination__mobile"></div>
                                            <div class="services_pop__arrow services_pop__next services_pop__next__mobile">Next</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        //Swiper Directions
                        const servicesSwiperGall<?php echo $i; ?> = new Swiper('.services_pop_<?php echo $i; ?> .services_pop_slider__desctop', {
                            // If we need pagination
                            slidesPerView: 1,
                            allowTouchMove: false,
                            navigation: {
                                nextEl: '.services_pop_<?php echo $i; ?> .services_pop__next__desctop',
                                prevEl: '.services_pop_<?php echo $i; ?> .services_pop__prev__desctop',
                            },
                            pagination: {
                                el: '.services_pop_<?php echo $i; ?> .services_pop_pagination',
                                type: 'fraction'
                            },
                        });

                        const servicesSwiperGallTablet<?php echo $i; ?> = new Swiper('.services_pop_<?php echo $i; ?> .services_pop_slider__tablet', {
                            // If we need pagination
                            slidesPerView: 1,
                            allowTouchMove: false,
                            navigation: {
                                nextEl: '.services_pop_<?php echo $i; ?> .services_pop__next__tablet',
                                prevEl: '.services_pop_<?php echo $i; ?> .services_pop__prev__tablet',
                            },
                            pagination: {
                                el: '.services_pop_<?php echo $i; ?> .services_pop_pagination__tablet',
                                type: 'fraction'
                            },
                        });
                        const servicesSwiperGallMobile<?php echo $i; ?> = new Swiper('.services_pop_<?php echo $i; ?> .services_pop_slider__mobile', {
                            // If we need pagination
                            slidesPerView: 1,
                            //                             allowTouchMove: false,
                            navigation: {
                                nextEl: '.services_pop_<?php echo $i; ?> .services_pop__next__mobile',
                                prevEl: '.services_pop_<?php echo $i; ?> .services_pop__prev__mobile',
                            },
                            pagination: {
                                el: '.services_pop_<?php echo $i; ?> .services_pop_pagination__mobile',
                                type: 'fraction'
                            },
                        });
                        jQuery(document).ready(function($) {

                            let servItem<?php echo $i ?> = $('.services_slider__<?php echo $i ?> .services_card__link ')
                            let servItemClose<?php echo $i ?> = $('.services_pop_<?php echo $i ?> .services_pop__close ')
                            servItem<?php echo $i ?>.on('click', function() {
                                $('.services_pop_<?php echo $i; ?>').fadeIn()
                            })
                            servItemClose<?php echo $i ?>.on('click', function() {
                                $('.services_pop__card').removeClass('active')
                                $('.services_pop_<?php echo $i; ?>').fadeOut()
                            })
                            servicesSwiperGallMobile<?php echo $i; ?>.on('touchStart', function() {
                                $('.services_pop__card').removeClass('active')
                                $('.services_pop__card').removeClass('small')
                                $('.services_pop__video__wrapper video').trigger('pause')
                            })
                        })


                        //Swiper Directions END
                    </script>
                <?php endif; ?>
        <?php
                $i++;
            endwhile;
        endif; ?>

<?php

    endwhile;
endif; ?>