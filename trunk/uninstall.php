<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * When populating this file, consider the following flow
 * of control:
 *
 * - This method should be static
 * - Check if the $_REQUEST content actually is the plugin name
 * - Run an admin referrer check to make sure it goes through authentication
 * - Verify the output of $_GET makes sense
 * - Repeat with other user roles. Best directly by using the links/query string parameters.
 * - Repeat things for multisite. Once for a single site in the network, once sitewide.
 *
 * This file may be updated more in future version of the Boilerplate; however, this is the
 * general skeleton and outline for how the file should work.
 *
 * For more information, see the following discussion:
 *
 * @link       https://novintech.info
 * @since      1.0.0
 *
 * @package    Wp_top_alert
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}


$main = array(
	'wpa_alert_link_txt',
	'wpa_alert_txt',
	'wpa_alert_link'
);

foreach( $main as $key=>$value )
{
	if( get_option($value) == TRUE ){
		delete_option(
			$value
		);
	}	
}
