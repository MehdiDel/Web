<?php
class MODIF_VEHICULE{


public static function modifier_vehicule($id,$marque,$matricule,$prix)
	{
		// Connexion à la base de données
		require_once("BD_connexion.php");
 		$bdd=connexion();

		$req = $bdd->prepare("UPDATE vehicule SET marque=:marque, matricule=:matricule,prix=:prix WHERE id=:id");


		$req->bindParam(':id', $id);
		$req->bindParam(':marque', $marque);
		$req->bindParam(':matricule', $matricule);
		$req->bindParam(':prix', $prix);

		$req->execute();
	}

}