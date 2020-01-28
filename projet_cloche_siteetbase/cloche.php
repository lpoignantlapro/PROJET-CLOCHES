<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Accueil du site Cloche</title>
    <!-- css-->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- contenu du site-->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <a class="navbar-brand" href="accueil.php">ACCUEIL</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="cloche.php">Faire sonner une cloche</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="melodie.php">Mélodies</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Déconnexion</button>
                </form>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <div class="row">
            <form action="" method="POST"> 
                <input type="submit" class="btn btn-danger ml-auto mr-auto" name="cloche1" >Cloche 1</form>
            </form>
                
        
            
        </div>
        <?php
        if(isset($_POST['cloche1'])){
            $adress = '192.168.64.83';
            $port = 4318;
            $msg="1";
            // création du socket
            echo "Création du socket...";
            $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
             if($socket == false)
             {
                 echo "socket_create() a échoué :". socket_strerror(socket_last_error()). "<br>";
             }
             else
            {
             echo "OK.<br>";
             }
            echo "Essai de connexion à '$adress' sur le port '$port'...";
            $result = socket_connect($socket, $adress, $port);// IP du PC avec lequel on communique,
            echo "connection envoyé";
            if($socket === false)
             {
                echo "socket_connect() a échoué : ($result) " .socket_strerror(
                socket_last_error($socket)). "<br>";
            }
             else
             {
                 echo "OK.<br>";
             }

           echo "Lire la réponse : \n\n";
            //$out = socket_read($socket,200,PHP_BINARY_READ);
            
            socket_send($socket, $msg, 1, MSG_DONTROUTE);
            
            echo 'fin send<br>';

                echo "Fermeture du socket...";
            socket_close($socket);
        }
        ?>

        <?php
          
            // echo "OK.<br>";
        ?>

</body>
</html>