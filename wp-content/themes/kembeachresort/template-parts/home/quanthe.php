<?php while ( have_rows('quan_the_hp') ) : the_row(); ?>
<div class="section" id="dothisinhthai">
    <div class="wrapper--lg">
        <h3 class="title">
            <span class="lg-text wow fadeInDown"><?php echo get_sub_field('title'); ?></span>
        </h3>

        <div class="wrapper">
            <div class="mobile">
                <img src="<?php echo get_sub_field('image_mobile'); ?>" alt="quan-the-mb">
            </div>
            <div class="desktop">
                <img src="<?php echo get_sub_field('image_desktop'); ?>" alt="quan-the-desk">
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>