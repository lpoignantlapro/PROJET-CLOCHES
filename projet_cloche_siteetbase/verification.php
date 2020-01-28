<?php 
    function Autorisation($login,$pass) //Méthode qui vérifie si l'utilisateur peut se connecter
    {
        try
        {
            $db = new PDO('mysql:host=192.168.65.223;dbname=projet_cloche;charset=utf8','userweb','userweb');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
            
        if (isset($login) AND isset($pass))
        {
    
            $verif = $db->prepare('SELECT COUNT(*) FROM utilisateur WHERE mot_de_passe = :password AND nom_utilisateur = :pseudo'); // Je compte le nombre d'entrée ayant pour mot de passe et login ceux rentrés
            $verif->bindValue(':password', $pass, PDO::PARAM_STR);
            $verif->bindValue(':pseudo', $login, PDO::PARAM_STR);
            $verif->execute();
            $donnees = $verif->fetchColumn();
            $verif->closeCursor();
                
            if($donnees == 1) // On a trouvé un membre avec ce couple mdp, login 
            { 
                session_start();
                $_SESSION['login'] = $login;
                $_SESSION['mdp'] = $mdp;
                header('Location:acceuil.php');        
            }

            else 
            { // Personne n'existe dans la table avec ce couple mdp, login
                echo "<script type='text/javascript'>";
                echo "alert('Login ou mot de passe invalide, Veuillez ressayer.')";  
                echo "</script>";  
            }
        }
    } 

    function Affichage_trame()
    {
        try
        {
            $db= new PDO('mysql:host=192.168.65.223;dbname=projet_cloche;charset=utf8','userweb','userweb');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        
        $affichage = $db->query('SELECT trame_complete FROM trame_gps ORDER BY date_trame DESC ');
        $tab = $affichage->fetch();
        echo $tab[0];
    }


    function Affichage_Heuretrame()
    {
        try
        {
            $db= new PDO('mysql:host=192.168.65.223;dbname=projet_cloche;charset=utf8','userweb','userweb');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        
        $affichage = $db->query('SELECT date_trame FROM trame_gps ORDER BY date_trame DESC ');
        $tab = $affichage->fetch();
        echo $tab[0];
    }

    function AffichageLatitude()
    {
        try
        {
            $db= new PDO('mysql:host=192.168.65.223;dbname=projet_cloche;charset=utf8','userweb','userweb');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        
        $affichage = $db->query('SELECT LATITUDE FROM trame_gps ORDER BY date_trame DESC ');
        $tab = $affichage->fetch();
        echo $tab[0];

 
    }

    function AffichageLongitude()
    {
        try
        {
            $db= new PDO('mysql:host=192.168.65.223;dbname=projet_cloche;charset=utf8','userweb','userweb');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        
        $affichage = $db->query('SELECT LONGITUDE FROM trame_gps ORDER BY date_trame DESC ');
        $tab = $affichage->fetch();
        echo $tab[0];

 
    }

    function AffichageUtilisateur()
    { 
        try
        {
            $db= new PDO('mysql:host=192.168.65.223;dbname=projet_cloche;charset=utf8','userweb','userweb');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        $user = $db->query("SELECT * FROM utilisateur"); 

        ?>
        <div>
        <table>
        <tr>
            <th><center>Nom d'utilisateur</center></th>
            <th><center>Mot de passe</center></th>
        </tr>
        <?php
        while ($donnee = $user->fetch())
        {
            echo '<tr>';
            echo "<td> ".$donnee['nom_utilisateur']."</td> ";
            echo "<td> ".$donnee['mot_de_passe']."</td> ";
            echo '</tr>';
        }
        ?>
        </table>
        </div>

        <?php
    }
        ?>


