<?php
class SUP_VEHICULE{

	public static function supprimer_vehicule($id)
	{
		// Connexion à la base de données
		require_once("BD_connexion.php");
 		$bdd=connexion();

		$req = $bdd->prepare('DELETE FROM vehicule WHERE id=:id');


		$req->bindParam(':id', $id);

		$req->execute();
	}

}