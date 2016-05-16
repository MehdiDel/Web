<?php
			
require_once("../modele/connexion_mod.php");


$email=htmlspecialchars($_POST['email']);
$mdp=htmlspecialchars($_POST['mdp']);


$admin=CONNECT:: est_admin($email);
$admin=$admin['admin'];


$mdp=sha1($mdp);
$res=CONNECT::connexion($email,$mdp);





if ($res==1 and $admin>0){

	
	
	setcookie('email', $email, time()+24*3600, "/");
	setcookie('admin', $admin, time()+24*3600, "/");

	header("Location: ../vue/reussi_connex_admin.php");
}
elseif ($res==1) {

	setcookie('email', $email, time()+24*3600, "/");
	header("Location: ../vue/reussi_connex.php");
}
else {
	header("Location: ../vue/connexion.php");
}

?>