
<?php include("menu_admin.php"); ?>

<h4 class="center black-text"> Liste des chauffeur</h4>

<div class="tab-content">
    <div id="ReservE" class="tab-pane fade in active">
     <table class="table2 highlight centered bordered  " >
        <thead>
          <tr>
              <th data-field="id">Identifiant</th>
              <th data-field="nom">Nom</th>
              <th data-field="prenom">Prenom</th>
              <th data-field="adresse">Adresse</th>
              <th data-field="mail">Adresse email</th>
  
          </tr>
        </thead>

        <tbody>

          <?php 
              require_once('../modele/get_chauffeur.php');
              
              $drivers = CHAUFFEUR::get_ALLchauffeur();
                
              //On affiche chaque ligne de la table vehicule.
              foreach($drivers as $driver) 
              {
                print "<tr><td>" .  $driver["id"] . "</td>";
                print "<td>" .  $driver["nom"] . "</td>";
                print "<td>" .  $driver["prenom"] . "</td>";
                print "<td>" .  $driver["adresse"] . "</td>";
                print "<td>" .$driver["mail"]."</td>";
                
                print "<td><a class=\"waves-effect waves-light orange lighten-2 btn btn-small btn-lg\" href=\"modifier_chauffeur.php?id=".  $driver["id"] ."\">Modifier</a></td>";
                print "<td><a class=\"waves-effect waves-light red btn btn-small btn-lg\" href=\"../controller/supprimer_chauffeur.php?id=".  $driver["id"] ."\">Supprimer</a></td>";
         
              }
			?>

        </tbody>
      </table>

    </div>
    </div>


     <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>