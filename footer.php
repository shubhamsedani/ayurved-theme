<?php

/**
 * The template for displaying the footer
 */

$footer_logo = get_field('footer_logo', 'option');
$description = get_field('description', 'option');
$menu_title = get_field('menu_title', 'option');
$contact_title = get_field('contact_title', 'option');
$call_us_title = get_field('call_us_title', 'option');
$phone_no = get_field('phone_no', 'option');
$email_title = get_field('email_title', 'option');
$email_address = get_field('email', 'option');
$address_title = get_field('address_title', 'option');
$address = get_field('address', 'option');
$copyright = get_field('copyright', 'option');

?>

<footer id="colophon" class="site-footer">
    <!-- footer area start -->
    <div class="footer-two pt--100 pb--100 bg-2">
        <div class="container">
            <div class="row row-gap-30">
                <!-- single wized -->
                <?php if (!empty($footer_logo) || !empty($description)) { ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="footer-single-wized">
                            <?php if (!empty($footer_logo)) { ?>
                                <a class="footer-logo" href="<?php echo esc_url(get_site_url()); ?>">
                                    <img src="<?php echo esc_url($footer_logo); ?>">
                                </a>
                            <?php } ?>
                            <?php if (!empty($description)) { ?>
                                <p class="disc">
                                    <?php _E($description); ?>
                                </p>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                <?php if (have_rows('footer_menu', 'options') || !empty($menu_title)) { ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 pl-50">
                        <div class="footer-single-wized">
                            <?php if (!empty($menu_title)) {?>
                                <div class="wized-title-area">
                                    <h4 class="wized-title"><?php _e($menu_title); ?></h4>
                                </div>
                            <?php } ?>
                            <div class="wized-2-body">
                                <ul>
                                    <?php
                                    while (have_rows('footer_menu', 'options')) {
                                        the_row();
                                        $menu_item = get_sub_field('page_name');
                                        $menu_item_link = get_sub_field('page_link');
                                        ?>
                                        <?php if (!empty($menu_item_link)) { ?>
                                            <li><a href="<?php echo esc_url($menu_item_link); ?>"><?php _e($menu_item); ?></a></li>
                                        <?php }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if (!empty($phone_no) || !empty($email_address) || !empty($email_address)) { ?>
                    <!-- single wized -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="footer-single-wized">
                            <div class="wized-title-area">
                                <h4 class="wized-title"><?php _e($contact_title); ?></h4>
                            </div>
                            <div class="wized-2-body">
                                <?php if (!empty($phone_no)) { ?>
                                    <div class="contact-info-1">
                                        <div class="icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="disc">
                                            <span><?php _e($call_us_title); ?></span>
                                            <a href="tel:<?php esc_attr_e($phone_no); ?>"><?php esc_attr_e($phone_no); ?></a>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if (!empty($email_address)) { ?>
                                    <div class="contact-info-1">
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="disc">
                                            <span><?php _e($email_title); ?></span>
                                            <a href="<?php echo esc_url('mailto:' . $email_address); ?>"><?php echo esc_url($email_address); ?></a>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if (!empty($address)) { ?>
                                    <div class="contact-info-1">
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="disc">
                                            <span><?php _e($address_title); ?></span>
                                            <p class="mb-0"><?php _e($address); ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- single wized -->
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- footer area end -->

    <!-- copyright-area start -->
    <?php if (!empty($copyright)) { ?>
        <div class="copyright-section bg-2">
            <div class="container copyright-border ptb-25">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="copyright">
                            <?php _e($copyright); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- copyright-area end -->


    <!-- start loader -->
    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>