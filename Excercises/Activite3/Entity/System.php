<?php
declare(strict_types= 1);
include "Auteur.php";
class System{
    //Control de ne pas repetir des citations non plus auteurs
    //Control de dates 
    //(Cite cant be created before birth of author)
    //(Cite nor author can have a date older than today)
    private array $auteur;
    private array $citation;

    //Only adds author into the list in case its not yet included
    public function addAuteur(Auteur $auteur){
        foreach($this->auteur as $autor){
            if ($auteur == $autor){
                return;
            }
        }
        $this->auteur[] = $auteur;
    }

    public function getAuteur(){
        return $this->auteur;
    }

    public function addCitation(Citation $citation){
        foreach($this->citation as $cite){
            if ($citation == $cite){
                return;
            }
        }
        $this->citation[] = $citation;
    }

    public function getCitation(Citation $citation){
        return $this->citation;
    }
}