<?php while ( have_rows('banner_type_2') ) : the_row(); ?>
<div class="main-header bb-custom-wrapper">
	<div class="wrapper-slider">
		<?php if( (have_rows('image_left'))): ?>
			<div id="main-slider-1" class="slider">
				<div class="slider_content">
					<div class="item_wrapper">
						 	<?php while (have_rows('image_left')) : the_row(); ?>
								<div class="item">
									<img src="<?php  echo get_sub_field('images'); ?>" alt="">
								</div>
							<?php endwhile; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php if( (have_rows('image_right'))): ?>
		<div id="main-slider-2" class="slider">
			<div class="slider_content">
				<div class="item_wrapper">
					 <?php while ( have_rows('image_right') ) : the_row(); ?>
							<div class="item">
								<img src="<?php echo get_sub_field('images'); ?>" alt="">
							</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>	
	<?php endif; ?>

	</div>
</div>
<?php endwhile; ?>


<div id="section1" class="section section1 section-luxury" style="height: 656.549px;">
		<img src="<?php echo get_field('image_banner_3'); ?>" alt="">
		<div class="posa txt">
			<div class="container">
				<div class="dtb">
					<div class="dtbc">
						<img src="<?php echo get_field('mage_top_bn_3');?>" alt="">
						<?php if(have_rows('list_text_bn_3')): ?>
						<ul class="lsn clearfix">

							<?php while(have_rows('list_text_bn_3')) : the_row(); ?>
								

							<li> <?php echo get_sub_field('item_text_bn_3'); ?></li>
						<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>