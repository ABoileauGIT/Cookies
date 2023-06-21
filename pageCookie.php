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
    $nomCookie = 'cookieVisite';
    $nbVisites = 0;
    $expiration = Time() + 5;  // 5 secondes

    if (!isset($_COOKIE[$nomCookie])) {
        $nbVisites = 1;
    } else {
        $nbVisites = $_COOKIE[$nomCookie] + 1;
    }
    setcookie($nomCookie, $nbVisites, $expiration);
    echo '<h1>La page a été visité ' . $nbVisites . ' fois.</h1>';
    ?>
</body>

</html>