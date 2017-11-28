<?php while ( have_rows('noi_that_thiet_ke_hp') ) : the_row(); ?>
<?php $subtitle = get_sub_field('subtitle'); ?>
<div class="section" id="canhocaocap">
    <h3 class="title">
        <span class="lg-text wow fadeInDown"><?php echo get_sub_field('title'); ?></span>
        <span class="sm-text wow fadeInUp"><?php echo $subtitle; ?></span>
    </h3>
	
	<?php if ( have_rows('item') ) : ?>
    <div class="wrapper">
        <div class="list-media list-effect-up">
        	<?php while ( have_rows('item') ) : the_row(); ?>
            <div class="item wow fadeInUp">
                <div class="thumb">
                    <a href="#" title="">
                        <img src="<?php echo get_sub_field('image'); ?>" alt="..">
                    </a>
                </div>
                <div class="wrapper">
                    <div class="content"><?php echo get_sub_field('description'); ?></div>
                </div>
            </div>
        	<?php endwhile; ?>
        </div>
    </div>
	<?php endif; ?>
</div>
<?php endwhile; ?>