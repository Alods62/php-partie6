<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 6</title>

</head>

<body>
    
    <h1>Exercice 1</h1>
    
    <!-- 

    index.php?lastname=Nemare&firstname=Jean 
    & en code on écrit &amp;
    à la fin de l'url on sépare par un ? et on ajoute 'variable=valeur' et '&' si on veut en ajouter d'autres
    $_GET['value'] pour récupérer une variable stocker dans l'url -->
    <?php
    
    if(isset($_GET['firstname']) && isset($_GET['lastname']))
    {
    ?>
        <p>Bonjour <?php echo $_GET['firstname'] . ' ' . $_GET['lastname']; ?> </p>
    <?php
    }
    ?>
    
</body>
</html>