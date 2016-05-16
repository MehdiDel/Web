 <?php include("menu.php"); ?>

<section>
<h2 class = "center grey-text"> Page de connexion </h2>

 <div class="row ">
    <form class="col s6 "  action ="../controller/valid_connexion.php" method="POST">

        <div class="row center">
          <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="email" type="text" class="validate" name="email">
          <label for="email">Email</label>
          </div>
        </div>
        <div class="row center">
          <div class="input-field col s6">
          <i class="material-icons prefix">input</i>
          <input id="mdp" type="password" class="validate" name="mdp">
          <label for="mdp">Mot de passe</label>
          </div>
        </div>

        <div class="row center">
          <div class="input-field col s12">
          <button class="btn waves-effect waves-light" type="submit" name="action">Se connecter
          <i class="material-icons right">send</i></button>
          </div>
        </div>

    </form>
  </div>

  <h5 class = "grey-text"><a  href="inscription.php">Cliquez Ici pour vous inscrire </a> </h5>
</section>


  <?php include("footer.php"); ?>

  