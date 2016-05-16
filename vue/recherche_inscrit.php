
<?php include("menu_admin.php"); ?>


    <div class="nav-wrapper">
      <form method="POST" action :"../controller/recherche.php">
        <div class="input-field">
          <input id="search" type="search" name="search" required placeholder="Name of the game...">
          <input hidden type="submit" value="Rechercher">
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>






        <div class="card-panel hoverable">
          <table>
            <thead>
              <tr>
             <!--   <th data-field="id">Identifiant</th>-->
                <th data-field="nom">Nom</th>
                <th data-field="prenom">Prenom</th>
              	<th data-field="email">Email</th>
                <th data-field="admin">Admin</th>
              </tr>
            </thead>
          <tbody>

   <?php 	require_once('../modele/recherche.php');
           $info = RECHERCHE::rechercher($_POST['search']);
               
              foreach($info as $res) 
              {
                print "<tr> <td>" .  $res["id"] . "</td>";
                print "<td>" .  $res["nom"] . "</td>";
                print "<td>" .  $res["prenom"] . "</td>";
               print "<td>" .  $res["email"] . "</td>";
               print "<td>" .  $res["admin"] . "</td></tr>";
               
             }
            
?>

          </tbody>
        </div>


            <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>