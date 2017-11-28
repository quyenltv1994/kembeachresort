<?php if ( have_rows('button_lien_he_opt', 'option') ) : ?>
	<?php while ( have_rows('button_lien_he_opt', 'option') ) : the_row(); ?>
		<a href="<?php echo get_sub_field('button_link') ?>" class="contact-button">
			<span><i class="fa fa-angle-left"></i> </span>
			<span><?php echo get_sub_field('button_text'); ?></span>
		</a>
	<?php endwhile; ?>

	<div id="subscribe-form">
		<?php if ( ICL_LANGUAGE_CODE == 'en' ) : ?>
			<?php echo do_shortcode('[contact-form-7 id="205" title="SUBSCRIBE"]'); ?>
		<?php else : ?>
			<?php echo do_shortcode('[contact-form-7 id="178" title="ĐĂNG KÝ NHẬN THÔNG TIN DỰ ÁN"]'); ?>
		<?php endif; ?>
		<div class="close-btn"></div>
	</div>
<?php endif; ?>