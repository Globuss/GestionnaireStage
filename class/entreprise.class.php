<?php

public class Entreprise {
   
   // Nom de l'entreprise
   private $nom;
   
   // Adresse de l'entreprise
   private $adresse;
   // Téléphone de l'entreprise
   
   private $tel;
   // Type d'entreprise
   
   private TypeEntreprise $type;
   // Liste des commentaire laissé par les enseignants
   
   private $avis;   
   private $stages;    
   
   /**
    * Constructeur d'un entrepris,
    * La liste des Avis et des stages sont défini si l'entreprise exist dans la BD.
    */
   public __construct($nom, $adresse, $tel, TypeEntreprise $type) {
      
	  $this->nom = $nom;
	  $this->adresse = $adresse;
	  $this->tel = $tel;
	  $this->type = $type;
	  $this->avis = array();
	  $this->stages = array();
	  
   }
   
   /** 
    * Ajoute un stage à la liste des offres de l'entreprise
    * @param s
    */
   public function ajouterOffre(Stage $s) {
      
	  $this->stages[] = $s;
	  
   }
   
   /** 
    * Supprime l'offre de stage passer en parametre 
    * @param s stage à supprimer
    * @return True si l'offre à été supprimer, false sinon.
    */
	public boolean supprOffre(Stage $s) {
      
      //apres
	  
	}

}