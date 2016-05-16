<?php
class AJOUT_CHAUFFEUR{


public static function ajouter_chauffeur($nom,$prenom,$adresse,$mail)
	{
		// Connexion à la base de données
		require_once("BD_connexion.php");
 		$bdd=connexion();

		//Insertion d'un chauffeur dans la BD grace au paramètre reçus
		$req = $bdd->prepare('INSERT INTO chauffeur(nom,prenom,adresse,mail) VALUES(:nom,:prenom,:adresse,:mail)');

		
		$req->bindParam(':nom', $nom);
		$req->bindParam(':prenom', $prenom);
		$req->bindParam(':adresse', $adresse);
		$req->bindParam(':mail', $mail);
		$req->execute();
	}


}