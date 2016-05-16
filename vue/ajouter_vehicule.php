<?php include("menu_admin.php"); ?>


<section>

<h2 class = "center grey-text"> Ajouter un nouveau vehicule  </h2>

 <div class="row ">
    <form class="col s6 "  action ="../controller/ajouter_vehicule.php" method="POST">




        <div class="row center">
          <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="marque" type="text" class="validate" name="marque">
          <label for="marque">Marque</label>
          </div>
        </div>
        <div class="row center">
          <div class="input-field col s6">
          <i class="material-icons prefix">input</i>
          <input id="matricule" type="text" class="validate" name="matricule">
          <label for="matricule">Immatriculation</label>
          </div>
        </div>

        <div class="row center">
          <div class="input-field col s6">
          <i class="material-icons prefix">input</i>
          <input id="prix" type="number" class="validate" name="prix">
          <label for="prix">Prix</label>
          </div>
        </div>

        <div class="row center">
          <div class="input-field col s12">
          <button class="btn waves-effect waves-light" type="submit" name="action">Ajouter
          <i class="material-icons right">send</i></button>
          </div>
        </div>

    </form>
  </div>
  </section>

</body>
</html>