<?php
	setcookie("email", "", time() -1, "/");
	setcookie("admin", "", time() -1, "/");

	header("Location: ../vue/index.php");
?>