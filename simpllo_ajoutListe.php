<?php
  if (isset( $_POST['nomListe'])){
    $nomListe = $_POST['nomListe'];
    if ($connexion = mysqli_connect('localhost', 'root', 'Peace586586', 'simpllo')){
      $requete = "INSERT INTO listes(`id`, `nom`) VALUES (NULL, '$nomListe')";
      $resultat  = mysqli_query($connexion, $requete);
      header('Location: simpllo.php');
      exit();
    } else {
      echo 'Erreur BBD';
    }
  }
?>
