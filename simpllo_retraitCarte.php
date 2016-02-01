<?php
  $idTache = $_GET['idTache'];
  // echo $_GET['nomTache'];

  function retraitCarte(){
      global $idTache;
      if ($connexion = mysqli_connect('localhost', 'root', 'Peace586586', 'simpllo') ){
         $retraitTache = "DELETE FROM `taches` WHERE `id`= '$idTache' ";
         $resultat = mysqli_query($connexion, $retraitTache);
      } else{
        echo 'Erreur BBD';
      }
      echo $retraitTache;
   }

  retraitCarte();


 ?>
