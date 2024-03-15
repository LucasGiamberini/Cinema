<?php
class Acteur extends personne{
    
       private array $castings=[];  
        

        public function __construct(string $nom ,string $prenom, string $sexe, string $naissance){
            parent::__construct($nom, $prenom, $sexe, $naissance);
           
        }

        public function getInfos(){
            parent::getInfos();
        }


        public function ajouterCasting(Casting $casting){
            $this->castings[] = $casting;
        }

        public function getFilmoGraphie(){
            echo $this. "  a jouer dans le(s) film(s):";
            foreach ($this->castings as $casting) {
                echo $casting->getFilm() . "<br>";
            }}
        
        public function getRole(){
            echo "<br>".$this. " a jouer le role de";
            foreach ($this->castings as $casting) {
                echo $casting->getRole() ." , ";
                }
            }

        // parcourir le tableau de casting pour avoir les roles jouer 
        // parcourir le tableau de casting pour avoir les films jouer 

    }

    ?>
