<?php

function fb_add_footer($content){
    $footer_output = '<hr>';
    $footer_output .= '<div class ="footercontent">';
    $footer_output .= '<span class ="dashicons dashicons-facebook"> </span> Find Me On <a href="https://facebook.com">Facebook</a>';
    $footer_output .= '</div>';
    return $content . $footer_output;
}
add_filter('the_content', 'fb_add_footer');