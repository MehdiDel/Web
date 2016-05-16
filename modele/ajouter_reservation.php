<?php
class AJOUTER_RESERVATION{

public static function ajouter_reservation_Jour($dateD, $adresse, $nbpassager, $tel,$ville)
{
	// Connexion à la base de données
	require_once("BD_connexion.php");
 	$bdd=connexion();

 $email = $_COOKIE['email'];

 $info = $bdd->prepare("SELECT * FROM inscrits WHERE email ='$email';");
 $info->execute();
 $info= $info->fetch();
 $nom=$info['nom'];
 $etat ="en attente";

$req = $bdd->prepare('INSERT INTO reservationjour(nom,email, dateD, adresse, nbpassager, tel, ville, etat) VALUES(:nom,:email, :dateD, :adresse, :nbpassager, :tel, :ville,:etat)');


$req->bindParam(':nom', $nom);
$req->bindParam(':email', $email);
$req->bindParam(':dateD', $_POST['dateD']);
$req->bindParam(':adresse',$_POST['adresse']);
$req->bindParam(':nbpassager', $_POST['nbpassager']);
$req->bindParam(':tel', $_POST['tel']);
$req->bindParam(':ville', $_POST['ville']);
$req->bindParam(':etat', $etat);

$req->execute();
}


public static function ajouter_reservation_voyage($dateD, $villeD, $adresseD, $villeA, $adresseA, $nbpassager, $tel)
{
	// Connexion à la base de données
	require_once("BD_connexion.php");
 	$bdd=connexion();

 $email = $_COOKIE['email'];

 $info = $bdd->prepare("SELECT * FROM inscrits WHERE email ='$email';");
 $info->execute();
 $info= $info->fetch();
 $nom=$info['nom'];
 $etat ="en attente";

$req = $bdd->prepare('INSERT INTO reservationvoyage(nom,email,dateD, villeD, adresseD, villeA, adresseA, nbpassager,tel, etat) VALUES(:nom,:email, :dateD, :villeD, :adresseD, :villeA, :adresseA, :nbpassager, :tel,:etat)');


$req->bindParam(':nom', $nom);
$req->bindParam(':email', $email);
$req->bindParam(':dateD', $_POST['dateD']);
$req->bindParam(':villeD', $_POST['villeD']);
$req->bindParam(':adresseD',$_POST['adresseD']);
$req->bindParam(':villeA', $_POST['villeA']);
$req->bindParam(':adresseA',$_POST['adresseA']);
$req->bindParam(':nbpassager', $_POST['nbpassager']);
$req->bindParam(':tel', $_POST['tel']);
$req->bindParam(':etat', $etat);



$req->execute();
}

public static function ajouter_reservation_evenement($dateE, $adresse, $evenement)
{
	// Connexion à la base de données
	require_once("BD_connexion.php");
 	$bdd=connexion();

 $email = $_COOKIE['email'];

 $info = $bdd->prepare("SELECT * FROM inscrits WHERE email ='$email';");
 $info->execute();
 $info= $info->fetch();
 $nom=$info['nom'];
 $etat ="en attente";

$req = $bdd->prepare('INSERT INTO reservationevenement(nom,email, dateE, adresse, evenement, etat) VALUES(:nom,:email, :dateE, :adresse, :evenement, :etat)');


$req->bindParam(':nom', $nom);
$req->bindParam(':email', $email);
$req->bindParam(':dateE', $_POST['dateE']);
$req->bindParam(':adresse',$_POST['adresse']);
$req->bindParam(':evenement', $_POST['evenement']);
$req->bindParam(':etat', $etat);


$req->execute();
}

}