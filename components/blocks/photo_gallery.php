<?php

/**
 * Photo Gallery Block
 */

$title = get_sub_field('title');
?>
<?php if (have_rows('add_image')) { ?>
    <div class="gallery_section gallery pt--100 pb--100">
        <div class="container-fluid">
            <?php if ($title) { ?>
                <div class="main-title">
                    <h2 class="title-default"><?php _e($title); ?></h2>
                </div>
            <?php } ?>
            <div class="row row-gap-15">
                <?php
                while (have_rows('add_image')) {
                    the_row();
                    $attachment_id = get_sub_field('image');
                    $size = 'gallery-thumb';
                    $sizefull = 'full';
                    $image = wp_get_attachment_image_src($attachment_id, $size);
                    $imagelarge = wp_get_attachment_image_src($attachment_id, $sizefull);
                    ?>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                        <a class="lightbox" href="<?php echo esc_url($imagelarge[0]); ?>">
                            <img src="<?php echo esc_url($image[0]); ?>">
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php
}
?>