<?php
class MODIF_CHAUFFEUR{


public static function modifier_chauffeur($id,$nom,$prenom,$adresse,$mail)
	{
		// Connexion à la base de données
		require_once("BD_connexion.php");
 		$bdd=connexion();

		$req = $bdd->prepare("UPDATE chauffeur SET nom=:nom, prenom=:prenom,adresse=:adresse, mail=:mail WHERE id=:id");


		$req->bindParam(':id', $id);
		$req->bindParam(':nom', $nom);
		$req->bindParam(':prenom', $prenom);
		$req->bindParam(':adresse', $adresse);
		$req->bindParam(':mail', $mail);

		$req->execute();
	}

}