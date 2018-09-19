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
 */
add_action( 'widgets_init', 'spectre_init' );

function spectre_init( )
{
    register_sidebar( array(
        'name' => __( 'Bilah Sisi Kanan', 'spectre' ),
        'id' => 'sidebar', // ID should be LOWERCASE  ! ! !
        'description' => __( 'Tambahkan widget dengan menggeret bilah sisi yang tersedia', 'spectre' ),
        'class' => 'spectre',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>' 
    ) );
    register_sidebar( array(
        'name' => __( 'Bilah Sisi Kiri', 'spectre' ),
        'id' => 'sidebar-left', // ID should be LOWERCASE  ! ! !
        'description' => __( 'Tambahkan widget dengan menggeret bilah sisi yang tersedia', 'spectre' ),
        'class' => 'spectre',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>' 
    ) );
    
    register_sidebar( array(
        'name' => __( 'Jumbotron', 'spectre' ),
        'id' => 'jumbotron', // ID should be LOWERCASE  ! ! !
        'description' => __( 'Tambahkan widget dengan menggeret bilah sisi yang tersedia', 'spectre' ),
        'class' => 'spectre',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>' 
    ) );
    
    register_sidebar( array(
        'name' => __( 'Kaki Kiri', 'spectre' ),
        'id' => 'footer-1', // ID should be LOWERCASE  ! ! !
        'description' => __( 'Tambahkan widget dengan menggeret bilah sisi yang tersedia', 'spectre' ),
        'class' => 'spectre',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>' 
    ) );
    register_sidebar( array(
        'name' => __( 'Kaki Tengah Kiri', 'spectre' ),
        'id' => 'footer-2', // ID should be LOWERCASE  ! ! !
        'description' => __( 'Tambahkan widget dengan menggeret bilah sisi yang tersedia', 'spectre' ),
        'class' => 'spectre',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>' 
    ) );
    
    register_sidebar( array(
        'name' => __( 'Kaki Tengah Kanan', 'spectre' ),
        'id' => 'footer-3', // ID should be LOWERCASE  ! ! !
        'description' => __( 'Tambahkan widget dengan menggeret bilah sisi yang tersedia', 'spectre' ),
        'class' => 'spectre',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>' 
    ) );
    
    register_sidebar( array(
        'name' => __( 'Kaki Kanan', 'spectre' ),
        'id' => 'footer-4', // ID should be LOWERCASE  ! ! !
        'description' => __( 'Tambahkan widget dengan menggeret bilah sisi yang tersedia', 'spectre' ),
        'class' => 'spectre',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>' 
    ) );
}

