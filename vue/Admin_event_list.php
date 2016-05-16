

<div class="tab-content">
    <div id="ReservE" class="tab-pane fade in active">
     <table class="table2 highlight centered bordered  " >
        <thead>
          <tr>
              <th data-field="nom">Nom</th>
              <th data-field="dateE">Date de l'evenement</th>
              <th data-field="adresse">Adresse</th>
              <th data-field="evenement">Type d'evenement</th>
  
          </tr>
        </thead>

        <tbody>

          <?php 
              require_once('../modele/get_reservation.php');
              
              $attente = GET_RESERVATION::get_reservationEvent_attente();
                
              //On affiche chaque ligne de la table reservationJour où l'etat est en attente.
              foreach($attente as $reservation) 
              {
                print "<tr><td>" .  $reservation["nom"] . "</td>";
                print "<td>" .  $reservation["dateE"] . "</td>";
                print "<td>" .  $reservation["adresse"] . "</td>";
                print "<td>" .$reservation["evenement"]."</td>";
                print "<td><a class=\"waves-effect waves-light green btn btn-small btn-lg\" href=\"../controller/modifier_reservation_event.php?id=".  $reservation["id"] ."\">Accepter</a></td>";
                print "<td><a class=\"waves-effect waves-light red btn btn-small btn-lg\" href=\"../controller/supprimer_reservation_event.php?id=".  $reservation["id"] ."\">Refuser</a></td>";
               print "<td><a class=\"waves-effect waves-light yellow btn btn-small btn-lg\" href=\"detail_reservation_event.php?id=".  $reservation["id"] ."\">Detail</a></td>";

         
              }
			?>

        </tbody>
      </table>

    </div>
    </div>

   