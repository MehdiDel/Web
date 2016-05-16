<?php

require_once('../modele/ajouter_reservation.php');


			
				$dateE= htmlspecialchars($_POST['dateE']);
				$adresse = htmlspecialchars($_POST['adresse']);
				$evenement = htmlspecialchars($_POST['evenement']);
				
				
				
				
				if (!empty($dateE) AND !empty($adresse) AND !empty($evenement) AND isset($_COOKIE['email']))
				{	
					AJOUTER_RESERVATION::ajouter_reservation_evenement($dateE, $adresse, $evenement);
					header('Location: ../vue/reserv_jsend.php');
					
				}
				else{

					header('Location: ../vue/reserver_evenement.php');
				}