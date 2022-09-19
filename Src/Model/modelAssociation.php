<?php

namespace App\Model;

class Association
{
    private int $idAssociation;
    private int $idAbonne;
    private int $idOuvrage;
    
    

    public function __construct($idAssociation, $idAbonne, $idOuvrage)
    {
        $this->id = $idAssociation;
        $this->abonne = $idAbonne;
        $this->ouvrage = $idOuvrage;
    }

    public function getIdAssociation(): int
    {
        return $this->idAssociation;
    }
    public function setIdAssociation($idAssociation): void{
        $this->id = $idAssociation;
    }

    public function getIdAbonne(): int
    {
        return $this->idAbonne;
    }
    public function setIdAonne($idAbonne): void{
        $this->idAbonne = $idAbonne;
    }

    public function getIdOuvrage(): int
    {
        return $this->idOuvrage;
    }
    public function setIdOuvrage($idOuvrage): void{
        $this->idOuvrage = $idOuvrage;
    }
   
}