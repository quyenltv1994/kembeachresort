<?php if( have_rows('flexible_content') ): ?>
    <?php while ( have_rows('flexible_content') ) : the_row(); ?>

    <?php  if( get_row_layout() == 'the_aqua' ): ?>
        <div class="section gioithieu" id="gioithieu">
            <div class="wrapper--lg">
                <h1 class="title wow fadeInDown"><?php echo get_sub_field('title'); ?></h1>
                <ul class="list-unstyled list--float">
                    <?php if(have_rows('images') ): ?>
                        <?php  $i=1; ?>
                        <?php while ( have_rows('images') ) : the_row();?>

                            <li class="wow fadeInUp" data-wow-delay="<?php  echo 0.2*$i ?>s">
                                <img src="<?php echo get_sub_field('image'); ?>" alt="">
                            </li>

                        <?php $i++; ?>
                        <?php  endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <?php  if( get_row_layout() == 'tien_ich' ): ?>
        <div class="section" id="tienich">
            <h3 class="title">
                <span class="lg-text wow fadeInDown"><strong><?php echo get_sub_field('title_t_i_ct'); ?></strong></span>
                <span class="sm-text wow fadeInUp"><?php echo get_sub_field('sub_title_t_i_ct'); ?></span>
            </h3>

            <div class="wrapper">
                <!-- wSlider -->
                <div id="utilities-slider" class="slider">
                    <div class="slider_content">
                        <div class="item_wrapper">
                            <!-- Repeat 3 -->
                            <?php if(have_rows('slider_t_i_ct')): ?>
                                <?php while(have_rows('slider_t_i_ct')): the_row(); ?>
                            <div class="item">
                                <img class="thumb" alt="" src="<?php echo get_sub_field('images'); ?>"/>
                            </div>
                            <?php endwhile ?>
                            <?php endif; ?>
                            <!-- end of repeat 3 -->
                        </div>
                    </div>
                    <div class="caption">
                        <div class="title"><?php echo get_sub_field('title_list_tien_ich_ct'); ?></div>
                    <?php if(have_rows('list_item_ti_ct')) :?>
                        <div class="wrapper">
                            <ol style="list-style-type: decimal-leading-zero; padding-left: 25px;" start="01">
                                <?php while(have_rows('list_item_ti_ct')): the_row(); ?>
                                <li><?php echo get_sub_field('item_t_i_ct'); ?></li>
                               <?php endwhile; ?>
                            </ol>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php  if( get_row_layout() == 'mat_bang_the_aqua' ) : ?>
        <div class="section" id="tienich">
            <h3 class="title">
                <span class="lg-text wow fadeInDown"><strong><?php echo get_sub_field('title'); ?></strong></span>
                <span class="sm-text wow fadeInUp"><?php echo get_sub_field('sub_title'); ?></span>
            </h3>
            <?php
            $tax_fields = get_sub_field('mat_bang_cpt');
            if(!empty($tax_fields)): ?>
            <div class="wrapper">
                <div class="container">
                    <div class="tabbed">
                        <ul class="tab-title">
                            <?php if(!empty($tax_fields)): ?>
                                <?php foreach($tax_fields as $id): 
                                    $taxs = get_term($id, 'loai_mat_bang');
                                ?>
                                    <li class="lv1"><a href="#aqua-<?php echo $id; ?>"><?php echo $taxs->name; ?></a></li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                        <?php foreach($tax_fields as $id):
                         ?>
                            <div class="tab-content" id="aqua-<?php echo $id; ?>">
                                <?php 
                                    $args = array(
                                            'posts_per_page' => -1,
                                            'post_type' => 'mat_bang',
                                            'order' => 'ASC',
                                            'orderby' => 'date',
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'loai_mat_bang',
                                                    'field' => 'term_id',
                                                    'terms' => $id,
                                                )
                                            )
                                        );
                                    $query = new WP_Query($args);

                                    if($query->have_posts()): 
                                        while($query->have_posts()): $query->the_post();
                                            $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');
                                ?>
                                    <p><img src="<?php echo $img[0]; ?>" alt=""></p>
                                    <div class="tab-row">
                                        <ul class="tab-title lv2">
                                            <?php while(have_rows('offices')): the_row();  ?>
                                                <li><a href="#aqua-<?php echo $index_parent.'-'.$id.'-'.get_row_index(); ?>"><?php the_sub_field('name') ?></a></li>
                                            <?php endwhile; ?>
                                        </ul>
                                        <?php while(have_rows('offices')): the_row();
                                            $img = get_sub_field('image');
                                        ?>
                                        <div class="tab-content lv2" id="aqua-<?php echo $index_parent.'-'.$id.'-'.get_row_index(); ?>">
                                            <img src="<?php echo $img['url']; ?>" alt="">
                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endwhile;
                                    endif;
                                 ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        </div>
    <?php endif; ?>

    <?php  if( get_row_layout() == 'mat_bang' ) : ?>
        <?php echo get_sub_field('html'); ?>
    <?php endif; ?>

    <?php  if( get_row_layout() == 'tam_nhin' ) : ?>
        <div class="section section-visions">
            <div class="posa txt">
                <div class="container">
                    <div class="dtb">
                        <div class="dtbc tac">
                            <h2><img src="<?php echo get_sub_field('image_title'); ?>" alt=""></h2>
                            <p><?php echo get_sub_field('description'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php  if( get_row_layout() == 'cay_xanh' ) : ?>
        <div class="section section-lx-featured">
            <div class="dtb">
                <div class="dtbc grid6">
                    <img src="<?php echo get_sub_field('image_left'); ?>" alt="">
                </div>
                <div class="dtbc grid6 txt-wrap">
                    <div class="dtb">
                        <div class="dtbc txt">
                            <img src="<?php echo get_sub_field('image_title'); ?>" alt="">
                            <p><?php echo get_sub_field('description'); ?></p>
                            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/ft-bottom-txt.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>