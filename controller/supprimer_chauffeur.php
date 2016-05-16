<?php
	require_once('../modele/supprimer_chauffeur.php');

	$id=htmlspecialchars($_GET['id']);

	SUP_CHAUFFEUR::supprimer_chauffeur($id);

	header('Location: ../vue/Chauffeur_list.php');
?>