<?php


public class Enseignant extends Utilisateur {
	
   private $affectations;   
   public $commentaire;
   
   public function __construct() {
	   
	   $this->affectations = array();
	   $this->commentaire = array();
	   
   }
   
   public function deposerCommentaire(Entreprise $e) {
      
	  // à compléter
	  
   }
   
   public static function affecterStage(Stage $stage) {
      
	  // à compléter
	  
   }

}