<!doctype html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Identification</title>
	<link rel="stylesheet" href="../base.css"/>
    <style>

				body{
					margin: 0;
					padding: 0;
					background-color: green;
				}

        #login-box{
            position: relative;
            top:40px;
            width: 300px;
            margin-left: 35%;
            text-align: center;
            display: flex;
            flex-flow: row;
        }
    </style>
</head>
<body>


<div id="login-box">
<?php
    if( isset($_GET['login_error'])){
        error_log('login_error');
        echo "<div class='error'>Erreur d'identification</div>";
    }
?>
	<form action="login_existinglogin.php" method="post">
		<div>
			<label for="chpIdentifiant">Identifiant</label>
			<input id="chpIdentifiant" type="text" name="identifiant_lol"/>
		</div>
		<div>
			<label for="chpPass">Mot de passe</label>
			<input id="chpPass" type="password" name="mot_passe_lol"/>
		</div>
		<input onclick="clearInput()" type="submit" value="Se connecter"></input>

	</form>

  <form action="login_newlogin.php" method="post">
		<div>
			<label for="chpIdentifiant">Identifiant</label>
			<input id="chpIdentifiant" type="text" name="identifiant"/>
		</div>
		<div>
			<label for="chpPass">Mot de passe</label>
			<input id="chpPass" type="password" name="mot_passe"/>
		</div>
    <input onclick="clearInput()" type="submit" value="Créer un compte"></input>



</div>

<script type= text/javascript>

function clearInput(){
	document.getElementById('chpIdentifiant').value = "";
	document.getElementById('chpPass').value = "";
}
</script>

</body>
</html>
