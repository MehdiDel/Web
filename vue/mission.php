
<?php include("menu_admin.php"); ?>

<h2 class = "center black-text "> Gestion de vos missions</h2>
<div class="container">
  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#ReservJ" class ="active">Réservation à la journée</a></li>
        <li class="tab col s3"><a  href="#ReservV">Réservation Voyage d'Affaire/ Privé </a></li>
        <li class="tab col s3"><a  href="#ReservE">Réservation Evenements </a></li>
      </ul>
    </div>


<?php include("Mission_jour_list.php"); ?>

<?php include("Mission_voyage_list.php"); ?>

<?php include("Mission_event_list.php"); ?>
    
    </div>
  </div>

<script>  
  $(document).ready(function(){
    $('ul.tabs').tabs();
  });
     </script>

  <script>
    $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  </script>
  </div>
<?php include("footer.php"); ?>