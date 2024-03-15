<?php
//require "genre.php";

class Film {
    private string $titre;
    private DateTime $dateSortie;
    private int $duree;
    private array $castings = [];
    private array $filmGenres =[];
    private Realisateur $realisateur;
    


    public function __construct(string $titre, string $dateSortie, int $duree, Realisateur $realisateur) {
        $this->titre = $titre;
        $this->dateSortie = new DateTime( $dateSortie);
        $this->duree = $duree;
        $this->realisateur = $realisateur;
        $realisateur->ajouterFilm($this);

    }

    


    public function getTitre(){
        return $this->titre;
    }
    public function getDateSortie(){
        return $this->dateSortie;
    }

    public function getDuree(){
        return $this->duree;
    }

    public function getCastings(){
        echo "<br> Dans le film " .$this. " ,";
        foreach($this->castings as $castings){
            echo $castings->getActeur() ." a jouer le role de".$castings->getRole()." ,  ";
        }
    }


    public function getGenre(){
        echo "<br>Le film  ".$this . " appartient au genre ";
        foreach ($this->filmGenres as $filmGenre){
            echo $filmGenre->getGenre()." , " ;
        } 
    }   
    ////////////////////////////////////////////////////////////////////////////
   

    public function ajouterCasting(Casting $casting){
        $this->castings[] = $casting;
    }
    
    public function ajouterFilmGenre(Film_genre $genre){
        $this->filmGenres[] = $genre;
    }

    

    public function __tostring(){
        return $this->titre;
    }



}


?>