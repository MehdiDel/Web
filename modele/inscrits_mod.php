<?php
class INSCRITS{

//fonction qui permet de creer un inscrit et donc de la rajouter dans la BD ->> table "inscrits"
public static function creer_inscrit($nom, $prenom, $email, $mdp)
{
	// Connexion à la base de données
	require_once("BD_connexion.php");
 	$bdd=connexion();

$req = $bdd->prepare('INSERT INTO inscrits (nom, prenom,email,mdp,admin) VALUES( :nom, :prenom,:email,:mdp,:admin)');

$bool = false;

$req->bindParam(':nom', $nom);
$req->bindParam(':prenom', $prenom);
$req->bindParam(':email', $email);
$req->bindParam(':mdp', $mdp);
$req->bindParam(':admin', $bool);

$req->execute();

}

//  fonction de suppression d'un inscrit, suppression de la BD->> table "inscrits"
public static function supprimer_inscrit($email)
{
	// Connexion à la base de données
	require_once("BD_connexion.php");
 	$bdd=connexion();

$req = $bdd->prepare('DELETE FROM inscrits WHERE email=:email');
$req->execute(array(':email' => $email));

}

// Fonction de verification si l'email entré est deja dans la table
public static function exist_email($email)
{
	// Connexion à la base de données
	require_once("BD_connexion.php");
 	$bdd=connexion();

	$req = $bdd->prepare('SELECT email FROM inscrits WHERE email = :mail');
	$req->execute(array(':mail' => $email));

	$result = $req->fetch();

	return $result;
}



public static function modifier_infos($oldemail, $nom, $prenom, $mdp){
		// Connexion à la base de données
		require_once("BD_connexion.php");
 		$bdd=connexion();

		$req = $bdd->prepare("UPDATE inscrits SET nom=:nom, prenom=:prenom, mdp=:mdp WHERE email=:oldemail");

		$req->bindParam(':oldemail', $oldemail);
		$req->bindParam(':nom', $nom);
		$req->bindParam(':prenom', $prenom);
		$req->bindParam(':mdp', $mdp);

		$req->execute();
	}



}
?>