

<?php 

include_once('../modele/inscrits_mod.php');



	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$email = htmlspecialchars($_POST['email']);
	$mdp = sha1(htmlspecialchars($_POST['mdp']));
	$vmdp= sha1(htmlspecialchars($_POST['vmdp']));


	$result=INSCRITS::exist_email($email);


	if(!empty($result) OR ($mdp!=$vmdp) OR (empty($nom)||empty($prenom)||empty($mdp)||empty($vmdp)||empty($email)) )
	{
    	header('Location: ../vue/inscription.php'); 
	}

	else { 
    	INSCRITS::creer_inscrit($nom, $prenom, $email, $mdp);

		header('Location: ../vue/reussi_ins.php');
	}	 







?>
