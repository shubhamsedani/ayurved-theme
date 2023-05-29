<?php

/**
 * Two columns card and image and bullet points Block
 */

if (have_rows('single_card_details')) { ?>
    <div class="about_section_2 pb--100">
        <div class="container">
            <div class="row row-gap-30">
                <?php
                while (have_rows('single_card_details')) {
                    the_row();
                    $single_card_title = get_sub_field('single_card_title');
                    $single_card_content = get_sub_field('single_card_content');
                    ?>

                    <?php if (!empty($single_card_title) || !empty($single_card_content)) { ?>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="about_section_2_inner">
                                <?php if (!empty($single_card_title)) { ?>
                                    <h3><?php _e($single_card_title); ?></h3>
                                <?php } ?>
                                <?php if (!empty($single_card_content)) { ?>
                                    <div class="about_section_2_inner_content">
                                        <?php _e($single_card_content); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>  
                    <?php }
                }
                ?>
            </div>
        </div>
    </div>
<?php } ?>