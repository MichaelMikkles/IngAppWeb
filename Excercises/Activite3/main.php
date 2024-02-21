<?php

    function main(){
        require_once 'Entity/Auteur.php';
        require_once 'Entity/Citation.php';

        $auteur1 = new Auteur("Mor","Mike","12/01/2001", "hi");
        $auteur2 = new Auteur("Ji","Yu","02/11/2101", "be");

        $citation1=new Citation("Holizi",$auteur1,"12/12/2010");
        $citation2=new Citation("kekeee",$auteur1,"12/12/2010");
        $citation3=new Citation("are",$auteur2,"2/1/2050");

        $auteurs = array($auteur1,$auteur2);
        $citations = array($citation1,$citation2,$citation3);
        return $citations;
    }
    