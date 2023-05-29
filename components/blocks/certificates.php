<?php

/**
 * Certificates Block
 */

$title = get_sub_field('title');
?>
<?php if (have_rows('add_certificate_image')) { ?>
    <section class="certification_section pt--100 pb--100 bg-1">
        <div class="container">
            
            <?php if ($title) { ?>
                <div class="main-title">
                    <h2 class="title-default text-white"><?php _e($title); ?></h2>
                </div>
            <?php }
            ?>

            <div class="certification__slider">
                <?php
                while (have_rows('add_certificate_image')) {
                    the_row();
                    $image = get_sub_field('add_image'); ?>
                    <?php if (!empty($image)) { ?>
                        <div class="slide">
                            <div class="slide__img">
                                <img src="<?php echo esc_url($image); ?>" alt="Certificate" class="img-fluid" />
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>

        </div>
    </section>
<?php } ?>