<?php
	require_once('../modele/gestion.php');

	$id=htmlspecialchars($_GET['id']);

	GESTION::promouvoir($id);

	header('Location: ../vue/gestion_membre.php');
?>