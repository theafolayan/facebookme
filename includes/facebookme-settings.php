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

//I am Creating The Admin Options Page Form Content
function fbm_options_content(){
ob_start(); ?>
<div class="wrap">
<h2><?php _e('Facebook Me Settings', 'fbm_domain')?></h2>
<p><?php _e('Settings For The Facebook Me Link Plugin', 'fbm_domain')?></p>

<form action="options.php" method="post">
<?php // setting_fields('fbm_settings_group'); ?>
<table class="form-table">
<tbody>
<tr>
<th scope="row"> <label for="fbm_settings[enable]"><?php _e('Enable', 'fbm_domain')?></label></th>
</tr></tbody>
</table>
</form>
</div>
<?php
echo ob_get_clean();
}

add_action('admin_menu', 'fbm_options_menu_link');

//Registering the settings
function fbm_register_settings(){
    register_setting( 'fbm_settings_group', 'fbm_settings');
}
add_action('admin_init', 'fbm_register_settings');