<?php

	require_once('../modele/ajouter_chauffeur.php');


	
	$nom=htmlspecialchars($_POST['nom']);
	$prenom=htmlspecialchars($_POST['prenom']);
	$adresse=htmlspecialchars($_POST['adresse']);
	$mail=htmlspecialchars($_POST['mail']);



	AJOUT_CHAUFFEUR::ajouter_chauffeur($nom,$prenom,$adresse,$mail);

	header('Location: ../vue/Chauffeur_list.php');

	?>