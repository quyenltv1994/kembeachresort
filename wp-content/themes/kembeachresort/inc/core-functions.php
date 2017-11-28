<?php

function goldenriver_setup() {
	/*
	* Make theme available for translation.
	* Translations can be filed in the /languages/ directory.
	* If you're building a theme based on cybele, use a find and replace
	* to change 'cybele' to the name of your theme in all the template files
	*/
	load_theme_textdomain( 'goldenriver', get_template_directory() . '/languages' );


	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'header_menu' => esc_html__( 'Header Menu' ),
		'footer_menu' => esc_html__( 'Footer Menu' )
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
}
add_action( 'after_setup_theme', 'goldenriver_setup' );

/* Cleanup */
function goldenriver_cleanup() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );

	remove_action('wp_head', 'wp_generator');
}
add_action( 'init', 'goldenriver_cleanup' );

// Remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

/* Execute PHP code in widget */
function php_text($text) {
	if (strpos($text, '<?php') !== FALSE && strpos($text, '?>') !== FALSE) {
		ob_start();
		eval("?> $value <?php ");
		$text = ob_get_clean();
	}
	return $text;
}
add_filter('widget_text', 'php_text', 99);

// Resource excerpt length
// @length unit: Character
function get_custom_excerpt( $text, $length = 0 ) {
	if (!$text) return;

	$length = $length ? $length : 250;

	$text = wp_strip_all_tags($text, true);

	$return = $text;

	if (strlen($text) > $length)
		$return = substr($text, 0, strpos($text, ' ', $length));

	return $return;
}

function the_custom_excerpt( $text, $length = 0 ) {
	$length = $length ? $length : 250;

	echo get_custom_excerpt( $text, $length );
}

/**
 * Get a SVG icon
 * @param String $shapeName The svg name (in images/spriteSVG/raw/)
 * @return string SVG HTML element
 */
function getSvgIcon($shapeName) {

    $file = getThemeAsset('/images/spriteSVG/raw/' . str_replace('--', '/', $shapeName) . '.svg', true);
    if (empty($shapeName) || !file_exists($file)) {
        $shapeName = 'default';
    }

    $svg = '<svg width="40" height="40" class="shape-svg shape-' . $shapeName . '" aria-hidden="true" role="presentation">';
    $svg .= '<use xlink:href="' . '/wp-content/themes/noe/images/spriteSVG/output/symbol/svg/sprite.symbol.svg' . '#' . $shapeName . '"></use>';
    $svg .= '</svg>';

    return $svg;
}

// languages_list_header
function languages_list_header(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
        echo '<ul class="list-unstyled lang-list">';
        foreach($languages as $l){
            echo '<li>';
            if(!$l['active']) echo '<a href="'.$l['url'].'">';
            	echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';
            if(!$l['active']) echo '</a>';
            echo '</li>';
        }
        echo '</ul>';
    }
}

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );