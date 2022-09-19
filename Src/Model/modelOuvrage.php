<?php

namespace Src\Model;

class Ouvrage
{
    private int $idOuvrage;
    private string $titre;
    private string $auteur;
    

    public function __construct($idOuvrage, $titre, $auteur)
    {
        $this->abonne = $idOuvrage;
        $this->prenom = $titre;
        $this->nom = $auteur;
    }

    public function getIdOuvrage(): int
    {
        return $this->idOuvrage;
    }
    public function getTitre(): string
    {
        return $this->titre;
    }
    public function getAuteur(): string
    {
        return $this->auteur;
    }
    
    public function setIdOuvrage($idOuvrage): void
    {
        $this->idOuvrage = $idOuvrage;
    }
}