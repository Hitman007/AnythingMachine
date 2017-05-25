<?php 

namespace AnythingMachine;

class AnythingMachinePlugin{
	
	public function __construct(){
		require_once 'autoloader_AnythingMachine.function.php';
		require_once 'CPTidea.php';
		require_once 'CPTmanifest.php';
		require_once 'CPTpathway.php';
		require_once 'CPTpickle.php';
	}

	public function enableMetaboxPathway(){
		//$MetaboxPathway = new MetaboxPathway();
	}
}