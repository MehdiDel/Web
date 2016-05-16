<?php
	require_once('../modele/modifier_chauffeur.php');


	$id=$_COOKIE['idchauffeur'];
	$nom=htmlspecialchars($_POST['nom']);
	$prenom=htmlspecialchars($_POST['prenom']);
	$adresse=htmlspecialchars($_POST['adresse']);
	$mail=htmlspecialchars($_POST['mail']);



	MODIF_CHAUFFEUR::modifier_chauffeur($id,$nom,$prenom,$adresse,$mail);

	header('Location: ../vue/Chauffeur_list.php');
?>