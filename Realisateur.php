<?php

class Realisateur extends personne{
    private array $films=[];         

    public function __construct (string $nom ,string $prenom, string $sexe, string $naissance){
        parent::__construct($nom, $prenom, $sexe, $naissance);

    }   


    public function ajouterFilm(film $film){  
        $this->films[]=$film;
    }


    public function getFilmographie(){
        echo "Les films de " .$this->getPrenom(). " " .$this->getNom(). ":";
        foreach ($this->films as $film){
            echo $film."  , ";
        }
        echo "<br>";
    }



}    
?>