<?php

// If uninstall is not called from WordPress, exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit();
}

// Upon plugin deletion, delete options
delete_option("rp_slug_option");
delete_option("rp_slug_option_previous");
delete_option("rp_hotkey_enabled");
delete_option("rp_javascript_hotkey");

flush_rewrite_rules(); // Flush out the random rules

?>
