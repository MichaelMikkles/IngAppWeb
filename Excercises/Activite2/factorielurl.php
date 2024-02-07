<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
        content="width=device-width">
        <title>Réception de paramètres
        dans l'URL</title>
    </head>
    <body>
    <a href="factorielurl.php?number=3">Dis-moi le factoriel !</a>
        <p>
            <?php
            if (isset($_GET['number']) && $_GET['number'] > 0)
            echo 'Le factoriel ' .
            $_GET['number'] . ' est: ';
            else
            echo 'Il faut renseigner un numero plus grand que cero!';
            ?> 
        </p>
    </body>
</html>