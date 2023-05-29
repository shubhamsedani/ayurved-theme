<?php

/**
 * Certificates lising Block
 */

if (have_rows('certificate_image_and_title')) { ?>
    <!-- Certification section start -->
    <div class="gallery_section gallery pt--100 pb--100">
        <div class="container">
            <div class="row row-gap-15">

                <?php
                while (have_rows('certificate_image_and_title')) {
                    the_row();
                    $single_certificate = get_sub_field('single_certificate');
                    $single_title = get_sub_field('single_title');
                    ?>

                    <?php if (!empty($single_certificate)) { ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="certificate_holder">         
                                <a class="lightbox" href="<?php echo esc_url($single_certificate); ?>">
                                    <img src="<?php echo esc_url($single_certificate); ?>">
                                    <?php if (!empty($single_title)) { ?>
                                        <div class="certificate_title">
                                            <h4><?php _e($single_title); ?></h4>
                                        </div>
                                    <?php } ?>
                                </a>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
           
            </div>
        </div>
    </div>
    <!-- Certification section end -->
<?php } ?>
