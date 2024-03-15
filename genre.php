<?php


class Genre{

        private string $genre;
        private array $filmGenres =[];


        public function __construct(string $genre) {
            $this->genre = $genre;

        }

        public function getFilm(){
            echo "Les film du genres ".$this ." :";
            foreach($this->filmGenres as $film)
            echo " ".$film->getFilm(). " ,";
        }

        public function getGenre(){
            return $this->genre;
        }

        public function ajouterFilmGenre(Film_genre $genre){
            $this->filmGenres[] = $genre;
        }

    
       public function __tostring() {
            return $this->genre;
       }

    }

?>