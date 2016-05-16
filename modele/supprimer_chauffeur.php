<?php
class SUP_CHAUFFEUR{

	public static function supprimer_chauffeur($id)
	{
		// Connexion à la base de données
		require_once("BD_connexion.php");
 		$bdd=connexion();

		$req = $bdd->prepare('DELETE FROM chauffeur WHERE id=:id');


		$req->bindParam(':id', $id);

		$req->execute();
	}

}