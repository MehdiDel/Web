<?php 
class GET_INSCRIT{


	static function get_membres()
	{
	// Connexion à la base de données
    require_once("BD_connexion.php");
    $bdd=connexion();

	$req = $bdd->query('SELECT * FROM inscrits WHERE admin = "0" ');

    $membre = $req->fetchAll();

    return $membre;

	}

	static function get_admin()
	{
	// Connexion à la base de données
    require_once("BD_connexion.php");
    $bdd=connexion();

	$req = $bdd->query('SELECT * FROM inscrits WHERE admin = "1" ');

    $membre = $req->fetchAll();

    return $membre;

	}

}