<?php
declare(strict_types= 1);
class Citation{
    //Attributs
    private String $cite;
    private Auteur $auteur;
    private String $date;
    //Constructor
    function __construct(String $cite, Auteur $auteur, String $date){
        $this->cite = $cite;
        $this->auteur = $auteur;
        $this->date = $date;
    }
}