<?php include("menu_client.php");?>



    <section>

 <div class="row ">
    <form class="col s6 " action ="../controller/valid_reservationE.php" method="POST">
 		 
 	
 		 
        <div class="row center">
          <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="dateE" type="text" class="validate" name="dateE" length="10">
          <label for="dateE" class="black-text">Date de l'evenement (format JJ/MM/AAAA</label>
          </div>
        </div>
        <div class="row center">
          <div class="input-field col s6">
          <i class="material-icons prefix">input</i>
          <input id="adresse" type="text" class="validate" name="adresse">
          <label for="adresse" class="black-text">Adresse de l'evenement</label>
          </div>
        </div>

         <div class="row center">
          <div class="input-field col s6">
          <i class="material-icons prefix">input</i>
          <input id="evenement" type="text" class="validate" name="evenement">
          <label for="evenement" class="black-text">Décrivez le type d'evenement</label>
          </div>
        </div>

        <div class="row center">
          <div class="input-field col s12">
          <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer la réservation
          <i class="material-icons right">send</i></button>
          </div>
        </div>

    </form>
  </div>

</div>

 <?php include("footer.php"); ?>