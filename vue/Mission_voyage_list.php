
<div class="tab-content">
<div id="ReservV" class="tab-pane fade in active">
     <table class="table2 highlight centered bordered " >
        <thead>
          <tr>
              <th data-field="dateD">Date</th>
              <th data-field="villeD">Ville de départ</th>
              <th data-field="villeA">Ville d'arrivée</th>
              <th data-field="nbpassager">Nombre de passager</th>
             
          </tr>
        </thead>

        <tbody>

          <?php 

            require_once('../modele/get_reservation.php');

             
              $valid = GET_RESERVATION::get_reservationVoyage_valide();

              //Pour chaque console on affiche des caractéristiques
              foreach($valid as $reservations) 
              {

                print "<tr> <td>" .  $reservations["dateD"] . "</td>";
                print "<td>" .  $reservations["villeD"] . "</td>";
                print "<td>" .  $reservations["villeA"] . "</td>";
                print "<td>" .$reservations["nbpassager"]."</td>";
                print "<td><a class=\"waves-effect waves-light orange btn btn-small btn-lg\" href=\"../controller/mission_voyage_realiser.php?id=".  $reservations["id"] ."\">Realisé</a></td>";
                print "<td><a class=\"waves-effect waves-light yellow btn btn-small btn-lg\" href=\"detail_reservation_voyage.php?id=".  $reservations["id"] ."\">Detail</a></td>";

              }
			?>

        </tbody>
      </table>

    </div>
    </div>