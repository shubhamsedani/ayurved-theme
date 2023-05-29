<?php

/**
 * Tab With Left Image
 */

?>
<section class="tab_section pt--100 pb--100 bg-2">
    <div class="container">
        <?php if (have_rows('tabs_title')) { ?>
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <?php
                $i = 0;
                while (have_rows('tabs_title')) {
                    the_row(); ?>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?php if ($i == 0) { _e("active");} ?>" 
                                id="tab-<?php echo $i ?>-tab" 
                                data-bs-toggle="pill" 
                                data-bs-target="#tab-<?php echo $i ?>" 
                                type="button" 
                                role="tab" 
                                aria-controls="tab-<?php echo $i ?>" 
                                aria-selected="true">
                                <?php echo get_sub_field('add_tab_title') ?>
                        </button>
                    </li> 
                    <?php
                    $i = $i + 1;
                } ?>
            </ul>
        <?php } ?>

        <div class="tab-content" id="pills-tabContent">
            <?php
            $j = 0;
            if (have_rows('tabs_data')) {
                while (have_rows('tabs_data')) {
                    the_row();
                    $tab_img = get_sub_field('image');
                    $tab_title = get_sub_field('title');
                    $tab_subtitle = get_sub_field('subtitle');
                    $tab_description = get_sub_field('description');
                    $tab_list_title = get_sub_field('list_title');
                    $tab_button_link = get_sub_field('button_link');?>

                    <div class="tab-pane fade <?php if ($j == 0) { _e("show active"); } ?>" id="tab-<?php echo $j ?>" role="tabpanel" aria-labelledby="tab-<?php echo $j . "-tab"; ?>">
                        <div class="row">
                            <?php if (!empty($tab_img)) { ?>
                                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="tab_content_img">
                                        <img class="img-fluid" src="<?php echo esc_url($tab_img); ?>">
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="tab_inner_content">
                                    <?php if (!empty($tab_title)) { ?>
                                        <h2><?php _e($tab_title); ?>
                                            <?php if (!empty($tab_subtitle)) { ?>
                                                <span><?php _e($tab_subtitle); ?></span>
                                            <?php } ?>
                                        </h2>
                                    <?php } ?>

                                    <?php if (!empty($tab_description)) { ?>
                                        <p><?php _e($tab_description); ?></p>
                                    <?php } ?>

                                    <?php if (!empty($tab_list_title)) { ?>
                                        <h4><?php _e($tab_list_title); ?></h4>
                                    <?php } ?>

                                    <?php if (have_rows('list_data')) { ?>
                                        <ul>
                                            <?php
                                            while (have_rows('list_data')) {
                                                the_row();
                                                $tab_list_item = get_sub_field('list_item');
                                                if (!empty($tab_list_item)) { ?>
                                                    <li><?php _e($tab_list_item); ?></li><?php
                                                }
                                            }
                                            ?>
                                        </ul>
                                    <?php } ?>

                                    <?php if ($tab_button_link) { ?>
                                        <a href=<?php echo $tab_button_link ?> class="btn btn-default">
                                            <?php _e(get_sub_field('button_text')); ?>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php $j = $j + 1;
                }
            } ?>
        </div>
    </div>
</section>