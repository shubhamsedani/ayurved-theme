<?php
get_header();
$banner_title = get_field('banner_title', get_the_ID());
$banner_background_image = get_field('banner_background_image', get_the_ID());
$product_content = get_field('product_content', get_the_ID());
if (has_post_thumbnail(get_the_ID())) {
    $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail')[0];
} else {
    $image = get_template_directory_uri() . '/assets/images/dummy-img.png';
}
?>

<?php if (!empty($banner_background_image)) { ?>
    <!-- inner banner start -->
    <section class="inner_banner_section">
        <div class="inner_banner_content">
            <div class="inner_banner_img" style="background-image: url(<?php echo $banner_background_image; ?>);">
                <?php if (!empty($banner_title)) { ?>
                    <div class="inner_banner_title">
                        <h1><?php echo $banner_title; ?></h1>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- inner banner end -->
<?php } ?>

<?php if (!empty($product_content)) { ?>
    <section class="product_detail_section pt--100 pb--100">
        <div class="container">
            <div class="main-title text-start">
                <h3 class="title-default"><?php echo get_the_title(); ?></h3>
            </div>

            <div class="row">

                <div class="col-xl-9">
                    <div class="product_detail_inner">
                        <?php if (!empty($product_content)) { ?>
                            <div class="product_detail_img">
                                <img class="img-fluid" src="<?php echo $image; ?>">
                            </div>
                        <?php } ?>

                        <?php if (have_rows('certificate_images', get_the_ID())) {  ?>
                            <div class="product_certification_img">
                                <div class="row">

                                    <?php
                                    while (have_rows('certificate_images', get_the_ID())) {
                                            the_row();
                                            $single_certificate = get_sub_field('single_certificate_image'); ?>

                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                <div class="certification_img">
                                                    <img src="<?php echo $single_certificate; ?>">
                                                </div>
                                            </div>

                                    <?php } ?>

                                </div>
                            </div>
                        <?php } ?>

                        <?php if (!empty($product_content)) { ?>
                            <div class="product_detail_content">
                                <?php echo $product_content; ?>
                            </div>
                        <?php } ?>

                        <?php if (have_rows('product_table_details', get_the_ID())) {
                            $count = 0; ?>
                            <div class="product-table">
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Botanical Name</th>
                                                    <th scope="col">Other Names</th>
                                                    <th scope="col">Part Used</th>
                                                    <th scope="col" class="d-none"></th>
                                                    <th scope="col" class="d-none"></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                while (have_rows('product_table_details', get_the_ID())) {
                                                    the_row();
                                                    $count++;
                                                    $product_name = !empty(get_sub_field('product_name')) ? get_sub_field('product_name') : "";
                                                    $botanical_name = !empty(get_sub_field('botanical_name')) ? get_sub_field('botanical_name') : "";
                                                    $other_name = !empty(get_sub_field('other_name')) ? get_sub_field('other_name') : "";
                                                    $part_used_in_product = !empty(get_sub_field('part_used_in_product')) ? get_sub_field('part_used_in_product') : "";
                                                    $product_description = get_sub_field('product_description');
                                                    $price_per_kg = get_sub_field('price_per_kg');
                                                    $sold_by = get_sub_field('sold_by');
                                                    $form = get_sub_field('form');
                                                    $packaging_type = get_sub_field('packaging_type');
                                                    $packaging_size = get_sub_field('packaging_size');
                                                    $botanical_name = get_sub_field('botanical_name');
                                                    $product_image_in_popup = get_sub_field('product_image_in_popup');
                                                    ?>

                                                        <tr>
                                                            <td scope="row"><?php echo $count; ?></td>
                                                            <td>
                                                                <a class="hover_default table_product_name" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $count; ?>">
                                                                    <?php echo $product_name; ?>
                                                                </a>
                                                            </td>
                                                            <td><?php echo $botanical_name; ?></td>
                                                            <td><?php echo $other_name; ?></td>
                                                            <td><?php echo $part_used_in_product; ?></td>
                                                            <td class="d-none"></td>
                                                            <td class="d-none"></td>
                                                        </tr>

                                                        <div class="modal fade" id="exampleModal<?php echo $count; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <div class="modal-product-detail bg-2">
                                                                            <div class="row align-items-center">
                                                                                <?php if (!empty($product_image_in_popup)) { ?>
                                                                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                                                        <img class="img-fluid" src="<?php echo $product_image_in_popup; ?>">
                                                                                    </div>
                                                                                <?php } ?>
                                                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                                                                                    <div class="modal-product-detail-inner">
                                                                                        <?php if (!empty($product_description)) { ?>
                                                                                            <p><?php echo $product_description; ?></p>
                                                                                        <?php } ?>
                                                                                        <?php if (!empty($price_per_kg)) { ?>
                                                                                            <p class="price">
                                                                                                <span class="value">₹ <?php echo $price_per_kg; ?></span> / Kg
                                                                                            </p>
                                                                                        <?php } ?>
                                                                                            
                                                                                        <?php if (!empty($sold_by) || !empty($form) || !empty($packaging_type) || !empty($packaging_size) || !empty($botanical_name)) { ?>
                                                                                        <p class="produt-packaging-info">
                                                                                            <?php if (!empty($sold_by)) { ?>
                                                                                                <span><b>Sold By :</b> <?php echo $sold_by; ?></span>
                                                                                            <?php } ?>

                                                                                            <?php if (!empty($form)) { ?>
                                                                                                <span><b>Form:</b> <?php echo $form; ?></span>
                                                                                            <?php } ?>

                                                                                            <?php if (!empty($packaging_type)) { ?>
                                                                                                <span><b>Packaging Type:</b> <?php echo $packaging_type; ?></span>
                                                                                            <?php } ?>

                                                                                            <?php if (!empty($packaging_size)) { ?>
                                                                                                <span><b>Packaging Size:</b> <?php echo $packaging_size; ?></span>
                                                                                            <?php } ?>

                                                                                            <?php if (!empty($botanical_name)) { ?>
                                                                                                <span><b>Botanical Name:</b> <?php echo $botanical_name; ?></span>
                                                                                            <?php } ?>
                                                                                        </p>
                                                                                        <?php } ?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="get-latest-price-form">
                                                                            <p>Get Latest Price and details from "HNCO Organics Private Limited" on your mobile quickly</p>

                                                                            <form class="row g-3">

                                                                                <div class="col-12">
                                                                                    <?php gravity_form(2, false, false, false, '', true); ?>
                                                                                </div>

                                                                            </form>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="product_sidebar">
                        <div class="product_sidebar_inner">
                            <?php
                                $args = array(
                                    'post_type' => 'products',
                                    'posts_per_page' => -1,
                                    'orderby' => 'title',
                                    'order' => 'ASC'
                                );

                                $query = new WP_Query($args);
                                if ($query->have_posts()) {?>
                                    <ul class="product_sidebar_links">
                                        <?php
                                        while ($query->have_posts()) {
                                            $query->the_post();
                                            get_the_ID();
                                            $product_title = get_the_title();
                                            ?>
                                                <li><a href="<?php echo get_permalink(); ?>"><?php echo $product_title; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                    <?php
                                } ?>

                            <?php
                            $widget_title = get_field('widget_title', 'option');
                            $widget_text = get_field('widget_text', 'option');
                            $select_page_to_redirect = get_field('select_page_to_redirect', 'option');
                            if ((!empty($widget_title) || !empty($widget_text)) && !empty($select_page_to_redirect)) {?>
                                <div class="product_sidebar_contact bg-2">
                                    <?php if (!empty($widget_title)) { ?>
                                        <h3><?php echo $widget_title; ?></h3>
                                    <?php } ?>
                                    <?php if (!empty($widget_text)) { ?>
                                        <p><?php echo $widget_text; ?></p>
                                    <?php } ?>
                                    <?php if (!empty($select_page_to_redirect)) { ?>
                                        <a class="btn btn-default" href="<?php echo $select_page_to_redirect; ?>">contact us</a>
                                    <?php } ?>
                                </div>
                                <?php
                            } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php } ?>

<?php get_footer(); ?>