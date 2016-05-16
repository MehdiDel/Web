<?php
	require_once('../modele/gestion.php');

	$id=htmlspecialchars($_GET['id']);

	GESTION::supprimer_inscrits($id);

	header('Location: ../vue/gestion_membre.php');
?>