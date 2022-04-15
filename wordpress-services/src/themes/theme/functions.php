<?php
function load_style_sheets(){
    wp_register_style('favicon', get_template_directory_uri() . '/assets/images/favicon.png', array(), 1, 'all' );
    wp_enqueue_style('favicon');
    
    wp_register_style('bootstrapmin', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 1, 'all' );
    wp_enqueue_style('bootstrapmin'); 
    
    wp_register_style('venobox', get_template_directory_uri() . '/venobox/venobox.css', array(), 1, 'all' );
    wp_enqueue_style('venobox'); 
    
    wp_register_style('plugin_theme_css', get_template_directory_uri() . '/assets/css/plugin_theme_css.css', array(), 1, 'all' );
    wp_enqueue_style('plugin_theme_css'); 
    
    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all' );
    wp_enqueue_style('style'); 
    
    wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), 1, 'all' );
    wp_enqueue_style('responsive');
    
    wp_register_style('customstyle', get_template_directory_uri() . '/customstyle.css', array(), 1, 'all' );
    wp_enqueue_style('customstyle');
}
add_action('wp_enqueue_scripts', 'load_style_sheets');

function load_java_script_sheets(){
    wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3.min.js', array(), 1,1,1 );
    wp_enqueue_script('modernizr');

    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-3.5.1.min.js', array(), 1,1,1 );
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), 1,1,1 );
    wp_enqueue_script('bootstrap');

    wp_register_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), 1,1,1 );
    wp_enqueue_script('isotope');

    wp_register_script('owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), 1,1,1 );
    wp_enqueue_script('owl');

    wp_register_script('nivo_slider', get_template_directory_uri() . '/assets/js/jquery.nivo.slider.pack.js', array(), 1,1,1 );
    wp_enqueue_script('nivo_slider');

    wp_register_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), 1,1,1 );
    wp_enqueue_script('slick');

    wp_register_script('imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array(), 1,1,1 );
    wp_enqueue_script('imagesloaded');

    wp_register_script('venobox', get_template_directory_uri() . '/venobox/venobox.min.js', array(), 1,1,1 );
    wp_enqueue_script('venobox');

    wp_register_script('appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array(), 1,1,1 );
    wp_enqueue_script('appear');

    wp_register_script('knob', get_template_directory_uri() . '/assets/js/jquery.knob.js', array(), 1,1,1 );
    wp_enqueue_script('knob');

    wp_register_script('BeerSlider', get_template_directory_uri() . '/assets/js/BeerSlider.js', array(), 1,1,1 );
    wp_enqueue_script('BeerSlider');

    wp_register_script('theme_pluginjs', get_template_directory_uri() . 'assets/js/theme-pluginjs.js', array(), 1,1,1 );
    wp_enqueue_script('theme_pluginjs');

    wp_register_script('meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js', array(), 1,1,1 );
    wp_enqueue_script('meanmenu');

    wp_register_script('ajax-menu', get_template_directory_uri() . '/assets/js/ajax-mail.js', array(), 1,1,1 );
    wp_enqueue_script('ajax-menu');

    wp_register_script('theme', get_template_directory_uri() . '/assets/js/theme.js', array(), 1,1,1 );
    wp_enqueue_script('theme');

}
add_action('wp_enqueue_scripts', 'load_java_script_sheets');
