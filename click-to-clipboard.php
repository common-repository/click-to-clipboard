<?php
/*
	Plugin Name: Click to Clipboard
	Plugin URI: http://www.stevenkellow.com/plugins/click-to-clipboard/
	Version: 0.2
	Author: <a href="http://www.stevenkellow.com">Steven Kellow</a>
	Description: A simple script to allow you to click on a paragraph to copy it to your clipboard
	Text Domain: click-to-clipboard
	License: GPLv3
*/

// Enqueue the CSS and JS used for the plugin
add_action( 'wp_enqueue_scripts', 'click_to_clipboard_enq' );
	function click_to_clipboard_enq(){
		if(! is_front_page()){

			wp_enqueue_script( 'click-to-clipboard-script', plugin_dir_url( __FILE__ ) . '/js/click-to-clipboard.js', array( 'jquery' ), '1.0.0', true );
			wp_enqueue_style('click-to-clipboard', plugin_dir_url( __FILE__ ) . '/css/click-to-clipboard.css' );

		}
}