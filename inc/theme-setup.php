<?php
/*
=====================
	Theme Setup Function
=====================
*/

function vintage_setup(){

    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );

    //Регистрация одной зоны меню
    // register_nav_menu( 'main-menu', 'Main Menu' );
    // register_nav_menu( 'footer-bottom-menu', 'Footer Bottom Menu' );


	//Регистрация нескольких зон меню одной функцией
	register_nav_menus(
		array( 
			'main-menu' => __( 'Main Menu'),
            'footer-bottom-menu' => __( 'Footer Bottom Menu')  
		)
    );
    
}

add_action( 'after_setup_theme', 'vintage_setup' );

?>