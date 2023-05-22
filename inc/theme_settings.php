<?php

/* To create option page or theme setting page*/
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    /* Create sub menu of theme settings*/
    include get_stylesheet_directory() . '/inc/theme_sub_settings_pages.php';
}
