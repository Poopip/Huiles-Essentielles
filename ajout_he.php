<?php

    //  ########## CONNEXION A LA BDD ##########

        $serveur ='localhost';
        $login = "root";
        $pass = "";

        
        $connexion = new PDO("mysql:host=$serveur;dbname=he;charset=utf8",$login,$pass);
        $connexion->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ########## FIN DE CONNEXION A LA BDD ##########


    // Préparation de la requête d'insertion

        $insert = $connexion->prepare('INSERT INTO liste_he VALUES (NULL, :nom, :nom_latin)');


    // On lie chaque marqueur à une valeur

        $insert->bindValue(':nom', $_POST['nomCourant'], PDO::PARAM_STR);

        $insert->bindValue(':nom_latin', $_POST['nomLatin'], PDO::PARAM_STR);

    // Execution de la requête préparée

        $insertIsOk = $insert->execute();

        if ($insertIsOk) {
            $message = 'La nouvelle huile essentielle a bien été ajoutée';
        }
        else {
            $message = 'Echec de l\'insertion';
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
    <h1>Insertion des huiles</h1>
    
    <p><?php echo $message ?></p>

    <ul>
        <li><a href="index.php">Retour à l'accueil</a></li>
        <li><a href="formulaire.php">Retour au formulaire</a></li>
        <li><a href="liste_annuaire.php">Retour à la liste</a></li>
    </ul>

</body>
</html>