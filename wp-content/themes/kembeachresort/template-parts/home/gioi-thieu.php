<?php while ( have_rows('gioi_thieu_hp') ) : the_row(); ?>
<div class="section gioithieu" id="gioithieu">
    <div class="wrapper--lg">
        <h1 class="title wow fadeInDown">
            <img src="<?php echo get_sub_field('title_image'); ?>" alt="" class="wowzoomIn">
        </h1>
        
        <div class="description wow fadeInUp" data-wow-delay="0.4s">
            <p><?php echo get_sub_field('description'); ?></p>
        </div>
        <?php 
        	$listImg = get_sub_field('images');
        	$numberImg = count($listImg);
        	$i = 0;
        ?>
        <ul class="list-unstyled list--float">
        	<?php while ( have_rows('images') ) : the_row(); ?>
            <li class="wow fadeInUp" style="width: calc(100% / <?php echo $numberImg; ?>)" data-wow-delay="<?php echo 0.2*$i; ?>s">
                <img src="<?php echo get_sub_field('image'); ?>" alt="">
            </li>
            <?php $i++; ?>
            <?php endwhile; ?>
        </ul>
        <div class="more"><a href="<?php echo get_sub_field('button_link'); ?>"><?php echo get_sub_field('button_text'); ?></a></div>
    </div>
</div>
<?php endwhile; ?>