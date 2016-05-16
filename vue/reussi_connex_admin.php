<?php include("menu_admin.php"); ?>


<div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4 hoverable">
          <div class="icon-block">
            <img src="images/mission.jpg" class="shopping hoverable">
            <h5 id="Acceuil" class="center">Vos missions</h5>

            <p class="light">Affichage de la liste de toute les missions accepté, possibilité de visionner les detail de chaque reservation.</p>
            <p><a  href="mission.php"class="waves-effect waves-light btn-large"><i class="small material-icons right">supervisor_account</i>Gérer</a></p>
          </div>
        </div>

        <div class="col s12 m4 hoverable">
          <div class="icon-block">
           <img src="images/membre.png" class="affaire hoverable">
            <h5 class="center">Gestion des membres</h5>

            <p class="light"> Affichage de la liste de tout les inscrits du site, possibilité de promouvoir les membres en admin , recherche par nom.</p> 
            <p><a  href="gestion_membre.php"class="waves-effect waves-light btn-large"><i class="small material-icons right">supervisor_account</i>Gérer</a></p>
          </div>
        </div>

        <div class="col s12 m4 hoverable">
          <div class="icon-block">
            <img src="images/gestion.jpg"  class=" affaire hoverable">
            <h5 class="center">Autre</h5>

            <p class="light">Gestion de la base de données vehicule et chauffeur, possibilité d'ajouter ou de supprimer des vehicules ou des chauffeurs</p>
            <p><a  href="autre.php"class="waves-effect waves-light btn-large"><i class="small material-icons right">supervisor_account</i>Gérer</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>


   <?php include("footer.php"); ?>