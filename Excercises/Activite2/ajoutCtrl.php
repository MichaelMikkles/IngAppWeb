<!DOCTYPE html >
<html lang="fr">
<head>
    <title>ajout de citation </title>
    <meta charset="UTF-8">
</head>
<body>
    <main>
        <article>
        <header><h1>Formaire de création de citations</h1></header>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $login = $_POST["login"];
            $citation = $_POST["citation"];
            $auteur = $_POST["auteur"];
            $date = $_POST["date"];
            if (empty($login) || empty($auteur)){
                $error_message = "Les champs login nor Auteur ne peuvent pas etre vides";
            }else{
                echo "<p>Login: $login</p>";
                echo "<p>Citation: $citation </p>";
                echo "<p>Auteur: $auteur </p>";
                echo "<p>date: $date </p>";                
            }
        }
        else{
        }
        ?>
        <form method="post" name="FrameCitation" action="">
            <table border="1" bgcolor="#ccccff" frame="above">
                <tbody>
                <tr>
                    <th><label for="login">Login</label></th>
                    <td><input name="login" maxlength="64" size="32"></td>
                </tr>
                <tr>
                    <th><label for="citation">Citation</label></th>
                    <td><textarea cols="128" rows="5" name="citation"></textarea></td>
                </tr>
                <tr>
                    <th><label for="auteur">Auteur</label></th>
                    <td><input name="auteur" maxlength="128" size="64"></td>
                </tr>
                <tr>
                    <th><label for="date">Date</label></th>
                    <td><input name="date" maxlength="10" size="10" value="<?php echo date('d-m-Y'); ?>"></td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input name="Envoyer" value="Enregistrer la citation" type="submit">
                        <input name="Effacer" value="Annuler" type="reset">
                        <p style="color: crimson;"><?php echo $error_message; ?></p>                        
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
        </article>
    </main>
</body>
</html>