<?php
	require_once('../modele/modifier_reservation.php');

	$id=htmlspecialchars($_GET['id']);

	MODIF_RESERVATION::modifier_reservationJour($id);

	header('Location: ../vue/tableau_de_bord.php');
?>