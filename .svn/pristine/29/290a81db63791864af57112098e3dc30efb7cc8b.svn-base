<?php

/**
 * Fired during plugin activation
 *
 * @link       https://novintech.info
 * @since      1.0.0
 *
 * @package    Wp_top_alert
 * @subpackage Wp_top_alert/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Wp_top_alert
 * @subpackage Wp_top_alert/includes
 * @author     novintech <novintech.info24@gmail.com>
 */
class Wp_top_alert_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
        
        $main = array(
            'wpa_alert_link_txt'    => 'show',
            'wpa_alert_txt'         => 'notification test',
            'wpa_alert_link'    => 'http://YourPage.com'
        );
            
        foreach( $main as $key=>$value )
        {
            update_option( 
                $key, 
                $value
            );
        }

	}

}
