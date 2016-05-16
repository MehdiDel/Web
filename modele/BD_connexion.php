<?php 
function connexion()
{
	try
	{
		
	//Local
	//$bdd = new PDO('mysql:host=localhost;dbname=nicedriver;charset=utf8', 'root', '');

	
	$bdd = new PDO('mysql:host=XXXX;dbname=nicedriver;charset=utf8', 'XXXX', 'XXXX');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}
	catch (Exception $e)
	{
        die('Erreur : ' . $e->getMessage());
	}

return $bdd;
}
?>