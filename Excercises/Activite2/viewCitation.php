<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $login = $_POST["login"];
    $citation = $_POST["citation"];
    $auteur = $_POST["auteur"];
    $date = $_POST["date"];

    echo "<p>Login: $login</p>";
    echo "<p>Citation: $citation </p>";
    echo "<p>Auteur: $auteur </p>";
    echo "<p>date: $date </p>";
}
else{
    echo "<p>Pas des donnees a aficher</p>";
}