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

Kirki::add_config( 'conf', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

Kirki::add_panel( 'settings', array(
    'priority'       => 10,
    'title'          => esc_attr__( 'Pengaturan Tema', 'spectre' ),
    'description'    => esc_attr__( 'Aturlah tema anda sesuai yang anda inginkan.', 'spectre' ),
) );

Kirki::add_section( 'header', array(
    'title'          => esc_attr__( 'Bagian Kepala Laman', 'spectre' ),
    'description'    => esc_attr__( 'Bagian navigasi sampai jumbotron saja.', 'spectre' ),
    'panel'          => 'settings',
    'priority'       => 160,
) );

Kirki::add_field( 'conf', array(
	'type'        => 'radio-image',
	'settings'    => 'jumbotron',
	'label'       => esc_html__( 'Tipe Jumbotron', 'spectre' ),
	'section'     => 'header',
	'default'     => 'red',
	'priority'    => 10,
	'choices'     => array(
		'red'   => get_template_directory_uri() . '/assets/images/red.png',
		'green' => get_template_directory_uri() . '/assets/images/green.png',
		'blue'  => get_template_directory_uri() . '/assets/images/blue.png',
	),
) );

Kirki::add_field( 'conf', array(
    'type'           => 'checkbox',
    'settings'       => 'search-bar',
    'label'          => esc_attr__( 'Tombol Pencarian', 'spectre' ),
    'description'    => esc_attr__( 'Aktifkan saja jika anda menghendakinya.', 'spectre' ),
    'section'        => 'header',
    'default'        => true,
) );