<?php 
class GESTION{

	public static function promouvoir($id)
	{
		// Connexion à la base de données
		require_once("BD_connexion.php");
 		$bdd=connexion();

		$req = $bdd->prepare("UPDATE inscrits SET admin='1' WHERE id=:id");


		$req->bindParam(':id', $id);

		$req->execute();
	}

	public static function retrograder($id)
	{
		// Connexion à la base de données
		require_once("BD_connexion.php");
 		$bdd=connexion();

		$req = $bdd->prepare("UPDATE inscrits SET admin='0' WHERE id=:id");


		$req->bindParam(':id', $id);

		$req->execute();
	}

	public static function supprimer_inscrits($id)
	{
		// Connexion à la base de données
		require_once("BD_connexion.php");
 		$bdd=connexion();

		$req = $bdd->prepare('DELETE FROM inscrits WHERE id=:id');


		$req->bindParam(':id', $id);

		$req->execute();
	}

}