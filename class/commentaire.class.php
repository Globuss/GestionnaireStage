<?php

/** Commentaire laissé par l'enseignant, aprés son passage dans une entreprise */
public class Commentaire {
	
   //Contenu du commentaire
   private string $contenu;

    /**
    * Construi un commentaire
    */
    public function __construct (string $contenu){
       
		$this->contenu = $contenu;
	   
    }

}