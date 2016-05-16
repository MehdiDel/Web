<?php
	require_once('../modele/modifier_vehicule.php');


	$id=$_COOKIE['idvehicule'];
	$marque=htmlspecialchars($_POST['marque']);
	$matricule=htmlspecialchars($_POST['matricule']);
	$prix=htmlspecialchars($_POST['prix']);



	MODIF_VEHICULE::modifier_vehicule($id,$marque,$matricule,$prix);

	header('Location: ../vue/Vehicule_list.php');
?>