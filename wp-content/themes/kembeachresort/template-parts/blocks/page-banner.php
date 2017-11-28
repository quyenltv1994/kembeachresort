<div class="main-header bb-custom-wrapper">
	<div class="wrapper-slider">
		<?php if( (have_rows('banner_1_opt','option'))): ?>

			<div id="main-slider-1" class="slider">
				<div class="slider_content">
					
					<div class="item_wrapper">
						 <?php while ( have_rows('banner_1_opt','option') ) : the_row(); ?>
						 	<?php while (have_rows('image_left')) : the_row(); ?>
								<div class="item">
									<img src="<?php  echo get_sub_field('images'); ?>" alt="">
								</div>
							<?php endwhile; ?>
						<?php endwhile; ?>
					</div>
				</div>
			</div>

		<?php endif; ?>

		<?php if( (have_rows('banner_2_opt','option'))): ?>
		<div id="main-slider-2" class="slider">

			<div class="slider_content">
				<div class="item_wrapper">
					 <?php while ( have_rows('banner_2_opt','option') ) : the_row(); ?>
					 	<?php while (have_rows('images_right')): the_row();?>
							<div class="item">
								<img src="<?php echo get_sub_field('images_2'); ?>" alt="">
							</div>
						<?php endwhile; ?>
					<?php endwhile; ?>
					
				</div>
			</div>
		</div>	
	<?php endif; ?>

	</div>
</div>