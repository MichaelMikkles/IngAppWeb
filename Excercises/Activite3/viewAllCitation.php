<?php
require_once 'Entity/Auteur.php';
require_once 'Entity/Citation.php';

foreach ($auteurs as $auteur) {
    echo "<h3 {$auteur->getNom()} {$auteur->getPrenom()}";
    foreach ($citations as $citation) {
        if ($citation->getAuteur() == $auteur) {
            echo "{$citation->getCite()}";
        }
    }
}