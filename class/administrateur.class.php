<?php

/**Un administrateur n'a pas de constructeur(singleton), il autol */

class Administrateur extends Utilisateur {
   
	public $stage;
	private $instance;
    
    private function __construct() {
		
		$stage = array();
		
	}
	
	public function getInstance() {
		
		if (!isSet($stage)) {
			
			$this->instance = new Administrateur();
			
		}
		
		return $this->instance;
		
	}
	
  
	public function valideAffectation(StageAffecter $stage) {
		  
		$this->stage[] = $stage;
		  
	}
   