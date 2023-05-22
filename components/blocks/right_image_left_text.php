<?php

/**
 * Right Image With Left Content Block
 */

$title = get_sub_field('title');
$sub_title = get_sub_field('sub_title');
$description = get_sub_field('description');
$button_link = get_sub_field('button_link');
$image = get_sub_field('image');
$sub_line = get_sub_field('sub_line');

if (!empty($title) || !empty($sub_title) || !empty($description) || !empty($image)) { ?>
    <section class="services_section pt--100 pb--100">
        <div class="container">
            <div class="row align-items-center row-gap-30">
            <?php if (!empty($title) || !empty($sub_title) || !empty($description)) { ?>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="services_content">
                        <?php if (!empty($title)) {?>
                            <div class="main-title">
                                <h2 class="title-default"><?php echo $title;?></h2>
                            </div>
                        <?php } ?>
                        <?php if ($sub_line || $sub_title || $description) { ?>
                            <div class="services_inner_content">
                            <?php if ($sub_line) { ?>
                                <p><?php echo $sub_line ;?></p>
                            <?php } ?> 
                            <?php if ($button_link || $sub_title || $description) { ?>   
                                <div class="services_description">
                                    <?php if ($sub_title) { ?>
                                        <h4><?php echo $sub_title;?></h4>
                                    <?php } ?>
                                    <?php if ($description) { ?> 
                                        <p><?php echo $description;?></p>
                                    <?php } ?>
                                    <?php if ($button_link) { ?>
                                        <a href="<?php echo $button_link;?>" class="btn btn-default" >
                                            <?php echo get_sub_field('button_text');?>
                                        </a>
                                    <?php } ?>
                                </div>
                            <?php } ?> 
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <?php if (!empty($image)) { ?>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="services_img">
                        <img src=<?php echo $image;?> alt="image">
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>

<?php } ?>
