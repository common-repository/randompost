=== randomPost ===
Contributors: obrienlabs
Donate link: http://obrienlabs.net/donate/
Tags: random, post, menu, hot, key, hotkey, read, view, admin, keyboard, shortcut
Requires at least: 2.8
Tested up to: 4.9
Stable tag: 1.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easily create a custom URL to redirect visitors to view random posts. Keyboard hotkey shortcuts also available for browsing random posts.

== Description ==

Keep visitors on your website longer and get more traffic on your website by inviting your visitors to read random posts! It's easy! Just install the randomPost plugin, and select the random URL slug you want to use. This URL slug will redirect your users to a random post of yours! We recommend using the word "random" as your URL slug, but the option exists to use any slug you'd like. Once configured, add the new URL with the slug to your menu as a custom link. That alone will invite visitors to stick around. 

To add on top of that, we've added a configurable hotkey! If a visitor presses R on their keyboard, it'll automatically load a random post! You can change the hotkey to be any key you'd like. To add a little more fun to your website, put a notice telling visitors to "Press R to read a random post". 

Features: 

*   Easily change the URL for the random post redirect. 
*   Easily change the hotkey for the keyboard shortcut to read a random post.
*   Easily enable or disable the hotkey function.
*   Uninstalling the plugin will clean up all data it has stored in the WordPress database.

== Installation ==

**Install**

Installing randomPost can be done from inside your WordPress admin panel by going to Plugins > Add New and searching for "randomPost". 

1. You can also manually install it by downloading the plugin from wordpress.org/plugins
1. Upload the entire `randompost` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Customize the plugin from the menu by selecting Settings > randomPost Settings. 

**Uninstall**

1. Deactivate the plugin from the Plugins menu
1. Select "randomPost" from the list and select "Delete"
1. This will delete all files from the server and all settings from the WordPress database.

== Frequently Asked Questions ==

= How do I change the URL for my random posts? =

It's easy. Just go into the plugin settings. Most of the settings are there for you to customize. 

= My /random URL slug isn't working. =

Go into WordPress Settings > Permalinks and click save to refresh your permalinks. You should also make sure your .htaccess is writable. Those are the most common fixes.

= Are there certain URL slugs I should avoid? =

There are certain slugs you should avoid as having your random post slug. Words like "post", "category", "tags", etc. are built in WordPress slugs, so avoid them. Your best bet is to use the word "random"! 

== Screenshots ==

1. randomPost settings page.

== Changelog ==

= 1.1.1 =
* Small administrative update which adds code for future plugin update handling.

= 1.1 =
* Updated for 4.4 and fixed a small permalinks rewrite bug. 

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.1.1 =
Small administrative update which adds code for future plugin update handling.

= 1.1 =
Updated for 4.4 and fixed a small permalinks rewrite bug. 

= 1.0 =
Initial. 
