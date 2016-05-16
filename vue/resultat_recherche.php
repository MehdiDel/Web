 <?php include("menu_admin.php"); ?>

 <h3 class="center"> Recherche des membres par ID, Nom, Prenom ou Email</h3>
 <div class="container">
  <div class="row">
    <form class="col s12" method :"GET" action="resultat_recherche.php">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">search</i>
          <input id="search" type="text" class="validate" name="search">
          <label for="search">Rechercher</label>
        </div>
  


        <div class="row center">
          <div class="input-field col s12">
          <button class="btn waves-effect waves-light" type="submit" name="action">Rechercher
          <i class="material-icons right">send</i></button>
          </div>
        </div>


  </form>
  </div>
</div>

 <div class="container">
    <div class="section">

      <h4> Recherche pour "<?php echo $_GET['search'] ?> "</h4>
  <div class="tab-content">
    <div  class="tab-pane fade in active">
     <table class="table2 highlight centered bordered  " >
                    <thead>
                      <tr>
                        <th data-field="id">Identifiant</th>
                        <th data-field="nom">Nom</th>
                        <th data-field="prenom">Prenom</th>
                        <th data-field="email">Email</th>
                        <th data-field="admin">Admin</th>
                      </tr>
                    </thead>

                    <tbody>

                      <?php 
                        require_once  ('../modele/recherche.php');

                        $tab=array(
                                      'search' => $_GET['search'],
                                  );
       
                        
                        $infos = RECHERCHE::rechercher($tab);

                        foreach($infos as $info) {

                         print "<tr> <td>" .  $info["id"] . "</td>";
                         print "<td>" .  $info["nom"] . "</td>";
                         print "<td>" .  $info["prenom"] . "</td>";
                         print "<td>" .  $info["email"] . "</td>";
                         print "<td>" .  $info["admin"] . "</td></tr>";
                          }
                        ?>
                  </tbody>
            </table>
      </div>
</div>
</div>
</div>


            <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>