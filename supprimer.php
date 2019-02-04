<?php

    //  ########## CONNEXION A LA BDD ##########

        $serveur ='localhost';
        $login = "root";
        $pass = "";

        
        $connexion = new PDO("mysql:host=$serveur;dbname=he;charset=utf8",$login,$pass);
        $connexion->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ########## FIN DE CONNEXION A LA BDD ##########

    // ########## REQUETE DE SUPPRESSION DANS LA BDD ##########

        // Préparation de la requête
        $supp_extrait = ' DELETE 
        FROM liste_he
        WHERE id=:num LIMIT 1';

        $supprimer = $connexion->prepare($supp_extrait);

        // Liaison du paramètre nommé
        $supprimer->bindValue(':num', $_GET['numExtrait'], PDO::PARAM_INT);

        // Execution de la requete préparée
        $supprimerIsOk = $supprimer->execute();

        if ($supprimerIsOk) {
            $message = 'La nouvelle huile essentielle a bien été supprimée';
        }
        else {
            $message = 'Echec de la suppression';
        }

    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Suppression des huiles</h1>
    
    <p><?php echo $message ?></p>

    <ul>
        <li><a href="index.php">Retour à l'accueil</a></li>
        <li><a href="formulaire.php">Retour au formulaire</a></li>
        <li><a href="liste_annuaire.php">Retour à la liste</a></li>
    </ul>

</body>
</html>