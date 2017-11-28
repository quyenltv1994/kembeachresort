<?php
/*
Template Name: Cat nhat tien do
*/
?>
<?php get_header(); ?>
	
<div class="section innerpager" id="project-update">
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="tien-do-thi-cong">
            <div class="container">
                <div class="row">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <?php while ( have_rows('flexible_content') ) : the_row(); $index = get_row_index(); ?>
                            <?php if ( get_row_layout() == 'cap_nhat_tien_do' ) :
                                include get_template_directory() . '/template-parts/blocks/cap_nhat_tien_do.php';
                                endif; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>