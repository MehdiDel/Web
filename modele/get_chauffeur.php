<?php 
class CHAUFFEUR{


// fonction qui permet de renvoyer toute les reservations "A LA JOURNEE" d'un client en particulier
	static function get_ALLchauffeur()
	{
	// Connexion à la base de données
    require_once("BD_connexion.php");
    $bdd=connexion();

	$req = $bdd->query('SELECT * FROM chauffeur');

    $chauffeur = $req->fetchAll();

    return $chauffeur;

	}

}