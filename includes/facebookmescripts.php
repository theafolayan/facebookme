<?php
//add scripts

function fm_add_scripts(){
wp_enqueue_style('fm-main-style', plugins_url() .' /facebookme/css/style.css' );

wp_enqueue_script('fb-main-style', plugins_url() .' /facebookme/js/main.js');
}

add_action('wp_enqueue_scripts', 'fm_add_scripts')

?>