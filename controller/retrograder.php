<?php
	require_once('../modele/gestion.php');

	$id=htmlspecialchars($_GET['id']);

	GESTION::retrograder($id);

	header('Location: ../vue/gestion_membre.php');
?>