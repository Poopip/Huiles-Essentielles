<!DOCTYPE html >
<html > 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Annuaire Huiles Essentielles</title>
<meta name="Robots" content="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='css/progression.css' rel='stylesheet' type='text/css'>
<link href='css/style.css' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/tabulous.js"></script>
<script type="text/javascript" src="js/js.js"></script>
</head>

<body>
  
  	<!-- ########## MENU DE NAVIGATION ########## -->
        <div>
  		    <?php include ('navigation.php'); ?>
  	    </div>
    <!-- ########## FIN MENU DE NAVIGATION ########## -->
    
    <!-- ########## FORMULAIRE ########## -->

	<h1> Ajout d'une huile essentielle </h1>

    <form action="ajout_he.php" method="post">

    <p>
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nomCourant">
    </p>
    <p>
        <label for="nom_latin">Nom Latin</label>
        <input type="text" id="nom_latin" name="nomLatin">
    </p>

    <p><input type="submit" value="Enregistrer"></p>





</body>
</html>