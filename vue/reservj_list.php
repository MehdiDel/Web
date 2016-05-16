

<h5 class = "center white-text green"> "A la journée"</h5>
<div class="tab-content">
    <div id="entree" class="tab-pane fade in active">
     <table class="table2 highlight centered bordered  " >
        <thead>
          <tr>
              <th data-field="dateD">Date</th>
              <th data-field="adresse">Adresse de rendez-vous</th>
              <th data-field="ville">Ville</th>
              <th data-field="nbpassager">Nombre de passager</th>
              <th data-field="tel">Telephone</th>
             <th data-field="etat">Etat</th>
          </tr>
        </thead>

        <tbody>

          <?php 
              require_once('../modele/get_reservation.php');
              $email = $_COOKIE['email'];
              $reservationj = GET_RESERVATION::get_reservationJour($email);
                
              //Pour chaque console on affiche des caractéristiques
              foreach($reservationj as $reservation) 
              {

                print "<tr> <td>" .  $reservation["dateD"] . "</td>";
                print "<td>" .  $reservation["adresse"] . "</td>";
                print "<td>" .  $reservation["ville"] . "</td>";
                print "<td>" .$reservation["nbpassager"]."</td>";
                print "<td>" .$reservation["tel"]."</td>";
                print "<td>" .$reservation["etat"]."</td>";

              }
			?>

        </tbody>
      </table>

    </div>
  </div>
