 <?php include("menu_client.php"); ?>

<section>
 <div class="row">
        <form class="col s6 " id="monForm2" method="POST" action="../controller/valid_reservationJ.php">
          
          <div class="row center">
          <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <label for="dateD" class="black-text">Date de réservation (format JJ/MM/AAAA) </label>
              <input id="dateD" type="text" class="validate" name="dateD" length="10">
            </div>
            </div>

         <div class="row center">
          <div class="input-field col s6">
            <i class="material-icons prefix">mode_edit</i>
              <input id="adresse" type="text" class="validate" name="adresse">
              <label for="adresse" class="black-text">Adresse de rendez-vous</label>
            </div>
            </div>

          <div class="row center">
          <div class="input-field col s6">
              <i class="material-icons prefix">today</i>
              <input id="nbpassager" type="number" class="validate" name="nbpassager">
              <label for="nbpassager" data-error="" data-success="" class="black-text">Nombre de passager</label>
            </div>
         </div>

        <div class="row center">
          <div class="input-field col s6">
              <i class="material-icons prefix">phone</i>
              <input id="tel" type="tel" class="validate" name="tel">
              <label for="tel" data-error="wrong, please enter a correct phone number" data-success="" class="black-text">Numero de téléphone</label>
            </div>
          </div>

         <div class="row center">
          <div class="input-field col s6">
              <i class="material-icons prefix">location_on</i>
              <label for="ville" class="black-text">Ville</label>
              <input id="ville" type="text" class="validate" name="ville">
             </div> 
            </div>
            
            
              
          <div class="row center-align">
            <button class="btn waves-light btn light-blue darken-1" type="submit" name="action">Envoyer la réservation
              <i class="material-icons right">done_all</i>
            </button>
          </div>
        </form>
      </div>
</section>
    
 <?php include("footer.php"); ?>