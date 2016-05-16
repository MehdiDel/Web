<?php
class SUP_RESERVATION{

	public static function supprimer_reservationJour($id)
	{
		// Connexion à la base de données
		require_once("BD_connexion.php");
 		$bdd=connexion();

		$req = $bdd->prepare('DELETE FROM reservationjour WHERE id=:id');


		$req->bindParam(':id', $id);

		$req->execute();
	}


	public static function supprimer_reservationVoyage($id)
	{
		// Connexion à la base de données
		require_once("BD_connexion.php");
 		$bdd=connexion();

		$req = $bdd->prepare('DELETE FROM reservationvoyage WHERE id=:id');


		$req->bindParam(':id', $id);

		$req->execute();
	}

		public static function supprimer_reservationEvent($id)
	{
		// Connexion à la base de données
		require_once("BD_connexion.php");
 		$bdd=connexion();

		$req = $bdd->prepare('DELETE FROM reservationevenement WHERE id=:id');


		$req->bindParam(':id', $id);

		$req->execute();
	}

}