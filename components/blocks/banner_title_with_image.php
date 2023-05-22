<?php
/**
 * Call To Action Block
 */

$product_title = get_sub_field('product_title');
$product_image = get_sub_field('product_image');
?>

<?php if (!empty($product_image)) { ?>
    <!-- inner banner start -->
    <section class="inner_banner_section">
        <div class="inner_banner_content">
            <div class="inner_banner_img" style="background-image: url(<?php echo $product_image; ?>);">
                <?php if (!empty($product_title)) { ?>
                    <div class="inner_banner_title">
                        <h1><?php echo $product_title; ?></h1>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- inner banner end -->
<?php } ?>
