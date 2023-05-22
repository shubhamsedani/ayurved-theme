<!-- Banner Home Block -->

<section class="banner__slider">
    <div class="slider stick-dots">
        <?php if (have_rows('add_slide')) {
            while (have_rows('add_slide')) {
                the_row();
                $home_banner_slider_src = get_sub_field('slide_image');
                $home_banner_slider_title = get_sub_field('slider_title');
                $home_banner_slider_button_link = get_sub_field('slider_button_link');

                if ($home_banner_slider_src) {
                    ?>
                    <div class="slide">
                        <?php if (!empty($home_banner_slider_src)) { ?>
                            <div class="slide__img">
                                <img src=<?php echo $home_banner_slider_src; ?> alt="Banner Image" class="full-image animated img-fluid" />
                            </div>
                        <?php } ?>

                        <?php if ($home_banner_slider_title || $home_banner_slider_button_link) { ?>
                            <div class="slide__content ">
                                <div class="slide__content--headings text-center">
                                    <?php if ($home_banner_slider_title) { ?>
                                        <h1 class="animated title" data-animation-in="fadeInUp">
                                            <?php echo $home_banner_slider_title; ?> 
                                        </h1>
                                    <?php } ?>
                                    <?php if ($home_banner_slider_button_link) { ?>
                                        <a href="<?php echo $home_banner_slider_button_link;?>" class="btn btn-default animated" data-animation-in="fadeInUp" target="_self">
                                            <?php echo get_sub_field('slider__button_text');?>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <?php
                }
            }
        } ?>
    </div>
</section>
