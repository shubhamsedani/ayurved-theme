<?php

/**
 * Product Categories Block
 */

$args = array(
    'post_type' => 'products',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC'
);

$query = new WP_Query($args);
if ($query->have_posts()) { ?>
    <section class="product_section pt--100 pb--100">
        <div class="container">
            <?php
            $title = get_sub_field('title');
            if (!empty($title)) { ?>
                <div class="main-title">
                    <h2 class="title-default"><?php _e($title); ?></h2>
                </div>
            <?php } ?>
            
            <div class="product_inner">
                <div class="row">
                    <?php
                    while ($query->have_posts()) {
                        $query->the_post();

                        get_the_ID();
                        $product_title = get_the_title();
                        $product_page_url = get_permalink();
                        $product_excerpt = get_the_excerpt();

                        if (has_post_thumbnail(get_the_ID())) {
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail')[0];
                        } else {
                            $image = get_template_directory_uri() . '/assets/images/dummy-img.png';
                        }
                        ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="product_detail mb-25">
                                <div class="product_img">
                                    <img src=<?php echo esc_url($image); ?> />
                                </div>
                                <div class="product_content">
                                    <?php if (!empty($product_title)) { ?>
                                        <div class="product_title">
                                            <h4>
                                                <a class="hover_default" href="<?php echo esc_url($product_page_url); ?>">
                                                    <?php _e($product_title); ?></a>
                                            </h4>
                                        </div>
                                    <?php } ?>
                                    <?php if (!empty($product_excerpt)) { ?>
                                        <div class="product_para">
                                            <p><?php _e($product_excerpt); ?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    } ?>
                </div>
            </div>
        </div>
    </section>

    <?php
    wp_reset_postdata();
}
?>