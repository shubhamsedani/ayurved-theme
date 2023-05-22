<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>

    <header class="header--sticky header-one ">
        <div class="header-top header-top-one bg-1">
            <div class="container">
                <div class="row">
                    <?php
                    $email = get_field('email', 'option');
                    $mobile_no = get_field('mobile_no', 'option');
                    if (!empty($email) || !empty($mobile_no)) {
                        ?>
                        <div class="col-lg-6 d-xl-block d-none">
                            <div class="left">
                                <?php if (!empty($email)) { ?>
                                    <div class="mail">
                                        <a href="mailto:<?php echo $email; ?>"><i class="fal fa-envelope"></i>
                                            <?php echo $email; ?>
                                        </a>
                                    </div>
                                <?php } ?>
                                <?php if (!empty($mobile_no)) { ?>
                                    <div class="phone">
                                        <a href="tel:<?php echo $mobile_no; ?>"><i class="fal fa-phone-alt"></i>
                                            <?php echo $mobile_no;?></a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if (have_rows('social_icons', 'option')) {?>
                        <div class="col-lg-6 d-xl-block d-none">
                            <div class="right">
                                <ul class="social-wrapper-one">
                                    <?php while (have_rows('social_icons', 'option')) {
                                        the_row(); ?>
                                        <li>
                                            <a href="<?php echo (get_sub_field('social_link', 'option')) ? get_sub_field('social_link', 'option') : "JavaScript:void(0)"; ?>" target="_blank">
                                                <i class="<?php echo get_sub_field('icon_class', 'option'); ?>"></i>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="header-main-one bg-white">
            <div class="container">
                <div class="row">
                    <?php
                    $site_logo = get_field('site_logo', 'option');
                    if (!empty($site_logo)) {
                        ?>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                            <div class="thumbnail">
                                <a href="<?php echo get_site_url(); ?>">
                                    <img src="<?php echo $site_logo; ?>" alt="Logo"></a>   
                            </div>
                        </div>
                    <?php } ?>
                    <div class="col-xl-9 col-lg-8 col-md-8 col-sm-8 col-8">
                        <div class="main-header">
                            <nav class="nav-main mainmenu-nav d-none d-xl-block">
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'top_menu',
                                        'menu_class' => 'mainmenu',
                                    )
                                );
                                ?>
                            </nav>
                            <?php
                            $menu_icon = get_field('icon', 'option');
                            if (!empty($menu_icon)) { ?>
                                <div class="button-area">
                                    <button id="menu-btn" class="menu rts-btn btn-primary-alta">
                                        <img class="menu-light" src="<?php echo $menu_icon ?>" alt="Menu-icon">
                                    </button>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- End header area -->

    <!-- mobile-menu start -->
    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <div class="body-mobile d-block d-xl-none">
                <nav class="nav-main mainmenu-nav">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'top_menu',
                            'menu_class' => 'mainmenu',
                        )
                    );
                    ?>
                </nav>
            </div>
        </div>
        <!-- inner menu area desktop End -->
    </div>
    <!-- mobile-menu end -->
    <div id="anywhere-home">
    </div>
    <!-- ENd Header Area -->