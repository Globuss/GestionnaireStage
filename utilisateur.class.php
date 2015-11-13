<?php

class Utilisateur{
	
	protected $nom;
	protected $prenom;
	
	protected $id;
	protected $mail;
	protected $adresse;
	
	/**
	 * Constructeur d'un utilistateur
	 */
	
	function __construct($nom, $prenom, $mail, $adresse){
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->mail = $mail;
		$this->adresse = $adresse;
	}
	
	
	/**
	 * Cherche dans la table "Utilisateur" un enregistrement pour lequel le
	 * login et le mot de passe correspondes aux paramêtres.
	 * @param login
	 * @param password
	 * @return Renvoi true si l'utilisateur c'est connecté, false sinon.
	 */
	function auth($login, $pass){
		
	}
	
	/**
	 * Vérifie le contenu des attributs et enregistre l'utilisateur si
	 * il n'exite pas déjà.
	 * @return Renvoi true si l'utilisateur à pu s'inscrire, false sinon.
	 */
	function inscription(){
		
	}
} 