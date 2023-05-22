<?php

/**
 * Contact details
 */

$section_title = get_sub_field('section_title');
$office_address = get_sub_field('office_address');
$contact_number = get_sub_field('contact_number');
$contact_email = get_sub_field('contact_email');
$office_timings = get_sub_field('office_timings');
$facebook_link = get_sub_field('facebook_link');
$twitter_link = get_sub_field('twitter_link');
$linked_in_link = get_sub_field('linked_in_link');
?>

<?php if ($section_title || $office_address || $contact_number || $contact_email || $office_timings || $facebook_link || $twitter_link || $linked_in_link) { ?>
    <div class="address_section pb--100">
        <div class="container">
            <div class="row row-gap-30">           
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="address_inner">

                        <?php if (!empty($section_title)) { ?>
                            <div class="address_title">
                                <h3><?php echo $section_title; ?></h3>
                            </div>
                        <?php } ?>

                        <?php if (!empty($office_address)) { ?>
                            <div class="address_detail">
                                <div class="address_icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="address_content">
                                    <p><strong>Address: </strong> <?php echo $office_address; ?></p>
                                </div>
                            </div>
                        <?php } ?>

                        <div class="contact_summary">
                            <?php if (!empty($contact_number)) { ?>
                                <div class="contact_detail">
                                    <div class="contact_icon"><i class="fas fa-phone-alt"></i></div>
                                    <div class="contact_content">
                                        <p class="mb-0">
                                            <a class="hover_default" href="tel:<?php echo $contact_number; ?>"><?php echo $contact_number; ?> </a>
                                        </p>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if (!empty($contact_email)) { ?>
                                <div class="email_detail">
                                    <div class="email_icon"><i class="fas fa-envelope"></i></div>
                                    <div class="email_content">
                                        <p class="mb-0">
                                            <a class="hover_default" href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a>
                                        </p>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if (!empty($office_timings)) { ?>
                                <div class="schedule_detail">
                                    <div class="schedule_icon"></div>
                                    <div class="schedule_content">
                                        <p><?php echo $office_timings; ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <?php if (!empty($facebook_link) || !empty($twitter_link) || !empty($linked_in_link)) { ?>
                            <div class="social_detail">
                                <div class="social_content">
                                    <ul>
                                        <li><a href="<?php echo $facebook_link; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?php echo $twitter_link; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?php echo $linked_in_link; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>