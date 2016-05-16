

<?php 

include_once('../modele/inscrits_mod.php');

	$oldemail = $_COOKIE['email'];

	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$mdp = sha1(htmlspecialchars($_POST['mdp']));
	$vmdp= sha1(htmlspecialchars($_POST['vmdp']));


	

	if(($mdp!=$vmdp) OR (empty($nom) OR empty($prenom) OR empty($oldemail) OR empty($mdp) OR empty($vmdp))) 
	{
    	header('Location: ../vue/modifier_infos.php'); 
	}

	else { 
		
    	INSCRITS::modifier_infos($oldemail,$nom, $prenom, $mdp);

		header('Location: ../vue/infos.php');
	}	 







?>
