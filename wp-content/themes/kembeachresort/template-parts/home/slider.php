<?php if( have_rows('slider_hp') ) : ?>
	<div class="main-header bb-custom-wrapper">
		<div class="wrapper-slider">
			<?php while( have_rows('slider_hp') ) : the_row(); ?>
				<!-- main-slider-1 -->
				<?php if( have_rows('slider_left') ) : ?>
				<div id="main-slider-1" class="slider">
					<div class="slider_content">
						<div class="item_wrapper">
							<?php $i = 0; ?>
							<?php while( have_rows('slider_left') ) : the_row(); ?>
							<div class="item">
								<img src="<?php echo get_sub_field('image'); ?>" alt="<?php echo 'home slider '.$i; ?>">
							</div>
							<?php $i++; ?>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
				<?php endif; ?>
				
				<!-- main-slider-2 -->
				<?php if( have_rows('slider_right') ) : ?>
				<div id="main-slider-2" class="slider">
					<div class="slider_content">
						<div class="item_wrapper">
							<?php $i = 0; ?>
							<?php while( have_rows('slider_right') ) : the_row(); ?>
							<div class="item">
								<img src="<?php echo get_sub_field('image'); ?>" alt="<?php echo 'home slider '.$i; ?>">
							</div>
							<?php $i++; ?>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
				<?php endif; ?>
			<?php endwhile; ?>	        
		</div>
	</div>
<?php endif; ?>