<?php

/**
 * Call To Action Block
 */

$cta_heading = get_sub_field('heading');
$cta_bg = get_sub_field('background_image');
$cta_button_link = get_sub_field('button_link');
$cta_button_text = get_sub_field('button_text');
?>
<?php if ($cta_bg && $cta_heading) { ?>
   <section class="company_section pt--100 pb--100" 
            style= "background-image: url(<?php echo esc_url($cta_bg); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="company_content">
                        <div class="main-title">
                            <h2 class="title-default"><?php _e($cta_heading);?></h2>
                        </div>
                        <?php if ($cta_button_link && $cta_button_text) {?>
                        <div class="company_btn">
                            <a href=<?php echo esc_url($cta_button_link); ?> class="btn btn-default">
                                <?php _e($cta_button_text);?>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
