<?php

// load css
function load_stylesheets()
{
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/plugins/fontawesome-5.css', array(), 1, 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/plugins/animate.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/vendor/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/plugins/slick.min.css', array(), 1, 'all');
    wp_enqueue_style('baguetteBox', get_template_directory_uri() . '/assets/css/baguetteBox.min.css', array(), 1, 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

// load js
function add_js()
{
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jquery.min.js', array(), 1, 'all');
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/plugins/counterup.js', array(), 1, 'all');
    wp_enqueue_script('sal.min', get_template_directory_uri() . '/assets/js/plugins/sal.min.js', array(), 1, 'all');
    wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array(), 1, 'all');
    wp_enqueue_script('slick.min', get_template_directory_uri() . '/assets/js/plugins/slick.min.js', array(), 1, 'all');
    wp_enqueue_script('slick-animation.min', get_template_directory_uri() . '/assets/js/plugins/slick-animation.min.js', array(), 1, 'all');
    wp_enqueue_script('baguetteBox.min', get_template_directory_uri() . '/assets/js/plugins/baguetteBox.min.js', array(), 1, 'all');
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), 1, 'all');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), 1, 'all');
}
add_action('wp_enqueue_scripts', 'add_js');

if (!function_exists('gurukrupa_theme_setup')) {
    function gurukrupa_theme_setup()
    {
        add_theme_support('menus');
        add_theme_support('widgets');
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_image_size('gallery-thumb', 229, 229, true);

        //Register menus
        register_nav_menus(
            array(
                'top_menu' => __('Top Menu', 'theme'),
            )
        );
    }

    add_action('after_setup_theme', 'gurukrupa_theme_setup');
}

//Register Sidebars
if (!function_exists('gurukrupa_sidebars')) {
    function gurukrupa_sidebars()
    {
        register_sidebar(
            array(
                'name' => 'Footer col-1',
                'id' => 'footer-col-1',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
            )
        );

        register_sidebar(
            array(
                'name' => 'Footer col-2',
                'id' => 'footer-col-2',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
            )
        );

        register_sidebar(
            array(
                'name' => 'Footer col-3',
                'id' => 'footer-col-3',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
            )
        );

        register_sidebar(
            array(
                'name' => 'Footer Copyright',
                'id' => 'footer-copyright',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
            )
        );
    }
    add_action('widgets_init', 'gurukrupa_sidebars');
}

/**Theme Setting this function is called */
if (function_exists('acf_add_options_page')) {
    include get_stylesheet_directory() . '/inc/theme_settings.php';
}

/** Footer copy right year shortcode */
function gurukrupa_copyright_year()
{
    // Things that you want to do.
    $copyright_year = date("Y");

    // Output needs to be return
    return $copyright_year;
}
// register shortcode
add_shortcode('copyrightyear', 'gurukrupa_copyright_year');
