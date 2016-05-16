
<?php include("menu_admin.php"); ?>

<h4 class="center black-text"> Liste des vehicules</h4>

<div class="tab-content">
    <div id="ReservE" class="tab-pane fade in active">
     <table class="table2 highlight centered bordered  " >
        <thead>
          <tr>
              <th data-field="id">Identifiant</th>
              <th data-field="marque">Marque</th>
              <th data-field="matricule">Immatriculation</th>
              <th data-field="prix">Prix</th>
  
          </tr>
        </thead>

        <tbody>

          <?php 
              require_once('../modele/get_vehicule.php');
              
              $cars = VEHICULE::get_ALLvehicule();
                
              //On affiche chaque ligne de la table vehicule.
              foreach($cars as $car) 
              {
                print "<tr><td>" .  $car["id"] . "</td>";
                print "<td>" .  $car["marque"] . "</td>";
                print "<td>" .  $car["matricule"] . "</td>";
                print "<td>" .$car["prix"]."</td>";
                
                print "<td><a class=\"waves-effect waves-light orange lighten-2 btn btn-small btn-lg\" href=\"modifier_vehicule.php?id=".  $car["id"] ."\">Modifier</a></td>";
                print "<td><a class=\"waves-effect waves-light red btn btn-small btn-lg\" href=\"../controller/supprimer_vehicule.php?id=".  $car["id"] ."\">Supprimer</a></td>";
         
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