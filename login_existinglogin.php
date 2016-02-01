<?php
if ( isset( $_POST[ 'identifiant_lol' ] ) && isset( $_POST[ 'mot_passe_lol' ] ) ) {
  $identifiant = $_POST[ 'identifiant_lol' ];
  $pass = $_POST[ 'mot_passe_lol' ];
  if( $connexion = mysqli_connect('localhost', 'root', 'Peace586586', 'simpllo')) {
      $requete = "SELECT * FROM utilisateurs WHERE `login` = '$identifiant' AND `password` = '$pass'";
      $reponses  = mysqli_query($connexion, $requete);
      echo $pass;
      while( $identifiant = mysqli_fetch_assoc($reponses) ){
          echo "<div>".$identifiant["login"]."-".$identifiant["password"]."</div>";
          header('Location: simpllo.php');
      }
      mysqli_free_result($reponses);
    } else {
      echo "identifiant invalide";
    }
}
//  else if ( isset( $_POST[ 'identifiant' ] ) == NULL && isset( $_POST[ 'mot_passe' ]) == NULL ) {
//   header('Location: login_index.php');
// }
?>
