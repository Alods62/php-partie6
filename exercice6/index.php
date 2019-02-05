<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 6</title>

</head>

<body>
    
    <h1>Exercice 6</h1>
    
    <?php  
    // index.php?building=12&room=101
    
    // isset() pour vérifier si un paramètre est bien présent
    if( isset($_GET['building']) AND isset($_GET['room']))
    {
        echo 'Le numéro de l\'étage est : ' . $_GET['building'] . ' , le numéro de la chambre est :' . $_GET['room'];
    }
    else 
    {
        echo 'Il manque des informations dans l\'URL';
    }
    
    ?>
    
</body>
</html>