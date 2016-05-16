<?php include("menu_admin.php"); ?>

<section>

<h2 class = "center grey-text"> Ajouter un nouveau chauffeur  </h2>

 <div class="row ">
    <form class="col s6 "  action ="../controller/ajouter_chauffeur.php" method="POST">




        <div class="row center">
          <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="nom" type="text" class="validate" name="nom">
          <label for="nom">Nom</label>
          </div>
        </div>
        <div class="row center">
          <div class="input-field col s6">
          <i class="material-icons prefix">input</i>
          <input id="prenom" type="text" class="validate" name="prenom">
          <label for="prenom">Prenom</label>
          </div>
        </div>

        <div class="row center">
          <div class="input-field col s6">
          <i class="material-icons prefix">input</i>
          <input id="adresse" type="text" class="validate" name="adresse">
          <label for="adresse">Adresse</label>
          </div>
        </div>

             <div class="row center">
          <div class="input-field col s6">
          <i class="material-icons prefix">input</i>
          <input id="mail" type="text" class="validate" name="mail">
          <label for="mail">Email</label>
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