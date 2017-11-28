<?php while ( have_rows('vitri_hp') ) : the_row(); ?>
	<div class="section" id="vitrikimcuong">
    <div class="wrapper--lg">
        <h3 class="title">
            <span class="lg-text wow fadeInDown"><?php echo get_sub_field('title'); ?></span>
            <span class="xs-text wow fadeInUp"><?php echo get_sub_field('description'); ?></span>
        </h3>
        <?php 
        	$i = 0;
        ?>
        <ul class="list-unstyled list--float">
        	<?php while ( have_rows('uu_diem') ) : the_row(); ?>
            <li class="wow fadeInUp" data-wow-delay="<?php echo 0.2*$i; ?>s">
                <span>
                    <i class="<?php echo get_sub_field('icon'); ?>"></i>
                </span>
                <span><?php echo get_sub_field('text'); ?></span>
            </li>
            <?php $i++; ?>
        	<?php endwhile; ?>
        </ul>
    </div>
</div>
<?php endwhile; ?>