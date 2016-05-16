

<div class="tab-content">
    <div id="ReservJ" class="tab-pane fade in active">
     <table class="table2 highlight centered bordered  " >
        <thead>
          <tr>
              <th data-field="dateD">Date</th>
              <th data-field="adresse">Adresse de rendez-vous</th>
              <th data-field="ville">Ville</th>
              <th data-field="nbpassager">Nombre de passager</th>
              <th data-field="tel">Telephone</th>
          </tr>
        </thead>

        <tbody>

          <?php 
              require_once('../modele/get_reservation.php');
              
              $attente = GET_RESERVATION::get_reservationJour_attente();
                
              //On affiche chaque ligne de la table reservationJour où l'etat est en attente.
              foreach($attente as $reservation) 
              {

                print "<tr> <td>" .  $reservation["dateD"] . "</td>";
                print "<td>" .  $reservation["adresse"] . "</td>";
                print "<td>" .  $reservation["ville"] . "</td>";
                print "<td>" .$reservation["nbpassager"]."</td>";
                print "<td>" .$reservation["tel"]."</td>";
                print "<td><a class=\"waves-effect waves-light green btn btn-small btn-lg\" href=\"../controller/modifier_reservation_jour.php?id=".  $reservation["id"] ."\">Accepter</a></td>";
                print "<td><a class=\"waves-effect waves-light red btn btn-small btn-lg\" href=\"../controller/supprimer_reservation_jour.php?id=".  $reservation["id"] ."\">Refuser</a></td>";
                print "<td><a class=\"waves-effect waves-light yellow btn btn-small btn-lg\" href=\"detail_reservation_jour.php?id=".  $reservation["id"] ."\">Detail</a></td>";


              }
			?>

        </tbody>
      </table>

    </div>
    </div>