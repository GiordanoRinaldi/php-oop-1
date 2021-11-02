<?php

class Movie {
    public $titolo;
    public $anno;
    public $genere;
    public $durata;
    public $trama;
    private $adult;

    public function __construct($_titolo, $_anno, $_genere, $_durata, $_trama)
    {
        $this->titolo = $_titolo;
        $this->anno = $_anno;
        $this->genere = $_genere;
        $this->durata = $_durata;
        $this->trama = $_trama;
    }

    public function setAdult($_adult)
    {
        if($_adult == true){
            $this->adult= 'Questo contenuto é per un pubblico adulto';
        }else{
            $this->adult='Questo contenuto é adatto ai minori';
        }
    }

    public function getAdult(){
        return $this->adult;
    }


}