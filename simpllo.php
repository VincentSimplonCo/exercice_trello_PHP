<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Simpllo</title>
    <style type="text/css">

    *{
      text-align: center;
    }

    .nomListe{
      width: 100px;
    }

    #mere{
      width: 100%;
      height: 90vh;
      background-color: green;
      display: flex;
      flex-direction: row;
    }

    #ajoutTache{
      text-decoration: none;
      color: red;
    }

    .retraitTache{
      height: 30px;
      width: 7%;
    }

    .tache{
      margin: 20px;
      width: 10%;
      height: 30%;
      background-color: white;
    }
    #nomTache{
      height: 30px;
    }

    #containeurAjoutTache{
      display: flex;
      flex-direction: column;
    }

    </style>
  </head>
  <body>

    <div id="mere">


      <div id=containeurAjoutTache>

      <button id='ajoutTache' onclick="ajouterTache()">Ajouter une tâche</button>
      <input id="nomTache" type="text" name="nomTache" placeholder="Nom de Tâche"></input>

      </div>

<!-- ___________________PHP APPARITION TACHE__________________ -->
      <?php
      if( $connexion = mysqli_connect('localhost', 'root', 'Peace586586', 'simpllo') ){
          $requete = "SELECT * FROM taches";

          $reponses  = mysqli_query($connexion, $requete);

          while( $taches = mysqli_fetch_assoc($reponses) ){
            echo "<form action='simpllo_ajoutListe.php' class='tache' method='post' >".$taches["nom"]."
                  <button id='".$taches['id']."'class ='retraitTache' onclick='retraitTache(id)'>X</button>
                  <br>
                  <input class='nomListe' type='text' name='nomListe'/>
                  <input class='valideListe' onclick='rafraichirPage()' type='submit' value='Créer Liste'/>";
                  if( $connexionListe = mysqli_connect('localhost', 'root', 'Peace586586', 'simpllo') ){
                      $requeteListes = "SELECT * FROM listes";

                      $reponsesListes  = mysqli_query($connexionListe, $requeteListes);

                      while( $listes = mysqli_fetch_assoc($reponsesListes) ){
                        echo "<form action='simpllo_retraitListe.php' method='post'>
                              <p>".$listes['nom']."</p>
                              <input onclick='rafraichirPage()' type='submit' value='Suppr Liste' name='idListe' />
                              </form> ";
                      }
                    };

                  "</form>";
        }
          mysqli_free_result($reponses);
      }  else {
          echo "erreur BDD !";
      };


      ?>

    </div>

    <script>

    var nomTache = document.getElementById("nomTache");
    var requete = new XMLHttpRequest();

// _________________________AJAX AJOUT TACHE_____________________
    function ajouterTache() {
      nomTache = nomTache.value;
      console.log("ajout nomTache : " + nomTache);
      requete.open("GET", "simpllo_ajoutCarte.php?nomTache=" + nomTache , true);
      requete.send();
      requete.onload = rafraichirPage;
    }

// _______________________AJAX RETRAIT TACHE___________________

  function retraitTache(id){
    console.log("retrait idTache : " + id);
    requete.open("GET", "simpllo_retraitCarte.php?idTache=" + id , true);
    requete.send();
    requete.onload = rafraichirPage;
  }

// ________________________RAFRAICHIR PAGE______________________
    function rafraichirPage(){
      window.location.reload();
      // document.getElementById("nomTache").value = "";
    }

    </script>

  </body>
</html>
