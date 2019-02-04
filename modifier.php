<?php 

    //  ########## CONNEXION A LA BDD ##########

        $serveur ='localhost';
        $login = "root";
        $pass = "";


        $connexion = new PDO("mysql:host=$serveur;dbname=he;charset=utf8",$login,$pass);
        $connexion->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ########## FIN DE CONNEXION A LA BDD ##########







?>