<?php while ( have_rows('giao_thong') ) : the_row(); ?>
<div class="section" id="giaothonghoanhao">
    <h3 class="title">
        <span class="lg-text wow fadeInDown"><?php echo get_sub_field('title'); ?></span>
        <span class="sm-text wow fadeInUp"><?php echo get_sub_field('subtitle'); ?></span>
    </h3>

    <div class="wrapper">
        <img src="<?php echo get_sub_field('image'); ?>" alt="giao-thong" class="wow zoomIn">
        
        <div class="text-caption">
            <div class="content">
                <p class="first-letter"><?php echo get_sub_field('description'); ?></p>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>