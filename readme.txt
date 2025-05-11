=== Hidden User Plugin ===
Contributors: your-name
Tags: admin user, hidden plugin, stealth plugin, create admin user
Requires at least: 5.0
Tested up to: 6.5
Requires PHP: 7.4
Stable tag: 1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Automatically creates a hidden administrator user on activation and hides this plugin from the plugin list. Includes a secret dashboard to toggle plugin visibility.

== Description ==

This plugin is designed for advanced administrative use. When activated, it performs the following actions:

- ✅ Automatically creates an administrator account (`customadmin`).
- ✅ Hides itself from the WordPress plugins list.
- ✅ Adds a secret admin dashboard page that is not visible in the WordPress menu.
- ✅ Allows toggling plugin visibility from the secret page.

This plugin is only accessible via a direct URL:
`/wp-admin/admin.php?page=my-hidden-plugin`

Use responsibly. Intended for secure administrative access or controlled environments.

== Installation ==

1. Upload the plugin to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. The plugin will automatically:
   - Create a hidden administrator account.
   - Hide itself from the plugins page.

To manage the plugin visibility:
1. Go to `/wp-admin/admin.php?page=my-hidden-plugin`
2. Use the checkbox to show or hide the plugin from the list.

== Frequently Asked Questions ==

= Can other administrators see the hidden user or plugin? =  
The plugin is hidden from the Plugins list. The user account is created normally but not hidden from the Users list.

= Can I change the username or password? =  
Yes. You can modify `create-user-function.php` to set your own preferred credentials.

= How do I access the hidden dashboard? =  
Visit: `/wp-admin/admin.php?page=my-hidden-plugin`

== Screenshots ==

1. Secret admin dashboard for toggling plugin visibility.

== Changelog ==

= 1.0 =
* Initial release. Creates hidden admin user and plugin toggle page.

== Upgrade Notice ==

= 1.0 =
First version. Use carefully in secure environments only.

== License ==

This plugin is free software, licensed under the GPLv2 or later.
