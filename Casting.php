<?php
class Casting{
      private Acteur $acteur;
      private Role $role;
      private Film $film;
      

      public function __construct(Film $film,Role $role,Acteur $acteur){
            $this->film=$film;
            $this->acteur=$acteur;
            $this->role=$role;
            $film->ajouterCasting($this);
            $acteur->ajouterCasting($this);
            $role->ajouterCasting($this);
      }


      public function getActeur(){
            return $this->acteur;
      }
      public function getFilm(){
            return $this->film;
      }
      public function getRole(){
            return $this->role;
      }

    

}
?>