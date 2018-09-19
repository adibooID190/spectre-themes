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
 
foreach(glob(get_template_directory() . '/system/*.php') as $f){
    require($f);
}