<?php
include 'main.php';
list($auteurs,$citations) = main();
foreach ($auteurs as $auteur) {
    echo "<h3> {$auteur->getNom()} {$auteur->getPrenom()}</h3>";
    foreach ($citations as $citation) {
        if ($citation->getAuteur() == $auteur) {
            echo "{$citation->getCite()} <br>";
        }
    }
}