<?php

namespace AnythingMachine;

function autoload($className){
	$front = substr($className, 0, 15);
	
	if ($front != "AnythingMachine"){
		return;
	}
	$className = substr($className, 16);
	
	//Check for ".class.php":
	$fileName = '//var/www/html/wp-content/plugins/AnythingMachine/src/AnythingMachine/' . $className . '.class.php';
	if (file_exists($fileName)) {
		include_once($fileName);
	}else{
		//Check for ".trait.php":
		$fileName = '//var/www/html/wp-content/plugins/AnythingMachine/src/AnythingMachine/' . $className . '.trait.php';
		if (file_exists($fileName)) {
			include_once($fileName);
		}
	}
}

spl_autoload_register('AnythingMachine\autoload');