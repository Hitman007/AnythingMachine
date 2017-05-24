<?php

namespace AnythingMachine;

class Idea{
	
	public $Whence;
	public $Whither;
	
	public function __construct($Whence, $Whither){
		$this->Whence = $Whence;
		$this->Whither = $Whither;
	}
}

class AtmanNode{
	
	public $URI;
	public $resorceCollection;
	public $contractCollection;
}

class WP_AtmanNode extends AtmanNode{
	
	//the WordPress CPT ID number:
	public $ID;
	public function __construct($ID = NULL, $args = NULL){
		if(($ID === NULL) && ($args = NULL)){throw new Exception('Nothing passed? Requires an ID, args or both');}
		//No ID being passed means that a new CPT must be created:
		if($ID === NULL){
			if($args === NULL){throw new Exception('No args passed in creating node');}
			$this->ID =  wp_insert_post($args);
		}
		//An ID has been passed, so let's pull some data out of the DB
		else{
			//$ID is a CPT WordPress ID. It must be numberic.
			if(!is_numeric($ID)){throw new Exception('ID passed is not numeric.');}
			$this->ID = $ID;
			$this->URI = get_permalink($ID);
		}
	}
}