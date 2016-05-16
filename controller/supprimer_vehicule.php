<?php
	require_once('../modele/supprimer_vehicule.php');

	$id=htmlspecialchars($_GET['id']);

	SUP_VEHICULE::supprimer_vehicule($id);

	header('Location: ../vue/Vehicule_list.php');
?>