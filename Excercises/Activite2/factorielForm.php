<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
        content="width=device-width">
        <title>Réception de paramètres dans l'URL</title>
    </head>
    <body>
        <form method="post" action=""> 
            <input type="number" name="number" required>
            <button type="submit"> Calculer </button>
        </form>
        <p>
            <?php
            if (isset($_POST['number'])){
                echo 'Le factoriel ' . $_POST['number'] . ' est: ';
                echo calculerFactoriel($_POST['number']);
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