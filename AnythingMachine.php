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

$AnythingMachinePlugin = new AnythingMachinePlugin();
//$AnythingMachinePlugin->enqueueJSscripts();

//register_activation_hook( __FILE__, array( $AnythingMachinePlugin, 'doPluginActivationActions' ) );
//register_deactivation_hook( __FILE__, array( $AnythingMachinePlugin, 'doPluginDeactivationActions' ) );