
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



            <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>