<?php while ( have_rows('noi_hanh_phuc_hp') ) : the_row(); ?>
	<div class="section" id="gioithuongluu">
    <h3 class="title">
        <span class="lg-text wow fadeInDown"><?php echo get_sub_field('title') ?></span>
        <span class="sm-text wow fadeInUp"><?php echo get_sub_field('subtitle') ?></span>
    </h3>

    <div class="wrapper">
        <div class="list-media list-effect-up">
        	<?php  $i = 1; ?>
        	<?php while ( have_rows('slider') ) : the_row(); ?>
            <div class="item wow fadeInUp">
            	<?php if ( have_rows('items') ) : ?>
                <div class="thumb">
                    <ul id="gioithuongluu-<?php echo $i; ?>">
                    	<?php while ( have_rows('items') ) : the_row(); ?>
                        <li class="slider"><img src="<?php echo get_sub_field('item') ?>" alt=".."></li>
                    	<?php endwhile; ?>
                    </ul>
                </div>
            	<?php endif; ?>
                <div class="wrapper">
                    <div class="title"><?php echo get_sub_field('title') ?></div>
                    <div class="content"><?php echo get_sub_field('description'); ?></div>
                </div>
                <div class="cover"></div>
            </div>
            <?php $i++; ?>
        	<?php endwhile; ?>
        </div>
    </div>
</div>
<?php endwhile; ?>