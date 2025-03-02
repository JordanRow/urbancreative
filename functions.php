<?php
    function ur_title_dynamic() {
        // Adds dynamic title tag support
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
    }

    add_action('after_setup_theme','ur_title_dynamic');


    function ur_menus() {
        $locations = array(
            'primary' => "desktop",
            'mobile' => "mobile",
            'footer' => "footer",
        );
        register_nav_menus($locations);
    }

    add_action('init', 'ur_menus');

    function ur_add_styles() {
        wp_enqueue_style('ur-boostrap', "//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css", array(), null);
        wp_enqueue_style('ur-style', get_template_directory_uri() . "/style.css", array(), 1.0, 'all');
        wp_enqueue_style('ur-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), null);
        wp_enqueue_style('ur-slickcss', "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css", array(), null);
        wp_enqueue_style( 'google-fonts', "https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap", [], null );
    }

    add_action('wp_enqueue_scripts', 'ur_add_styles');

    function ur_add_scripts() {
        wp_enqueue_script('ur-jquery', "https://code.jquery.com/jquery-3.6.0.min.js", array(), null, true);
        wp_enqueue_script('ur-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array('jquery'), null, true);
        wp_enqueue_script('ur-bootjs', "//cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js", array('jquery', 'ur-popper'), null, true);
        wp_enqueue_script('ur-slick', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array('jquery'), null, true);
        wp_enqueue_script('ur-scriptjs', get_template_directory_uri() . "/assets/javascript/scripts.js", array('jquery', 'ur-slick'), '1.0', true);

    }

    add_action('wp_enqueue_scripts', 'ur_add_scripts');

    function ur_widget_areas() {
        register_sidebar(array(
            'before_title'  => '',
            'after_title'   => '',
            'before_widget' => '',
            'after_widget'  => '',
            'name'          => 'Header Area',
            'id'            => 'header-area-1',
            'description'   => 'Header Widget Area',
        ));

        register_sidebar(array(
            'before_title'  => '',
            'after_title'   => '',
            'before_widget' => '',
            'after_widget'  => '',
            'name'          => 'Footer Area 1',
            'id'            => 'footer-area-1',
            'description'   => 'Footer Widget Area 1',
        ));

        register_sidebar(array(
            'before_title'  => '',
            'after_title'   => '',
            'before_widget' => '<div class="footer-info-container col">',
            'after_widget'  => '</div>',
            'name'          => 'Footer Area 2',
            'id'            => 'footer-area-2',
            'description'   => 'Footer Widget Area 2',
        ));
    }

    add_action('widgets_init', 'ur_widget_areas');
?>
