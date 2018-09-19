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
# Dimohon untuk tidak merubah skrip ini. dikarenakan skrip ini adalh skrip inti agar tema dapat berjalan di situs anda dengan normal.

/* Mulai dari sini */
function get_siteurl($jenis, $link)
{
    $path = get_template_directory();
    $url  = get_template_directory_uri();
    
    if ($jenis === 'path') {
        $return = $path;
    } elseif ($jenis === 'url') {
        $return = $url;
    } else {
        $return = $path;
    }
    
    return $return . $link;
}

function get_systheme($jenis, $link)
{
    $path = get_template_directory();
    $url  = get_template_directory_uri();
    
    if ($jenis === 'bootstrap') {
        $return = get_siteurl('url', '/assets/bootstrap');
    } elseif ($jenis === 'fontawesome') {
        $return = get_siteurl('url', '/assets/font-awesome');
    } elseif ($jenis === 'bootscool') {
        $return = get_siteurl('url', '/assets/bootscool');
    } elseif ($jenis === 'hljs') {
        $return = get_siteurl('url', '/assets/hljs');
    } elseif ($jenis === 'jquery') {
        $return = get_siteurl('url', '/assets/jquery');
    } elseif ($jenis === 'owl') {
        $return = get_siteurl('url', '/assets/owl-carousel');
    } else {
        $return = get_siteurl('url', '');
    }
    
    return $return . $link;
}
/* Sampai Sini */

/**
 * Mengubah Pengaya Pada Tag Awan Wordpress
 **/
function spectre_cloudtag($return)
{
    $return = str_replace('<a', '<a class="btn btn-primary"', $return);
    return $return;
}
add_filter('wp_tag_cloud', 'spectre_cloudtag');

function background_slider()
{
	   if(has_post_thumbnail())
	   { ?>
	   	   <div class="item" style="background: url(<?php echo the_post_thumbnail_url(); ?>) no-repeat center center; background-size: cover">
	   <?php } else { ?>
	   	   <div class="item" style="background: url();">
	   <?php }
}