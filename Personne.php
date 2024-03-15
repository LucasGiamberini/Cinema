<?php

class personne{
    protected string  $nom;
    protected string $prenom;
    protected string $sexe;
    protected Datetime $naissance;
    


     public function __construct(string $nom,string $prenom,string $sexe,string $naissance){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->sexe=$sexe;
        $this->naissance=new DateTime($naissance);
    }

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getsexe(){
        return $this->sexe;
    }
    public function getNaissance(){
        return $this->naissance;
    }
    public function getInfos( ){
            echo "******************Info********************";
            echo "<br>Nom:".$this->getNom(). "  Prenom :".$this->getPrenom();
            echo "<br>Date de Naissance: ". $this->getNaissance()->format('d-m-Y')." Sexe  :" .$this->getsexe()."<br>";
             
}
    
    public function __tostring(){
        return "    ".$this->prenom . "    ".$this->nom;
    }


}





    

?>