<?php
//require_once "film.php";

class Film_genre {
    private Film $film;
    private Genre $genre;


    public function __construct(Film $film, Genre $genre) {
        $this->film = $film;
        $this->genre = $genre;
        $genre->ajouterFilmGenre($this);
        $film->ajouterFilmGenre($this);
    }

    public function getGenre()
    {
        return $this->genre;
    }
    public function getFilm()
    {
        return $this->film;
    }

}

?>