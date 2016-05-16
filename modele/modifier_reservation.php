<?php
class MODIF_RESERVATION{


public static function modifier_reservationJour($id)
	{
		// Connexion à la base de données
		require_once("BD_connexion.php");
 		$bdd=connexion();

		$req = $bdd->prepare("UPDATE reservationjour SET etat='accepter' WHERE id=:id");


		$req->bindParam(':id', $id);

		$req->execute();
	}


public static function modifier_reservationVoyage($id)
	{
		// Connexion à la base de données
		require_once("BD_connexion.php");
 		$bdd=connexion();

		$req = $bdd->prepare("UPDATE reservationvoyage SET etat='accepter' WHERE id=:id");


		$req->bindParam(':id', $id);

		$req->execute();
	}

	public static function modifier_reservationEvent($id)
	{
		// Connexion à la base de données
		require_once("BD_connexion.php");
 		$bdd=connexion();

		$req = $bdd->prepare("UPDATE reservationevenement SET etat='accepter' WHERE id=:id");


		$req->bindParam(':id', $id);

		$req->execute();
	}


}