<?php

	require_once('../modele/ajouter_vehicule.php');


	
	$marque=htmlspecialchars($_POST['marque']);
	$matricule=htmlspecialchars($_POST['matricule']);
	$prix=htmlspecialchars($_POST['prix']);



	AJOUT_VEHICULE::ajouter_vehicule($marque,$matricule,$prix);

	header('Location: ../vue/Vehicule_list.php');

	?>