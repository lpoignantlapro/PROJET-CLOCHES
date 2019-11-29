<html>
    <head>
		<meta charset="UTF-8">
        <link rel="stylesheet" href="style.css" />
        <?php include 'fonction.php'; ?>
		<title>Page de connexion</title>
		
		<link href="style.css" rel="stylesheet" media="all" type="text/css"> 
	</head>
	
	<body>
    
		<div class="login">
		<div align="center">
			<h1>Projet geolocalisation</h1>
			<form method="POST" action="index.php">
				<form method="POST" action="accueil.php">				
					<input type="text" name="login" id="login" placeholder="login" required/> <br><br>
					<input type="password" name="mdp" id="mdp" placeholder="mot de passe" required/>
					<p class="submit"><input type="submit" name="connexion" value="Connexion"></p>
					<div class="LienInscriptionForm">
					<p>Vous n'avez pas encore de compte ? <a href="inscription.php">INSCRIVEZ VOUS </a></p>
				</form>
			</form>
		</div>

		<?php
			if(isset($_POST['connexion']))
			{
				$login=$_POST['login'];
				$pass=$_POST['mdp'];
				
				Autorisation($login,$pass);
			} 
		?>

		
	</div>
		
    </body>
</html>