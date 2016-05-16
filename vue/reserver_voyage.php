<?php include("menu_client.php"); ?>



 <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Règlementation</span>
              <p>Les voyages organisé par Nice driver ne concernent que la France métropolitaine. En cas de trajet exédant 9 heures de routes, un contrepartie financière supplementaire vous sera demandé pour prendre en charge les frais hotelier de votre chauffeur. Merci de votre comprehension.</p>
            </div>
           
          </div>
        </div>
      </div>

<section>
   <div class="row">
        <form class="col s6 " id="monForm3" method="POST" action="../controller/valid_reservationV.php">

           <div class="row center">
          <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <label for="dateD" class="black-text">Date de réservation (format JJ/MM/AAAA) </label>
              <input id="dateD" type="text" class="validate" name="dateD" length="10">
            </div>
            </div>

          <div class="row center">
          <div class="input-field col s6">
              <i class="material-icons prefix">location_on</i>
              <label for="villeD" class="black-text">Ville de départ</label>
              <input id="villeD" type="text" class="validate" name="villeD">
             </div>
            </div>

            <div class="row center">
          <div class="input-field col s6">
            <i class="material-icons prefix">mode_edit</i>
              <input id="adresseD" type="text" class="validate" name="adresseD">
              <label for="adresseD" class="black-text">Adresse de départ</label>
            </div>
          </div>

        <div class="row center">
          <div class="input-field col s6">
              <i class="material-icons prefix">location_on</i>
              <label for="villeA" class="black-text">Ville d'arrivée</label>
              <input id="villeA" type="text" class="validate" name="villeA">
             </div> 
            </div>

           <div class="row center">
          <div class="input-field col s6">
            <i class="material-icons prefix">mode_edit</i>
              <input id="adresseA" type="text" class="validate" name="adresseA">
              <label for="adresseA" class="black-text">Adresse d'arrivée'</label>
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
          
            
            
              
          <div class="row center-align">
            <button class="btn waves-light btn light-blue darken-1" type="submit" name="action">Envoyer la réservation
              <i class="material-icons right">done_all</i>
            </button>
          </div>

        </form>
      </div>
</section>

 <?php include("footer.php"); ?>