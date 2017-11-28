<?php 
	$facebook_link_opt = get_field('facebook_link_opt', 'option');
	$youtube_link_opt = get_field('youtube_link_opt', 'option');
	$phone_number_opt = get_field('phone_number_opt', 'option');
?>

<div class="group-button">
	<div class="nav-button">
		<span class=""><?php _e('Menu', 'goldenriver'); ?></span>
	</div>
	<div class="list-social">
		<ul>
			<?php if ( $facebook_link_opt ) : ?>
			<li>
				<a class="facebook-cta" href="<?php echo $facebook_link_opt; ?>">
					<i class="fa fa-facebook"></i>
				</a>
			</li>
			<?php endif; ?>
			<?php if ( $youtube_link_opt ) : ?>
			<li>
				<a class="youtube-cta" href="<?php echo $youtube_link_opt; ?>">
					<i class="fa fa-youtube"></i>
				</a>
			</li>
			<?php endif; ?>
			<?php if ( $phone_number_opt ) : ?>
			<li>
				<a href="tel:<?php echo $phone_number_opt; ?>"><i class="fa fa-phone"></i></a>
			</li>
			<?php endif; ?>
		</ul>
	</div>
</div>