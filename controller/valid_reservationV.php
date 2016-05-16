<?php

require_once('../modele/ajouter_reservation.php');

				$dateD = htmlspecialchars($_POST['dateD']);
				$villeD = htmlspecialchars($_POST['villeD']);
				$adresseD = htmlspecialchars($_POST['adresseD']);
				$villeA = htmlspecialchars($_POST['villeA']);
				$adresseA = htmlspecialchars($_POST['adresseA']);
				$nbpassager = htmlspecialchars($_POST['nbpassager']);
				$tel = htmlspecialchars($_POST['tel']);

				
				if (!empty($dateD) AND !empty($villeD) AND !empty($adresseD) AND !empty($villeA) AND !empty($adresseA) AND !empty($nbpassager) AND !empty($tel) AND $nbpassager>=1 )
				{	
					AJOUTER_RESERVATION::ajouter_reservation_voyage($dateD, $villeD, $adresseD, $villeA, $adresseA, $nbpassager, $tel);
					header('Location: ../vue/reserv_jsend.php');
					
				}
				else{

					header('Location: ../vue/reserver_voyage.php');
				}