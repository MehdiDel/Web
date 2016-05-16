<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Chauffeur privé</title>

 <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="style.css" />


<link href='https://fonts.googleapis.com/css?family=Antic+Didone' rel='stylesheet' type='text/css'>

  </head>
<body>
<nav class="grey" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="reussi_connex.php" class="brand-logo white-text">Nice Driver</a>
      <ul class="right hide-on-med-and-down ">
        <li><a href="infos.php" class="white-text">Infos de <?php echo $_COOKIE["email"]; ?></a></li>
        <li><a href="mes_reservations.php" class="white-text"> Mes Réservations </a></li>
        <li><a href="reserver.php" class="white-text">Réserver </a></li>
        <li><a  href="../controller/deconnexion.php"class="waves-effect waves-light btn-large"><i class="small material-icons right">supervisor_account</i>Déconnexion</a></li>
    </ul>

    <ul id="nav-mobile" class="side-nav">
        <li><a href="infos.php">Infos</a></li>
        <li><a href="mes_reservations.php"> Mes Réservation</a></li>
        <li><a href="reserver.php">Réserver </a></li>
        <li><a href="../controller/deconnexion.php">Déconnexion</a></li>
      </ul>
      <a href="reussi_connex.php" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">Menu</i></a>
    </div>
  </nav>