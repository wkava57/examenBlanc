<?php

namespace Src\Model;

class Association
{
    private int $idAbonne;
    private string $prenom;
    private string $nom;
    

    public function __construct($idAbonne, $prenom, $nom)
    {
        $this->abonne = $idAbonne;
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    public function getAbonne(): int
    {
        return $this->idAbonne;
    }
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    public function getNom(): string
    {
        return $this->nom;
    }
    
    public function setAbonne($idAbonne)
    {
        $this->idAbonne = $idAbonne;
    }
}