<?php
/*
Template Name: Tin Tức
*/
?>
<?php get_header(); ?>
	
<div class="section section-ldp">
    <div class="container clearfix">
        <ul class="ldp-tabbed clearfix tac">
            <?php while(have_rows('load_page', 'option')): the_row(); $img = get_sub_field('image', 'option'); ?>
                <li class="<?php if(get_row_index() == 2) echo 'active'; ?>">
                    <a href="<?php the_sub_field('page', 'option'); ?>">
                        <img src="<?php echo $img['url']; ?>" alt="">
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>

        <div class="list fluid">
            <?php 
                $args = array(
                    'post_type' => 'tin_tuc',
                    'posts_per_page' => -1,
                    'order by' => 'menu_order',
                    'order' => 'DECS'
                );
                $query =  new WP_Query($args);
                if($query->have_posts()):
                    while($query->have_posts()): $query->the_post();
                        $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');
            ?>
                    <div class="item clearfix">
                        <a href="<?php the_permalink(); ?>" class="thumb">
                            <img src="<?php echo $img[0]; ?>" alt="">
                        </a>
                        <div class="data">
                            <h2><?php the_title(); ?></h2>
                            <hr>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>">Xem thêm</a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>    
        </div>
</div>

<div class="section section-ldp section-ldp-white section-reclick">
    <div class="clearfix">
        <?php 
            while(have_rows('image_bottom', 'options')): the_row(); $img = get_sub_field('image', 'option');
         ?>
            <div class="grid6">
                <a href="<?php the_sub_field('link', 'option'); ?>">
                    <img src="<?php echo $img['url']; ?>" alt="">
                </a>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<script>
function printDiv( elementId ) {
    var printDivCSS = '<link href="http://goldenriver.vinhomes.vn/wp-content/themes/vinhomes-golden-river/asset/css/style.css" rel="print" type="text/css">';
    window.frames["print_frame"].document.body.innerHTML = printDivCSS + document.getElementById( elementId ).innerHTML;
    var children = window.frames["print_frame"].document.body.childNodes;

    for( var i = 0; i < children.length; i++ ) {
        var e = children[i];
        if( typeof e.tagName != 'undefined' ) {
            if( ['P', 'A', 'UL', 'OL', 'LI', 'DIV'].indexOf( e.tagName.toUpperCase() ) != -1 ) {
                e.style.display = 'block';
            }
            else if( ['TABLE'].indexOf( e.tagName.toUpperCase() ) != -1 ) {
                e.style.display = 'table';
            }
        }
    }

    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
}

jQuery(document).ready(function($) {
    if( $('.section-ldp .the-content a.readmore').length > 0 ) {
        $('.section-ldp .the-content a.readmore').parent('p').nextAll().hide();
        $('.section-ldp .the-content a.readmore').click(function(e) {
            e.preventDefault();
            $(this).hide().parent('p').nextAll().show();
            return false;
        });
    }
});
</script>

<?php get_footer(); ?>