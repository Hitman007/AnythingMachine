<?php
/*
Plugin Name: Anything Machine
Plugin URI: http://customrayguns.com/
Description: 
Version: 1.0
Author: Jim Maguire
Author URI:
*/

namespace AnythingMachine;

//die('AnythingMachine is working!');

require_once 'src/AnythingMachine/AnythingMachinePlugin.class.php';

$AnythingMachinePlugin= new AnythingMachinePlugin();
$AnythingMachinePlugin->enableMetaboxPathway();

//$AnythingMachinePlugin->enqueueJSscripts();

//register_activation_hook( __FILE__, array( $AnythingMachinePlugin, 'doPluginActivationActions' ) );
//register_deactivation_hook( __FILE__, array( $AnythingMachinePlugin, 'doPluginDeactivationActions' ) );


function check_new_vs_update( $post_id ){
}
add_action('save_post', 'AnythingMachine\check_new_vs_update' );

function do_anything() {
	//do stuff
}
add_action('wp_login', 'wpse113069_email_me');

/**
 * Send a different email based on if a visitor is signed into the site.
 */
function whoisWatchinMe() {
	add_action('wp_footer', 'AnythingMachine\sendEmail');
}

function sendEmail(){
	$email= "jiminac@aol.com";
	//$current_user = wp_get_current_user();
	//$userName=  $current_user->user_login;
	$userName = "Sam";
	wp_mail( $email, 'You had a visitor...', "A member, $userName visited!" );
}

//add_action( 'wp_login', 'whoisWatchinMe' );
add_action( 'wp_login', 'AnythingMachine\sendEmail' );




