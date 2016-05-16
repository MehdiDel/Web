<?php include("menu_admin.php"); ?>

<?php 

	$id=htmlspecialchars($_GET['id']);

	require_once('../modele/get_reservation.php');

             
    $reservation = GET_RESERVATION::get_reservationVoyage_id($id); ?>


    
        
          <div class="container">
            <div class="Black-text ">
             
              <p>ID :  <?php echo htmlspecialchars($reservation["id"]) ; ?></p>
               <p>Nom : <?php echo htmlspecialchars($reservation['nom']) ; ?></p>
               <p>Email : <?php echo htmlspecialchars($reservation['email'])  ?></p>
              <p> Date de départ :  <?php echo htmlspecialchars($reservation['dateD'])  ?></p>
              <p> Ville de départ : <?php echo htmlspecialchars($reservation['villeD']) ?></p>
              <p>   Adresse de départ :<?php echo htmlspecialchars($reservation['adresseD'])  ?></p>
               <p> Ville d'arrivée :<?php echo htmlspecialchars($reservation['villeA'])  ?></p>
               <p> Adresse d'arrivée : <?php echo htmlspecialchars($reservation['adresseA']) ?></p>
              <p>  Nombre de passager : <?php echo htmlspecialchars($reservation['nbpassager']) ?></p>
              <p>   Téléphone : <?php echo htmlspecialchars($reservation['tel'])  ?></p>
            </div>
            
          </div>
       
      
            
   <?php include("footer.php"); ?>