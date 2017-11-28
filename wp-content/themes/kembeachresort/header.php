<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php 
	// experiment code
	$turn_on_experiment = (get_field('turn_on_experiment') == 'Yes') ? true : false;
	if ($turn_on_experiment) echo get_field('code_before_head_tag');
?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta id="vgfViewport" name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php if (get_field('favicon_opt', 'option')) : ?>
		<link rel="shortcut icon" href="<?php the_field('favicon_opt', 'option') ?>" type="image/x-icon" />
	<?php endif ?>

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900,900italic,100italic,100'
          rel='stylesheet' type='text/css'>
	
	<?php wp_head(); ?>

	<?php the_field('within_head', 'option'); ?>

	<script>
		var wp_vars = [];
		wp_vars['tplurl'] = '<?php echo get_template_directory_uri(); ?>';
	</script>
	
	<?php 
		// Google Analytics code
		if ($turn_on_experiment) echo get_field('code_within_head_tag');
	?>

</head>

<body <?php body_class(); ?>>
	
	<?php 
		// Google Tag Manager code
		if(!$turn_on_experiment) echo get_field('google_tag_manager', 'option'); 
	?>
	<?php the_field('after_opening_body', 'option'); ?>

	<div class="wrap-page">

	<?php 
		$type_content = is_singular('subdivision') ? ( get_field('type_sub_content') == 'type_3' ? true : false ) : false;
	?>

	<div id="section1" class="section section1 <?php echo $type_content || (is_page_template( 'pages/tpl-khuyenmai.php' ) || is_page_template( 'pages/tpl-tintuc.php' ) || is_singular('tin_tuc')) ? 'section-luxury' : 'home'; ?>">
		<div class="bg-menu"></div>

		<div class="logo">
			<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_field('logo_opt', 'option'); ?>" alt="<?php echo get_bloginfo('name'); ?>" width="380px;"></a>
		</div>

		<div class="main-menu">
			<div class="title">
				<a href="<?php echo get_home_url(); ?>">
					<img src="<?php echo get_field('logo_2_opt', 'option'); ?>" alt="logo-2" width="228px;">
				</a>
			</div>
			
			<?php languages_list_header(); ?>

	        <?php wp_nav_menu( array( 'theme_location' => 'header_menu', 'container' => '', 'menu_class' => 'list-unstyled list move-menu' ) ); ?>
	        
			<div class="close-btn"></div>
		</div>

		<?php get_template_part('template-parts/blocks/group', 'button'); ?>

		<?php if ( is_home() || is_front_page() || is_archive('news')) : ?>

			<?php get_template_part('template-parts/home/slider'); ?>

		<?php elseif ( is_page_template( 'pages/tpl-khuyenmai.php' ) || is_page_template( 'pages/tpl-tintuc.php' ) || is_singular('tin_tuc')) :
			$img = get_field('image_banner', 'option');
		 ?>

			<img src="http://goldenriver.vinhomes.vn/wp-content/uploads/2016/08/ldp-banner-5.jpg" alt="">

		<?php elseif ( is_page() ) : ?>

			<?php get_template_part('template-parts/blocks/page', 'banner'); ?>
		
		<?php elseif ( is_singular('subdivision') ) : ?>

			<?php  
				switch ( get_field('type_sub_content') ) {
					case 'type_1':
						get_template_part('template-parts/single-subdivision/banner-type-1');
						break;

					case 'type_2':
						get_template_part('template-parts/single-subdivision/banner-type-2');
						break;

					case 'type_3':
						get_template_part('template-parts/single-subdivision/banner-type-3');
						break;
					
					default:
						# code...
						break;
				}
			?>
	        
		<?php endif; ?>

		<?php get_template_part('template-parts/blocks/button', 'lienhe'); ?>
			
	</div>