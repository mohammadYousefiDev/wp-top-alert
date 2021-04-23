<?php

class Wp_top_alert_Public {

	private $plugin_name;

	private $version;

	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp_top_alert-public.css', array(), $this->version, 'all' );

		if( get_option('wpa_alert_align') === 'rtl' ){
		    wp_enqueue_style( 'wpa_rtl_public' , plugin_dir_url( __FILE__ ) . 'css/wpa_rtl-public.css', array(), $this->version, 'all' );
		}

	}

	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp_top_alert-public.js', array( 'jquery' ), $this->version, false );

	}

	public function wpa_wp_head()
	{
	    require_once plugin_dir_path(__FILE__) . 'partials/wpa_view.php';
	}

}
