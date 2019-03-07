<?php 

//Creating The Menu link
function fbm_options_menu_link(){
    add_options_page(
    'Facebook Me Options',
    'Facebook Me Link',
    'manage_options',
    'fbm-options',
    'fbm_options_content'
    );
}

//Creating Options Page Content
function fbm_options_content(){
    echo 'test';
}

add_action('admin_menu', 'fbm_options_menu_link');

//Registering the settings
function fbm_register_settings(){
    register_setting( 'fbm_settings_group', 'fbm_settings');
}
add_action('admin_init', 'fbm_register_settings');