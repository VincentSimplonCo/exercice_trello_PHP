<?php
// ________________________AJOUT TACHE__________________________
$nomTache = $_GET['nomTache'];

function ajoutCarte(){
    global $nomTache;
    if ($connexion = mysqli_connect('localhost', 'root', 'Peace586586', 'simpllo') ){
      $ajouterTache = "INSERT INTO taches (`id`, `nom`) VALUES (NULL, '$nomTache')";
    }
    if ($resultat = mysqli_query($connexion, $ajouterTache)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $ajouterTache . "<br>" . mysqli_error($connexion);
    }
 }

ajoutCarte();

 ?>
