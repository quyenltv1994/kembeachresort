<?php while ( have_rows('mat_bang_hp') ) : the_row(); ?>
<div class="section" id="matbangtongthe">
    <h3 class="title">
        <span class="lg-text wow fadeInDown"><?php echo get_sub_field('title'); ?></span>
        <span class="sm-text wow fadeInUp"><?php echo get_sub_field('subtitle'); ?></span>
    </h3>

    <div class="wrapper">
        <img src="<?php echo get_sub_field('image'); ?>" alt="mat-bang" class="wow zoomIn">
        <object>

        </object>
    </div>
</div>
<?php endwhile; ?>