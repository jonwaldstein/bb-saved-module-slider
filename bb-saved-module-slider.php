<?php
/**
 * Plugin Name: Beaver Builder Saved Module Slider
 * Plugin URI: http://jonwaldsteinweb.com
 * Description: Use saved modules as a slider
 * Version: 1.0
 * Author: Jon Waldstein
 * Author URI: http://jonwaldsteinweb.com
 */
define( 'ZGM_MODULE_DIR', plugin_dir_path( __FILE__ ) );
define( 'ZGM_MODULE_URL', plugins_url( '/', __FILE__ ) );

/**
 * Custom modules
 */
function zgm_load_module() {
	if ( class_exists( 'FLBuilder' ) ) {
	    require_once 'saved-module-slider/saved-module-slider.php';
	    require_once 'page-title/page-title.php';
	    require_once 'page-title-simple/page-title-simple.php';
	}
}
add_action( 'init', 'zgm_load_module' );