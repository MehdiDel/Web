<?php

include_once('../modele/BD_connexion.php');

if (isset($_COOKIE['email']))
{


	if (!empty($_POST['adresseDep']) AND !empty($_POST['adresseArr']) AND !empty($_POST['nbpassager']) AND !empty($_POST['message']) AND !empty($_POST['dateD'])){
 	
			$req = $bdd->prepare('SELECT * FROM reservation WHERE dateD = ?');
			$req->execute(array($_POST['dateD']));


			if(mysql_num_rows($req) !=0) 
				{ 
		
					header('Location: ../vue/reservation.php');

				}
			else
				{
					$req1 = $bdd->prepare('SELECT id, nom FROM inscrits WHERE email = ?');
					$req1->execute(array($_COOKIE['email']));
					$req1 = $req1->fetch();
					$id = $req1['id'];
					$nom = $req1['nom'];

	
					$req = $bdd->prepare('INSERT INTO reservation (idclient,nomclient, adresseDep,adresseArr, dateD, nbpassager ,message) VALUES(?,?,?,?,?,?,?)');
					$req->execute(array($id, $nom, $_POST['adresseDep'], $_POST['adresseArr'],$_POST['dateD'], $_POST['nbpassager'],$_POST['message']));
					header('Location: ../vue/reussi_ins.php');
				}

 	

		}

	else
		{
			header('Location: ../vue/reservation.php');
		}	

}

else
{
	header('Location: ../vue/connexion.php');
}


$req->closeCursor();

?>
