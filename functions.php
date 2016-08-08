<?php
/**
* Загружаемые стили и скрипты
*/
function load_style_script()
{
    // Подключения скриптов
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js' );
    wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate.min.js' );
    wp_enqueue_script('jquery-1.10.2.min', get_template_directory_uri() . '/js/jquery-1.10.2.min.js' );
    wp_enqueue_script('jquery.carouFredSel-6.2.1-packed', get_template_directory_uri() . '/js/jquery.carouFredSel-6.2.1-packed.js' );
    wp_enqueue_script('hoverIntent', get_template_directory_uri() . '/js/hoverIntent.js' );
    wp_enqueue_script('superfish', get_template_directory_uri() . '/js/superfish.js' );
    wp_enqueue_script('orbit.min', get_template_directory_uri() . '/js/orbit.min.js' );
    wp_enqueue_script('css3-mediaqueries', get_template_directory_uri() . '/js/css3-mediaqueries.js' );
    wp_enqueue_script('my_script', get_template_directory_uri() . '/js/script.js' );



    // Подключения стилей
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css' );
    wp_enqueue_style('superfish', get_template_directory_uri() . '/css/superfish.css' );
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awsome/css/font-awesome.css' );
    wp_enqueue_style('orbit', get_template_directory_uri() . '/css/orbit.css' );
    wp_enqueue_style('css_style', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style('green', get_template_directory_uri() . '/css/color/green.css' );
    wp_enqueue_style('zerogrid', get_template_directory_uri() . '/css/zerogrid.css' );
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css' );


}


/**
* Загружаем стили и скрипты
*/
add_action('wp_enqueue_scripts', 'load_style_script' );

/**
* Поддержка миниатюр
*/
add_theme_support('post-thumbnails');

/**
* Добавляем меню
*/
register_nav_menu('sf-menu', Меню);

   /**
    * Виджеты sidebar
    * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
    */
    $args = array(
        'name'          => ( 'Виджеты сайтбара'),
        'id'            => 'sidebar',
        'description'   => 'Размещения виджетов сайтбара',
        'class'         => '',
        'before_widget' => '<div class="widget-container">',
        'after_widget'  => ' <div class="clear"></div> </div>',
        'before_title'  => '<h6 class="widget-title">',
        'after_title'   => '</h6>'
    );

    register_sidebar( $args );
