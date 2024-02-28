<?php

    function main(){
        require_once 'Entity/Auteur.php';
        require_once 'Entity/Citation.php';
        include ('Entity/System.php');
        $system = new System();

        $auteur1 = new Auteur("Mor","Mike","12/01/2001", "hi");
        $auteur2 = new Auteur("Ji","Yu","02/11/2101", "be");

        $citation1=new Citation("Ore wa mou ",$auteur1,"12/12/2010");
        $citation2=new Citation("Ou est ton papa ",$auteur1,"12/12/2010");
        $citation3=new Citation("are ",$auteur2,"2/1/2050");

        $system->addAuteur($auteur1);
        $system->addAuteur($auteur2);
        $system->addCitation($citation1);
        $system->addCitation($citation2);
        $system->addCitation($citation3);
        //return array($auteurs,$citations);
    }
    