<?php
    $nomListe = $_POST['idListe'];
    
    if ($connexion = mysqli_connect('localhost', 'root', 'Peace586586', 'simpllo')){
      $requete = "DELETE FROM listes(`id`, `nom`) WHERE `nom`= $nomListe ";
      $resultat  = mysqli_query($connexion, $requete);
      header('Location: simpllo.php');
      exit();
    } else {
      echo 'Erreur BBD';
    }
?>
