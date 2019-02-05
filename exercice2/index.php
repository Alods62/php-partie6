<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 6</title>

</head>

<body>
    
    <h1>Exercice 2</h1>
    
    <?php  
    // index.php?lastname=Nemare&firstname=Jean
    
    // fonction isset($_GET['variable']) pour vérifier si un paramètre est bien présent dans l'url
    // $_GET tableau associatif qui transite les paramètres de l'URL (superglobale)
    if( isset($_GET['age']))
    {
        echo 'Vous avez ' . $_GET['age'];
    }
    else 
    {
        echo 'Il manque l\'âge dans l\'URL';
    }
    
    ?>
    
</body>
</html>