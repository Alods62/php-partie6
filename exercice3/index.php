<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 6</title>

</head>

<body>
    
    <h1>Exercice 3</h1>
    
    <?php  
    // index.php?startDate=2/05/2016&endDate=27/11/2016
    
    // isset() pour vérifier si un paramètre est bien présent
    if( isset($_GET['startDate']) AND isset($_GET['endDate']))
    {
        echo 'Le départ a eu lieu le ' . $_GET['startDate'] . ' et a fini le ' . $_GET['endDate'];
    }
    else 
    {
        echo 'Il manque des dates dans l\'URL';
    }
    
    ?>
    
</body>
</html>