<?php
class CONNECT{

public static function connexion($email, $mdp)
{
	// Connexion à la base de données
	require_once("BD_connexion.php");
 	$bdd=connexion();

$req = $bdd->prepare("SELECT * FROM inscrits WHERE email=:email AND mdp= :mdp");
$req->execute(array(':email' => $email,':mdp' => $mdp));

$res=$req->rowCount();

    return $res;

}

public static function est_admin($email)
	{
	// Connexion à la base de données
	require_once("BD_connexion.php");
 	$bdd=connexion();


	$req = $bdd->prepare("SELECT admin FROM inscrits WHERE email='$email';");
	$req->execute();

	$admin=$req->fetch();


	return $admin;

	}
}
?>