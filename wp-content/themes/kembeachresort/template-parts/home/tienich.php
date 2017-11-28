<div class="section" id="tienich">
    <h3 class="title">
        <span class="lg-text wow fadeInDown"><?php echo get_field('title_tien_ich_hp'); ?></span>
        <span class="sm-text wow fadeInUp"><?php echo get_field('subtitle_tien_ich_hp'); ?></span>
    </h3>

    <div class="wrapper">
        <!-- wSlider -->
        <div id="utilities-slider" class="slider">
            <?php if ( have_rows('slider_tien_ich_hp') ) : ?>
            <div class="slider_content desktop">
                <div class="item_wrapper">
                    <!-- Repeat 3 -->
                    <?php while ( have_rows('slider_tien_ich_hp') ) : the_row(); ?> 
                    <?php $image = get_sub_field('image'); ?>
                    <div class="item">
                        <img class="thumb" alt="<?php get_the_title($image); ?>" src="<?php echo wp_get_attachment_url($image); ?>"/>
                    </div>
                <?php endwhile; ?>
                </div>
            </div>
            <?php endif; ?>
            <div class="mobile">
                <img src="<?php echo get_field('slider_tien_ich_mb_hp'); ?>" alt="slider-mobile-tienich">
            </div>
            <div class="caption">
                <div class="title"><?php echo get_field('list_title_tien_ich_hp'); ?></div>
                <div class="wrapper">
                    <?php if ( have_rows('list_tien_ich_hp') ) : ?>
                    <ol class="list-utilities" start="01" style="list-style-type: decimal-leading-zero; padding-left: 25px;">
                        <?php while ( have_rows('list_tien_ich_hp') ) : the_row(); ?>    
                        <li><span><?php echo get_sub_field('item'); ?></span></li>
                        <?php endwhile; ?>
                    </ol>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>