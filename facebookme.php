<?php
/**
 * Plugin Name: Facebook Me
 * Description: A Lightweight Wordpress PluginThat  Adds A Nice Looking Facebook profile Link to The End of Posts
 * Version: 1.0
 * Author: Afolayan Raphael Oluwaseun
 * Author URI: https://github.com/opensaucedeveloper
 * 
 */
// Exit If Accessed Directly
if (!defined('ABSPATH')) {
    exit;
}

//Load scripts
require_once(plugin_dir_path(__FILE__).'/includes/facebookmescripts.php');
require_once(plugin_dir_path(__FILE__).'/includes/facebookme-content.php');
require_once(plugin_dir_path(__FILE__).'/includes/facebookme-settings.php');



