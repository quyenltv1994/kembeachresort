<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>
	
<div class="section innerpager" id="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="contact-box">
                    <div class="title"><?php echo get_field('title_left'); ?></div>
                    <div class="wrapper">
                    	<?php if(have_rows('content_left')): ?>
                        <div class="address">
                        		<?php while( have_rows('content_left') ) : the_row(); ?>
                            <div class="item">
                                <div class="di-table-cell">
                                    <i class=" fa <?php echo get_sub_field('icon'); ?>"></i>
                                </div>
                                <div class="di-table-cell">
                                    <?php echo get_sub_field('content'); ?>
                                </div>
                            </div>
                        <?php endwhile ?>
                        </div>
                    <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="contact-box">
                    <div class="title"><?php echo get_field('title_contact'); ?></div>
                    <div class="wrapper">
                    	
                         <div class="contact-form">
                         	<?php echo do_shortcode( get_field('form_contact') ); ?>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>