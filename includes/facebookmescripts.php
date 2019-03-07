<?php
//add scripts

function fm_add_scripts(){
wp_enqueue_style('fbm-main-style', plugins_url() .' /facebookme/css/style.css' );

wp_enqueue_script('fbm-main-style', plugins_url() .' /facebookme/js/main.js');
}

add_action('wp_enqueue_scripts', 'fbm_add_scripts')

?>