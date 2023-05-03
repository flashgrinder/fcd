<?php get_header(); ?>

    <?php the_post(); ?>
    <!-- Info-block -->
    <section class="info-block">
        <div class="info-block__body container">
            <div class="info-block__inner">
                <div class="info-block__text">
                    <?php
                        if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb( '<p id="breadcrumbs" class="breadcrumbs text text--small text--white text--w-light">','</p>' );
                        }
                    ?>
                    <h1 class="info-block__heading title title--huge title--white title--w-bold title--indent">
                        <?php the_title(); ?>
                    </h1>
                    <p class="info-block__descr text text--large text--white text--w-light">
                        <?php the_excerpt(); ?>
                    </p>
                    <div class="info-block__actions">
                        <a href="javascript:;" class="info-block__btn button button--primary" data-hystmodal="#service">
                            Оставить заявку
                        </a>
                    </div>
                </div>
                <div class="info-block__pic">
                    <?php
                        $default_attr = [
                            'class'	=> "info-block__img",
                            'alt'   => get_the_title()
                        ];
                                    
                        echo get_the_post_thumbnail( $post->ID, 'full', $default_attr ); 
                    ?>
                </div>
            </div>
            <div class="info-block__decor">
                <svg class="info-block__elips" width="2524" height="1511" viewBox="0 0 2524 1511" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_3418_19793)">
                        <path d="M1216.74 592.381C1548.94 592.381 1818.24 623.42 1818.24 661.709C1818.24 699.998 1548.94 731.038 1216.74 731.038C884.546 731.038 615.245 699.998 615.245 661.709C615.245 623.42 884.546 592.381 1216.74 592.381Z" fill="#E82F84" fill-opacity="0.45"
                        />
                        <path d="M1243.78 688.458C1633.98 584.16 1958.36 529.592 1968.29 566.576C1978.23 603.561 1669.96 718.093 1279.75 822.39C889.546 926.688 565.168 981.256 555.234 944.272C545.299 907.287 853.57 792.755 1243.78 688.458Z" fill="#E82F84" fill-opacity="0.25"
                        />
                    </g>
                    <defs>
                        <filter id="filter0_f_3418_19793" x="0" y="0" width="2523.53" height="1510.85" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="277.5" result="effect1_foregroundBlur_3418_19793" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div class="info-block__scroll js-scroll-down">
                <svg class="info-block__scroll-icon" width="14" height="25" viewBox="0 0 14 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 5.05546V8.66032M7 1C5.4087 1 3.88258 1.74179 2.75736 3.06218C1.63214 4.38258 1 6.17341 1 8.04073V16.4896C1 18.3569 1.63214 20.1478 2.75736 21.4682C3.88258 22.7886 5.4087 23.5303 7 23.5303C8.5913 23.5303 10.1174 22.7886 11.2426 21.4682C12.3679 20.1478 13 18.3569 13 16.4896V8.04073C13 6.17341 12.3679 4.38258 11.2426 3.06218C10.1174 1.74179 8.5913 1 7 1Z"
                    stroke="#F0F6F7" stroke-width="1.10645" stroke-linecap="round" />
                </svg>
                <div class="info-block__scroll-text text text--small text--white text--w-light text--uppercase">
                    Scroll
                </div>
            </div>
        </div>
    </section>
    <!-- /. Info-block -->

    <?php if( have_rows('service-blocks')): ?>
        <?php while( have_rows('service-blocks')) : the_row(); ?>

            <?php if( get_row_layout() == 'service-block_editor' ): ?>
                <!-- Page-wysiwyg -->
                <section class="page-wysiwyg block-padding js-reveal gs-reveal">
                    <div class="page-wysiwyg__body container">
                        <div class="page-wysiwyg__content wysiwyg">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </section>
                <!-- /. Page-wysiwyg -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service-block_tarifs' ): ?>
                <!-- Tarifs -->
                <section class="tarifs block-padding">
                    <div class="tarifs__body container">
                        <h2 class="tarifs__heading title title--large title--white title--w-bold title--indent-45 js-reveal gs-reveal">
                            <?php echo get_sub_field('tarifs-block_title'); ?>
                        </h2>
                        <div class="tarifs__slider js-reveal gs-reveal">
                            <!-- Slider main container -->
                            <div class="tarifs__swiper-container tarifs__swiper-container--default swiper-container">
                                <!-- Additional required wrapper -->
                                <?php if( have_rows('tarifs-slider') ): ?>
                                <div class="tarifs__swiper-wrapper swiper-wrapper disableds">
                                    <?php while( have_rows('tarifs-slider') ): the_row();

                                        $tarifs_slider_name = get_sub_field('tarifs-slider_name');
                                        $tarifs_slider_time = get_sub_field('tarifs-slider_time');
                                        $tarifs_slider_beforetext = get_sub_field('tarifs-slider_beforetext');
                                        $tarifs_slider_price = get_sub_field('tarifs-slider_price');
                                        $tarifs_slider_symbol = get_sub_field('tarifs-slider_symbol');
                                        $tarifs_slider_descr = get_sub_field('tarifs-slider_descr');
                                        $tarifs_slider_item = get_sub_field('tarifs-slider_item');
                                        $tarifs_slider_alert = get_sub_field('tarifs-slider_alert');
                                        $tarifs_slider_accent = get_sub_field('tarifs-slider_accent');

                                        ?>
                                        <div class="tarifs__swiper-slide swiper-slide">
                                            <!-- Tarif-card -->
                                            <article class="tarif-card <?php foreach( $tarifs_slider_accent as $tarif_accent ) { echo $tarif_accent; } ?>">
                                                <header class="tarif-card__header">
                                                    <div class="tarif-card__subtitle">
                                                        <span class="tarif-card__pretext text text--normal text--white text--w-light">
                                                            <?php echo $tarifs_slider_name; ?>
                                                        </span>
                                                        <?php if( !empty( $tarifs_slider_time ) ): ?>
                                                            <span class="tarif-card__time text text--small text--dark-gray text--w-light">
                                                                <?php echo $tarifs_slider_time; ?>
                                                            </span>
                                                        <?php endif ?>
                                                    </div>
                                                    <div class="tarif-card__price">
                                                        <?php if( !empty( $tarifs_slider_beforetext ) ): ?>
                                                        <span class="tarif-card__pretext text text--normal text--white text--w-light">
                                                            <?php echo $tarifs_slider_beforetext; ?>
                                                        </span>
                                                        <?php endif ?>
                                                        <span class="tarif-card__num title title--large title--white title--w-bold">
                                                            <?php echo $tarifs_slider_price; ?>
                                                        </span>
                                                        <span class="tarif-card__symbol text text--normal text--white text--w-light">
                                                            <?php echo $tarifs_slider_symbol; ?>
                                                        </span>
                                                    </div>
                                                </header>
                                                <div class="tarif-card__body">
                                                    <p class="tarif-card__descr text text--normal text--white text--w-light">
                                                        <?php echo $tarifs_slider_descr; ?>
                                                    </p>
                                                    <?php if( have_rows('tarifs-slider-checks') ): ?>
                                                    <ul class="tarif-card__checklist text text--normal text--white text--w-light">
                                                        <?php while( have_rows('tarifs-slider-checks') ): the_row();

                                                            $tarifs_slider_checks_item = get_sub_field('tarifs-slider-checks_item');

                                                            ?>
                                                            <li class="tarif-card__check">
                                                                <?php echo $tarifs_slider_checks_item; ?>
                                                            </li>
                                                        <?php endwhile; ?>
                                                    </ul>
                                                    <?php endif; ?>
                                                    <?php if( $tarifs_slider_alert ): ?>
                                                        <div class="tarif-card__alert">
                                                            <div class="tarif-card__alert-icon">
                                                                <svg class="tarif-card__alert-svg" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g opacity="0.35">
                                                                    <path d="M10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M10 6H10.0083" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M9 9H10V14H11" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <span class="tarif-card__alert-text text text--normal text--white text--w-light">
                                                                <?php echo $tarifs_slider_alert; ?>
                                                            </span>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <footer class="tarif-card__footer">
                                                    <div class="tarif-card__action">
                                                        <a href="javascript:;" class="tarif-card__button button button--primary" data-hystmodal="#service">
                                                            Оставить заявку
                                                        </a>
                                                    </div>
                                                </footer>
                                            </article>
                                            <!-- /. Tarif-card -->
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="tarifs__slider-nav disableds">
                                <div class="tarifs__swiper-button-prev tarifs__slider-arrow">
                                    <svg class="tarifs__slider-arrow-svg" width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1L1.82588 4.75671C1.3845 5.15395 1.3845 5.84605 1.82588 6.24329L6 10" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="tarifs__swiper-button-next tarifs__slider-arrow">
                                    <svg class="tarifs__slider-arrow-svg" width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5.17412 4.75671C5.6155 5.15395 5.6155 5.84605 5.17412 6.24329L1 10" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /. Tarifs -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service-block_tarifs-tabs' ): ?>
                <!-- Tarifs -->
                <section class="tarifs block-padding">
                    <div class="tarifs__body container">
                        <h2 class="tarifs__heading title title--large title--white title--w-bold title--indent-45 js-reveal gs-reveal">
                            <?php echo get_sub_field('tarifs-tabs_title'); ?>
                        </h2>
                        <div class="tarifs__tabs tabs js-reveal gs-reveal">
                            <?php if( have_rows('tarifs-tabs') ): ?>
                                <div class="tarifs__tabs-buttons tabs__buttons">
                                <?php while( have_rows('tarifs-tabs') ): the_row();

                                    $tarifs_tabs_name = get_sub_field('tarifs-tabs_name');

                                    ?>
                                    <div class="tarifs__tabs-button tabs__button <?php if( get_row_index() == 1) echo 'is-active'; ?>" data-tab-trigger="<?php echo get_row_index(); ?>">
                                        <?php echo $tarifs_tabs_name; ?>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                                <div class="tarifs__tabs-wrapper tabs__wrapper">
                                <?php while( have_rows('tarifs-tabs') ): the_row(); ?>
                                    <div class="tarifs__tabs-content tabs__content <?php if( get_row_index() == 1) echo 'is-open'; ?>" data-tab-content="<?php echo get_row_index(); ?>">
                                        <div class="tarifs__slider">
                                            <!-- Slider main container -->
                                            <div class="tarifs__swiper-container tarifs__swiper-container--web swiper-container">
                                                <!-- Additional required wrapper -->
                                                <?php if( have_rows('tarifs-slider') ): ?>
                                                <div class="tarifs__swiper-wrapper swiper-wrapper disableds">
                                                    <?php while( have_rows('tarifs-slider') ): the_row();

                                                        $tarifs_slider_name = get_sub_field('tarifs-slider_name');
                                                        $tarifs_slider_time = get_sub_field('tarifs-slider_time');
                                                        $tarifs_slider_beforetext = get_sub_field('tarifs-slider_beforetext');
                                                        $tarifs_slider_price = get_sub_field('tarifs-slider_price');
                                                        $tarifs_slider_symbol = get_sub_field('tarifs-slider_symbol');
                                                        $tarifs_slider_descr = get_sub_field('tarifs-slider_descr');
                                                        $tarifs_slider_item = get_sub_field('tarifs-slider_item');
                                                        $tarifs_slider_alert = get_sub_field('tarifs-slider_alert');
                                                        $tarifs_slider_accent = get_sub_field('tarifs-slider_accent');

                                                        ?>
                                                        <div class="tarifs__swiper-slide swiper-slide">
                                                            <!-- Tarif-card -->
                                                            <article class="tarif-card <?php foreach( $tarifs_slider_accent as $tarif_accent ) { echo $tarif_accent; } ?>">
                                                                <header class="tarif-card__header">
                                                                    <div class="tarif-card__subtitle">
                                                                        <span class="tarif-card__pretext text text--normal text--white text--w-light">
                                                                            <?php echo $tarifs_slider_name; ?>
                                                                        </span>
                                                                        <?php if( !empty( $tarifs_slider_time ) ): ?>
                                                                            <span class="tarif-card__time text text--small text--dark-gray text--w-light">
                                                                                <?php echo $tarifs_slider_time; ?>
                                                                            </span>
                                                                        <?php endif ?>
                                                                    </div>
                                                                    <div class="tarif-card__price">
                                                                        <?php if( !empty( $tarifs_slider_beforetext ) ): ?>
                                                                        <span class="tarif-card__pretext text text--normal text--white text--w-light">
                                                                            <?php echo $tarifs_slider_beforetext; ?>
                                                                        </span>
                                                                        <?php endif ?>
                                                                        <span class="tarif-card__num title title--large title--white title--w-bold">
                                                                            <?php echo $tarifs_slider_price; ?>
                                                                        </span>
                                                                        <span class="tarif-card__symbol text text--normal text--white text--w-light">
                                                                            <?php echo $tarifs_slider_symbol; ?>
                                                                        </span>
                                                                    </div>
                                                                </header>
                                                                <div class="tarif-card__body">
                                                                    <p class="tarif-card__descr text text--normal text--white text--w-light">
                                                                        <?php echo $tarifs_slider_descr; ?>
                                                                    </p>
                                                                    <?php if( have_rows('tarifs-slider-checks') ): ?>
                                                                        <ul class="tarif-card__checklist text text--normal text--white text--w-light">
                                                                            <?php while( have_rows('tarifs-slider-checks') ): the_row();

                                                                                $tarifs_slider_checks_item = get_sub_field('tarifs-slider-checks_item');

                                                                                ?>
                                                                                <li class="tarif-card__check">
                                                                                    <?php echo $tarifs_slider_checks_item; ?>
                                                                                </li>
                                                                            <?php endwhile; ?>
                                                                        </ul>
                                                                    <?php endif; ?>
                                                                    <?php if( $tarifs_slider_alert ): ?>
                                                                        <div class="tarif-card__alert">
                                                                            <div class="tarif-card__alert-icon">
                                                                                <svg class="tarif-card__alert-svg" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <g opacity="0.35">
                                                                                    <path d="M10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                    <path d="M10 6H10.0083" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                    <path d="M9 9H10V14H11" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                                                                    </g>
                                                                                </svg>
                                                                            </div>
                                                                            <span class="tarif-card__alert-text text text--normal text--white text--w-light">
                                                                                <?php echo $tarifs_slider_alert; ?>
                                                                            </span>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                </div>
                                                                <footer class="tarif-card__footer">
                                                                    <div class="tarif-card__action">
                                                                        <a href="javascript:;" class="tarif-card__button button button--primary" data-hystmodal="#service">
                                                                            Оставить заявку
                                                                        </a>
                                                                    </div>
                                                                </footer>
                                                            </article>
                                                            <!-- /. Tarif-card -->
                                                        </div>
                                                    <?php endwhile; ?>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                            <!-- If we need navigation buttons -->
                                            <div class="tarifs__slider-nav disableds">
                                                <div class="tarifs__swiper-button-prev tarifs__slider-arrow">
                                                    <svg class="tarifs__slider-arrow-svg" width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 1L1.82588 4.75671C1.3845 5.15395 1.3845 5.84605 1.82588 6.24329L6 10" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                                <div class="tarifs__swiper-button-next tarifs__slider-arrow">
                                                    <svg class="tarifs__slider-arrow-svg" width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 1L5.17412 4.75671C5.6155 5.15395 5.6155 5.84605 5.17412 6.24329L1 10" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
                <!-- /. Tarifs -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service-block_tarifs-service' ): ?>
                <!-- Tarifs -->
                <section class="tarifs block-padding">
                    <div class="tarifs__body container">
                        <h2 class="tarifs__heading title title--large title--white title--w-bold title--indent-45 js-reveal gs-reveal">
                            <?php echo get_sub_field('tarifs-service_title'); ?>
                        </h2>
                        <div class="tarifs__slider js-reveal gs-reveal">
                            <!-- Slider main container -->
                            <div class="tarifs__swiper-container tarifs__swiper-container--default swiper-container">
                                <!-- Additional required wrapper -->
                                <?php if( have_rows('tarifs-slider') ): ?>
                                    <div class="tarifs__swiper-wrapper swiper-wrapper disableds">
                                    <?php while( have_rows('tarifs-slider') ): the_row();

                                        $tarifs_slider_name = get_sub_field('tarifs-slider_name');
                                        $tarifs_slider_time = get_sub_field('tarifs-slider_time');
                                        $tarifs_slider_beforetext = get_sub_field('tarifs-slider_beforetext');
                                        $tarifs_slider_title = get_sub_field('tarifs-slider_title');
                                        $tarifs_slider_descr = get_sub_field('tarifs-slider_descr');
                                        $tarifs_slider_item = get_sub_field('tarifs-slider_item');
                                        $tarifs_slider_alert = get_sub_field('tarifs-slider_alert');
                                        $tarifs_slider_accent = get_sub_field('tarifs-slider_accent');
                                        $tarifs_slider_hide_show = get_sub_field('tarifs-slider_hide-show');
                                        $tarifs_slider_link = get_sub_field('tarifs-slider_link');

                                        ?>
                                        <div class="tarifs__swiper-slide swiper-slide">
                                            <!-- Tarif-card -->
                                            <article class="tarif-card <?php foreach( $tarifs_slider_accent as $tarif_accent ) { echo $tarif_accent; } ?> tarif-card--service">
                                                <header class="tarif-card__header">
                                                    <div class="tarif-card__subtitle">
                                                        <span class="tarif-card__pretext text text--normal text--white text--w-light">
                                                            <?php echo $tarifs_slider_name; ?>
                                                        </span>
                                                        <?php if( !empty( $tarifs_slider_time ) ): ?>
                                                            <span class="tarif-card__time text text--small text--dark-gray text--w-light">
                                                                <?php echo $tarifs_slider_time; ?>
                                                            </span>
                                                        <?php endif ?>
                                                    </div>
                                                    <div class="tarif-card__price">
                                                        <?php if( !empty( $tarifs_slider_beforetext ) ): ?>
                                                            <span class="tarif-card__pretext text text--normal text--white text--w-light">
                                                                <?php echo $tarifs_slider_beforetext; ?>
                                                            </span>
                                                        <?php endif ?>
                                                        <span class="tarif-card__title title title--large title--white title--w-bold">
                                                            <?php echo $tarifs_slider_title; ?>
                                                        </span>
                                                    </div>
                                                </header>
                                                <div class="tarif-card__body">
                                                    <p class="tarif-card__descr text text--normal text--white text--w-light">
                                                        <?php echo $tarifs_slider_descr; ?>
                                                    </p>
                                                    <?php if( have_rows('tarifs-slider-checks') ): ?>
                                                    <ul class="tarif-card__checklist text text--normal text--white text--w-light">
                                                        <?php while( have_rows('tarifs-slider-checks') ): the_row();

                                                            $tarifs_slider_checks_item = get_sub_field('tarifs-slider-checks_item');

                                                            ?>
                                                            <li class="tarif-card__check">
                                                                <?php echo $tarifs_slider_checks_item; ?>
                                                            </li>
                                                        <?php endwhile; ?>
                                                    </ul>
                                                    <?php endif; ?>
                                                    <?php if( $tarifs_slider_alert ): ?>
                                                        <div class="tarif-card__alert">
                                                            <div class="tarif-card__alert-icon">
                                                                <svg class="tarif-card__alert-svg" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g opacity="0.35">
                                                                    <path d="M10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M10 6H10.0083" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M9 9H10V14H11" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <span class="tarif-card__alert-text text text--normal text--white text--w-light">
                                                                <?php echo $tarifs_slider_alert; ?>
                                                            </span>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <?php if( $tarifs_slider_hide_show && in_array('tarifs-service_link', $tarifs_slider_hide_show) ) : ?>
                                                <footer class="tarif-card__footer">
                                                    <div class="tarif-card__action">
                                                        <a href="<?php echo $tarifs_slider_link; ?>" class="tarif-card__more link-primary js-transition-link">
                                                            <span class="tarif-card__more-text link-primary__text">
                                                                Узнать подробнее
                                                            </span> 
                                                            <span class="tarif-card__more-icon link-primary__icon">
                                                                <svg class="tarif-card__more-icon link-primary__arrow-primary" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M1 3.5C0.723858 3.5 0.5 3.72386 0.5 4C0.5 4.27614 0.723858 4.5 1 4.5V3.5ZM16.3536 4.35355C16.5488 4.15829 16.5488 3.84171 16.3536 3.64645L13.1716 0.464466C12.9763 0.269204 12.6597 0.269204 12.4645 0.464466C12.2692 0.659728 12.2692 0.976311 12.4645 1.17157L15.2929 4L12.4645 6.82843C12.2692 7.02369 12.2692 7.34027 12.4645 7.53553C12.6597 7.7308 12.9763 7.7308 13.1716 7.53553L16.3536 4.35355ZM1 4.5H16V3.5H1V4.5Z"/>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </footer>
                                                <?php endif; ?>
                                                <?php if( $tarifs_slider_hide_show && in_array('tarifs-service_popup', $tarifs_slider_hide_show) ) : ?>
                                                <footer class="tarif-card__footer">
                                                    <div class="tarif-card__action">
                                                        <a href="javascript:;" class="tarif-card__more link-primary" data-hystmodal="#service">
                                                            <span class="tarif-card__more-text link-primary__text">
                                                                Заказать
                                                            </span> 
                                                            <span class="tarif-card__more-icon link-primary__icon">
                                                                <svg class="tarif-card__more-icon link-primary__arrow-primary" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M1 3.5C0.723858 3.5 0.5 3.72386 0.5 4C0.5 4.27614 0.723858 4.5 1 4.5V3.5ZM16.3536 4.35355C16.5488 4.15829 16.5488 3.84171 16.3536 3.64645L13.1716 0.464466C12.9763 0.269204 12.6597 0.269204 12.4645 0.464466C12.2692 0.659728 12.2692 0.976311 12.4645 1.17157L15.2929 4L12.4645 6.82843C12.2692 7.02369 12.2692 7.34027 12.4645 7.53553C12.6597 7.7308 12.9763 7.7308 13.1716 7.53553L16.3536 4.35355ZM1 4.5H16V3.5H1V4.5Z"/>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </footer>
                                                <?php endif; ?>
                                                <?php if( $tarifs_slider_hide_show && in_array('tarifs-service_void', $tarifs_slider_hide_show) ) : ?>
                                                <footer class="tarif-card__footer tarif-card__foooter--no-el">
                                                    
                                                </footer>
                                                <?php endif; ?>
                                                </article>
                                            <!-- /. Tarif-card -->
                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="tarifs__slider-nav disableds">
                                <div class="tarifs__swiper-button-prev tarifs__slider-arrow">
                                    <svg class="tarifs__slider-arrow-svg" width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1L1.82588 4.75671C1.3845 5.15395 1.3845 5.84605 1.82588 6.24329L6 10" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="tarifs__swiper-button-next tarifs__slider-arrow">
                                    <svg class="tarifs__slider-arrow-svg" width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5.17412 4.75671C5.6155 5.15395 5.6155 5.84605 5.17412 6.24329L1 10" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /. Tarifs -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service-block_partners' ): ?>
                <!-- Partners -->
                <section class="partners block-padding">
                    <div class="partners__body container">
                        <h2 class="partners__heading title title--large title--white title--w-bold title--indent-45 js-reveal gs-reveal">
                            <?php echo get_sub_field('partners_title'); ?>
                        </h2>
                    </div>
                    <div class="partners__outer container-page js-reveal gs-reveal">
                        <div class="partners__wrapper-items partners__slider swiper-container">
                            <?php if( have_rows('partners') ): ?>
                                <div class="partners__items swiper-wrapper">
                                    <?php while( have_rows('partners') ): the_row(); 
                                    
                                        $partners_link = get_sub_field('partners_link');
                                        $partners_logo = get_sub_field('partners_logo-img');
                                    
                                    ?>
                                        <a href="<?php echo (!empty( $partners_link )) ? $partners_link : "javascript:;"; ?>" class="partners__item swiper-slide" <?php if( !empty( $partners_link ) ) {echo "target='_blank'";} ?>>
                                            <img src="<?php echo esc_url($partners_logo['url']); ?>" alt="<?php echo esc_attr($partners_logo['alt']); ?>" class="partners__logo">
                                        </a>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
                <!-- /. Partners -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service-block_reviews' ): ?>
                <!-- Reviews -->
                <section class="reviews block-padding">
                    <div class="reviews__body container">
                        <h2 class="reviews__heading title title--large title--white title--w-bold title--indent-45 js-reveal gs-reveal">
                            Отзывы
                        </h2>
                        <div class="reviews__items">
                        <?php

                            $args = array(
                                'post_type' => 'reviews',
                                'posts_per_page' => 3,
                                'orderby'     => 'date',
                                'order'       => 'DESC',
                                'suppress_filters' => true
                            );

                            $wp_query = new WP_Query( $args );


                            if( have_posts() ) : 
                                while( have_posts() ) : the_post(); ?>
                                <!-- Review-card -->
                                <article class="review-card js-reveal gs-reveal">
                                    <header class="review-card__header">
                                        <div class="review-card__photo">
                                        <?php
                                            $default_attr = [
                                                'class'	=> "review-card__img",
                                                'alt'   => get_the_title()
                                            ];
                                                        
                                            echo get_the_post_thumbnail( $post->ID, 'large', $default_attr ) ?>
                                        </div>
                                        <div class="review-card__info">
                                            <h4 class="review-card__title title title--medium title--white title--w-light">
                                                <?php the_title(); ?>
                                            </h4>
                                            <div class="review-card__position text text--small text--w-light">
                                                <?php the_field('review_position'); ?>
                                            </div>
                                        </div>
                                    </header>
                                    <div class="review-card__body">
                                        <p class="review-card__descr text text--normal text--w-light">
                                            <?php the_field('review_text'); ?>
                                        </p>
                                    </div>
                                    <footer class="review-card__footer">
                                        <a href="<?php the_field('review_case'); ?>" class="review-card__button button button--primary button--icon" target="_blank">
                                            Смотреть кейс
                                            <svg class="button__icon-white" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path class="button__icon-white-stroke" d="M8 1.5H3.5C2.39543 1.5 1.5 2.39543 1.5 3.5V12.5C1.5 13.6046 2.39543 14.5 3.5 14.5H12.5C13.6046 14.5 14.5 13.6046 14.5 12.5V8" stroke="white" stroke-linecap="round"/>
                                                <path class="button__icon-white-fill" d="M7.73483 7.73484C7.58839 7.88128 7.58839 8.11872 7.73483 8.26516C7.88128 8.41161 8.11872 8.41161 8.26517 8.26516L7.73483 7.73484ZM14.875 1.5C14.875 1.29289 14.7071 1.125 14.5 1.125H11.125C10.9179 1.125 10.75 1.29289 10.75 1.5C10.75 1.70711 10.9179 1.875 11.125 1.875H14.125V4.875C14.125 5.08211 14.2929 5.25 14.5 5.25C14.7071 5.25 14.875 5.08211 14.875 4.875V1.5ZM8.26517 8.26516L14.7652 1.76517L14.2348 1.23483L7.73483 7.73484L8.26517 8.26516Z"/>
                                            </svg>
                                        </a>
                                    </footer>
                                </article>
                                <!-- ./ Review-card -->
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                    </div>
                </section>
                <!-- /.Reviews -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service-block_popular-services' ): ?>
                <!-- Popular-services -->
                <section class="popular-services block-padding js-reveal gs-reveal">
                    <div class="popular-services__body container">
                        <div class="popular-services__inner bg--dark-blue">
                            <div class="popular-services__info">
                                <h2 class="popular-services__heading title title--large title--white title--w-bold">
                                    <?php echo get_sub_field('popular-services_title'); ?>
                                </h2>
                                <div class="popular-services__items">
                                <?php
                                    $popular_services_item = get_sub_field('popular-services_item');

                                    if( $popular_services_item ): ?>

                                    <?php foreach( $popular_services_item as $popular_service_item): 
                                        
                                        $popular_service_permalink = get_permalink( $popular_service_item->ID );
                                        $popular_service_title = get_the_title( $popular_service_item->ID );
                                        
                                        ?>
                                        <?php setup_postdata($popular_service_item); ?>
                                            <a href="<?php echo esc_url( $popular_service_permalink ); ?>" class="popular-services__item button button--dark button--small js-transition-link">
                                                <?php echo esc_html( $popular_service_title ); ?>
                                            </a>
                                    <?php endforeach; ?>
                                <?php endif;?>
                                </div>
                            </div>
                            <div class="popular-services__pic">
                                <?php 
                                    $popular_services_img = get_sub_field('popular-services_img');

                                    if( !empty( $popular_services_img ) ): ?>
                                    <img src="<?php echo esc_url($popular_services_img['url']); ?>" alt="<?php echo esc_attr($popular_services_img['alt']); ?>" class="popular-service__img">
                                <?php endif; ?>
                            </div>
                            <div class="popular-services__decor">
                                <svg class="popular-services__svg" width="572" height="305" viewBox="0 0 572 305" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.05">
                                        <g clip-path="url(#clip0_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M217.548 97.8574C216.498 98.3102 215.138 99.0336 214.193 99.5546C213.801 99.7708 213.621 100.233 213.767 100.657C214.217 101.972 214.969 104.095 215.618 105.601C216.268 107.107 217.296 109.11 217.943 110.34C218.151 110.738 218.611 110.924 219.037 110.788C220.065 110.458 221.524 109.965 222.575 109.512C223.625 109.059 224.985 108.336 225.93 107.815C226.322 107.599 226.502 107.137 226.356 106.712C225.906 105.397 225.154 103.275 224.505 101.769C223.855 100.262 222.827 98.2591 222.181 97.029C221.972 96.6316 221.512 96.4451 221.086 96.5819C220.058 96.9116 218.599 97.4045 217.548 97.8574ZM213.634 98.5448C214.582 98.0224 215.985 97.275 217.092 96.7978C218.198 96.3207 219.705 95.8133 220.735 95.4827C221.702 95.1724 222.741 95.5997 223.209 96.4895C223.856 97.7201 224.902 99.7579 225.571 101.309C226.24 102.86 227.004 105.019 227.454 106.334C227.78 107.285 227.378 108.334 226.489 108.825C225.541 109.347 224.138 110.094 223.032 110.572C221.925 111.049 220.418 111.556 219.388 111.887C218.421 112.197 217.382 111.77 216.914 110.88C216.267 109.649 215.221 107.612 214.552 106.061C213.883 104.51 213.119 102.35 212.669 101.035C212.343 100.084 212.745 99.0351 213.634 98.5448Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M218.005 106.247C218.131 106.54 218.472 106.674 218.767 106.547L223.032 104.707C223.326 104.58 223.463 104.24 223.337 103.948C223.21 103.655 222.869 103.521 222.575 103.648L218.31 105.487C218.015 105.614 217.879 105.955 218.005 106.247Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M216.786 103.422C216.913 103.714 217.254 103.849 217.548 103.722L219.681 102.802C219.975 102.675 220.112 102.335 219.985 102.042C219.859 101.75 219.518 101.615 219.224 101.742L217.091 102.662C216.797 102.789 216.66 103.129 216.786 103.422Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip1_2644_7243)">
                                            <path d="M102.338 113.609C102.441 114.01 102.2 114.419 101.799 114.522C101.397 114.625 100.989 114.383 100.885 113.982C100.782 113.581 101.024 113.172 101.425 113.069C101.826 112.966 102.235 113.208 102.338 113.609Z" fill="white" />
                                            <path d="M101.591 110.703C101.695 111.104 101.453 111.513 101.052 111.616C100.651 111.719 100.242 111.478 100.139 111.077C100.036 110.675 100.277 110.267 100.678 110.163C101.08 110.06 101.488 110.302 101.591 110.703Z" fill="white" />
                                            <path d="M105.244 112.862C105.347 113.263 105.105 113.672 104.704 113.775C104.303 113.878 103.894 113.637 103.791 113.235C103.688 112.834 103.93 112.425 104.331 112.322C104.732 112.219 105.141 112.461 105.244 112.862Z" fill="white" />
                                            <path d="M104.497 109.956C104.6 110.358 104.358 110.766 103.957 110.869C103.556 110.973 103.147 110.731 103.044 110.33C102.941 109.929 103.183 109.52 103.584 109.417C103.985 109.314 104.394 109.555 104.497 109.956Z" fill="white" />
                                            <path d="M107.403 109.21C107.506 109.611 107.264 110.02 106.863 110.123C106.462 110.226 106.053 109.984 105.95 109.583C105.847 109.182 106.088 108.773 106.489 108.67C106.891 108.567 107.299 108.808 107.403 109.21Z" fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M102.604 105.603C101.066 105.998 98.9998 106.671 97.7134 107.104C97.29 107.247 97.0367 107.671 97.1123 108.111C97.3304 109.379 97.6923 111.35 98.0579 112.773C98.4235 114.195 99.0571 116.097 99.4775 117.313C99.6231 117.735 100.05 117.984 100.489 117.905C101.825 117.664 103.96 117.257 105.498 116.862C107.035 116.467 109.101 115.794 110.388 115.361C110.811 115.219 111.065 114.794 110.989 114.355C110.771 113.086 110.409 111.115 110.043 109.692C109.678 108.27 109.044 106.368 108.624 105.152C108.478 104.731 108.052 104.481 107.612 104.56C106.276 104.801 104.141 105.208 102.604 105.603ZM97.3546 106.038C98.6416 105.605 100.742 104.92 102.324 104.514C103.905 104.107 106.076 103.694 107.412 103.453C108.397 103.275 109.36 103.838 109.687 104.785C110.108 106.002 110.755 107.941 111.133 109.412C111.511 110.883 111.879 112.895 112.098 114.164C112.267 115.151 111.695 116.108 110.747 116.427C109.46 116.86 107.359 117.545 105.778 117.952C104.196 118.358 102.026 118.771 100.689 119.012C99.7046 119.19 98.7413 118.627 98.4142 117.681C97.9935 116.464 97.3464 114.524 96.9683 113.053C96.5903 111.582 96.2219 109.571 96.0035 108.301C95.8338 107.315 96.4064 106.357 97.3546 106.038Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M99.9578 104.347C100.259 104.27 100.565 104.451 100.643 104.752L101.109 106.568C101.187 106.869 101.005 107.175 100.705 107.253C100.404 107.33 100.097 107.149 100.02 106.848L99.5531 105.032C99.4757 104.731 99.6569 104.425 99.9578 104.347Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M104.316 103.227C104.617 103.15 104.924 103.331 105.001 103.632L105.468 105.448C105.545 105.749 105.364 106.055 105.063 106.133C104.762 106.21 104.455 106.029 104.378 105.728L103.911 103.912C103.834 103.611 104.015 103.304 104.316 103.227Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip2_2644_7243)">
                                            <path d="M214.656 184.439C214.59 184.78 214.261 185.003 213.92 184.937C213.578 184.872 213.355 184.542 213.421 184.201C213.487 183.86 213.816 183.636 214.157 183.702C214.499 183.768 214.722 184.098 214.656 184.439Z" fill="white" />
                                            <path d="M215.132 181.968C215.066 182.309 214.736 182.533 214.395 182.467C214.054 182.401 213.831 182.071 213.897 181.73C213.962 181.389 214.292 181.166 214.633 181.232C214.974 181.297 215.198 181.627 215.132 181.968Z" fill="white" />
                                            <path d="M217.127 184.915C217.061 185.256 216.731 185.479 216.39 185.413C216.049 185.348 215.826 185.018 215.891 184.677C215.957 184.336 216.287 184.112 216.628 184.178C216.969 184.244 217.192 184.573 217.127 184.915Z" fill="white" />
                                            <path d="M217.602 182.444C217.537 182.785 217.207 183.008 216.866 182.943C216.525 182.877 216.301 182.547 216.367 182.206C216.433 181.865 216.763 181.642 217.104 181.708C217.445 181.773 217.668 182.103 217.602 182.444Z" fill="white" />
                                            <path d="M220.073 182.92C220.007 183.261 219.677 183.484 219.336 183.419C218.995 183.353 218.772 183.023 218.838 182.682C218.903 182.341 219.233 182.118 219.574 182.183C219.915 182.249 220.138 182.579 220.073 182.92Z" fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M217.728 178.465C216.421 178.213 214.613 177.983 213.483 177.849C213.111 177.806 212.766 178.037 212.666 178.397C212.377 179.436 211.944 181.061 211.711 182.27C211.478 183.48 211.276 185.148 211.159 186.221C211.118 186.593 211.352 186.935 211.714 187.033C212.813 187.329 214.577 187.786 215.884 188.038C217.192 188.29 219 188.521 220.13 188.654C220.502 188.698 220.846 188.467 220.947 188.106C221.236 187.067 221.669 185.442 221.902 184.233C222.135 183.024 222.336 181.355 222.454 180.282C222.494 179.91 222.26 179.568 221.899 179.47C220.8 179.174 219.036 178.717 217.728 178.465ZM213.593 176.912C214.724 177.046 216.562 177.28 217.907 177.539C219.251 177.798 221.045 178.263 222.144 178.56C222.954 178.778 223.483 179.55 223.391 180.385C223.274 181.458 223.069 183.161 222.828 184.411C222.587 185.662 222.145 187.319 221.855 188.359C221.63 189.168 220.853 189.689 220.02 189.591C218.889 189.458 217.05 189.223 215.706 188.964C214.361 188.706 212.568 188.24 211.468 187.944C210.658 187.725 210.13 186.953 210.221 186.118C210.339 185.045 210.544 183.342 210.785 182.092C211.025 180.841 211.467 179.184 211.757 178.144C211.982 177.335 212.76 176.814 213.593 176.912Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M216.173 176.564C216.429 176.613 216.596 176.861 216.547 177.117L216.249 178.661C216.2 178.916 215.953 179.084 215.697 179.035C215.441 178.985 215.274 178.738 215.323 178.482L215.62 176.938C215.67 176.682 215.917 176.515 216.173 176.564Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M219.878 177.278C220.134 177.327 220.302 177.575 220.252 177.83L219.955 179.374C219.906 179.63 219.658 179.798 219.403 179.748C219.147 179.699 218.979 179.452 219.029 179.196L219.326 177.652C219.375 177.396 219.623 177.229 219.878 177.278Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip3_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M144.912 141.705C144.937 141.459 145.157 141.279 145.404 141.305L150.165 141.794C150.412 141.819 150.591 142.039 150.566 142.286C150.54 142.532 150.32 142.712 150.074 142.686L145.312 142.197C145.066 142.172 144.886 141.952 144.912 141.705Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M144.667 144.086C144.693 143.839 144.913 143.66 145.159 143.685L147.54 143.93C147.787 143.955 147.966 144.175 147.941 144.422C147.915 144.668 147.695 144.848 147.448 144.822L145.068 144.578C144.821 144.553 144.642 144.332 144.667 144.086Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M148.121 138.276C146.861 138.146 145.129 138.079 144.046 138.047C143.69 138.037 143.383 138.284 143.318 138.634C143.131 139.643 142.857 141.218 142.737 142.384C142.617 143.549 142.566 145.148 142.544 146.174C142.536 146.529 142.787 146.834 143.138 146.897C144.204 147.085 145.914 147.371 147.173 147.501C148.433 147.63 150.165 147.698 151.248 147.729C151.604 147.74 151.911 147.492 151.976 147.142C152.163 146.133 152.437 144.558 152.557 143.392C152.677 142.227 152.728 140.629 152.75 139.603C152.758 139.247 152.507 138.942 152.157 138.88C151.09 138.691 149.38 138.405 148.121 138.276ZM144.073 137.15C145.155 137.182 146.917 137.25 148.212 137.383C149.508 137.516 151.247 137.807 152.313 137.996C153.099 138.135 153.664 138.823 153.647 139.621C153.626 140.649 153.574 142.279 153.45 143.484C153.326 144.689 153.046 146.296 152.858 147.306C152.712 148.092 152.019 148.65 151.222 148.626C150.139 148.595 148.377 148.526 147.082 148.393C145.786 148.26 144.048 147.969 142.981 147.78C142.195 147.641 141.63 146.954 141.647 146.155C141.668 145.128 141.72 143.498 141.844 142.292C141.968 141.087 142.248 139.48 142.436 138.47C142.582 137.685 143.275 137.127 144.073 137.15Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M146.488 136.604C146.735 136.63 146.914 136.85 146.889 137.097L146.736 138.585C146.71 138.831 146.49 139.01 146.244 138.985C145.997 138.96 145.818 138.739 145.843 138.493L145.996 137.005C146.021 136.758 146.242 136.579 146.488 136.604Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M150.059 136.971C150.306 136.996 150.485 137.217 150.46 137.463L150.307 138.951C150.281 139.198 150.061 139.377 149.815 139.352C149.568 139.326 149.389 139.106 149.414 138.86L149.567 137.372C149.592 137.125 149.812 136.946 150.059 136.971Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip4_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M184.747 87.015C184.892 87.1985 184.858 87.4615 184.671 87.6024L182.12 89.5267C181.933 89.6676 181.663 89.633 181.518 89.4495L180.527 88.1964C180.381 88.0129 180.415 87.7499 180.602 87.609C180.789 87.4681 181.058 87.5027 181.203 87.6862L181.932 88.607L184.146 86.9379C184.332 86.797 184.602 86.8315 184.747 87.015Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M183.354 83.7041C183.221 83.6434 183.072 83.6243 182.927 83.6493L178.963 84.3364C178.611 84.3975 178.361 84.7045 178.378 85.0543L178.55 88.4485C178.613 89.6938 179.109 90.8667 180.054 91.6252C180.401 91.9039 180.766 92.1692 181.111 92.3723C181.465 92.5803 181.762 92.7005 181.979 92.7284C182.197 92.7563 182.514 92.7149 182.909 92.603C183.295 92.4937 183.715 92.3291 184.121 92.147C185.226 91.6515 186.003 90.642 186.378 89.4529L187.401 86.212C187.507 85.878 187.342 85.5178 187.017 85.3698L183.354 83.7041ZM182.773 82.8243C183.091 82.7693 183.418 82.8113 183.712 82.9448L187.374 84.6105C188.09 84.9362 188.452 85.7286 188.22 86.4634L187.197 89.7043C186.768 91.0647 185.856 92.2932 184.482 92.909C184.055 93.1005 183.593 93.2829 183.152 93.4078C182.721 93.53 182.267 93.6097 181.873 93.5591C181.479 93.5085 181.06 93.3169 180.673 93.0897C180.278 92.8576 179.877 92.5645 179.512 92.2714C178.338 91.3286 177.766 89.9098 177.694 88.485L177.522 85.0908C177.483 84.3212 178.034 83.6457 178.809 83.5114L182.773 82.8243Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip5_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M221.896 146.822C221.896 146.173 222.423 145.647 223.072 145.647C223.721 145.647 224.247 146.173 224.247 146.822V147.677C224.247 148.326 223.721 148.852 223.072 148.852C222.423 148.852 221.896 148.326 221.896 147.677V146.822ZM223.072 146.288C222.777 146.288 222.538 146.527 222.538 146.822V147.677C222.538 147.972 222.777 148.211 223.072 148.211C223.367 148.211 223.606 147.972 223.606 147.677V146.822C223.606 146.527 223.367 146.288 223.072 146.288Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M224.888 144.258C224.888 143.609 225.414 143.083 226.063 143.083C226.712 143.083 227.238 143.609 227.238 144.258V147.677C227.238 148.326 226.712 148.852 226.063 148.852C225.414 148.852 224.888 148.326 224.888 147.677V144.258ZM226.063 143.724C225.768 143.724 225.529 143.963 225.529 144.258V147.677C225.529 147.972 225.768 148.211 226.063 148.211C226.358 148.211 226.597 147.972 226.597 147.677V144.258C226.597 143.963 226.358 143.724 226.063 143.724Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M227.879 141.694C227.879 141.045 228.406 140.519 229.055 140.519C229.704 140.519 230.23 141.045 230.23 141.694V147.677C230.23 148.326 229.704 148.852 229.055 148.852C228.406 148.852 227.879 148.326 227.879 147.677V141.694ZM229.055 141.16C228.76 141.16 228.52 141.399 228.52 141.694V147.677C228.52 147.972 228.76 148.211 229.055 148.211C229.35 148.211 229.589 147.972 229.589 147.677V141.694C229.589 141.399 229.35 141.16 229.055 141.16Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip6_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M106.187 169.534C106.205 169.511 106.224 169.503 106.247 169.502C107.025 169.489 107.798 169.654 108.508 169.987C109.424 170.418 110.192 171.11 110.714 171.977C111.237 172.844 111.491 173.846 111.444 174.857C111.397 175.868 111.051 176.843 110.45 177.657C109.849 178.472 109.02 179.09 108.068 179.433C107.116 179.777 106.083 179.83 105.101 179.587C104.118 179.343 103.23 178.814 102.548 178.066C102.021 177.486 101.635 176.796 101.418 176.049C101.411 176.026 101.413 176.006 101.431 175.982C101.451 175.954 101.489 175.925 101.544 175.917L105.667 175.295C106.391 175.185 106.89 174.509 106.781 173.785L106.158 169.661C106.15 169.607 106.166 169.562 106.187 169.534ZM106.228 168.365C105.414 168.379 104.928 169.13 105.034 169.831L105.656 173.954C105.672 174.058 105.6 174.154 105.497 174.17L101.374 174.792C100.673 174.898 100.098 175.584 100.326 176.367C100.591 177.279 101.063 178.123 101.708 178.831C102.541 179.746 103.626 180.393 104.827 180.69C106.028 180.988 107.29 180.923 108.454 180.503C109.617 180.083 110.631 179.328 111.365 178.332C112.099 177.337 112.522 176.146 112.58 174.91C112.637 173.674 112.327 172.449 111.688 171.39C111.05 170.33 110.111 169.484 108.991 168.958C108.124 168.551 107.179 168.349 106.228 168.365Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M98.5795 172.454C98.5764 172.448 98.5733 172.439 98.5732 172.424C98.5661 171.407 98.8872 170.407 99.4984 169.578C100.11 168.75 100.97 168.148 101.944 167.854C101.958 167.85 101.968 167.851 101.974 167.852C101.982 167.853 101.993 167.857 102.006 167.866C102.034 167.885 102.062 167.924 102.07 167.978L102.636 171.727C102.652 171.83 102.581 171.927 102.477 171.942L98.7287 172.508C98.6742 172.516 98.6291 172.5 98.6026 172.48C98.5899 172.47 98.5831 172.461 98.5795 172.454ZM97.436 172.432C97.4417 173.253 98.1996 173.738 98.8985 173.633L102.647 173.067C103.371 172.957 103.87 172.281 103.761 171.557L103.195 167.808C103.089 167.11 102.402 166.529 101.616 166.765C100.408 167.13 99.3412 167.876 98.5832 168.903C97.8253 169.931 97.4272 171.17 97.436 172.432Z"
                                            fill="white" />
                                        </g>
                                    </g>
                                    <g opacity="0.03">
                                        <g clip-path="url(#clip7_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M61.95 102.381C61.0697 102.06 59.8524 101.724 58.9964 101.503C58.6412 101.411 58.2743 101.585 58.1219 101.919C57.6501 102.956 56.9027 104.643 56.4415 105.905C55.9803 107.168 55.4646 108.939 55.1572 110.036C55.0579 110.39 55.2264 110.76 55.5572 110.918C56.3547 111.3 57.5014 111.829 58.3817 112.15C59.2619 112.472 60.4792 112.807 61.3352 113.029C61.6904 113.121 62.0574 112.947 62.2098 112.612C62.6816 111.575 63.4289 109.889 63.8901 108.626C64.3513 107.363 64.8671 105.592 65.1744 104.495C65.2737 104.141 65.1053 103.772 64.7744 103.613C63.977 103.231 62.8302 102.703 61.95 102.381ZM59.2325 100.587C60.0907 100.809 61.347 101.154 62.2744 101.493C63.2017 101.832 64.3845 102.378 65.1841 102.761C65.9346 103.121 66.3128 103.96 66.0904 104.753C65.783 105.85 65.2588 107.653 64.784 108.953C64.3091 110.252 63.5482 111.968 63.0762 113.005C62.735 113.755 61.9048 114.153 61.0992 113.944C60.2409 113.722 58.9846 113.377 58.0573 113.038C57.1299 112.7 55.9471 112.154 55.1476 111.77C54.397 111.411 54.0189 110.571 54.2412 109.778C54.5487 108.681 55.0729 106.879 55.5477 105.579C56.0225 104.279 56.7835 102.563 57.2554 101.526C57.5967 100.776 58.4268 100.378 59.2325 100.587Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M57.4987 107.634C57.4091 107.879 57.5366 108.151 57.7834 108.241L61.3588 109.547C61.6056 109.637 61.8783 109.511 61.9679 109.266C62.0575 109.021 61.93 108.749 61.6832 108.659L58.1078 107.353C57.861 107.263 57.5883 107.388 57.4987 107.634Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M58.3638 105.265C58.2742 105.511 58.4017 105.782 58.6485 105.873L60.4361 106.526C60.683 106.616 60.9557 106.49 61.0453 106.245C61.1348 106 61.0074 105.728 60.7605 105.637L58.9729 104.985C58.7261 104.894 58.4533 105.02 58.3638 105.265Z"
                                            fill="white" />
                                        </g>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9316 178.445C17.9316 178.24 18.098 178.074 18.3031 178.074H22.2656C22.4708 178.074 22.6371 178.24 22.6371 178.445C22.6371 178.65 22.4708 178.817 22.2656 178.817H18.3031C18.098 178.817 17.9316 178.65 17.9316 178.445Z"
                                        fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9316 180.427C17.9316 180.221 18.098 180.055 18.3031 180.055H20.2844C20.4895 180.055 20.6558 180.221 20.6558 180.427C20.6558 180.632 20.4895 180.798 20.2844 180.798H18.3031C18.098 180.798 17.9316 180.632 17.9316 180.427Z"
                                        fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.2844 175.35C19.236 175.35 17.8036 175.44 16.9096 175.506C16.6153 175.527 16.3835 175.757 16.3596 176.051C16.2907 176.898 16.198 178.218 16.198 179.188C16.198 180.158 16.2907 181.479 16.3596 182.326C16.3835 182.619 16.6153 182.849 16.9096 182.871C17.8036 182.936 19.236 183.027 20.2844 183.027C21.3328 183.027 22.7652 182.936 23.6592 182.871C23.9534 182.849 24.1852 182.619 24.2091 182.326C24.2781 181.479 24.3707 180.158 24.3707 179.188C24.3707 178.218 24.2781 176.898 24.2091 176.051C24.1852 175.757 23.9534 175.527 23.6592 175.506C22.7652 175.44 21.3328 175.35 20.2844 175.35ZM16.8553 174.765C17.7498 174.699 19.2061 174.607 20.2844 174.607C21.3626 174.607 22.819 174.699 23.7134 174.765C24.3723 174.813 24.896 175.331 24.9496 175.99C25.0186 176.838 25.1136 178.185 25.1136 179.188C25.1136 180.191 25.0186 181.538 24.9496 182.386C24.896 183.045 24.3723 183.563 23.7134 183.612C22.819 183.677 21.3626 183.77 20.2844 183.77C19.2061 183.77 17.7498 183.677 16.8553 183.612C16.1964 183.563 15.6728 183.045 15.6191 182.386C15.5501 181.538 15.4551 180.191 15.4551 179.188C15.4551 178.185 15.5501 176.838 15.6191 175.99C15.6728 175.331 16.1964 174.813 16.8553 174.765Z"
                                        fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7984 174.111C19.0036 174.111 19.1699 174.278 19.1699 174.483V175.721C19.1699 175.926 19.0036 176.093 18.7984 176.093C18.5933 176.093 18.4269 175.926 18.4269 175.721V174.483C18.4269 174.278 18.5933 174.111 18.7984 174.111Z"
                                        fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.7703 174.111C21.9755 174.111 22.1418 174.278 22.1418 174.483L22.1418 175.721C22.1418 175.926 21.9755 176.093 21.7703 176.093C21.5651 176.093 21.3988 175.926 21.3988 175.721L21.3988 174.483C21.3988 174.278 21.5651 174.111 21.7703 174.111Z"
                                        fill="white" />
                                        <g clip-path="url(#clip8_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M164.669 229.319C164.892 229.405 164.998 229.654 164.906 229.875L163.657 232.888C163.565 233.108 163.311 233.217 163.088 233.131L161.567 232.541C161.345 232.455 161.238 232.206 161.33 231.986C161.421 231.765 161.676 231.656 161.899 231.742L163.016 232.176L164.1 229.562C164.192 229.342 164.446 229.233 164.669 229.319Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M161.731 227.127C161.583 227.142 161.442 227.203 161.328 227.299L158.195 229.954C157.917 230.19 157.856 230.59 158.052 230.888L159.959 233.785C160.659 234.848 161.702 235.623 162.925 235.802C163.375 235.868 163.833 235.912 164.242 235.912C164.661 235.912 164.984 235.865 165.19 235.777C165.395 235.689 165.653 235.488 165.943 235.185C166.225 234.89 166.51 234.528 166.773 234.158C167.489 233.15 167.65 231.86 167.365 230.62L166.589 227.24C166.509 226.891 166.178 226.66 165.815 226.698L161.731 227.127ZM160.765 226.654C161.016 226.441 161.326 226.308 161.653 226.274L165.737 225.845C166.535 225.761 167.263 226.271 167.439 227.037L168.215 230.418C168.541 231.836 168.375 233.389 167.484 234.641C167.208 235.031 166.896 235.43 166.573 235.768C166.256 236.098 165.898 236.403 165.525 236.563C165.152 236.722 164.685 236.77 164.227 236.77C163.76 236.77 163.256 236.72 162.783 236.651C161.263 236.428 160.025 235.476 159.225 234.26L157.318 231.363C156.886 230.706 157.021 229.828 157.633 229.309L160.765 226.654Z"
                                            fill="white" />
                                        </g>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.845703 109.393C0.845703 108.735 1.37931 108.201 2.03755 108.201C2.69578 108.201 3.22939 108.735 3.22939 109.393V110.26C3.22939 110.918 2.69578 111.452 2.03755 111.452C1.37931 111.452 0.845703 110.918 0.845703 110.26V109.393ZM2.03755 108.851C1.73835 108.851 1.4958 109.094 1.4958 109.393V110.26C1.4958 110.559 1.73835 110.802 2.03755 110.802C2.33674 110.802 2.57929 110.559 2.57929 110.26V109.393C2.57929 109.094 2.33674 108.851 2.03755 108.851Z"
                                        fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.87948 106.793C3.87948 106.134 4.41309 105.601 5.07133 105.601C5.72956 105.601 6.26317 106.134 6.26317 106.793V110.26C6.26317 110.918 5.72956 111.452 5.07133 111.452C4.41309 111.452 3.87948 110.918 3.87948 110.26V106.793ZM5.07133 106.251C4.77213 106.251 4.52958 106.494 4.52958 106.793V110.26C4.52958 110.559 4.77213 110.802 5.07133 110.802C5.37052 110.802 5.61307 110.559 5.61307 110.26V106.793C5.61307 106.494 5.37052 106.251 5.07133 106.251Z"
                                        fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.91327 104.192C6.91327 103.534 7.44687 103 8.10511 103C8.76334 103 9.29695 103.534 9.29695 104.192V110.26C9.29695 110.918 8.76334 111.452 8.10511 111.452C7.44687 111.452 6.91327 110.918 6.91327 110.26V104.192ZM8.10511 103.651C7.80591 103.651 7.56336 103.893 7.56336 104.192V110.26C7.56336 110.559 7.80591 110.802 8.10511 110.802C8.40431 110.802 8.64685 110.559 8.64685 110.26V104.192C8.64685 103.893 8.40431 103.651 8.10511 103.651Z"
                                        fill="white" />
                                        <g clip-path="url(#clip9_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M25.2129 230.932C25.4759 230.029 26.4211 229.51 27.3238 229.773C28.2266 230.036 28.7453 230.982 28.4822 231.884L28.1358 233.073C27.8728 233.976 26.9276 234.495 26.0249 234.232C25.1221 233.968 24.6034 233.023 24.8665 232.121L25.2129 230.932ZM27.064 230.665C26.6537 230.545 26.2241 230.781 26.1045 231.192L25.7581 232.38C25.6386 232.791 25.8743 233.22 26.2847 233.34C26.695 233.459 27.1246 233.224 27.2442 232.813L27.5906 231.625C27.7101 231.214 27.4744 230.785 27.064 230.665Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M30.413 228.578C30.6761 227.675 31.6212 227.156 32.524 227.419C33.4268 227.682 33.9454 228.627 33.6823 229.53L32.2967 234.286C32.0337 235.188 31.0886 235.707 30.1858 235.444C29.283 235.181 28.7644 234.236 29.0274 233.333L30.413 228.578ZM32.2642 228.311C31.8538 228.191 31.4242 228.427 31.3047 228.837L29.9191 233.593C29.7995 234.003 30.0352 234.433 30.4456 234.552C30.856 234.672 31.2855 234.436 31.4051 234.026L32.7907 229.27C32.9103 228.86 32.6745 228.43 32.2642 228.311Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M35.6132 226.224C35.8762 225.321 36.8213 224.802 37.7241 225.065C38.6269 225.328 39.1455 226.273 38.8825 227.176L36.4577 235.498C36.1946 236.401 35.2495 236.919 34.3467 236.656C33.4439 236.393 32.9253 235.448 33.1884 234.545L35.6132 226.224ZM37.4643 225.957C37.054 225.837 36.6244 226.073 36.5048 226.483L34.08 234.805C33.9604 235.216 34.1962 235.645 34.6065 235.765C35.0169 235.884 35.4465 235.649 35.5661 235.238L37.9908 226.916C38.1104 226.506 37.8747 226.076 37.4643 225.957Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip10_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M333.477 235.447C333.316 234.682 333.806 233.93 334.572 233.769C335.337 233.608 336.088 234.098 336.249 234.863L336.462 235.871C336.623 236.637 336.133 237.388 335.368 237.549C334.602 237.71 333.851 237.22 333.69 236.455L333.477 235.447ZM334.731 234.525C334.383 234.598 334.16 234.94 334.233 235.288L334.446 236.296C334.519 236.644 334.86 236.866 335.208 236.793C335.556 236.72 335.779 236.378 335.706 236.03L335.493 235.022C335.42 234.675 335.079 234.452 334.731 234.525Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M336.369 231.68C336.207 230.915 336.697 230.164 337.463 230.002C338.228 229.841 338.979 230.331 339.141 231.096L339.99 235.128C340.151 235.894 339.661 236.645 338.895 236.806C338.13 236.967 337.379 236.477 337.218 235.712L336.369 231.68ZM337.622 230.758C337.274 230.832 337.051 231.173 337.125 231.521L337.974 235.553C338.047 235.901 338.388 236.123 338.736 236.05C339.084 235.977 339.307 235.635 339.234 235.288L338.385 231.256C338.311 230.908 337.97 230.685 337.622 230.758Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M339.26 227.913C339.099 227.148 339.588 226.397 340.354 226.236C341.119 226.074 341.87 226.564 342.032 227.33L343.517 234.385C343.679 235.151 343.189 235.902 342.423 236.063C341.658 236.224 340.907 235.735 340.746 234.969L339.26 227.913ZM340.513 226.992C340.165 227.065 339.942 227.406 340.016 227.754L341.501 234.81C341.575 235.158 341.916 235.381 342.264 235.307C342.612 235.234 342.835 234.893 342.761 234.545L341.276 227.489C341.202 227.141 340.861 226.918 340.513 226.992Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip11_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M328.583 141.798C328.606 141.789 328.622 141.792 328.639 141.802C329.181 142.136 329.643 142.591 329.985 143.134C330.428 143.835 330.653 144.652 330.631 145.481C330.61 146.31 330.343 147.114 329.865 147.791C329.386 148.468 328.718 148.988 327.944 149.286C327.17 149.583 326.325 149.644 325.516 149.461C324.708 149.279 323.971 148.86 323.4 148.259C322.829 147.658 322.449 146.9 322.309 146.083C322.2 145.45 322.238 144.804 322.417 144.192C322.423 144.174 322.433 144.161 322.456 144.152C322.482 144.141 322.521 144.138 322.563 144.157L325.684 145.545C326.232 145.789 326.875 145.542 327.119 144.994L328.507 141.873C328.525 141.832 328.556 141.807 328.583 141.798ZM329.127 141.009C328.559 140.659 327.892 140.964 327.656 141.494L326.267 144.615C326.232 144.694 326.141 144.729 326.062 144.694L322.941 143.305C322.411 143.069 321.711 143.29 321.523 143.93C321.304 144.677 321.258 145.468 321.391 146.241C321.563 147.24 322.027 148.165 322.725 148.9C323.422 149.635 324.322 150.147 325.311 150.37C326.299 150.594 327.332 150.519 328.278 150.155C329.224 149.792 330.041 149.156 330.626 148.328C331.21 147.5 331.537 146.518 331.563 145.505C331.589 144.492 331.314 143.494 330.773 142.637C330.354 141.973 329.79 141.417 329.127 141.009Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M322.043 140.459C322.044 140.453 322.046 140.446 322.052 140.436C322.496 139.73 323.158 139.181 323.946 138.879C324.733 138.576 325.593 138.54 326.395 138.767C326.406 138.77 326.412 138.775 326.417 138.778C326.421 138.783 326.427 138.79 326.432 138.802C326.443 138.828 326.445 138.867 326.427 138.908L325.165 141.746C325.13 141.824 325.038 141.859 324.96 141.824L322.122 140.562C322.081 140.544 322.057 140.513 322.048 140.487C322.043 140.474 322.043 140.465 322.043 140.459ZM321.263 139.939C320.905 140.509 321.215 141.178 321.744 141.413L324.581 142.675C325.13 142.919 325.772 142.673 326.016 142.124L327.278 139.287C327.514 138.758 327.295 138.054 326.648 137.871C325.654 137.589 324.588 137.634 323.612 138.009C322.635 138.384 321.814 139.064 321.263 139.939Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip12_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M31.9175 9.54593C30.9297 8.71825 29.5125 7.71524 28.5094 7.02787C28.0932 6.74264 27.5372 6.79587 27.1835 7.15752C26.0884 8.27706 24.3326 10.1084 23.1454 11.5252C21.9582 12.9421 20.4624 14.9912 19.5518 16.2654C19.2576 16.6769 19.3025 17.2336 19.6562 17.5935C20.5085 18.4608 21.744 19.6806 22.7318 20.5083C23.7196 21.336 25.1368 22.339 26.1399 23.0264C26.5561 23.3116 27.112 23.2584 27.4658 22.8967C28.5609 21.7772 30.3167 19.9458 31.5038 18.529C32.691 17.1122 34.1869 15.063 35.0975 13.7889C35.3916 13.3773 35.3468 12.8206 34.9931 12.4607C34.1408 11.5934 32.9052 10.3736 31.9175 9.54593ZM29.2431 5.95436C30.2488 6.64355 31.7119 7.67737 32.7525 8.54935C33.7932 9.42132 35.0671 10.6809 35.9216 11.5505C36.7238 12.3668 36.82 13.6292 36.1613 14.5508C35.2504 15.8254 33.7291 17.9107 32.5068 19.3694C31.2846 20.8281 29.4976 22.6909 28.4021 23.8108C27.61 24.6206 26.3503 24.7468 25.4062 24.0999C24.4005 23.4107 22.9374 22.3769 21.8967 21.5049C20.8561 20.6329 19.5822 19.3733 18.7276 18.5037C17.9254 17.6874 17.8293 16.4251 18.4879 15.5035C19.3989 14.2289 20.9201 12.1435 22.1424 10.6848C23.3647 9.22609 25.1517 7.36336 26.2472 6.24342C27.0393 5.43364 28.299 5.3074 29.2431 5.95436Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.7037 14.2548C23.4731 14.53 23.5107 14.9412 23.7877 15.1733L27.7997 18.5351C28.0767 18.7672 28.4881 18.7322 28.7187 18.457C28.9493 18.1818 28.9117 17.7706 28.6348 17.5385L24.6227 14.1767C24.3458 13.9446 23.9343 13.9796 23.7037 14.2548Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M25.9305 11.5972C25.6999 11.8724 25.7375 12.2837 26.0145 12.5157L28.0205 14.1966C28.2975 14.4287 28.709 14.3938 28.9396 14.1186C29.1701 13.8434 29.1325 13.4321 28.8556 13.2001L26.8496 11.5192C26.5726 11.2871 26.1611 11.322 25.9305 11.5972Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip13_2644_7243)">
                                            <path d="M176.998 57.0072C176.864 57.5991 176.275 57.9698 175.683 57.8354C175.091 57.7009 174.721 57.1121 174.855 56.5202C174.99 55.9284 175.578 55.5576 176.17 55.6921C176.762 55.8266 177.133 56.4154 176.998 57.0072Z" fill="white" />
                                            <path d="M177.972 52.7206C177.838 53.3125 177.249 53.6833 176.657 53.5488C176.065 53.4143 175.695 52.8255 175.829 52.2337C175.963 51.6418 176.552 51.271 177.144 51.4055C177.736 51.54 178.107 52.1288 177.972 52.7206Z" fill="white" />
                                            <path d="M181.285 57.9811C181.15 58.573 180.562 58.9438 179.97 58.8093C179.378 58.6748 179.007 58.086 179.142 57.4942C179.276 56.9023 179.865 56.5315 180.457 56.666C181.049 56.8005 181.419 57.3893 181.285 57.9811Z" fill="white" />
                                            <path d="M182.259 53.6946C182.124 54.2864 181.536 54.6572 180.944 54.5227C180.352 54.3882 179.981 53.7994 180.116 53.2076C180.25 52.6157 180.839 52.245 181.431 52.3794C182.023 52.5139 182.393 53.1027 182.259 53.6946Z" fill="white" />
                                            <path d="M186.545 54.6685C186.411 55.2603 185.822 55.6311 185.23 55.4967C184.638 55.3622 184.268 54.7734 184.402 54.1815C184.537 53.5897 185.125 53.2189 185.717 53.3534C186.309 53.4878 186.68 54.0766 186.545 54.6685Z" fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M182.709 46.7533C180.441 46.2379 177.297 45.7303 175.331 45.4324C174.683 45.3343 174.069 45.7178 173.873 46.341C173.307 48.1398 172.458 50.9512 171.981 53.0498C171.504 55.1484 171.055 58.0509 170.788 59.9175C170.696 60.5642 171.084 61.1755 171.71 61.3668C173.612 61.9478 176.667 62.8484 178.935 63.3638C181.203 63.8792 184.347 64.3868 186.313 64.6847C186.961 64.7828 187.575 64.3993 187.771 63.7761C188.337 61.9773 189.186 59.1659 189.663 57.0673C190.14 54.9687 190.589 52.0662 190.856 50.1996C190.948 49.5529 190.56 48.9415 189.934 48.7503C188.032 48.1693 184.977 47.2687 182.709 46.7533ZM175.577 43.8025C177.545 44.1006 180.741 44.6158 183.074 45.1458C185.407 45.6758 188.512 46.5925 190.415 47.1738C191.817 47.602 192.696 48.9809 192.488 50.4332C192.22 52.3013 191.764 55.2624 191.271 57.4325C190.777 59.6026 189.91 62.4703 189.344 64.2705C188.904 65.6701 187.516 66.5341 186.067 66.3145C184.099 66.0165 180.903 65.5013 178.57 64.9713C176.237 64.4413 173.132 63.5245 171.229 62.9433C169.827 62.5151 168.948 61.1362 169.156 59.6839C169.424 57.8158 169.88 54.8547 170.373 52.6846C170.866 50.5145 171.734 47.6467 172.3 45.8466C172.74 44.447 174.128 43.5829 175.577 43.8025Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M180.103 43.3437C180.547 43.4446 180.825 43.8862 180.724 44.3301L180.115 47.0092C180.014 47.4531 179.573 47.7312 179.129 47.6303C178.685 47.5294 178.407 47.0878 178.508 46.6439L179.116 43.9648C179.217 43.5209 179.659 43.2429 180.103 43.3437Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M186.533 44.8046C186.977 44.9055 187.255 45.3471 187.154 45.791L186.545 48.4701C186.444 48.914 186.003 49.1921 185.559 49.0912C185.115 48.9903 184.837 48.5487 184.938 48.1049L185.546 45.4257C185.647 44.9818 186.089 44.7038 186.533 44.8046Z"
                                            fill="white" />
                                        </g>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M319.392 52.6916C319.392 52.3069 319.703 51.9951 320.088 51.9951H327.518C327.902 51.9951 328.214 52.3069 328.214 52.6916C328.214 53.0763 327.902 53.3882 327.518 53.3882H320.088C319.703 53.3882 319.392 53.0763 319.392 52.6916Z"
                                        fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M319.392 56.4065C319.392 56.0218 319.703 55.7099 320.088 55.7099H323.803C324.188 55.7099 324.499 56.0218 324.499 56.4065C324.499 56.7911 324.188 57.103 323.803 57.103H320.088C319.703 57.103 319.392 56.7911 319.392 56.4065Z"
                                        fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M323.803 46.8872C321.837 46.8872 319.151 47.0575 317.475 47.1802C316.924 47.2206 316.489 47.6516 316.444 48.2019C316.315 49.7901 316.141 52.266 316.141 54.0847C316.141 55.9034 316.315 58.3793 316.444 59.9675C316.489 60.5177 316.924 60.9488 317.475 60.9892C319.151 61.1118 321.837 61.2822 323.803 61.2822C325.769 61.2822 328.454 61.1118 330.131 60.9892C330.682 60.9488 331.117 60.5177 331.162 59.9675C331.291 58.3793 331.465 55.9034 331.465 54.0847C331.465 52.266 331.291 49.7901 331.162 48.2019C331.117 47.6516 330.682 47.2206 330.131 47.1802C328.454 47.0575 325.769 46.8872 323.803 46.8872ZM317.374 45.7908C319.051 45.6681 321.781 45.4941 323.803 45.4941C325.825 45.4941 328.555 45.6681 330.232 45.7908C331.468 45.8812 332.45 46.8531 332.55 48.0889C332.68 49.6783 332.858 52.204 332.858 54.0847C332.858 55.9653 332.68 58.4911 332.55 60.0805C332.45 61.3163 331.468 62.2881 330.232 62.3785C328.555 62.5012 325.825 62.6752 323.803 62.6752C321.781 62.6752 319.051 62.5012 317.374 62.3785C316.138 62.2881 315.156 61.3163 315.056 60.0805C314.926 58.4911 314.748 55.9653 314.748 54.0847C314.748 52.204 314.926 49.6783 315.056 48.0889C315.156 46.8531 316.138 45.8812 317.374 45.7908Z"
                                        fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M321.017 44.5654C321.402 44.5654 321.713 44.8773 321.713 45.262V47.5837C321.713 47.9684 321.402 48.2803 321.017 48.2803C320.632 48.2803 320.32 47.9684 320.32 47.5837V45.262C320.32 44.8773 320.632 44.5654 321.017 44.5654Z"
                                        fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M326.589 44.5654C326.974 44.5654 327.286 44.8773 327.286 45.262V47.5837C327.286 47.9684 326.974 48.2803 326.589 48.2803C326.204 48.2803 325.893 47.9684 325.893 47.5837L325.893 45.262C325.893 44.8773 326.204 44.5654 326.589 44.5654Z"
                                        fill="white" />
                                        <g clip-path="url(#clip14_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M267.254 22.4296C267.545 22.603 267.635 22.9764 267.455 23.2637L264.995 27.1862C264.814 27.4734 264.432 27.5657 264.141 27.3923L262.151 26.2082C261.86 26.0348 261.77 25.6614 261.95 25.3742C262.13 25.087 262.512 24.9947 262.804 25.1681L264.266 26.0382L266.4 22.6357C266.58 22.3485 266.962 22.2562 267.254 22.4296Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M263.659 18.667C263.447 18.6538 263.235 18.7049 263.053 18.8133L258.041 21.7906C257.596 22.0552 257.416 22.5999 257.621 23.0643L259.606 27.5701C260.335 29.2232 261.612 30.5545 263.282 31.0935C263.896 31.2915 264.527 31.4623 265.099 31.5587C265.686 31.6575 266.149 31.667 266.458 31.5925C266.767 31.518 267.175 31.2981 267.652 30.9426C268.118 30.5956 268.601 30.1558 269.057 29.6997C270.297 28.458 270.827 26.6906 270.721 24.8872L270.432 19.9719C270.402 19.4653 269.994 19.0627 269.477 19.0304L263.659 18.667ZM262.418 17.7763C262.819 17.5378 263.285 17.4254 263.751 17.4545L269.569 17.8178C270.706 17.8889 271.605 18.7747 271.671 19.8892L271.959 24.8045C272.08 26.8678 271.481 29.0015 269.939 30.5447C269.46 31.0244 268.929 31.5099 268.397 31.9065C267.876 32.2947 267.303 32.6369 266.743 32.772C266.183 32.9072 265.517 32.8641 264.877 32.7562C264.222 32.646 263.528 32.4561 262.883 32.2479C260.807 31.578 259.3 29.9529 258.466 28.0615L256.481 23.5557C256.031 22.5341 256.427 21.3358 257.406 20.7537L262.418 17.7763Z"
                                            fill="white" />
                                        </g>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M51.0684 66.9563C51.0684 65.5458 52.2118 64.4023 53.6223 64.4023C55.0328 64.4023 56.1763 65.5458 56.1763 66.9563V68.8137C56.1763 70.2242 55.0328 71.3676 53.6223 71.3676C52.2118 71.3676 51.0684 70.2242 51.0684 68.8137V66.9563ZM53.6223 65.7954C52.9812 65.7954 52.4614 66.3151 52.4614 66.9563V68.8137C52.4614 69.4548 52.9812 69.9746 53.6223 69.9746C54.2634 69.9746 54.7832 69.4548 54.7832 68.8137V66.9563C54.7832 66.3151 54.2634 65.7954 53.6223 65.7954Z"
                                        fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M57.5693 61.384C57.5693 59.9735 58.7128 58.8301 60.1233 58.8301C61.5338 58.8301 62.6772 59.9735 62.6772 61.384V68.8137C62.6772 70.2242 61.5338 71.3676 60.1233 71.3676C58.7128 71.3676 57.5693 70.2242 57.5693 68.8137V61.384ZM60.1233 60.2231C59.4821 60.2231 58.9624 60.7429 58.9624 61.384V68.8137C58.9624 69.4548 59.4821 69.9746 60.1233 69.9746C60.7644 69.9746 61.2842 69.4548 61.2842 68.8137V61.384C61.2842 60.7429 60.7644 60.2231 60.1233 60.2231Z"
                                        fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M64.0703 55.8118C64.0703 54.4013 65.2137 53.2578 66.6242 53.2578C68.0347 53.2578 69.1782 54.4013 69.1782 55.8118V68.8137C69.1782 70.2242 68.0347 71.3676 66.6242 71.3676C65.2137 71.3676 64.0703 70.2242 64.0703 68.8137V55.8118ZM66.6242 54.6509C65.9831 54.6509 65.4633 55.1706 65.4633 55.8118V68.8137C65.4633 69.4548 65.9831 69.9746 66.6242 69.9746C67.2654 69.9746 67.7851 69.4548 67.7851 68.8137V55.8118C67.7851 55.1706 67.2654 54.6509 66.6242 54.6509Z"
                                        fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M115.59 11.1993C115.604 11.1857 115.617 11.1823 115.632 11.1844C116.137 11.2521 116.623 11.4345 117.05 11.7199C117.601 12.0884 118.031 12.6122 118.285 13.225C118.539 13.8379 118.605 14.5123 118.476 15.1629C118.346 15.8135 118.027 16.4111 117.558 16.8801C117.089 17.3492 116.491 17.6686 115.841 17.798C115.19 17.9274 114.516 17.861 113.903 17.6072C113.29 17.3533 112.766 16.9234 112.398 16.3719C112.112 15.9448 111.93 15.4596 111.862 14.9544C111.86 14.9391 111.863 14.9264 111.877 14.9123C111.893 14.8959 111.921 14.8812 111.957 14.8812H114.689C115.17 14.8812 115.559 14.4919 115.559 14.0117L115.559 11.2788C115.559 11.2428 115.574 11.215 115.59 11.1993ZM115.731 10.4457C115.202 10.3747 114.814 10.8143 114.814 11.2788L114.814 14.0117C114.814 14.0803 114.758 14.1359 114.689 14.1359H111.957C111.492 14.1359 111.052 14.5244 111.123 15.0535C111.206 15.671 111.429 16.264 111.778 16.786C112.228 17.4601 112.869 17.9855 113.618 18.2957C114.367 18.606 115.191 18.6872 115.986 18.529C116.781 18.3708 117.512 17.9804 118.085 17.4071C118.658 16.8338 119.049 16.1034 119.207 15.3083C119.365 14.5131 119.284 13.6889 118.973 12.9398C118.663 12.1908 118.138 11.5506 117.464 11.1001C116.942 10.7514 116.349 10.5285 115.731 10.4457Z"
                                        fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M110.375 12.3469C110.373 12.3427 110.372 12.3368 110.373 12.3273C110.468 11.6671 110.774 11.0507 111.251 10.5736C111.728 10.0964 112.345 9.79056 113.005 9.69561C113.015 9.69424 113.02 9.69539 113.025 9.69682C113.03 9.69847 113.036 9.70199 113.044 9.70921C113.06 9.72443 113.075 9.75208 113.075 9.7882L113.075 12.2726C113.075 12.3412 113.019 12.3968 112.95 12.3968H110.466C110.43 12.3968 110.402 12.382 110.387 12.3661C110.38 12.3586 110.376 12.3518 110.375 12.3469ZM109.636 12.2212C109.559 12.7536 110.003 13.1421 110.466 13.1421H112.95C113.431 13.1421 113.82 12.7528 113.82 12.2726V9.7882C113.82 9.32499 113.431 8.88131 112.899 8.95788C112.08 9.07562 111.316 9.45486 110.724 10.0465C110.133 10.6382 109.753 11.4026 109.636 12.2212Z"
                                        fill="white" />
                                    </g>
                                    <g opacity="0.1">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M295.167 233.507C293.485 233.507 291.188 233.667 289.766 233.781C289.304 233.819 288.952 234.192 288.926 234.671C288.858 235.904 288.782 237.721 288.826 239.069C288.871 240.416 289.066 242.234 289.215 243.466C289.273 243.945 289.65 244.319 290.114 244.356C291.544 244.47 293.851 244.63 295.534 244.63C297.216 244.63 299.513 244.47 300.935 244.356C301.397 244.319 301.749 243.945 301.775 243.466C301.843 242.234 301.919 240.416 301.875 239.069C301.831 237.721 301.635 235.904 301.486 234.671C301.428 234.192 301.051 233.819 300.587 233.781C299.157 233.667 296.85 233.507 295.167 233.507ZM289.635 232.549C291.057 232.435 293.394 232.271 295.127 232.271C296.859 232.271 299.207 232.435 300.637 232.549C301.676 232.632 302.532 233.476 302.663 234.558C302.813 235.793 303.015 237.66 303.061 239.069C303.108 240.477 303.028 242.344 302.96 243.579C302.901 244.661 302.101 245.505 301.066 245.588C299.644 245.702 297.307 245.866 295.574 245.866C293.842 245.866 291.494 245.702 290.064 245.588C289.025 245.505 288.169 244.661 288.038 243.579C287.889 242.344 287.686 240.477 287.64 239.069C287.594 237.66 287.673 235.793 287.741 234.558C287.8 233.476 288.601 232.632 289.635 232.549Z"
                                        fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M291.879 247.719C291.868 247.378 292.124 247.102 292.452 247.102H298.779C299.106 247.102 299.381 247.378 299.392 247.719C299.403 248.061 299.147 248.337 298.819 248.337H292.493C292.165 248.337 291.89 248.061 291.879 247.719Z"
                                        fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M288.526 241.952C288.515 241.611 288.771 241.334 289.099 241.334H301.752C302.079 241.334 302.354 241.611 302.365 241.952C302.377 242.293 302.12 242.57 301.793 242.57H289.139C288.812 242.57 288.537 242.293 288.526 241.952Z"
                                        fill="white" />
                                        <g clip-path="url(#clip15_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M372.792 286.276C371.921 286.617 370.759 287.168 370.042 287.517C369.809 287.631 369.689 287.9 369.756 288.16C369.928 288.827 370.193 289.807 370.442 290.513C370.691 291.219 371.097 292.143 371.381 292.767C371.491 293.009 371.749 293.131 371.995 293.057C372.754 292.827 373.976 292.444 374.846 292.102C375.717 291.761 376.879 291.21 377.596 290.861C377.829 290.747 377.948 290.478 377.882 290.218C377.71 289.551 377.445 288.571 377.196 287.865C376.947 287.159 376.541 286.235 376.257 285.611C376.147 285.369 375.889 285.247 375.643 285.321C374.884 285.551 373.662 285.934 372.792 286.276ZM369.767 286.89C370.484 286.541 371.667 285.98 372.563 285.628C373.46 285.277 374.703 284.887 375.462 284.657C376.014 284.491 376.599 284.764 376.848 285.312C377.132 285.937 377.55 286.886 377.81 287.624C378.07 288.362 378.342 289.369 378.514 290.038C378.665 290.624 378.392 291.234 377.871 291.488C377.154 291.837 375.971 292.398 375.075 292.75C374.178 293.101 372.935 293.491 372.176 293.721C371.624 293.887 371.039 293.613 370.79 293.066C370.506 292.441 370.088 291.492 369.828 290.754C369.568 290.016 369.296 289.009 369.124 288.34C368.973 287.754 369.246 287.144 369.767 286.89Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M373.473 294.483C373.41 294.304 373.496 294.106 373.666 294.039L376.94 292.755C377.11 292.689 377.298 292.78 377.361 292.959C377.424 293.137 377.338 293.336 377.169 293.403L373.894 294.686C373.724 294.753 373.536 294.662 373.473 294.483Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M370.77 292.104C370.707 291.925 370.793 291.726 370.963 291.66L377.512 289.092C377.682 289.026 377.87 289.117 377.933 289.295C377.996 289.474 377.91 289.673 377.74 289.739L371.191 292.307C371.022 292.374 370.833 292.283 370.77 292.104Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip16_2644_7243)">
                                            <path d="M555.555 202.91C555.638 203.202 555.498 203.504 555.244 203.584C554.99 203.664 554.717 203.491 554.634 203.199C554.552 202.906 554.691 202.604 554.945 202.525C555.2 202.445 555.473 202.617 555.555 202.91Z" fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M556.301 200.226C555.328 200.531 554.026 201.051 553.215 201.386C552.949 201.496 552.804 201.81 552.872 202.131C553.077 203.108 553.419 204.666 553.735 205.787C553.989 206.685 554.374 207.829 554.689 208.73L556.995 204.887C557.603 203.875 558.78 203.53 559.8 204.067L561.763 205.099C561.624 204.507 561.476 203.91 561.333 203.404C561.017 202.283 560.495 200.78 560.161 199.845C560.052 199.537 559.767 199.357 559.487 199.419C558.635 199.605 557.275 199.92 556.301 200.226ZM562.651 205.741C562.464 204.901 562.239 203.949 562.023 203.187C561.698 202.033 561.167 200.504 560.833 199.567C560.586 198.878 559.945 198.472 559.317 198.61C558.465 198.797 557.08 199.116 556.077 199.431C555.074 199.746 553.749 200.276 552.939 200.611C552.341 200.858 552.014 201.566 552.166 202.286C552.371 203.263 552.719 204.849 553.045 206.003C553.37 207.157 553.901 208.687 554.236 209.623C554.482 210.313 555.123 210.718 555.751 210.58C556.604 210.393 557.988 210.074 558.991 209.759C559.994 209.444 561.319 208.914 562.13 208.579C562.727 208.333 563.054 207.624 562.903 206.904C562.833 206.575 562.748 206.176 562.653 205.748C562.652 205.746 562.651 205.743 562.651 205.741ZM561.993 206.111L559.521 204.811C558.823 204.444 558.017 204.68 557.602 205.372L555.074 209.584C555.071 209.59 555.067 209.596 555.064 209.601C555.201 209.745 555.392 209.813 555.581 209.771C556.433 209.585 557.793 209.27 558.767 208.965C559.741 208.659 561.043 208.139 561.853 207.804C562.119 207.694 562.264 207.38 562.197 207.059C562.139 206.782 562.069 206.458 561.993 206.111Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip17_2644_7243)">
                                            <path d="M469.087 223.359C468.827 223.757 468.343 223.881 468.005 223.636C467.667 223.391 467.604 222.87 467.863 222.472C468.123 222.074 468.608 221.95 468.945 222.195C469.283 222.44 469.346 222.961 469.087 223.359Z" fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M472.92 221.627C471.627 220.688 469.767 219.546 468.598 218.846C468.213 218.616 467.709 218.745 467.401 219.152C466.467 220.391 464.989 222.389 463.994 223.913C463.197 225.136 462.241 226.773 461.5 228.077L468.182 227.177C469.942 226.94 471.478 228.1 471.839 229.939L472.535 233.48C473.088 232.71 473.637 231.924 474.087 231.234C475.081 229.709 476.322 227.54 477.085 226.177C477.336 225.728 477.27 225.186 476.929 224.889C475.891 223.987 474.214 222.565 472.92 221.627ZM472.647 235.256C473.44 234.177 474.327 232.937 475.004 231.899C476.029 230.329 477.291 228.12 478.055 226.757C478.617 225.752 478.469 224.527 477.703 223.862C476.665 222.96 474.958 221.512 473.626 220.546C472.293 219.579 470.4 218.417 469.23 217.716C468.368 217.2 467.23 217.492 466.541 218.405C465.606 219.645 464.101 221.677 463.077 223.248C462.052 224.818 460.79 227.027 460.027 228.39C459.464 229.395 459.613 230.62 460.378 231.285C461.417 232.187 463.123 233.635 464.455 234.601C465.788 235.568 467.681 236.73 468.851 237.431C469.713 237.947 470.851 237.655 471.54 236.742C471.855 236.324 472.235 235.816 472.639 235.266C472.642 235.263 472.644 235.259 472.647 235.256ZM471.582 234.786L470.706 230.327C470.459 229.069 469.408 228.275 468.204 228.437L460.88 229.423C460.87 229.425 460.86 229.426 460.85 229.427C460.817 229.746 460.922 230.058 461.152 230.258C462.19 231.16 463.867 232.582 465.161 233.52C466.454 234.459 468.314 235.601 469.483 236.301C469.868 236.531 470.372 236.402 470.68 235.995C470.945 235.643 471.253 235.231 471.582 234.786Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip18_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M523.076 217.193C521.433 216.923 519.165 216.711 517.746 216.595C517.279 216.557 516.861 216.879 516.753 217.359C516.425 218.819 515.924 221.161 515.667 222.893C515.41 224.625 515.21 227.017 515.099 228.513C515.063 229.005 515.368 229.446 515.824 229.56C517.209 229.906 519.43 230.435 521.073 230.705C522.715 230.976 524.984 231.187 526.403 231.304C526.869 231.342 527.288 231.02 527.396 230.54C527.723 229.08 528.225 226.737 528.482 225.005C528.738 223.273 528.939 220.881 529.049 219.385C529.086 218.893 528.78 218.452 528.325 218.339C526.94 217.993 524.718 217.464 523.076 217.193ZM517.838 215.355C519.257 215.472 521.566 215.686 523.258 215.965C524.95 216.244 527.211 216.783 528.596 217.129C529.617 217.383 530.306 218.379 530.225 219.482C530.114 220.979 529.911 223.413 529.647 225.197C529.382 226.982 528.871 229.365 528.543 230.826C528.301 231.903 527.357 232.629 526.311 232.543C524.892 232.427 522.583 232.213 520.891 231.934C519.199 231.655 516.938 231.116 515.552 230.77C514.531 230.515 513.842 229.519 513.924 228.417C514.034 226.92 514.237 224.485 514.502 222.701C514.766 220.917 515.278 218.533 515.606 217.073C515.847 215.996 516.792 215.269 517.838 215.355Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M519.544 219.547C519.866 219.6 520.086 219.918 520.036 220.258L519.065 226.809C519.014 227.148 518.713 227.38 518.391 227.327C518.069 227.274 517.849 226.956 517.9 226.617L518.871 220.066C518.921 219.726 519.223 219.494 519.544 219.547Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M522.165 223.335C522.487 223.388 522.707 223.706 522.657 224.045L522.171 227.321C522.121 227.66 521.819 227.892 521.498 227.839C521.176 227.786 520.956 227.468 521.006 227.129L521.492 223.853C521.542 223.514 521.844 223.282 522.165 223.335Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M525.758 220.571C526.079 220.625 526.299 220.942 526.249 221.282L525.278 227.833C525.228 228.172 524.926 228.404 524.604 228.351C524.283 228.298 524.063 227.98 524.113 227.641L525.084 221.09C525.134 220.75 525.436 220.518 525.758 220.571Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip19_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M553.224 291.34C552.096 291.774 550.593 292.476 549.657 292.925C549.349 293.073 549.192 293.431 549.283 293.774C549.559 294.818 550.018 296.483 550.43 297.672C550.841 298.862 551.507 300.447 551.933 301.434C552.073 301.758 552.412 301.925 552.738 301.829C553.728 301.537 555.307 301.053 556.435 300.619C557.563 300.185 559.067 299.483 560.002 299.034C560.31 298.886 560.468 298.529 560.377 298.185C560.1 297.142 559.641 295.476 559.23 294.287C558.818 293.098 558.152 291.512 557.727 290.526C557.586 290.201 557.247 290.035 556.922 290.131C555.932 290.422 554.352 290.906 553.224 291.34ZM549.304 292.108C550.24 291.659 551.771 290.944 552.933 290.497C554.094 290.05 555.702 289.558 556.692 289.266C557.422 289.051 558.188 289.426 558.502 290.154C558.928 291.14 559.606 292.754 560.03 293.979C560.454 295.204 560.92 296.9 561.197 297.944C561.401 298.713 561.045 299.52 560.355 299.851C559.419 300.3 557.889 301.016 556.727 301.463C555.565 301.91 553.957 302.402 552.967 302.693C552.237 302.909 551.472 302.533 551.158 301.806C550.732 300.819 550.054 299.205 549.63 297.98C549.206 296.755 548.739 295.06 548.462 294.016C548.258 293.246 548.615 292.439 549.304 292.108Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M551.772 294.129C551.993 294.044 552.237 294.164 552.318 294.397L553.875 298.896C553.955 299.129 553.842 299.387 553.621 299.472C553.4 299.557 553.155 299.437 553.075 299.204L551.518 294.705C551.437 294.472 551.551 294.214 551.772 294.129Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M554.684 295.558C554.905 295.473 555.149 295.593 555.23 295.826L556.008 298.075C556.089 298.308 555.975 298.566 555.754 298.651C555.533 298.736 555.289 298.616 555.208 298.383L554.43 296.134C554.349 295.901 554.463 295.643 554.684 295.558Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M556.039 292.488C556.26 292.403 556.504 292.523 556.585 292.756L558.141 297.255C558.222 297.487 558.108 297.745 557.887 297.83C557.666 297.915 557.422 297.795 557.341 297.562L555.785 293.063C555.704 292.83 555.818 292.573 556.039 292.488Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip20_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M413.732 221.397C412.082 221.749 409.851 222.368 408.482 222.76C408.04 222.887 407.754 223.32 407.794 223.791C407.877 224.766 408.011 226.062 408.195 227.02C408.379 227.977 408.734 229.227 409.018 230.159C409.155 230.609 409.578 230.89 410.032 230.825C411.438 230.625 413.722 230.279 415.371 229.926C417.02 229.574 419.252 228.955 420.621 228.563C421.063 228.436 421.349 228.003 421.309 227.532C421.226 226.557 421.091 225.261 420.907 224.303C420.723 223.345 420.368 222.096 420.085 221.164C419.948 220.714 419.525 220.433 419.071 220.497C417.665 220.698 415.381 221.044 413.732 221.397ZM408.172 221.56C409.541 221.168 411.806 220.539 413.497 220.178C415.188 219.817 417.507 219.466 418.913 219.265C419.923 219.121 420.893 219.751 421.208 220.784C421.493 221.721 421.865 223.026 422.063 224.056C422.261 225.086 422.4 226.441 422.483 227.421C422.575 228.502 421.915 229.48 420.93 229.762C419.561 230.155 417.296 230.783 415.605 231.145C413.914 231.506 411.596 231.857 410.19 232.058C409.179 232.202 408.209 231.572 407.895 230.538C407.61 229.601 407.238 228.296 407.04 227.267C406.842 226.237 406.703 224.882 406.619 223.902C406.527 222.821 407.188 221.843 408.172 221.56Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M413.263 218.96C412.061 219.216 410.456 219.621 409.377 219.901C408.941 220.014 408.664 220.412 408.69 220.835C408.712 221.19 408.747 221.542 408.799 221.816C408.864 222.153 408.658 222.481 408.339 222.549C408.019 222.617 407.708 222.4 407.644 222.063C407.575 221.707 407.536 221.291 407.513 220.915C407.447 219.841 408.151 218.938 409.096 218.694C410.176 218.414 411.801 218.003 413.029 217.741C414.257 217.479 415.905 217.189 417.003 217.004C417.964 216.841 418.946 217.384 419.281 218.4C419.399 218.756 419.517 219.156 419.585 219.511C419.65 219.848 419.444 220.176 419.125 220.244C418.805 220.312 418.494 220.095 418.43 219.758C418.377 219.484 418.279 219.145 418.168 218.809C418.036 218.409 417.634 218.156 417.19 218.231C416.093 218.417 414.465 218.703 413.263 218.96Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M412.795 216.522C412.077 216.676 411.155 216.917 410.421 217.117C409.977 217.238 409.698 217.662 409.743 218.11C409.777 218.446 409.82 218.781 409.872 219.05C409.936 219.386 409.73 219.715 409.411 219.783C409.092 219.851 408.781 219.633 408.716 219.297C408.654 218.972 408.606 218.593 408.571 218.242C408.46 217.149 409.146 216.18 410.125 215.913C410.863 215.712 411.811 215.464 412.561 215.304C413.31 215.144 414.275 214.983 415.029 214.866C416.029 214.71 417.019 215.32 417.32 216.372C417.417 216.71 417.514 217.079 417.576 217.404C417.641 217.74 417.434 218.068 417.115 218.136C416.796 218.205 416.485 217.987 416.42 217.651C416.369 217.381 416.284 217.055 416.192 216.732C416.068 216.301 415.654 216.025 415.201 216.095C414.451 216.212 413.512 216.369 412.795 216.522Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M416.328 224.055C416.571 224.284 416.593 224.677 416.376 224.933L414.634 226.997C414.46 227.203 414.178 227.264 413.941 227.145L412.757 226.552C412.463 226.405 412.338 226.034 412.478 225.724C412.618 225.414 412.969 225.282 413.263 225.429L414.047 225.822L415.496 224.106C415.712 223.85 416.085 223.827 416.328 224.055Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip21_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M359.64 200.208C359.579 200.081 359.402 200.062 359.328 200.217L357.764 203.465C357.243 204.549 356.336 205.366 355.243 205.737C355.062 205.798 354.963 206.004 355.022 206.196L355.988 209.357C356.046 209.549 356.241 209.655 356.422 209.594C357.514 209.223 358.703 209.328 359.726 209.887L362.794 211.563C362.94 211.642 363.073 211.518 363.052 211.377C362.823 209.817 362.416 207.421 361.865 205.617C361.314 203.812 360.318 201.616 359.64 200.208ZM358.276 199.644C358.774 198.609 360.177 198.576 360.691 199.643C361.372 201.057 362.405 203.33 362.987 205.235C363.569 207.141 363.988 209.622 364.218 211.19C364.392 212.372 363.235 213.208 362.257 212.675L359.189 210.999C358.445 210.592 357.581 210.516 356.786 210.786C355.985 211.058 355.125 210.589 354.865 209.738L353.9 206.578C353.64 205.727 354.078 204.817 354.879 204.545C355.674 204.275 356.334 203.681 356.713 202.893L358.276 199.644Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M364.748 197.954C364.947 197.681 365.317 197.632 365.576 197.844C367.044 199.049 368.279 200.93 368.973 203.202C369.667 205.474 369.706 207.761 369.181 209.644C369.088 209.975 368.76 210.163 368.448 210.063C368.135 209.964 367.957 209.615 368.049 209.284C368.499 207.671 368.48 205.643 367.851 203.583C367.221 201.524 366.115 199.865 364.856 198.832C364.598 198.621 364.55 198.227 364.748 197.954Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M363.05 200.235C363.286 199.998 363.659 200.009 363.884 200.26C364.732 201.208 365.486 202.602 365.98 204.219C366.474 205.836 366.633 207.431 366.469 208.723C366.426 209.065 366.129 209.304 365.806 209.257C365.483 209.209 365.256 208.893 365.3 208.551C365.436 207.481 365.309 206.077 364.858 204.6C364.407 203.123 363.733 201.905 363.03 201.12C362.805 200.869 362.814 200.472 363.05 200.235Z"
                                            fill="white" />
                                        </g>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M460.807 196.255C460.796 196.193 460.714 196.159 460.657 196.214L459.44 197.364C459.035 197.747 458.484 197.963 457.91 197.963C457.815 197.963 457.738 198.035 457.738 198.125V199.601C457.738 199.691 457.815 199.763 457.91 199.763C458.484 199.763 459.035 199.979 459.44 200.362L460.657 201.512C460.714 201.566 460.796 201.533 460.807 201.471C460.924 200.778 461.079 199.705 461.079 198.863C461.079 198.021 460.924 196.948 460.807 196.255ZM460.24 195.821C460.627 195.454 461.299 195.642 461.389 196.167C461.507 196.863 461.668 197.973 461.668 198.863C461.668 199.753 461.507 200.862 461.389 201.559C461.299 202.084 460.627 202.271 460.24 201.905L459.023 200.755C458.728 200.477 458.328 200.32 457.91 200.32C457.489 200.32 457.148 199.998 457.148 199.601V198.125C457.148 197.728 457.489 197.406 457.91 197.406C458.328 197.406 458.728 197.249 459.023 196.97L460.24 195.821Z"
                                        fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M463.565 196.036C463.699 195.949 463.883 195.981 463.975 196.108C464.499 196.829 464.813 197.802 464.813 198.863C464.813 199.924 464.499 200.897 463.975 201.618C463.883 201.745 463.699 201.777 463.565 201.69C463.431 201.603 463.397 201.43 463.489 201.303C463.938 200.685 464.223 199.825 464.223 198.863C464.223 197.901 463.938 197.041 463.489 196.423C463.397 196.296 463.431 196.123 463.565 196.036Z"
                                        fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M462.425 196.757C462.572 196.69 462.748 196.749 462.819 196.887C463.085 197.41 463.241 198.108 463.241 198.863C463.241 199.618 463.085 200.316 462.819 200.839C462.748 200.977 462.572 201.036 462.425 200.969C462.278 200.903 462.217 200.736 462.287 200.598C462.507 200.165 462.651 199.553 462.651 198.863C462.651 198.173 462.507 197.561 462.287 197.128C462.217 196.989 462.278 196.823 462.425 196.757Z"
                                        fill="white" />
                                        <g clip-path="url(#clip22_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M440.116 284.876C440.124 284.813 440.056 284.755 439.985 284.788L438.494 285.492C437.997 285.727 437.41 285.755 436.864 285.57C436.773 285.54 436.679 285.584 436.653 285.67L436.226 287.075C436.2 287.161 436.252 287.255 436.343 287.286C436.889 287.47 437.351 287.852 437.627 288.348L438.453 289.834C438.492 289.904 438.579 289.899 438.608 289.843C438.92 289.221 439.377 288.249 439.621 287.447C439.865 286.644 440.028 285.573 440.116 284.876ZM439.701 284.279C440.176 284.055 440.762 284.45 440.696 284.979C440.607 285.68 440.44 286.789 440.183 287.636C439.925 288.484 439.451 289.489 439.136 290.114C438.9 290.585 438.205 290.548 437.942 290.074L437.116 288.588C436.915 288.228 436.579 287.95 436.182 287.816C435.781 287.68 435.549 287.264 435.664 286.886L436.091 285.48C436.206 285.102 436.624 284.905 437.025 285.04C437.422 285.175 437.849 285.154 438.21 284.983L439.701 284.279Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M442.806 285.554C442.959 285.514 443.125 285.604 443.176 285.754C443.466 286.609 443.484 287.637 443.177 288.647C442.87 289.658 442.29 290.483 441.583 291.002C441.458 291.093 441.274 291.064 441.171 290.939C441.069 290.813 441.086 290.637 441.211 290.545C441.817 290.101 442.338 289.374 442.616 288.458C442.894 287.542 442.871 286.63 442.622 285.898C442.571 285.747 442.653 285.593 442.806 285.554Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M441.512 285.874C441.671 285.857 441.822 285.97 441.849 286.124C441.951 286.708 441.898 287.423 441.68 288.142C441.461 288.861 441.111 289.475 440.706 289.888C440.599 289.997 440.415 289.996 440.294 289.886C440.174 289.775 440.163 289.597 440.27 289.488C440.605 289.146 440.919 288.609 441.118 287.952C441.318 287.295 441.358 286.666 441.273 286.183C441.246 286.028 441.353 285.89 441.512 285.874Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip23_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M258.757 269.164C258.772 269.103 258.711 269.037 258.637 269.061L257.077 269.571C256.556 269.741 255.971 269.694 255.449 269.442C255.363 269.4 255.264 269.432 255.228 269.514L254.644 270.855C254.609 270.937 254.65 271.037 254.737 271.078C255.258 271.331 255.673 271.769 255.89 272.296L256.541 273.876C256.572 273.951 256.659 273.956 256.693 273.904C257.074 273.326 257.639 272.42 257.973 271.654C258.306 270.889 258.59 269.846 258.757 269.164ZM258.414 268.52C258.911 268.358 259.447 268.824 259.321 269.34C259.153 270.025 258.861 271.105 258.508 271.914C258.156 272.722 257.571 273.66 257.187 274.24C256.899 274.678 256.213 274.553 256.006 274.05L255.355 272.47C255.198 272.087 254.896 271.768 254.516 271.584C254.134 271.399 253.951 270.957 254.109 270.596L254.693 269.254C254.85 268.894 255.287 268.751 255.669 268.936C256.049 269.12 256.475 269.153 256.853 269.03L258.414 268.52Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M261.351 270.179C261.507 270.159 261.661 270.269 261.695 270.425C261.885 271.31 261.786 272.333 261.366 273.297C260.946 274.261 260.276 275.007 259.515 275.432C259.381 275.507 259.201 275.455 259.114 275.317C259.026 275.179 259.063 275.007 259.197 274.932C259.85 274.568 260.45 273.912 260.83 273.037C261.211 272.163 261.292 271.256 261.128 270.497C261.095 270.341 261.194 270.199 261.351 270.179Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M260.03 270.332C260.189 270.336 260.326 270.467 260.335 270.624C260.37 271.216 260.236 271.919 259.937 272.605C259.638 273.291 259.22 273.857 258.772 274.215C258.653 274.31 258.47 274.286 258.363 274.161C258.256 274.036 258.265 273.857 258.384 273.762C258.756 273.466 259.129 272.972 259.401 272.346C259.674 271.719 259.786 271.1 259.757 270.609C259.748 270.452 259.87 270.328 260.03 270.332Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip24_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M259.358 187.146C258.487 187.487 257.325 188.038 256.608 188.387C256.375 188.501 256.256 188.77 256.322 189.03C256.494 189.697 256.759 190.677 257.008 191.383C257.257 192.089 257.663 193.014 257.947 193.637C258.057 193.879 258.315 194.001 258.562 193.927C259.321 193.697 260.542 193.314 261.413 192.972C262.283 192.631 263.446 192.08 264.162 191.731C264.395 191.618 264.515 191.348 264.448 191.088C264.277 190.421 264.011 189.441 263.762 188.735C263.514 188.029 263.107 187.105 262.824 186.481C262.713 186.239 262.456 186.117 262.209 186.191C261.45 186.421 260.229 186.804 259.358 187.146ZM256.334 187.76C257.051 187.411 258.233 186.85 259.13 186.498C260.026 186.147 261.269 185.757 262.028 185.528C262.58 185.361 263.165 185.635 263.414 186.182C263.698 186.807 264.116 187.757 264.376 188.494C264.637 189.232 264.909 190.239 265.081 190.908C265.231 191.494 264.958 192.104 264.437 192.358C263.72 192.707 262.538 193.268 261.641 193.62C260.744 193.971 259.502 194.361 258.742 194.591C258.19 194.758 257.606 194.484 257.357 193.936C257.072 193.311 256.655 192.362 256.394 191.624C256.134 190.886 255.862 189.879 255.69 189.21C255.54 188.624 255.812 188.014 256.334 187.76Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M260.039 195.353C259.976 195.174 260.062 194.976 260.232 194.909L263.507 193.625C263.676 193.559 263.865 193.65 263.928 193.829C263.991 194.007 263.904 194.206 263.735 194.273L260.46 195.557C260.291 195.623 260.102 195.532 260.039 195.353Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M257.336 192.974C257.273 192.795 257.36 192.596 257.529 192.53L264.079 189.962C264.248 189.896 264.437 189.987 264.5 190.166C264.563 190.344 264.476 190.543 264.307 190.61L257.758 193.177C257.588 193.244 257.399 193.153 257.336 192.974Z"
                                            fill="white" />
                                        </g>
                                    </g>
                                    <g opacity="0.1">
                                        <g clip-path="url(#clip25_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M303.647 101.314C302.064 100.734 299.847 100.092 298.469 99.7089C298.021 99.5843 297.561 99.8139 297.37 100.254C296.88 101.387 296.18 103.068 295.756 104.347C295.332 105.627 294.887 107.401 294.601 108.609C294.49 109.078 294.716 109.559 295.14 109.754C296.446 110.354 298.562 111.301 300.146 111.881C301.729 112.461 303.946 113.103 305.324 113.486C305.771 113.611 306.232 113.381 306.422 112.941C306.912 111.808 307.613 110.128 308.037 108.848C308.461 107.568 308.905 105.794 309.191 104.586C309.302 104.117 309.077 103.636 308.653 103.441C307.347 102.841 305.23 101.895 303.647 101.314ZM298.771 98.5069C300.149 98.8903 302.406 99.5429 304.036 100.14C305.667 100.738 307.82 101.701 309.126 102.302C310.076 102.738 310.59 103.825 310.339 104.886C310.052 106.097 309.597 107.919 309.153 109.257C308.71 110.595 307.99 112.32 307.499 113.456C307.068 114.451 306.023 114.967 305.021 114.688C303.643 114.305 301.387 113.652 299.756 113.055C298.126 112.457 295.973 111.494 294.667 110.894C293.717 110.457 293.203 109.37 293.454 108.309C293.741 107.099 294.196 105.276 294.639 103.938C295.083 102.6 295.803 100.875 296.294 99.7394C296.724 98.7441 297.769 98.2282 298.771 98.5069Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M295.637 113.52C295.745 113.196 296.082 113.025 296.39 113.138L302.345 115.32C302.653 115.433 302.816 115.787 302.708 116.112C302.601 116.436 302.264 116.607 301.956 116.494L296.001 114.312C295.693 114.199 295.53 113.845 295.637 113.52Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M294.476 106.95C294.583 106.626 294.92 106.455 295.229 106.568L307.137 110.932C307.446 111.045 307.609 111.399 307.501 111.724C307.394 112.048 307.057 112.219 306.748 112.106L294.84 107.742C294.531 107.629 294.368 107.275 294.476 106.95Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip26_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M265.377 67.5412C264.504 67.8826 263.339 68.4337 262.62 68.7827C262.387 68.8962 262.267 69.166 262.333 69.4252C262.505 70.0929 262.772 71.0729 263.021 71.7786C263.271 72.4842 263.678 73.409 263.963 74.0327C264.073 74.2748 264.331 74.3968 264.579 74.3222C265.34 74.0927 266.564 73.7093 267.437 73.368C268.31 73.0266 269.476 72.4755 270.194 72.1265C270.428 72.013 270.548 71.7432 270.481 71.4839C270.309 70.8163 270.043 69.8363 269.793 69.1306C269.544 68.4249 269.137 67.5002 268.852 66.8765C268.741 66.6344 268.483 66.5124 268.236 66.587C267.475 66.8165 266.25 67.1999 265.377 67.5412ZM262.345 68.1557C263.064 67.8065 264.249 67.2453 265.148 66.8938C266.047 66.5423 267.293 66.1526 268.055 65.923C268.608 65.7561 269.194 66.0301 269.444 66.5777C269.729 67.2025 270.148 68.152 270.409 68.8899C270.67 69.6278 270.943 70.6344 271.115 71.3033C271.266 71.8896 270.993 72.4996 270.47 72.7535C269.751 73.1027 268.565 73.6638 267.666 74.0154C266.767 74.3669 265.521 74.7566 264.76 74.9861C264.206 75.1531 263.62 74.8791 263.37 74.3315C263.085 73.7067 262.666 72.7572 262.405 72.0193C262.145 71.2814 261.872 70.2747 261.699 69.6059C261.548 69.0196 261.822 68.4095 262.345 68.1557Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M266.06 75.7488C265.997 75.57 266.083 75.3712 266.253 75.3047L269.537 74.0209C269.707 73.9544 269.896 74.0454 269.959 74.2242C270.022 74.403 269.936 74.6018 269.766 74.6683L266.482 75.9521C266.312 76.0186 266.123 75.9275 266.06 75.7488Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M263.35 73.3694C263.287 73.1906 263.373 72.9918 263.543 72.9254L270.11 70.3577C270.28 70.2912 270.469 70.3822 270.533 70.561C270.596 70.7398 270.509 70.9386 270.339 71.0051L263.772 73.5728C263.602 73.6392 263.413 73.5482 263.35 73.3694Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip27_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M379.115 153.742C378.242 154.084 377.077 154.635 376.358 154.984C376.125 155.097 376.005 155.367 376.072 155.626C376.244 156.294 376.51 157.274 376.759 157.98C377.009 158.685 377.416 159.61 377.701 160.234C377.811 160.476 378.07 160.598 378.317 160.523C379.078 160.294 380.303 159.911 381.176 159.569C382.049 159.228 383.214 158.677 383.933 158.328C384.166 158.214 384.286 157.944 384.219 157.685C384.047 157.017 383.781 156.037 383.532 155.332C383.282 154.626 382.875 153.701 382.59 153.078C382.48 152.836 382.221 152.714 381.974 152.788C381.213 153.018 379.989 153.401 379.115 153.742ZM376.083 154.357C376.802 154.008 377.987 153.447 378.887 153.095C379.786 152.743 381.032 152.354 381.793 152.124C382.346 151.957 382.933 152.231 383.182 152.779C383.467 153.404 383.886 154.353 384.147 155.091C384.408 155.829 384.681 156.836 384.853 157.504C385.004 158.091 384.731 158.701 384.208 158.955C383.489 159.304 382.304 159.865 381.405 160.217C380.505 160.568 379.259 160.958 378.498 161.187C377.945 161.354 377.358 161.08 377.109 160.533C376.824 159.908 376.405 158.958 376.144 158.22C375.883 157.483 375.61 156.476 375.438 155.807C375.287 155.221 375.56 154.611 376.083 154.357Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M379.798 161.95C379.735 161.771 379.822 161.572 379.992 161.506L383.275 160.222C383.445 160.156 383.634 160.247 383.697 160.425C383.761 160.604 383.674 160.803 383.504 160.869L380.221 162.153C380.051 162.22 379.862 162.129 379.798 161.95Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M377.088 159.571C377.025 159.392 377.112 159.193 377.282 159.127L383.849 156.559C384.019 156.492 384.208 156.583 384.271 156.762C384.334 156.941 384.248 157.14 384.078 157.206L377.511 159.774C377.341 159.84 377.152 159.749 377.088 159.571Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip28_2644_7243)">
                                            <path d="M562.372 70.3766C562.455 70.6692 562.316 70.9709 562.061 71.0507C561.806 71.1305 561.532 70.958 561.449 70.6655C561.366 70.373 561.506 70.0712 561.761 69.9914C562.016 69.9117 562.29 70.0841 562.372 70.3766Z" fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M563.121 67.6924C562.144 67.9979 560.839 68.5182 560.026 68.8529C559.759 68.963 559.614 69.2772 559.682 69.5982C559.888 70.5743 560.231 72.1333 560.548 73.2534C560.802 74.1517 561.188 75.2961 561.504 76.1968L563.816 72.3542C564.425 71.3418 565.606 70.9972 566.629 71.5335L568.597 72.5659C568.458 71.974 568.309 71.3772 568.166 70.8703C567.849 69.7502 567.326 68.2473 566.991 67.3115C566.881 67.0038 566.596 66.8243 566.315 66.8856C565.461 67.0723 564.097 67.3869 563.121 67.6924ZM569.487 73.2074C569.299 72.3678 569.074 71.4162 568.858 70.6537C568.532 69.4998 567.999 67.9704 567.664 67.0342C567.417 66.3443 566.774 65.9392 566.144 66.0768C565.29 66.2635 563.902 66.5833 562.896 66.898C561.89 67.2126 560.562 67.7426 559.749 68.0776C559.15 68.3243 558.822 69.0332 558.974 69.7528C559.18 70.7294 559.529 72.3162 559.855 73.4701C560.182 74.624 560.714 76.1534 561.049 77.0896C561.296 77.7794 561.939 78.1845 562.569 78.047C563.424 77.8602 564.812 77.5405 565.818 77.2258C566.823 76.9112 568.152 76.3811 568.965 76.0462C569.563 75.7995 569.891 75.0906 569.74 74.371C569.67 74.0418 569.585 73.6432 569.489 73.2153C569.488 73.2126 569.488 73.21 569.487 73.2074ZM568.827 73.5778L566.349 72.2777C565.649 71.9108 564.841 72.1465 564.424 72.8392L561.89 77.051C561.887 77.0568 561.883 77.0626 561.879 77.0681C562.018 77.2113 562.209 77.2795 562.399 77.2382C563.253 77.0515 564.616 76.7368 565.593 76.4314C566.569 76.1259 567.875 75.6056 568.687 75.2709C568.954 75.1608 569.1 74.8466 569.032 74.5256C568.973 74.2488 568.904 73.9251 568.827 73.5778Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip29_2644_7243)">
                                            <path d="M475.673 90.826C475.412 91.2241 474.926 91.3482 474.588 91.1032C474.249 90.8581 474.186 90.3368 474.446 89.9387C474.706 89.5406 475.192 89.4165 475.531 89.6615C475.87 89.9066 475.933 90.4279 475.673 90.826Z" fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M479.517 89.0936C478.219 88.1552 476.355 87.0127 475.182 86.3127C474.796 86.0825 474.291 86.2116 473.983 86.6191C473.046 87.8581 471.564 89.8555 470.567 91.38C469.767 92.6026 468.808 94.24 468.065 95.5436L474.765 94.6442C476.53 94.4072 478.07 95.567 478.432 97.4062L479.13 100.947C479.684 100.177 480.235 99.3905 480.686 98.7006C481.683 97.1761 482.927 95.0064 483.693 93.6434C483.944 93.1951 483.878 92.6523 483.536 92.3558C482.495 91.4543 480.814 90.0319 479.517 89.0936ZM479.242 102.723C480.038 101.643 480.927 100.404 481.606 99.3661C482.633 97.7957 483.899 95.5871 484.665 94.2234C485.229 93.2185 485.08 91.9939 484.312 91.3293C483.271 90.4272 481.56 88.9789 480.224 88.0123C478.888 87.0457 476.99 85.8836 475.816 85.1833C474.952 84.6672 473.811 84.9587 473.12 85.8721C472.183 87.1116 470.674 89.1441 469.647 90.7145C468.619 92.2849 467.354 94.4935 466.588 95.8572C466.024 96.8621 466.173 98.0867 466.94 98.7514C467.982 99.6534 469.693 101.102 471.029 102.068C472.365 103.035 474.263 104.197 475.436 104.897C476.301 105.413 477.442 105.122 478.132 104.209C478.448 103.791 478.829 103.283 479.235 102.733C479.237 102.729 479.24 102.726 479.242 102.723ZM478.175 102.253L477.297 97.794C477.049 96.5356 475.995 95.7421 474.787 95.9042L467.444 96.8901C467.434 96.8914 467.424 96.8925 467.414 96.8933C467.381 97.2128 467.486 97.5248 467.717 97.7248C468.758 98.6264 470.439 100.049 471.736 100.987C473.033 101.925 474.897 103.068 476.07 103.768C476.456 103.998 476.962 103.869 477.27 103.462C477.536 103.11 477.845 102.698 478.175 102.253Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip30_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M529.803 84.6601C528.156 84.3893 525.881 84.1783 524.459 84.0617C523.991 84.0234 523.571 84.3454 523.463 84.8256C523.134 86.2858 522.631 88.6281 522.374 90.36C522.116 92.092 521.916 94.484 521.805 95.98C521.768 96.4719 522.075 96.9133 522.531 97.0269C523.92 97.3725 526.147 97.9014 527.794 98.1722C529.441 98.4429 531.716 98.654 533.138 98.7705C533.606 98.8088 534.026 98.4868 534.134 98.0066C534.463 96.5464 534.966 94.2042 535.223 92.4722C535.481 90.7402 535.681 88.3483 535.792 86.8523C535.829 86.3603 535.522 85.9189 535.066 85.8053C533.677 85.4597 531.45 84.9308 529.803 84.6601ZM524.55 82.8222C525.974 82.9388 528.289 83.1528 529.985 83.4317C531.682 83.7106 533.949 84.2497 535.338 84.5954C536.362 84.8502 537.053 85.846 536.971 86.9488C536.86 88.4455 536.656 90.8801 536.391 92.6642C536.126 94.4483 535.613 96.8321 535.285 98.2929C535.042 99.3694 534.095 100.096 533.047 100.01C531.623 99.8935 529.308 99.6794 527.612 99.4006C525.915 99.1217 523.648 98.5825 522.259 98.2368C521.235 97.9821 520.544 96.9862 520.626 95.8834C520.737 94.3867 520.941 91.9522 521.206 90.168C521.471 88.3839 521.984 86.0002 522.312 84.5393C522.555 83.4629 523.502 82.7363 524.55 82.8222Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M526.262 87.0142C526.584 87.0672 526.805 87.3852 526.754 87.7244L525.781 94.2758C525.73 94.615 525.428 94.847 525.105 94.7939C524.783 94.7409 524.562 94.4229 524.613 94.0837L525.586 87.5324C525.637 87.1932 525.939 86.9612 526.262 87.0142Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M528.89 90.8019C529.212 90.855 529.433 91.1729 529.383 91.5121L528.896 94.7878C528.845 95.127 528.543 95.359 528.22 95.306C527.898 95.2529 527.677 94.935 527.727 94.5958L528.214 91.3201C528.265 90.9809 528.567 90.7489 528.89 90.8019Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M532.492 88.0383C532.814 88.0913 533.035 88.4093 532.984 88.7485L532.011 95.2998C531.96 95.639 531.658 95.871 531.335 95.818C531.013 95.765 530.792 95.447 530.842 95.1078L531.816 88.5565C531.867 88.2173 532.169 87.9853 532.492 88.0383Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip31_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M560.03 127.779C558.899 128.213 557.391 128.915 556.453 129.364C556.145 129.511 555.986 129.869 556.078 130.212C556.355 131.256 556.815 132.921 557.228 134.111C557.641 135.3 558.308 136.886 558.735 137.872C558.876 138.197 559.216 138.363 559.542 138.267C560.535 137.975 562.118 137.492 563.249 137.058C564.38 136.624 565.888 135.921 566.826 135.473C567.135 135.325 567.293 134.967 567.202 134.624C566.925 133.58 566.464 131.915 566.052 130.725C565.639 129.536 564.971 127.95 564.544 126.964C564.404 126.64 564.064 126.473 563.737 126.569C562.745 126.861 561.161 127.345 560.03 127.779ZM556.1 128.546C557.038 128.097 558.572 127.382 559.737 126.935C560.903 126.488 562.515 125.996 563.508 125.704C564.239 125.489 565.007 125.865 565.322 126.592C565.749 127.579 566.429 129.192 566.854 130.418C567.279 131.643 567.747 133.338 568.024 134.382C568.229 135.152 567.872 135.959 567.18 136.29C566.242 136.739 564.707 137.454 563.542 137.901C562.377 138.348 560.765 138.84 559.772 139.132C559.04 139.347 558.273 138.971 557.958 138.244C557.531 137.257 556.851 135.644 556.426 134.419C556.001 133.193 555.533 131.498 555.255 130.454C555.051 129.685 555.408 128.877 556.1 128.546Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M558.574 130.568C558.795 130.483 559.041 130.603 559.121 130.835L560.682 135.334C560.763 135.567 560.649 135.825 560.427 135.91C560.206 135.995 559.961 135.875 559.88 135.642L558.319 131.143C558.238 130.91 558.352 130.653 558.574 130.568Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M561.493 131.996C561.715 131.911 561.96 132.031 562.041 132.264L562.821 134.514C562.902 134.747 562.788 135.004 562.567 135.089C562.345 135.174 562.1 135.054 562.019 134.821L561.239 132.572C561.158 132.339 561.272 132.081 561.493 131.996Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M562.852 128.926C563.074 128.841 563.319 128.961 563.4 129.194L564.96 133.693C565.041 133.926 564.927 134.184 564.706 134.269C564.484 134.354 564.239 134.234 564.158 134.001L562.597 129.502C562.517 129.269 562.631 129.011 562.852 128.926Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip32_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M420.167 88.8633C418.513 89.2158 416.276 89.8343 414.903 90.2268C414.46 90.3536 414.173 90.7865 414.213 91.2574C414.297 92.2324 414.431 93.5286 414.616 94.4864C414.8 95.4442 415.156 96.6933 415.441 97.6255C415.578 98.0756 416.002 98.357 416.458 98.2923C417.867 98.0919 420.157 97.7454 421.811 97.393C423.465 97.0405 425.702 96.422 427.075 96.0295C427.518 95.9027 427.805 95.4698 427.764 94.9989C427.681 94.024 427.547 92.7277 427.362 91.7699C427.177 90.8121 426.821 89.563 426.537 88.6309C426.4 88.1807 425.975 87.8993 425.52 87.9641C424.111 88.1644 421.821 88.5109 420.167 88.8633ZM414.593 89.0271C415.966 88.6345 418.237 88.0062 419.932 87.6448C421.628 87.2835 423.952 86.9324 425.362 86.732C426.375 86.5879 427.348 87.2174 427.663 88.2512C427.949 89.1883 428.322 90.493 428.521 91.5229C428.719 92.5528 428.858 93.9075 428.942 94.8876C429.034 95.969 428.372 96.9469 427.385 97.2292C426.012 97.6218 423.741 98.2501 422.046 98.6115C420.35 98.9729 418.026 99.3239 416.616 99.5244C415.602 99.6684 414.63 99.039 414.315 98.0051C414.029 97.068 413.656 95.7633 413.457 94.7334C413.259 93.7035 413.12 92.3488 413.036 91.3687C412.943 90.2873 413.606 89.3094 414.593 89.0271Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M419.697 86.4263C418.492 86.6832 416.883 87.0882 415.801 87.3677C415.363 87.4808 415.086 87.8784 415.112 88.3015C415.134 88.6565 415.169 89.0086 415.221 89.2831C415.286 89.6196 415.079 89.9476 414.759 90.0158C414.44 90.084 414.128 89.8665 414.063 89.53C413.994 89.1743 413.955 88.7574 413.932 88.3817C413.866 87.3082 414.572 86.4051 415.519 86.1603C416.602 85.8805 418.231 85.4702 419.462 85.2078C420.694 84.9454 422.347 84.6562 423.447 84.4706C424.41 84.3082 425.395 84.851 425.732 85.8669C425.849 86.2224 425.968 86.6224 426.036 86.9781C426.101 87.3146 425.894 87.6427 425.574 87.7109C425.254 87.7791 424.942 87.5616 424.878 87.2251C424.825 86.9506 424.726 86.612 424.615 86.2761C424.482 85.8757 424.08 85.6232 423.634 85.6982C422.535 85.8836 420.903 86.1694 419.697 86.4263Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M419.228 83.9893C418.508 84.1426 417.583 84.3836 416.847 84.5838C416.402 84.7048 416.123 85.1292 416.168 85.5768C416.202 85.9126 416.245 86.2474 416.297 86.5168C416.362 86.8532 416.155 87.1813 415.835 87.2495C415.515 87.3177 415.203 87.1002 415.138 86.7637C415.075 86.4389 415.028 86.0601 414.992 85.7086C414.881 84.6157 415.569 83.6471 416.551 83.3802C417.291 83.179 418.241 82.931 418.993 82.7708C419.745 82.6105 420.712 82.4499 421.467 82.3323C422.47 82.1764 423.463 82.7868 423.765 83.8388C423.863 84.1772 423.959 84.5456 424.022 84.8704C424.087 85.2069 423.88 85.5349 423.56 85.6031C423.24 85.6713 422.928 85.4538 422.863 85.1173C422.811 84.848 422.727 84.522 422.634 84.1988C422.51 83.7679 422.095 83.4916 421.64 83.5622C420.888 83.6792 419.947 83.836 419.228 83.9893Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M422.77 91.5222C423.014 91.7505 423.036 92.1434 422.819 92.3999L421.072 94.4636C420.897 94.67 420.614 94.7303 420.377 94.6118L419.19 94.0189C418.895 93.8716 418.77 93.5008 418.91 93.1907C419.05 92.8806 419.403 92.7486 419.698 92.8959L420.484 93.2887L421.936 91.5732C422.153 91.3168 422.526 91.2939 422.77 91.5222Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip33_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M365.93 67.6737C365.868 67.5468 365.691 67.5281 365.616 67.6823L364.049 70.9312C363.526 72.0145 362.617 72.8317 361.521 73.2028C361.34 73.2643 361.24 73.47 361.299 73.6622L362.267 76.8227C362.326 77.0149 362.521 77.1209 362.702 77.0595C363.798 76.6884 364.99 76.7938 366.016 77.3526L369.092 79.0284C369.238 79.1079 369.372 78.9837 369.351 78.8432C369.121 77.2832 368.713 74.8865 368.16 73.0823C367.607 71.2782 366.609 69.0813 365.93 67.6737ZM364.562 67.1096C365.061 66.0748 366.468 66.0421 366.983 67.1084C367.666 68.5232 368.702 70.7954 369.285 72.7011C369.869 74.6069 370.289 77.0878 370.52 78.6557C370.694 79.8373 369.533 80.6743 368.554 80.1405L365.477 78.4647C364.731 78.0583 363.864 77.9816 363.068 78.2515C362.265 78.5235 361.402 78.0545 361.142 77.2039L360.174 74.0434C359.913 73.1928 360.353 72.2827 361.156 72.0107C361.953 71.7408 362.614 71.1464 362.994 70.3584L364.562 67.1096Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M371.051 65.4202C371.251 65.1472 371.622 65.0977 371.881 65.3097C373.354 66.5151 374.591 68.3962 375.287 70.6681C375.983 72.9399 376.022 75.2271 375.495 77.1098C375.403 77.4408 375.074 77.6286 374.761 77.5292C374.447 77.4299 374.268 77.081 374.361 76.75C374.812 75.1365 374.793 73.109 374.162 71.0493C373.531 68.9895 372.421 67.3313 371.159 66.2983C370.9 66.0863 370.852 65.6932 371.051 65.4202Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M369.348 67.7009C369.585 67.4636 369.959 67.4748 370.185 67.726C371.035 68.6742 371.791 70.0674 372.286 71.6846C372.782 73.3018 372.941 74.8969 372.777 76.189C372.733 76.5313 372.435 76.7703 372.112 76.7227C371.788 76.6751 371.561 76.3591 371.604 76.0168C371.741 74.9464 371.613 73.5426 371.161 72.0658C370.709 70.589 370.033 69.371 369.328 68.5856C369.103 68.3344 369.112 67.9383 369.348 67.7009Z"
                                            fill="white" />
                                        </g>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M467.367 63.7206C467.356 63.6581 467.275 63.6248 467.217 63.6793L465.997 64.8291C465.59 65.2124 465.038 65.4279 464.463 65.4279C464.368 65.4279 464.29 65.5006 464.29 65.5904V67.0661C464.29 67.1559 464.368 67.2287 464.463 67.2287C465.038 67.2287 465.59 67.4441 465.997 67.8274L467.217 68.9772C467.275 69.0318 467.356 68.9984 467.367 68.936C467.485 68.2431 467.64 67.1707 467.64 66.3283C467.64 65.4858 467.485 64.4134 467.367 63.7206ZM466.799 63.286C467.187 62.9198 467.861 63.1075 467.951 63.6323C468.069 64.3287 468.231 65.4384 468.231 66.3283C468.231 67.2181 468.069 68.3278 467.951 69.0242C467.861 69.549 467.187 69.7368 466.799 69.3706L465.579 68.2208C465.283 67.942 464.882 67.7853 464.463 67.7853C464.041 67.7853 463.699 67.4633 463.699 67.0661V65.5904C463.699 65.1932 464.041 64.8712 464.463 64.8712C464.882 64.8712 465.283 64.7146 465.579 64.4357L466.799 63.286Z"
                                        fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M470.133 63.5012C470.268 63.4143 470.452 63.4466 470.544 63.5733C471.069 64.2943 471.384 65.2675 471.384 66.3283C471.384 67.3891 471.069 68.3622 470.544 69.0832C470.452 69.21 470.268 69.2422 470.133 69.1553C469.999 69.0684 469.964 68.8952 470.057 68.7684C470.507 68.1505 470.793 67.29 470.793 66.3283C470.793 65.3665 470.507 64.506 470.057 63.8881C469.964 63.7614 469.999 63.5881 470.133 63.5012Z"
                                        fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M468.99 64.222C469.137 64.1555 469.314 64.2139 469.385 64.3524C469.651 64.8755 469.808 65.5731 469.808 66.3283C469.808 67.0834 469.651 67.7811 469.385 68.3041C469.314 68.4427 469.137 68.5011 468.99 68.4345C468.843 68.368 468.781 68.2018 468.852 68.0632C469.073 67.6299 469.217 67.0178 469.217 66.3283C469.217 65.6387 469.073 65.0266 468.852 64.5933C468.781 64.4548 468.843 64.2885 468.99 64.222Z"
                                        fill="white" />
                                        <g clip-path="url(#clip34_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M446.621 152.342C446.629 152.28 446.56 152.222 446.489 152.255L444.994 152.959C444.496 153.194 443.908 153.222 443.36 153.037C443.269 153.007 443.174 153.051 443.148 153.137L442.72 154.542C442.694 154.628 442.747 154.722 442.838 154.752C443.386 154.937 443.849 155.319 444.125 155.815L444.953 157.301C444.993 157.371 445.08 157.366 445.108 157.31C445.422 156.688 445.88 155.716 446.125 154.914C446.369 154.111 446.532 153.04 446.621 152.342ZM446.205 151.746C446.681 151.522 447.269 151.917 447.202 152.446C447.113 153.147 446.946 154.256 446.688 155.103C446.43 155.951 445.954 156.956 445.639 157.581C445.401 158.052 444.705 158.014 444.441 157.541L443.613 156.055C443.412 155.695 443.075 155.417 442.676 155.282C442.275 155.147 442.042 154.731 442.157 154.353L442.585 152.947C442.7 152.569 443.119 152.372 443.521 152.507C443.92 152.641 444.348 152.621 444.71 152.45L446.205 151.746Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M449.319 153.02C449.472 152.981 449.638 153.071 449.689 153.221C449.98 154.076 449.998 155.104 449.69 156.114C449.383 157.124 448.801 157.95 448.091 158.468C447.967 158.56 447.782 158.531 447.679 158.405C447.576 158.279 447.594 158.103 447.718 158.012C448.326 157.568 448.848 156.84 449.127 155.924C449.406 155.008 449.383 154.097 449.133 153.364C449.082 153.214 449.165 153.06 449.319 153.02Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M448.021 153.34C448.18 153.324 448.332 153.436 448.359 153.591C448.461 154.175 448.408 154.889 448.189 155.609C447.97 156.328 447.619 156.942 447.213 157.355C447.106 157.464 446.92 157.463 446.8 157.352C446.679 157.242 446.668 157.064 446.775 156.954C447.111 156.612 447.426 156.076 447.626 155.419C447.826 154.762 447.866 154.133 447.781 153.65C447.754 153.495 447.862 153.357 448.021 153.34Z"
                                            fill="white" />
                                        </g>
                                        <g clip-path="url(#clip35_2644_7243)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M264.777 123.7C264.792 123.638 264.731 123.572 264.657 123.596L263.092 124.106C262.57 124.276 261.983 124.23 261.46 123.977C261.374 123.935 261.274 123.967 261.239 124.049L260.653 125.39C260.618 125.472 260.659 125.572 260.746 125.614C261.269 125.866 261.685 126.304 261.902 126.831L262.555 128.411C262.586 128.486 262.673 128.491 262.708 128.439C263.09 127.862 263.656 126.955 263.99 126.189C264.325 125.424 264.609 124.381 264.777 123.7ZM264.433 123.055C264.931 122.893 265.469 123.359 265.342 123.876C265.174 124.56 264.881 125.64 264.528 126.449C264.175 127.257 263.587 128.195 263.203 128.776C262.914 129.213 262.226 129.088 262.019 128.585L261.366 127.005C261.208 126.622 260.905 126.303 260.525 126.119C260.142 125.934 259.959 125.492 260.116 125.131L260.702 123.79C260.859 123.429 261.298 123.286 261.681 123.471C262.061 123.655 262.488 123.689 262.868 123.565L264.433 123.055Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M267.378 124.714C267.535 124.694 267.689 124.804 267.723 124.96C267.914 125.845 267.814 126.868 267.393 127.832C266.972 128.796 266.3 129.542 265.537 129.967C265.402 130.042 265.222 129.99 265.134 129.852C265.047 129.714 265.084 129.542 265.218 129.467C265.873 129.103 266.474 128.447 266.856 127.573C267.237 126.699 267.318 125.791 267.155 125.032C267.121 124.876 267.221 124.734 267.378 124.714Z"
                                            fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M266.053 124.867C266.213 124.872 266.35 125.002 266.36 125.159C266.394 125.751 266.26 126.454 265.96 127.14C265.661 127.827 265.242 128.392 264.792 128.75C264.673 128.845 264.489 128.821 264.382 128.696C264.274 128.571 264.284 128.392 264.403 128.298C264.776 128.001 265.15 127.508 265.423 126.881C265.697 126.254 265.809 125.635 265.78 125.144C265.771 124.987 265.893 124.863 266.053 124.867Z"
                                            fill="white" />
                                        </g>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2644_7243">
                                            <rect width="18" height="18" fill="white" transform="translate(208.234 98.9844) rotate(-23.3283)" />
                                        </clipPath>
                                        <clipPath id="clip1_2644_7243">
                                            <rect width="18" height="18" fill="white" transform="translate(93 104.393) rotate(-14.4141)" />
                                        </clipPath>
                                        <clipPath id="clip2_2644_7243">
                                            <rect width="15.0951" height="15.0951" fill="white" transform="translate(210.883 174.104) rotate(10.9022)" />
                                        </clipPath>
                                        <clipPath id="clip3_2644_7243">
                                            <rect width="14" height="14" fill="white" transform="translate(141.43 134.912) rotate(5.86328)" />
                                        </clipPath>
                                        <clipPath id="clip4_2644_7243">
                                            <rect width="13" height="13" fill="white" transform="translate(176.941 80.9121) rotate(7.3117)" />
                                        </clipPath>
                                        <clipPath id="clip5_2644_7243">
                                            <rect width="10" height="10" fill="white" transform="translate(221.062 139.686)" />
                                        </clipPath>
                                        <clipPath id="clip6_2644_7243">
                                            <rect width="17.6851" height="17.6851" fill="white" transform="translate(95 166.262) rotate(-8.58381)" />
                                        </clipPath>
                                        <clipPath id="clip7_2644_7243">
                                            <rect width="14.7497" height="14.7497" fill="white" transform="translate(55.7695 97.8086) rotate(20.0656)" />
                                        </clipPath>
                                        <clipPath id="clip8_2644_7243">
                                            <rect width="13.2664" height="13.2664" fill="white" transform="translate(154.646 227.987) rotate(-23.1425)" />
                                        </clipPath>
                                        <clipPath id="clip9_2644_7243">
                                            <rect width="14.4879" height="14.4879" fill="white" transform="translate(26.9453 220.667) rotate(16.2448)" />
                                        </clipPath>
                                        <clipPath id="clip10_2644_7243">
                                            <rect width="12.0519" height="12.0519" fill="white" transform="translate(330.723 227.237) rotate(-11.8913)" />
                                        </clipPath>
                                        <clipPath id="clip11_2644_7243">
                                            <rect width="14.4879" height="14.4879" fill="white" transform="translate(322.303 134.605) rotate(23.9842)" />
                                        </clipPath>
                                        <clipPath id="clip12_2644_7243">
                                            <rect width="20.283" height="20.283" fill="white" transform="translate(26.0645 0.740234) rotate(39.9605)" />
                                        </clipPath>
                                        <clipPath id="clip13_2644_7243">
                                            <rect width="26.375" height="26.375" fill="white" transform="translate(171.006 38.7402) rotate(12.8006)" />
                                        </clipPath>
                                        <clipPath id="clip14_2644_7243">
                                            <rect width="18.8342" height="18.8342" fill="white" transform="translate(253.537 18.1992) rotate(-13.5707)" />
                                        </clipPath>
                                        <clipPath id="clip15_2644_7243">
                                            <rect width="10.2883" height="10.7092" fill="white" transform="matrix(0.931008 -0.365 0.332561 0.943082 367.477 286.664)" />
                                        </clipPath>
                                        <clipPath id="clip16_2644_7243">
                                            <rect width="11.292" height="12.8773" fill="white" transform="matrix(0.95416 -0.299298 0.271537 0.962428 550.398 200.088)" />
                                        </clipPath>
                                        <clipPath id="clip17_2644_7243">
                                            <rect width="17.6817" height="20.1396" fill="white" transform="matrix(0.809475 0.587155 -0.546416 0.837514 467.387 213.948)" />
                                        </clipPath>
                                        <clipPath id="clip18_2644_7243">
                                            <rect width="18.419" height="19.3721" fill="white" transform="matrix(0.986688 0.162625 -0.146646 0.989189 514.408 212.871)" />
                                        </clipPath>
                                        <clipPath id="clip19_2644_7243">
                                            <rect width="13.3719" height="13.9248" fill="white" transform="matrix(0.933321 -0.359044 0.326995 0.945026 546.312 291.801)" />
                                        </clipPath>
                                        <clipPath id="clip20_2644_7243">
                                            <rect width="18.4351" height="19.3568" fill="white" transform="matrix(0.97792 -0.208979 0.188757 0.982024 403.242 215.646)" />
                                        </clipPath>
                                        <clipPath id="clip21_2644_7243">
                                            <rect width="18.4909" height="19.3035" fill="white" transform="matrix(0.946876 -0.3216 0.292166 0.956368 350.104 199.423)" />
                                        </clipPath>
                                        <clipPath id="clip22_2644_7243">
                                            <rect width="9.24493" height="8.57977" fill="white" transform="matrix(0.947471 0.319841 -0.290536 0.956864 436.395 281.832)" />
                                        </clipPath>
                                        <clipPath id="clip23_2644_7243">
                                            <rect width="9.28631" height="8.5444" fill="white" transform="matrix(0.900091 0.435703 -0.3992 0.916864 255.41 265.671)" />
                                        </clipPath>
                                        <clipPath id="clip24_2644_7243">
                                            <rect width="10.2883" height="10.7092" fill="white" transform="matrix(0.931008 -0.365 0.332561 0.943082 254.043 187.534)" />
                                        </clipPath>
                                        <clipPath id="clip25_2644_7243">
                                            <rect width="18.5492" height="19.2946" fill="white" transform="matrix(0.938938 0.344086 -0.314566 0.949236 295.834 95.4229)" />
                                        </clipPath>
                                        <clipPath id="clip26_2644_7243">
                                            <rect width="10.3122" height="10.7124" fill="white" transform="matrix(0.931339 -0.364154 0.333353 0.942802 260.049 67.9297)" />
                                        </clipPath>
                                        <clipPath id="clip27_2644_7243">
                                            <rect width="10.3122" height="10.7124" fill="white" transform="matrix(0.931339 -0.364154 0.333353 0.942802 373.787 154.131)" />
                                        </clipPath>
                                        <clipPath id="clip28_2644_7243">
                                            <rect width="11.3196" height="12.8798" fill="white" transform="matrix(0.954388 -0.298569 0.272211 0.962237 557.201 67.5547)" />
                                        </clipPath>
                                        <clipPath id="clip29_2644_7243">
                                            <rect width="17.7128" height="20.1557" fill="white" transform="matrix(0.810221 0.586125 -0.547442 0.836843 473.967 81.415)" />
                                        </clipPath>
                                        <clipPath id="clip30_2644_7243">
                                            <rect width="18.4671" height="19.3732" fill="white" transform="matrix(0.986758 0.162202 -0.14703 0.989132 521.111 80.3379)" />
                                        </clipPath>
                                        <clipPath id="clip31_2644_7243">
                                            <rect width="13.4031" height="13.9288" fill="white" transform="matrix(0.933643 -0.358206 0.327779 0.944755 553.102 128.239)" />
                                        </clipPath>
                                        <clipPath id="clip32_2644_7243">
                                            <rect width="18.4823" height="19.3587" fill="white" transform="matrix(0.978034 -0.208445 0.189245 0.98193 409.65 83.1133)" />
                                        </clipPath>
                                        <clipPath id="clip33_2644_7243">
                                            <rect width="18.5354" height="19.3079" fill="white" transform="matrix(0.947137 -0.320829 0.292882 0.956149 356.367 66.8887)" />
                                        </clipPath>
                                        <clipPath id="clip34_2644_7243">
                                            <rect width="9.26717" height="8.58172" fill="white" transform="matrix(0.94773 0.319073 -0.291249 0.956647 442.889 149.299)" />
                                        </clipPath>
                                        <clipPath id="clip35_2644_7243">
                                            <rect width="9.30649" height="8.54805" fill="white" transform="matrix(0.900547 0.434758 -0.400099 0.916472 261.42 120.206)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /. Popular-services -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service-block_types-sites' ): ?>
                <!-- Types-sites -->
                <section class="types-sites block-padding">
                    <div class="types-sites__body container">
                        <h2 class="types-sites__heading title title--large title--white title--w-bold title--indent-45 js-reveal gs-reveal">
                            <?php echo get_sub_field('types-sites_title'); ?>
                        </h2>
                        <?php if( have_rows('types-sites') ): ?>
                        <div class="types-sites__items js-reveal gs-reveal">
                            <?php while( have_rows('types-sites') ): the_row();

                                $type_site_img = get_sub_field('type-site_img');
                                $type_site_title = get_sub_field('type-site_title');
                                $type_site_descr = get_sub_field('type-site_descr');
                                $type_site_link = get_sub_field('type-site_link');

                                ?>
                                <article class="types-sites__card bg--dark-blue">
                                    <picture class="types-sites__pic">
                                    <?php if( !empty( $type_site_img ) ): ?>
                                            <img src="<?php echo esc_url($type_site_img['url']); ?>" alt="<?php echo esc_attr($type_site_img['alt']); ?>" class="types-sites__img">
                                        <?php endif; ?>
                                    </picture>
                                    <div class="types-sites__card-info">
                                        <h3 class="types-sites__card-title title title--medium title--white title--w-light">
                                            <?php echo $type_site_title; ?>
                                        </h3>
                                        <p class="types-sites__card-descr text text--small text--white text--w-light">
                                            <?php echo $type_site_descr; ?>
                                        </p>
                                        <div class="types-sites__card-action">
                                            <a href="<?php echo $type_site_link['url']; ?>" class="types-sites__card-btn button button--primary button--icon js-transition-link">
                                                Перейти
                                                <svg class="button__icon-white" width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="button__icon-white-fill" d="M1.5 5.25C1.08579 5.25 0.75 5.58579 0.75 6C0.75 6.41421 1.08579 6.75 1.5 6.75V5.25ZM17.0303 6.53033C17.3232 6.23744 17.3232 5.76256 17.0303 5.46967L12.2574 0.696699C11.9645 0.403806 11.4896 0.403806 11.1967 0.696699C10.9038 0.989593 10.9038 1.46447 11.1967 1.75736L15.4393 6L11.1967 10.2426C10.9038 10.5355 10.9038 11.0104 11.1967 11.3033C11.4896 11.5962 11.9645 11.5962 12.2574 11.3033L17.0303 6.53033ZM1.5 6.75H16.5V5.25H1.5V6.75Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </section>
                <!-- Types-sites -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service-block_cases-slider' ): ?>
                <!-- Cases-slider -->
                <section class="cases-slider block-padding">
                    <div class="cases-slider__body container">
                        <h2 class="cases-slider__heading title title--large title--white title--w-bold title--indent-45 js-reveal gs-reveal">
                            <?php echo get_sub_field('cases-slider_title'); ?>
                        </h2>
                        <div class="cases-slider__inner js-reveal gs-reveal">
                            <!-- Slider main container -->
                            <div class="cases-slider__swiper-container swiper-container">
                                <!-- Additional required wrapper -->
                                <div class="cases-slider__swiper-wrapper swiper-wrapper disableds">
                                    <!-- Slides -->
                                    <?php
                                        $cases_slider_items = get_sub_field('cases-slider_items');

                                        if( $cases_slider_items ): ?>

                                        <?php foreach( $cases_slider_items as $cases_slider_item): 
                                            
                                            $case_title = get_the_title( $cases_slider_item->ID );
                                            
                                            ?>
                                            <div class="cases-slider__swiper-slide swiper-slide">
                                                <!-- Case-card -->
                                                <article class="case-card">
                                                    <header class="case-card__header">
                                                        <div class="case-card__tags">
                                                            <?php 
                                                                $categories = get_the_terms($cases_slider_item->ID, 'cats_cases');
                                                                
                                                                if($categories){
                                                                    foreach($categories as $category) {
                                                                        echo '<a href="javascript:;" class="case-card__tag button button--dark button--tiny">' . $category->name . '</a>';
                                                                    }
                                                                }
                                                            ?>
                                                        </div>
                                                    </header>
                                                    <div class="case-card__body">
                                                        <div class="case-card__pic">
                                                        <?php
                                                            $default_attr = [
                                                                'class'	=> "case-card__img",
                                                                'alt'   => get_the_title()
                                                            ];
                                                                        
                                                            echo get_the_post_thumbnail( $cases_slider_item->ID, 'large', $default_attr ) ?>
                                                        </div>
                                                        <div class="case-card__text">
                                                            <h2 class="case-card__title title title--medium title--white title--w-light">
                                                                <?php echo esc_html( $case_title ); ?>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <footer class="case-card__footer">
                                                        <div class="case-card__action">
                                                            <a href="javascript:;" class="case-card__button button button--primary js-case" data-hystmodal="#case" data-id-case="<?php echo $cases_slider_item->ID; ?>">
                                                                Посмотреть кейс
                                                            </a>
                                                        </div>
                                                    </footer>
                                                </article>
                                                <!-- /. Case-card -->
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif;?>
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="cases-slider__slider-nav disableds">
                                <div class="cases-slider__swiper-button-prev cases-slider__slider-arrow">
                                    <svg class="cases-slider__slider-arrow-svg" width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1L1.82588 4.75671C1.3845 5.15395 1.3845 5.84605 1.82588 6.24329L6 10" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="cases-slider__swiper-button-next cases-slider__slider-arrow">
                                    <svg class="cases-slider__slider-arrow-svg" width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5.17412 4.75671C5.6155 5.15395 5.6155 5.84605 5.17412 6.24329L1 10" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /. Cases-slider -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service-block_benefits' ): ?>
                <!-- Benefits -->
                <section class="benefits block-padding">
                    <div class="benefits__body container">
                        <h2 class="benefits__heading title title--large title--white title--w-bold title--indent-45 js-reveal gs-reveal">
                            <?php echo get_sub_field('benefits_title'); ?>
                        </h2>
                        <?php $benefits_col = get_sub_field('benefits_col'); ?>
                        <?php if( have_rows('benefits') ): ?>
                            <div class="benefits__items js-reveal gs-reveal <?php echo $benefits_col; ?>">
                                <?php while( have_rows('benefits') ): the_row(); 
                                    
                                    $benefits_card_img = get_sub_field('benefits-card_img');
                                    $benefits_card_title_position = get_sub_field('benefits-card_title-position');
                                    $benefits_card_title = get_sub_field('benefits-card_title');
                                    $benefits_card_descr = get_sub_field('benefits-card_descr');
                                
                                ?>
                                    <div class="benefits__item">
                                        <div class="benefits__icon">
                                            <img src="<?php echo esc_url($benefits_card_img['url']); ?>" alt="<?php echo esc_attr($benefits_card_img['alt']); ?>" class="benefits__icon-img">
                                        </div>
                                        <div class="benefits__text">
                                            <h3 class="benefits__title title title--pre-medium title--white title--w-light <?php echo $benefits_card_title_position; ?>">
                                                <?php echo $benefits_card_title; ?>
                                            </h3>
                                            <?php if( !empty( $benefits_card_descr ) ): ?>
                                                <p class="benefits__descr text text--normal text--white text--w-light">
                                                    <?php echo $benefits_card_descr ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>
                <!-- /. Benefits -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service-block_stages' ): ?>
                <!-- Stages -->
                <section class="stages block-padding">
                    <div class="stages__body container">
                        <h2 class="stages__heading title title--large title--white title--w-bold title--indent-45 js-reveal gs-reveal">
                            <?php echo get_sub_field('stages_title'); ?>
                        </h2>
                        <?php $stages_col = get_sub_field('stages_col'); ?>
                        <?php if( have_rows('stages') ): ?>
                            <div class="stages__items js-reveal gs-reveal <?php echo $stages_col; ?>">
                            <?php while( have_rows('stages') ): the_row(); 
                                    
                                    $stages_card_title = get_sub_field('stages-card_title');
                                    $stages_card_descr = get_sub_field('stages-card_descr');
                                
                                ?>
                                    <article class="stages__item" data-num="<?php echo get_row_index(); ?>">
                                        <h3 class="stages__title title title--pre-medium title--white title--w-light">
                                            <?php echo $stages_card_title; ?>
                                        </h3>
                                        <?php if( !empty( $stages_card_descr ) ): ?>
                                            <div class="stages__descr text text--normal text--white text--w-light">
                                                <?php echo $stages_card_descr; ?>
                                            </div>
                                        <?php endif; ?>
                                    </article>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>
                <!-- /. Stages -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service-block_accordion' ): ?>
                <!-- Accardion -->
                <section class="accordion block-padding">
                    <div class="accordion__body container">
                        <h2 class="accordion__heading title title--large title--white title--w-bold title--indent-45 js-reveal gs-reveal">
                            <?php echo get_sub_field('accordion-block_title'); ?>
                        </h2>
                        <?php if( have_rows('accordion') ): ?>
                            <div class="accordion__items js-accordion js-reveal gs-reveal">
                            <?php while( have_rows('accordion') ): the_row(); 
                                    
                                    $accordion_title = get_sub_field('accordion_title');
                                    $accordion_descr = get_sub_field('accordion_descr');
                                
                                ?>
                                    <div class="accordion__item js-accordion-item <?php if( get_row_index() == 1) echo 'is-active'; ?>">
                                        <h3 class="accordion__title js-accordion-title title title--small title--white title--w-light">
                                            <?php echo $accordion_title; ?> 
                                            <span class="accordion__arrow">
                                                <svg class="accordion__svg-arrow" width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 1.00098L5 5.00098L9 1.00098" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>
                                        </h3>
                                        <div class="accordion__text wysiwyg">
                                            <?php echo $accordion_descr; ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>
                <!-- /. Accardion -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service-block_action' ): ?>
                <!-- Action -->
                <section class="action block-padding">
                    <div class="action__body container">
                        <article class="action__item action__item--bg-gradient js-reveal gs-reveal">
                            <div class="action__inner">
                                <?php
                                
                                    $action_date = get_sub_field('action_date');
                                    $action_small_title = get_sub_field('action_small-title');
                                    $action_big_title = get_sub_field('action_big-title');
                                    $action_plunk_sale = get_sub_field('action_plunk-sale');
                                    $action_after_text = get_sub_field('action_after-text');
                                    $action_name_btn = get_sub_field('action_name-btn');
                                    $action_rignt_btn_text = get_sub_field('action_right-btn-text');
                                    $action_img = get_sub_field('action_img');
                                
                                ?>
                                <div class="action__wrapper">
                                    <div class="action__date-act text text--small text--white text--w-light">
                                        <?php echo $action_date; ?>
                                    </div>
                                    <div class="action__name title title--big title--white title--w-medium">
                                        <?php echo $action_small_title; ?>
                                    </div>
                                    <div class="action__price title title--huge title--white title--w-medium">
                                        <?php echo $action_big_title; ?>
                                        <?php if( !empty($action_plunk_sale)): ?>
                                            <span class="action__plunk-sale text text--w-medium">
                                                <?php echo $action_plunk_sale; ?>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="action__small-text text text--normal text--white text--w-light">
                                        <?php echo $action_after_text; ?>
                                    </div>
                                    <div class="action__act-btn">
                                        <a href="#modal" class="action__button button button--white">
                                            <?php echo $action_name_btn; ?>
                                        </a>
                                        <div class="action__left-text text text--normal text--white text--w-light">
                                            <?php echo $action_rignt_btn_text; ?>
                                        </div>
                                    </div>
                                </div>
                                <picture class="action__picture">
                                    <img src="<?php echo esc_url($action_img['url']); ?>" alt="<?php echo esc_attr($action_img['alt']); ?>" class="action__img">
                                </picture>
                            </div>
                        </article>
                    </div>
                </section>
                <!-- /. Action -->
            <?php endif; ?>

        <?php endwhile ?>
    <?php endif ?>

<?php get_footer(); ?>