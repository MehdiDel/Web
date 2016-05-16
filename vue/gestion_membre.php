<?php include("menu_admin.php"); ?>

<h2 class = "center black-text "> Gestion des membres</h2>
<div class="container">
  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#membre" class ="active">Membres simple</a></li>
        <li class="tab col s3"><a  href="#admin">Administrateur </a></li>
      </ul>
    </div>



<div class="tab-content">
    <div id="membre" class="tab-pane fade in active">
     <table class="table2 highlight centered bordered  " >
        <thead>
          <tr>
          	  <th data-field="id">Identifiant</th>
              <th data-field="nom">Nom</th>
              <th data-field="prenom">Prenom</th>
              <th data-field="email">Adresse email</th>
  
          </tr>
        </thead>

        <tbody>

          <?php 
              require_once('../modele/get_inscrit.php');
              
              $membres = GET_INSCRIT::get_membres();
                
              //On affiche chaque ligne de la table reservationJour où l'etat est en attente.
              foreach($membres as $membre) 
              {
                print "<tr><td>" .  $membre["id"] . "</td>";
                print "<td>" .  $membre["nom"] . "</td>";
                print "<td>" .  $membre["prenom"] . "</td>";
                print "<td>" .$membre["email"]."</td>";
       
                print "<td><a class=\"waves-effect waves-light green btn btn-small btn-lg\" href=\"../controller/promouvoir.php?id=".  $membre["id"] ."\">Promouvoir</a></td>";
                print "<td><a class=\"waves-effect waves-light red btn btn-small btn-lg\" href=\"../controller/supprimer_inscrit.php?id=".  $membre["id"] ."\">Supprimer</a></td>";
              
         
              }
			?>

        </tbody>
      </table>

    </div>
    </div>


<div class="tab-content">
    <div id="admin" class="tab-pane fade in active">
     <table class="table2 highlight centered bordered  " >
        <thead>
          <tr>
          	  <th data-field="id">Identifiant</th>
              <th data-field="nom">Nom</th>
              <th data-field="prenom">Prenom</th>
              <th data-field="email">Adresse email</th>
  
          </tr>
        </thead>

        <tbody>

          <?php 
              require_once('../modele/get_inscrit.php');
              
              $admins = GET_INSCRIT::get_admin();
                
              //On affiche chaque ligne de la table reservationJour où l'etat est en attente.
              foreach($admins as $admin) 
              {
                print "<tr><td>" .  $admin["id"] . "</td>";
                print "<td>" .  $admin["nom"] . "</td>";
                print "<td>" .  $admin["prenom"] . "</td>";
                print "<td>" .$admin["email"]."</td>";
       
                print "<td><a class=\"waves-effect waves-light green btn btn-small btn-lg\" href=\"../controller/retrograder.php?id=".  $admin["id"] ."\">Rétrograder</a></td>";
                print "<td><a class=\"waves-effect waves-light red btn btn-small btn-lg\" href=\"../controller/supprimer_inscrit?id=".  $admin["id"] ."\">Supprimer</a></td>";
              
         
              }
			?>

        </tbody>
      </table>

    </div>
    </div>


   </div>
	</div>


    <script>  
	$(document).ready(function(){
    $('ul.tabs').tabs();
  });
     </script>

  <script>
    $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  </script>
  
<?php include("footer.php"); ?>