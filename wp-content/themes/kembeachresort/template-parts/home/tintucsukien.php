<?php while ( have_rows('tintucsukien_hp') ) : the_row(); ?>
<div class="section" id="tintucsukien">
    <h3 class="title">
        <span class="lg-text wow fadeInDown"><?php echo get_sub_field('title'); ?></span>
        <span class="sm-text wow fadeInUp"><?php echo get_sub_field('subtitle'); ?></span>
    </h3>

    <div class="wrapper">
        <div class="list-new list-stylized">
            <?php while ( have_rows('tin_du_an') ) : the_row(); ?>
            <div class="item item--left wow slideInLeft">
                <div class="wrapper">
                    <a href="#" class="title">
                        <span class="wp-title">
                            <span><?php _e('Tin tức', 'goldenriver'); ?></span>
                            <span><?php _e('Dự án', 'goldenriver'); ?></span>
                        </span>
                    </a>
                    
                    <div class="content">
                        <div class="bold">
                            <a href="<?php echo get_sub_field('link'); ?>" title="">
                                <?php echo get_sub_field('title'); ?>                           
                            </a>
                        </div>
                        <p><?php echo get_sub_field('description'); ?></p>

                    </div>
                    
                </div>
                <div class="thumb">
                    <a href="<?php echo get_sub_field('link'); ?>">
                        <img src="<?php echo get_sub_field('image'); ?>" alt="">
                    </a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php while ( have_rows('tin_do') ) : the_row(); ?>
            <div class="item item--right wow slideInRight">
                <div class="thumb">
                    <a href="<?php echo get_sub_field('link'); ?>">
                        <img src="<?php echo get_sub_field('image'); ?>" alt="">
                    </a>
                </div>
                <div class="wrapper">
                    <div class="content">
                         <div class="bold">
                            <a href="<?php echo get_sub_field('link'); ?>" title="">
                                <?php echo get_sub_field('title'); ?>                           
                            </a>
                        </div>
                        <p><?php echo get_sub_field('description'); ?></p>

                    </div>

                    <a href="#" class="title">
                        <span class="wp-title">
                            <span><?php _e('Tiến độ', 'goldenriver'); ?></span>
                            <span><?php _e('Thi công', 'goldenriver'); ?></span>
                        </span>
                    </a>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php endwhile; ?>