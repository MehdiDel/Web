
  <?php include("menu_client.php"); ?>


    <section>
    <h2 class = "center grey-text"> Modification </h2>
     
    <div class="row">


    <form class="col s12" action ="../controller/modifier_infos.php" method="post">
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
  


      <div class="row center">
        <div class="input-field col s12">
       <button class="btn waves-effect waves-light" type="submit" name="action">Modifier
    <i class="material-icons right">send</i>
  </button>

  </div>
  </div>

    </form>
  </div>-->
</section>

<?php include("footer.php"); ?>

