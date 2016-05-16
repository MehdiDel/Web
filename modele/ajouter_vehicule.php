<?php
class AJOUT_VEHICULE{


public static function ajouter_vehicule($marque,$matricule,$prix)
	{
		// Connexion à la base de données
		require_once("BD_connexion.php");
 		$bdd=connexion();

		
		$req = $bdd->prepare('INSERT INTO vehicule(marque,matricule,prix) VALUES(:marque,:matricule,:prix)');

		
		$req->bindParam(':marque', $marque);
		$req->bindParam(':matricule', $matricule);
		$req->bindParam(':prix', $prix);

		$req->execute();
	}


}