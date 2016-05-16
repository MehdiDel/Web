<?php 
class GET_RESERVATION{


// fonction qui permet de renvoyer toute les reservations "A LA JOURNEE" d'un client en particulier
	static function get_reservationJour($email)
	{
	// Connexion à la base de données
    require_once("BD_connexion.php");
    $bdd=connexion();

	$req = $bdd->prepare('SELECT * FROM reservationjour WHERE email=:email ');
	$req->execute(array(':email' => $email));

    $reservations = $req->fetchAll();

    return $reservations;

	}

//fonction qui permet de renvoyer toute les reservations "A LA JOURNEE" contenu dans la BD.
	static function get_ALLreservationJour()
	{
	// Connexion à la base de données
    require_once("BD_connexion.php");
    $bdd=connexion();

	$req = $bdd->query('SELECT * FROM reservationjour');

    $res = $req->fetchAll();

    return $res;

	}

	static function get_reservationJour_attente()
	{
	// Connexion à la base de données
    require_once("BD_connexion.php");
    $bdd=connexion();
    $etat="en attente";

	$req = $bdd->prepare('SELECT * FROM reservationjour WHERE etat=:etat ');
	$req->execute(array(':etat' => $etat));

    $reservations = $req->fetchAll();

    return $reservations;

	}

	static function get_reservationVoyage_attente()
	{
	// Connexion à la base de données
    require_once("BD_connexion.php");
    $bdd=connexion();
    $etat="en attente";

	$req = $bdd->prepare('SELECT * FROM reservationvoyage WHERE etat=:etat ');
	$req->execute(array(':etat' => $etat));

    $reservations = $req->fetchAll();

    return $reservations;

	}


	static function get_reservationEvent_attente()
	{
	// Connexion à la base de données
    require_once("BD_connexion.php");
    $bdd=connexion();
    $etat="en attente";

	$req = $bdd->prepare('SELECT * FROM reservationevenement WHERE etat=:etat ');
	$req->execute(array(':etat' => $etat));

    $reservations = $req->fetchAll();

    return $reservations;

	}


	// fonction qui permet de renvoyer toute les reservations "voyage d'affaire ou privé" d'un client en particulier
	static function get_reservationVoyage($email)
	{
	// Connexion à la base de données
    require_once("BD_connexion.php");
    $bdd=connexion();

	$req = $bdd->prepare('SELECT * FROM reservationvoyage WHERE email=:email ');
	$req->execute(array(':email' => $email));

    $reservations = $req->fetchAll();

    return $reservations;

	}

	static function get_reservationJour_id($id)
	{
	// Connexion à la base de données
    require_once("BD_connexion.php");
    $bdd=connexion();

	$req = $bdd->prepare('SELECT * FROM reservationjour WHERE id=:id ');
	$req->execute(array(':id' => $id));

    $reservations = $req->fetch();

    return $reservations;

	}

	static function get_reservationVoyage_id($id)
	{
	// Connexion à la base de données
    require_once("BD_connexion.php");
    $bdd=connexion();

	$req = $bdd->prepare('SELECT * FROM reservationvoyage WHERE id=:id ');
	$req->execute(array(':id' => $id));

    $reservations = $req->fetch();

    return $reservations;

	}

	static function get_reservationEvent_id($id)
	{
	// Connexion à la base de données
    require_once("BD_connexion.php");
    $bdd=connexion();

	$req = $bdd->prepare('SELECT * FROM reservationevenement WHERE id=:id ');
	$req->execute(array(':id' => $id));

    $reservations = $req->fetch();

    return $reservations;

	}

	static function get_reservationEvenement($email)
	{
	// Connexion à la base de données
    require_once("BD_connexion.php");
    $bdd=connexion();

	$req = $bdd->prepare('SELECT * FROM reservationevenement WHERE email=:email ');
	$req->execute(array(':email' => $email));

    $reservations = $req->fetchAll();

    return $reservations;

	}

	static function get_reservationJour_valide()
	{
	// Connexion à la base de données
    require_once("BD_connexion.php");
    $bdd=connexion();
    $etat="accepter";

	$req = $bdd->prepare('SELECT * FROM reservationjour WHERE etat=:etat ');
	$req->execute(array(':etat' => $etat));

    $reservations = $req->fetchAll();

    return $reservations;

	}

		static function get_reservationVoyage_valide()
	{
	// Connexion à la base de données
    require_once("BD_connexion.php");
    $bdd=connexion();
    $etat="accepter";

	$req = $bdd->prepare('SELECT * FROM reservationvoyage WHERE etat=:etat ');
	$req->execute(array(':etat' => $etat));

    $reservations = $req->fetchAll();

    return $reservations;

	}

		static function get_reservationEvent_valide()
	{
	// Connexion à la base de données
    require_once("BD_connexion.php");
    $bdd=connexion();
    $etat="accepter";

	$req = $bdd->prepare('SELECT * FROM reservationevenement WHERE etat=:etat ');
	$req->execute(array(':etat' => $etat));

    $reservations = $req->fetchAll();

    return $reservations;

	}
}
