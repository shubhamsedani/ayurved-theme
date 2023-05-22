<?php

/**
 * Call To Action Block
 */

$cta_heading = get_sub_field('heading');
$cta_bg = get_sub_field('background_image');
$cta_button_link = get_sub_field('button_link');
?>
<?php if ($cta_bg && $cta_heading) { ?>
   <section class="company_section pt--100 pb--100" 
            style= "background-image: url(<?php echo $cta_bg;?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="company_content">
                        <div class="main-title">
                            <h2 class="title-default"><?php echo $cta_heading;?></h2>
                        </div>
                        <?php if ($cta_button_link) {?>
                        <div class="company_btn">
                            <a href=<?php echo $cta_button_link ;?> class="btn btn-default">
                                <?php echo get_sub_field('button_text');?>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
