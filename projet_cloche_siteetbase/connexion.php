<html>
    <head>
		<meta charset="UTF-8">
        <?php include 'verification.php'; ?>
		<title>Page de connexion</title>

	</head>
	
	<body>
    
		<div class="login">
		<div align="center">
			<h1>Projet geolocalisation</h1>
			<form method="POST" action="connexion.php">
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