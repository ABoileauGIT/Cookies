<?php //declare (strict_types=1);?> <!-- Je recois plusieurs erreurs php dans mon browser lorsque 
j'essaie d'inclure strict_types=1 . J'ai corrigé à plusieurs reprises, mais je recois une nouvelle
erreur chaque fois que j'en corrige une en spécifiant le type, function, ect. -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Alexandre Boileau -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Cookie</title>
</head>

<body>
    <?php
    $nbVisites = 0;
    $expiration = Time() + 5;  // 5 secondes

    if (!isset($_COOKIE['compteurVisites'])) {
        $nbVisites = 1;
    } else {
        $nbVisites = $_COOKIE['compteurVisites'] + 1;
    }
     setcookie('compteurVisites', $nbVisites, $expiration);
    echo '<h1>La page a été visité ' . $nbVisites . ' fois.</h1>';
    ?>
</body>

</html>