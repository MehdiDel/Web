<?php

require_once('../modele/ajouter_reservation.php');

				$dateD = htmlspecialchars($_POST['dateD']);
				$adresse = htmlspecialchars($_POST['adresse']);
				$nbpassager = htmlspecialchars($_POST['nbpassager']);
				$tel = htmlspecialchars($_POST['tel']);
				$ville = htmlspecialchars($_POST['ville']);

				
				if (!empty($dateD) AND !empty($adresse) AND !empty($nbpassager) AND !empty($tel) AND !empty($ville) AND $nbpassager>=1 )
				{	
					AJOUTER_RESERVATION::ajouter_reservation_Jour($dateD, $adresse, $nbpassager, $tel, $ville);
					header('Location: ../vue/reserv_jsend.php');
					
				}
				else{

					header('Location: ../vue/reserv_j.php');
				}