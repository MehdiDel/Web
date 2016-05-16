<?php include("menu_admin.php"); ?>

<?php 

	$id=htmlspecialchars($_GET['id']);

	require_once('../modele/get_reservation.php');

             
    $reservation = GET_RESERVATION::get_reservationEvent_id($id); ?>


    
        
          <div class="container">
            <div class="Black-text ">
             
              <p>ID :  <?php echo htmlspecialchars($reservation["id"]) ; ?></p>
              <p>Nom : <?php echo htmlspecialchars($reservation['nom']) ; ?></p>
              <p>Email : <?php echo htmlspecialchars($reservation['email'])  ?></p>
              <p> Date de l'évenement :  <?php echo htmlspecialchars($reservation['dateE'])  ?></p>
              <p>   Adresse :<?php echo htmlspecialchars($reservation['adresse'])  ?></p>
              <p>   Type d'Evenement : <?php echo htmlspecialchars($reservation['evenement'])  ?></p>
            </div>
            
          </div>
       
      
            
   <?php include("footer.php"); ?>