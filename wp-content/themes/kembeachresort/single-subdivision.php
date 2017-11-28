<?php get_header(); ?>

<?php  
    switch ( get_field('type_sub_content') ) {
        case 'type_1':
            get_template_part('template-parts/single-subdivision/content-type-1');
            break;

        case 'type_2':
            get_template_part('template-parts/single-subdivision/content-type-2');
            break;

        case 'type_3':
            get_template_part('template-parts/single-subdivision/content-type-2');
            break;
        
        default:
            # code...
            break;
    }
?>

<?php get_footer(); ?>