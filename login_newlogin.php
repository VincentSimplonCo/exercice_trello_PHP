<?php
if ( isset( $_POST[ 'identifiant' ] ) && isset( $_POST[ 'mot_passe' ] ) ) {
  $identifiant = $_POST[ 'identifiant' ];
  $pass = $_POST[ 'mot_passe' ];
  if( $connexion = mysqli_connect('localhost', 'root', 'Peace586586', 'simpllo')){
    $requete = "INSERT INTO utilisateurs(`id`, `login`, `password`) VALUES (NULL, '$identifiant', '$pass')";
    $resultat  = mysqli_query($connexion, $requete);
    header('Location: simpllo.php');
    exit();
  } else if ($pass == NULL  && $identifiant == NULL){
    echo "erreur connexion! Champ vide";
  } else {
    echo "erreur BBD";
      }
}
// else if ( isset( $_POST[ 'identifiant'] == NULL ) && isset( $_POST[ 'mot_passe'] == NULL) ) {
//   echo 'formulaire incomplet';
//   header('Location: login_index.php');
// }
?>
