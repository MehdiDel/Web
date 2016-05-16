   

<?php 
   
   
      if (isset($_POST['search']))
      {
        $rec=htmlentities($_POST['search']);
        header("Location: ../vue/recherche_inscrit.php");
      }
      
      else {
        $rec='';
         header("Location: ../vue/recherche_inscrit.php");
      }
     


  ?>