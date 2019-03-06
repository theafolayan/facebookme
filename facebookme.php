<?php
/**
 * Plugin Name: Facebook Me
 * Description: Adds A Nice Looking Facebook profile Link to The End of Posts
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
require_once(plugin_dir_path(__FILE__).'includes/facebook' )