
<?php

    //On essaie de se connecter
    try{
        $conn = new PDO('mysql:host=127.0.0.1;dbname=workshopgr1','gr1','root');
        //On définit le mode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion réussie';
    }

    /*On capture les exceptions si une exception est lancée et on affiche
        *les informations relatives à celle-ci*/
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }

?>