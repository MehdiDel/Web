<h5 class = "center white-text green"> "Evènements"</h5>

<div class="tab-content">
    <div id="entree" class="tab-pane fade in active">
     <table class="table2 highlight centered bordered  " >
        <thead>
          <tr>
              <th data-field="dateE">Date de L'evenement</th>
              <th data-field="adresse">Adresse </th>
              <th data-field="evenement">Description de l'evenement</th>
             <th data-field="etat">Etat</th>
          </tr>
        </thead>

        <tbody>

          <?php 
              require_once('../modele/get_reservation.php');
              $email = $_COOKIE['email'];
              $reservationE = GET_RESERVATION::get_reservationEvenement($email);
                
              //Pour chaque console on affiche des caractéristiques
              foreach($reservationE as $reservation) 
              {

                print "<tr> <td>" .  $reservation["dateE"] . "</td>";
                print "<td>" .  $reservation["adresse"] . "</td>";
                print "<td>" .  $reservation["evenement"] . "</td>";
                print "<td>" .$reservation["etat"]."</td>";

              }
			?>

        </tbody>
      </table>

    </div>
  </div>