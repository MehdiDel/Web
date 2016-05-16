
  <?php include("menu.php"); ?>


    <section>
    <h2 class = "center grey-text"> Page d'inscription </h2>
    <h4 class = "center red-text"> Veuillez remplir tous les champs et verifiez que vos mot de passes correspondent </h4>
     
    <div class="row">


    <form class="col s12" action ="../controller/valid_ins.php" method="post">
      <div class="row center">
        <div class="input-field col s6">
          <input  id="prenom" type="text" class="validate black-text white" name="prenom">
          <label for="prenom"><h6>Prénom</h6></label>
        </div>
        </div>
        <div class="row center">
        <div class="input-field col s6">
          <input id="nom" type="text" class="validate black-text white" name="nom">
          <label for="nom"><h6>Nom</h6></label>
        </div>
      </div>
    
      <div class="row center">
        <div class="input-field col s6">
          <input id="mdp" type="password" class="validate black-text white" name = "mdp">
          <label for="mdp"><h6>Mot de passe</h6></label>
        </div>
      </div>
      <div class="row center">
        <div class="input-field col s6">
          <input id="vmdp" type="password" class="validate black-text white" name ="vmdp">
          <label for="vmdp"><h6>Validation Mot de passe</h6></label>
        </div>
      </div>
      <div class="row center ">
        <div class="input-field col s6">
          <input  id="email" type="email" class="validate black-text white" name="email">
          <label for="email"><h6 font-family="bold">Email</h6></label>
        </div>
      </div>


      <div class="row center">
        <div class="input-field col s12">
       <button class="btn waves-effect waves-light" type="submit" name="action">S'inscrire
    <i class="material-icons right">send</i>
  </button>

  </div>
  </div>

    </form>
  </div>-->
</section>

<?php include("footer.php"); ?>

