<?php
class RECHERCHE{


	public static function rechercher($res) 
	{
	// Connexion à la base de données
	require_once("BD_connexion.php");
	$bdd=connexion();

	$data = $res['search'];
	//On recherche un nom qui contient dans son nom au minimum le paramètre que l'on a entré
	$req = $bdd->prepare("SELECT * FROM inscrits WHERE nom LIKE '%$data%' 
												 OR  prenom LIKE '%$data%'
												 OR  email LIKE '%$data%'
												 OR  id LIKE '%$data%'");
	
	$req->execute($res);

	//On renvoie toute les lignes trouvé
	$nom = $req->fetchAll();
	$req->closeCursor();
    return $nom;
	}
}

?>