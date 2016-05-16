
<h5 class = "center white-text green"> "Voyage d'affaire"</h5>

<div class="tab-content">
     <table class="table2 highlight centered bordered " >
        <thead>
          <tr>
              <th data-field="dateD">Date</th>
              <th data-field="villeD">Ville de départ</th>
              <th data-field="villeA">Ville d'arrivée</th>
              <th data-field="nbpassager">Nombre de passager</th>
              <th data-field="tel">Telephone</th>
              <th data-field="etat">Etat</th>
             
          </tr>
        </thead>

        <tbody>

          <?php 

            require_once('../modele/get_reservation.php');

              $email = $_COOKIE['email'];
              $reservationV = GET_RESERVATION::get_reservationVoyage($email);

              //Pour chaque console on affiche des caractéristiques
              foreach($reservationV as $reservations) 
              {

                print "<tr> <td>" .  $reservations["dateD"] . "</td>";
                print "<td>" .  $reservations["villeD"] . "</td>";
                print "<td>" .  $reservations["villeA"] . "</td>";
                print "<td>" .$reservations["nbpassager"]."</td>";
                print "<td>" .$reservations["tel"]."</td>";
                print "<td>" .$reservations["etat"]."</td>";

              }
			?>

        </tbody>
      </table>

    </div>
  

