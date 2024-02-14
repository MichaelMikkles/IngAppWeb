<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
        content="width=device-width">
        <title>Réception de paramètres dans l'URL</title>
    </head>
    <body>
        <a href="factorielSuite.php?number=3">Dis-moi le factoriel !</a>
        <p>     
            <?php
            if (isset($_GET['number']) && $_GET['number'] > 0){
                $number = $_GET['number'];
                echo 'Le factoriel ' . $_GET['number'] . ' est: ';
                $cero = 0;
                while ($cero <= $number){
                    echo calculerFactoriel($cero) . ' ';
                    $cero++;
                }
            }
                
            else
                echo 'Il faut renseigner un numero plus grand que cero!';
            function calculerFactoriel($number){

                if (($number == 0) or ($number == 1)){
                    return 1;
                } else{
                    return ($number * calculerFactoriel($number - 1));
                }
            }
            ?> 
        </p>
    </body>
</html>