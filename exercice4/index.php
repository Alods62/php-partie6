<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 6</title>

</head>

<body>
    
    <h1>Exercice 4</h1>
    
    <?php  
    // index.php?language=PHP&server=WAMP
    
    // isset() pour vérifier si un paramètre est bien présent
    if( isset($_GET['language']) AND isset($_GET['server']))
    {
        echo 'Le language est le ' . $_GET['language'] . ', le serveur est ' . $_GET['server'];
    }
    else 
    {
        echo 'Il manque des informations dans l\'URL';
    }
    
    ?>
    
</body>
</html>