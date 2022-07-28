<?php
add_action('wp_enqueue_scripts', 'childhood_styles');
add_action('wp_enqueue_scripts', 'childhood_scripts');


function childhood_styles() {
	wp_enqueue_style( 'childhood-style', get_stylesheet_uri() ); /*подключаем стили*/
	// wp_enqueue_style( 'childhood-style', get_template_directory_uri() . '/assets/styles/main.min.css' ); - если нужно подключить дополнительный файл стилей
	// wp_enqueue_style( 'childhood-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' ); - если нужно подключить сетевые стили
};


function childhood_scripts() {
	wp_enqueue_script('childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true); /*подключаем скрипты*/
	// wp_enqueue_script('childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), null, true); - подключаем с Jquery
};

add_theme_support( 'custom-logo' );  //Добавляем подключение кастомного логотипа в админку 