<?php
$bdd = new PDO('mysql:host=192.168.65.223;dbname=bddconnexion', 'userweb', 'userweb');

if(isset($_POST['forminscription'])) {
   $pseudo = ($_POST['pseudo']);
   $mdp = ($_POST['mdp']);

   if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) {
               
                  if($mdp=$mdp) {
                     $insertmbr = $bdd->prepare("INSERT INTO utilisateur(nom_utilisateur, mot_de_passe) VALUES(?, ?)");
                     $insertmbr->execute(array($pseudo,$mdp));
                     $erreur = "Votre compte a bien été créé ! <a href=\"index.php\">Me connecter</a>";
                  } 
                   else {
                        $erreur = "Tous les champs doivent être complétés !";
                   }
      }
   }
}
?>

<html>
   <head>
      <title>Page d'Inscription</title>
      <meta charset="utf-8">
      <link href="style.css" rel="stylesheet" media="all" type="text/css"> 
   </head>
   <body>
   <div id="container">
      <div align="center">
         <h1>Inscription</h1>
         <br/>
         <form method="POST" action="">
            <table>
               <tr>
                  <td align="right">
                     <label for="pseudo">Pseudo :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp">Mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                  </td>
               </tr>
               <tr>
                  <td></td>
                  <td align="center">
                     <br />
                     <input type="submit" name="forminscription" value="Je m'inscris" />
                  </td>
               </tr>
            </table>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
      
   </div>
   </body>
</html>
