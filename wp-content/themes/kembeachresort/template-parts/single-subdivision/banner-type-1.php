<div class="section section-vtr-intro">
	<?php 
		$id = get_the_id();
		if ( has_post_thumbnail( $id ) ) :
			$postThumbnail = get_the_post_thumbnail_url($id, 'full');
		endif;
		$bgImagemb = get_field('background_image_for_mobile_sg_sub');
		$logoSub = get_field('logo_sg_sub');
		$titleSub = get_field('image_title_sg_sub');
	?>
    <img class="desktop mobile-hidden" src="<?php echo $postThumbnail; ?>" alt="">
    <div class="container clearfix vtr-banner-one" style="background-image: url(<?php echo $bgImagemb ? $bgImagemb : $postThumbnail; ?>);">
        <div class="dtb">
            <div class="dtbc">
                <img src="<?php echo $logoSub; ?>" alt="" style="max-width: 250px;">
                <?php if ( $titleSub ) : ?>
                <p>
                    <img src="<?php echo $titleSub; ?>" alt="#">
                </p>
            	<?php endif; ?>
            </div>
        </div>
    </div>
</div>