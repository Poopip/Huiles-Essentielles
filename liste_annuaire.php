<?php

    //  ########## CONNEXION A LA BDD ##########

        $serveur ='localhost';
        $login = "root";
        $pass = "";

        
        $connexion = new PDO("mysql:host=$serveur;dbname=he;charset=utf8",$login,$pass);
        $connexion->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ########## FIN DE CONNEXION A LA BDD ##########


    // ########## RECUPERATION DES DONNEES DE LA BDD EN FONCTION DE LA LETTRE INITIALE DEMANDEE ##########

            // Je récupère la liste en fonction d'une initiale déterminée

            // $lettre_select = récupérer la lettre qui a été cliqué

        // Préparation de la requête
        $listeAnnuaire_he = ' SELECT * 
            FROM liste_he
            WHERE nom like \'t%\' '; // il faudra rendre l'initiale des noms recherchés dynamiques avec une concatenation ou une requete préparée
        
        $resultatRequete = $connexion->prepare($listeAnnuaire_he);


            // Une fois les données récupérées dans une variable de type array on les stocks pour pouvoir les insérer dans un tableau html
            // Concevoir le tableau HTML et le remplir avec les données de l'array probablement avec ue boucle
            // Une fois les tableau crée et rrempli on "l'envoi" par la biais d'un include sur la page index
        

        // Execution de la requête
        $executeIsOk = $resultatRequete->execute();

        // Récupération des résultats

        $listeExtraite = $resultatRequete->fetchAll();

    // ########## FIN DE RECUPERATION DES DONNEES DE LA BDD EN FONCTION DE LA LETTRE INITIALE DEMANDEE ##########

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
    
    <h1>Liste des huiles essentielles extraites selon l'initiale "X"</h1>

    <ul>
        <?php foreach ($listeExtraite as $extrait): ?> <!-- Essayer de retranscrire la boucle foreach avec une écrire plus classique -->
            <li>
                <?= $extrait['nom'] ?> - <?= $extrait['nom_latin'] ?>
                <a href="supprimer.php?numExtrait=<?= $extrait['id'] ?>">Supprimer</a>
                <a href="modifier.php?numExtrait=<?= $extrait['id'] ?>">Modifier</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <li><a href="index.php">Retour à l'accueil</a></li>
        <li><a href="formulaire.php">Retour au formulaire</a></li>
        <li><a href="liste_annuaire.php">Retour à la liste</a></li>
    </ul>


</body>
</html>