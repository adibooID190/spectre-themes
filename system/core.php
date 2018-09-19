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

/**
 * Dukungan Tema
 */
add_theme_support('title-tag'); // Judul Situs
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'galery', 'caption')); // Dukungan HTML5 Form Komentar
add_theme_support('post-thumbnails', array('page', 'post')); // Gambar Utama
add_theme_support( 'automatic-feed-links' ); // Link Umpan
add_theme_support( "custom-header", null ); // Hanya validasi saja
add_theme_support( "custom-background", null ); // Hanya validasi saja

add_action( 'after_setup_theme', 'translate_spectre' );
function translate_spectre(){
    load_theme_textdomain( 'spectre', get_template_directory() . '/system/i18n' );
}

if ( ! isset( $content_width ) ) $content_width = 900;

register_nav_menus( array(
	'header' => __('Navigasi Atas', 'spectre'),
	'kontak' => __('Navigasi Kontak', 'spectre'),
	'footer' => __('Navigasi Kaki', 'spectre'),
) );

/**
 * Mengarahkan url pencarian
 */
function searchformurl()
{
  $GLOBALS['wp_rewrite']->search_base = 'search';
}
add_action('init', 'searchformurl');