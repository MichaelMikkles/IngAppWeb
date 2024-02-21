<?php
declare(strict_types= 1);
class Auteur{
        //Attributs
        private String $nom;
        private String $prenom;
        private String $anneeNaissance;
        private String $login;
        //Constructor
        function __construct(String $nom, String $prenom, String $anneeNaissance, String $login){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->anneeNaissance = $anneeNaissance;
            $this->login = $login;
        }
    }