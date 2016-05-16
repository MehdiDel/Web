
<?php include("menu_client.php"); ?>

 
 <section>
    <h2 class = "center grey-text"> Page de Reservation </h2>
    <h4 class = "center red-text"> Veuillez remplir tous les champs  </h4>
    
    <div class="row">


    <form class="col s12" action ="../controller/valid_reservation.php" method="post">
      <div class="row center">
        <div class="input-field col s6">
          <input  id="adresseDep" type="text" class="validate black-text white" name="adresseDep">
          <label for="adresseDepadresseDep"><h6>Adresse de départ</h6></label>
        </div>
        </div>
        <div class="row center">
        <div class="input-field col s6">
          <input id="adresseArr" type="text" class="validate black-text white" name="adresseArr">
          <label for="adresseArr"><h6>Adresse d'arrivée</h6></label>
        </div>
      </div>

       <div class="row center">
        <div class="input-field col s6">
          <input id="nbpassager" type="number" class="validate black-text white" name="nbpassager">
          <label for="nbpassager"><h6>Nombre de passagers</h6></label>
        </div>
      </div>

        <div class="row center">
        <div class="input-field col s6">
          <textarea name="message" rows="8" cols="45" id="message" type="text" class="validate black-text white" ></textarea>
          <label for="message"><h6>Informations complémentaire concernant votre voyage</h6></label>
        </div>
      </div>


	<div class="row center">
	  <div class="input-field col s6">
      <input id=dateD type="date" class="datepicker" name="dateD">
      
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
