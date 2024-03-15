<?php

class role {
    private array $castings=[];
    private string $nomRole;//nom du role
 
    public function __construct(string $nomRole){
        $this->nomRole= $nomRole;
    }

     public function getRole(){
        return $this->nomRole;
    }

    public function getActeur(){
        echo "<br>Les acteur qui ont jouer le role de ".$this. ":";
        foreach ($this->castings as $casting){
             echo $casting->getActeur() ." , ";
        }
        echo ".<br>" ;
    }

    public function ajouterCasting(Casting $casting){
        $this->castings[] = $casting;
    }

    public function __tostring(){
        return $this->nomRole;
    }

}

?>