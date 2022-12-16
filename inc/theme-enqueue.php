<?php

/*
*   Документация по функциям: 
    https://wp-kama.ru/function/wp_enqueue_script
    https://wp-kama.ru/function/wp_enqueue_style
*/

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'vintage_add_scripts' );
function vintage_add_scripts() {


    wp_enqueue_style( 'nivo-slider', get_template_directory_uri() . '/css/nivo-slider.css', array('superfish'));
    wp_enqueue_style( 'superfish', get_template_directory_uri() . '/css/superfish.css', array(), false, 'screen' );
    wp_enqueue_style( 'nivo-slider', get_template_directory_uri() . '/css/nivo-slider.css' );
    wp_enqueue_style( 'tweet', get_template_directory_uri() . '/css/tweet.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style( 'lessframework', get_template_directory_uri() . '/css/lessframework.css');

    // Убираем дефолтная версию jQuery
    wp_deregister_script( 'jquery' );
    // Регаем нужную версию jQuery
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.7.1.min.js');
    // Подключаем нужную версию jQuery
    wp_enqueue_script( 'jquery' );
    // Подключаем нужную версию jQuery c новым ID
    //wp_enqueue_script( 'jquery-new', get_template_directory_uri() . '/js/jquery-1.7.1.min.js');
    
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr-2.5.3.min.js');
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', false, false, true);
    wp_enqueue_script( 'superfish-hoverIntent', get_template_directory_uri() . '/js/superfish-1.4.8/js/hoverIntent.js');
    wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish-1.4.8/js/superfish.js');
    wp_enqueue_script( 'supersubs', get_template_directory_uri() . '/js/superfish-1.4.8/js/supersubs.js');
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js');
    wp_enqueue_script( 'nivo', get_template_directory_uri() . '/js/jquery.nivo.slider.js');
    wp_enqueue_script( 'css3-mediaqueries', get_template_directory_uri() . '/js/css3-mediaqueries.js');
    wp_enqueue_script( 'tabs', get_template_directory_uri() . '/js/tabs.js');
    wp_enqueue_script( 'poshytip', get_template_directory_uri() . '/js/poshytip-1.1/src/jquery.poshytip.min.js');

    if (is_page_template( 'contact.php' )) :
        wp_enqueue_script( 'map', get_template_directory_uri() . '/js/map.js');
        wp_enqueue_script( 'map-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyD4vlOj_3G-ErfM6ey5qeGcTjjoE58cH4w');
    endif; 

    
}

?>