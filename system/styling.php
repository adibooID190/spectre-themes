<?php
/**
 * Inti Tema
 * Berkas ini akan memuat berkas inti agar tema ini berjalan dengan lancar.
 *
 * @Developed by : Garuda Cyber Technologies
 * @build date   : Thursday, 09 August 2018 10.17.21 PM (UTC+07.00)
 * @Author       : Amir Zuhdi Wibowo
 * @link         : https://www.kangamir.ga/
 * @version      : 1.0.0 20180809.001
 * 
 */

function style_process() {
	/* CSS Rendering */
	wp_enqueue_style('bootstrap-css', get_systheme('bootstrap', '/css/bootstrap.min.css'), false, '4.1.0', null);
	wp_enqueue_style('owl-css', get_systheme('owl', '/assets/owl.carousel.min.css'), false, '2.3.4', null);
	wp_enqueue_style('owl-theme-css', get_systheme('owl', '/assets/owl.theme.default.min.css'), false, '2.3.4', null);
	wp_enqueue_style('fa-css', get_systheme('fontawesome', '/css/font-awesome.min.css'), false, '4.7.0', null);
  	wp_enqueue_style('spectre-css', get_systheme('home', '/assets/css/spectre.css'), false, '1.0.0-20180416', null);
  	wp_enqueue_style( 'highlight-css', get_systheme('hljs', 'styles/googlecode.css') );

	/* Scripts */
	wp_enqueue_script('poper-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', false, '1.14.3', true);
  	wp_enqueue_script('hightlightjs',  get_systheme('hljs', 'highlight.pack.js'), false, '2.8.3', true);
  	wp_enqueue_script('hljs-ln', '//cdnjs.cloudflare.com/ajax/libs/highlightjs-line-numbers.js/2.3.0/highlightjs-line-numbers.min.js', false, '4.1.0', true);
  	wp_enqueue_script('bootstrap-js', get_systheme('bootstrap', '/js/bootstrap.min.js'), false, '4.1.0', true);
  	wp_enqueue_script('jquery-js', get_systheme('jquery', '/jquery-3.3.1.slim.min.js'), false, '4.1.0', true);
  	wp_enqueue_script('bootjpop-js3', get_systheme('bootstrap', '/js/bootstrap.bundle.min.js'), false, '4.1.0', true);
  	wp_enqueue_script('owl-js', get_systheme('owl', '/owl.carousel.js'), false, '2.3.4', true);
  	wp_enqueue_script('spectre-js', get_systheme('home', '/assets/js/spectre.js'), false, '1.0.0', true);
  	
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'style_process', 100);