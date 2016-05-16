<?php include("menu_client.php"); ?>


<?php
  require_once("../modele/BD_connexion.php");
  $bdd=connexion();


  $req = $bdd->prepare('SELECT * FROM inscrits WHERE email = ?');
	$req->execute(array($_COOKIE['email']));
	$donnee = $req->fetch();
	


?>

  

<div class="card medium">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/image1.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Informations personnelles<i class="material-icons right">more_vert</i></span>
      <p><a href="#">Modifier mes informations</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Informations personnelles<i class="material-icons right">close</i></span>
      <h5><p>Nom : <?php echo $donnee['nom'] . '<br />'; ?>
              	 Prenom: <?php echo htmlspecialchars($donnee['prenom']) . '<br />'; ?>
              	 Email : <?php echo htmlspecialchars($donnee['email']) . '<br />'; ?>
              	 Mot de passe : <?php echo htmlspecialchars($donnee['mdp']) . '<br />'; ?></p>
       <p><a href="modifier_infos.php">Modifier mes informations</a></p></h5>
    </div>
  </div>

<?php include("footer.php"); ?>