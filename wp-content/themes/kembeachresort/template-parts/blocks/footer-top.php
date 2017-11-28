<?php if ( have_rows('menu_top_ft_opt', 'option') ) : ?>
<div class="section" id="section10">
    <div class="container">
        <div class="list-media list-utilities">
            <div class="logo-mobile">
                <a href="<?php echo get_home_url(); ?>" class="logo">
                	<img src="<?php echo get_field('logo_2_opt', 'option'); ?>" alt="logo-footer" style="width: 280px;">
                </a>
            </div>
            <?php $i = 0; ?>
            <?php while ( have_rows('menu_top_ft_opt', 'option') ) : the_row(); ?>
            <?php if ($i == 2) : ?>
        	<div class="item wow fadeInUp" data-wow-delay="0.4">
                <a href="<?php echo get_home_url(); ?>" class="logo">
                	<img src="<?php echo get_field('logo_2_opt', 'option'); ?>" alt="logo-footer-2" style="width: 300px;">
                </a>
            </div>
            <?php $i++; ?>
        	<?php endif; ?>
            <div class="item wow fadeInUp" data-wow-delay="<?php echo $i*0.2 ?>s">
                <div class="thumb">
                    <a href="<?php echo get_sub_field('link'); ?>" title="">
                        <img src="<?php echo get_sub_field('image'); ?>" alt="..">
                    </a>
                </div>
                <div class="wrapper">
                    <a href="<?php echo get_sub_field('link'); ?>" class="title">
                    	<?php echo get_sub_field('text_link'); ?>
                    </a>
                </div>
            </div>
            <?php $i++; ?>
        	<?php endwhile; ?>
        </div>
    </div>
</div>
<?php endif; ?>