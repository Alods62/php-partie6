<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 6</title>

</head>

<body>
    
    <h1>Exercice 5</h1>
    
    <?php  
    // index.php?week=12
    
    // isset() pour vérifier si un paramètre est bien présent
    if( isset($_GET['week']))
    {
        echo 'Le numéro de la semaine est : ' . $_GET['week'];
    }
    else 
    {
        echo 'Il manque des informations dans l\'URL';
    }
    
    ?>
    
</body>
</html>