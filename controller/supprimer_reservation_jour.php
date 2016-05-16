<?php
	require_once('../modele/supprimer_reservation.php');

	$id=htmlspecialchars($_GET['id']);

	SUP_RESERVATION::supprimer_reservationJour($id);

	header('Location: ../vue/tableau_de_bord.php');
?>