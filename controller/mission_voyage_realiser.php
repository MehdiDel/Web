<?php
	require_once('../modele/supprimer_reservation.php');

	$id=htmlspecialchars($_GET['id']);

	SUP_RESERVATION::supprimer_reservationVoyage($id);

	header('Location: ../vue/mission.php');
?>