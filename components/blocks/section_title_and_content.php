<?php

/**
 * title and content Block
 */

$section_title = get_sub_field('section_title');
$section_content = get_sub_field('section_content');
?>

<?php if (!empty($section_title) || !empty($section_content)) {
    $section_content = str_replace("<div></div>", "", $section_content);
    ?>

    <!-- inner banner start -->
    <div class="about_section pt--100 pb--100">
        <div class="container">
            <?php if (!empty($section_title)) { ?>
                <div class="main-title">
                    <h2 class="title-default"><?php echo $section_title; ?></h2>
                </div>
            <?php } ?>
            <?php if (!empty($section_content)) { ?>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="about_inner">
                            <?php echo $section_content; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- inner banner end -->
<?php } ?>
