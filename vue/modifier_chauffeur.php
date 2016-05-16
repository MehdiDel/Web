<?php 
 $id = htmlspecialchars($_GET['id']);

 setcookie('idchauffeur', $id, time()+24*3600, "/"); ?>

 <?php include("menu.php"); ?>

<section>

<h2 class = "center grey-text"> Mofication du chauffeur </h2>

 <div class="row ">
    <form class="col s6 "  action ="../controller/modifier_chauffeur.php" method="POST">



        <div class="row center">
          <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="nom" type="text" class="validate" name="nom">
          <label for="nom">Nom</label>
          </div>
        </div>

        <div class="row center">
          <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
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
          <input id="mail" type="email" class="validate" name="mail">
          <label for="mail">Adresse Email</label>
          </div>
        </div>

        <div class="row center">
          <div class="input-field col s12">
          <button class="btn waves-effect waves-light" type="submit" name="action">Modifier
          <i class="material-icons right">send</i></button>
          </div>
        </div>

    </form>
  </div>
  </section>

<?php include("footer.php"); ?>