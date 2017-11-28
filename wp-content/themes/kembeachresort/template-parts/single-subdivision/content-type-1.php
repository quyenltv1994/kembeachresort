<?php if ( have_rows('slider_sg_sub') ) : ?>
    <?php while( have_rows('slider_sg_sub') ): the_row(); ?>
        <?php 
            $row_index = get_row_index();
        ?>

        <div id="section-vtr-content-<?php echo $row_index; ?>" class="section section-has-content<?php if ($row_index%2 != 0) echo ' left'; else echo ' right'; ?>">

            <div id="section-vtr-content-slide-<?php echo $row_index; ?>" class="swiper-container slide-desktop" 
                 data-options='{
                 "speed": 1000,
                 "effect": "fade",
                 "autoplay": 3000,
                 "loop": "true",
                 "slidesPerView":"auto",
                 "pagination": "#section-vtr-content-slide-<?php echo $row_index; ?> .slide-paginates",
                 "paginationClickable": true,
                 "prevButton": "#section-vtr-content-<?php echo $row_index; ?> .slide-prev",
                 "nextButton": "#section-vtr-content-<?php echo $row_index; ?> .slide-next" }'>
                 <?php  ?>
                 <ul class="swiper-wrapper lsn">
                    <?php while( have_rows('slider_desktop') ): the_row(); ?>
                    <li class="swiper-slide">
                        <img src="<?php echo get_sub_field('image'); ?>" alt="">
                    </li>
                    <?php endwhile; ?>
                </ul>

                <div class="slide-paginates"></div>
            </div>

            <div id="section-vtr-content-slide-mobile-<?php echo $row_index; ?>" class="swiper-container slide-responsive" 
                data-options='{
                "speed": 1000,
                "effect": "fade",
                "autoplay": 3000,
                "pagination": "#section-vtr-content-slide-mobile-<?php echo $row_index; ?> .slide-paginates",
                "paginationClickable": true,
                "prevButton": "#section-vtr-content-mobile-<?php echo $row_index; ?> .slide-prev",
                "nextButton": "#section-vtr-content-mobile-<?php echo $row_index; ?> .slide-next" }'>

                <ul class="swiper-wrapper lsn">
                    <?php while( have_rows('slider_desktop') ): the_row(); ?>
                    <li class="swiper-slide">
                        <img src="<?php echo get_sub_field('image'); ?>" alt="">
                    </li>
                    <?php endwhile; ?>
                </ul>

                <div class="slide-paginates"></div>

            </div>

            <div class="slide-prev"></div>
            <div class="slide-next"></div>

            <div class="data"> 
                <div class="section-vtr-title">
                    <div class="section-vtr-title-inner">
                        <?php if(get_sub_field('title') == 0): ?>
                        <img class="desktop-show" src="<?php echo get_sub_field('image_title_desktop'); ?>" alt="">
                        <img class="mobile-show" src="<?php echo get_sub_field('image_title_mobile'); ?>" alt="">
                        <?php else: ?>
                            <?php if(get_sub_field('options_text_titles') == 0): ?>
                                <h2><?php echo get_sub_field('text_title1') ?></h2>
                            <?php else: ?>
                                <div class="title"><?php echo get_sub_field('text_title2') ?></div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <div class="description" style="padding: 40px 20px 0px;">
                            <?php echo get_sub_field('description'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows('place_items') ) : ?>
    <?php $row_index = $row_index + 1; ?>
        <div id="section-vtr-content-<?php echo $row_index; ?>" class="section section-has-content<?php if ($row_index%2 != 0) echo ' left'; else echo ' right'; ?>">
        <div class="data"> 
            <div class="section-vtr-title">
                <div id="section-vtr-content-slide-content-<?php echo $row_index; ?>" class="swiper-container" 
                    data-options='{
                    "speed": 1000,
                     "simulateTouch": 0,
                     "followFinger": 0,
                     "shortSwipes": 0,
                     "longSwipes": 0,
                    "pagination": "#section-vtr-content-<?php echo $row_index; ?> .slide-paginates",
                    "prevButton": "#section-vtr-content-<?php echo $row_index; ?> .slide-prev",
                    "nextButton": "#section-vtr-content-<?php echo $row_index; ?> .slide-next" }'>
                    <ul class="swiper-wrapper lsn">
                        <?php while( have_rows('place_items') ): the_row(); ?>
                            <li class="swiper-slide">
                                <div class="title"><?php echo get_sub_field('title'); ?>
                                </div>
                                <?php echo get_sub_field('description'); ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <div class="slide-paginates"></div>
                </div>
            </div>
        </div>
        <div id="section-vtr-content-slide-<?php echo $row_index; ?>" class="swiper-container" 
             data-options='{
             "speed": 1000,
            "simulateTouch": 0,
            "followFinger": 0,
            "shortSwipes": 0,
            "longSwipes": 0,
             "pagination": "#section-vtr-content-<?php echo $row_index; ?> .slide-paginates",
             "prevButton": "#section-vtr-content-<?php echo $row_index; ?> .slide-prev",
             "nextButton": "#section-vtr-content-<?php echo $row_index; ?> .slide-next" }'>
             <ul class="swiper-wrapper lsn">
                <?php while( have_rows('place_items') ): the_row();
                    $id = 'place'.get_row_index();
                ?>
                <li class="swiper-slide">
                    <div class="content">
                        <div class="tabbed-2">
                            <?php while( have_rows('detail_items') ): the_row();
                                $id_row = $id;
                                $image = get_sub_field('image');
                                $id_row .= 'column'.get_row_index();
                             ?>
                            <div id="<?php echo $id_row ?>" class="tab-content">
                                <h3><?php the_sub_field('title_image'); ?></h3>
                                <img src="<?php echo $image['url']; ?>" alt="">
                            </div>
                            <?php endwhile; ?>
                            <ul class="tab-title">
                                <?php while( have_rows('detail_items') ): the_row();
                                $id_row = $id;
                                $id_row .= 'column'.get_row_index();
                                ?>
                                <li class="">
                                    <a href="#<?php echo $id_row; ?>"><?php the_sub_field('title'); ?></a>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>

        </div>

        <div class="slide-prev"></div>
        <div class="slide-next"></div>

    </div>
<?php endif; ?>