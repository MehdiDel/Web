<?php
class RECHERCHE{


	public static function rechercher($nom) 
	{
	// Connexion à la base de données
	require_once("BD_connexion.php");
	$bdd=connexion();

	//On recherche un nom qui contient dans son nom au minimum le paramètre que l'on a entré
	$req = $bdd->prepare("SELECT * FROM insrits WHERE nom LIKE '%$nom%' ");
	$req->execute();

	//On renvoie toute les lignes trouvé
	$nom = $req->fetchAll();
    return $nom;
	}
}

?>