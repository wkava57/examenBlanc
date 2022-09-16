<?php

namespace App\Repository;

use App\Model\modelOuvrage;
use App\Model\Ouvrage;
use App\Service\Database;
use PDO;

class OuvrageRepository extends Database implements IOuvrageRepository
{


    public function add(Ouvrage $ouvrage)
    {
        $stmt = $this->db->prepare("INSERT INTO ouvrage (idOuvrage, titre, auteur) 
        VALUES (:idOuvrage, :titre, :auteur)");
        $stmt->bindValue(':idOuvrage', $ouvrage->getIdOuvrage());
        $stmt->bindValue(':titre', $ouvrage->getTitre());
        $stmt->bindValue(':auteur', $ouvrage->getAuteur());
        $stmt->execute();
        $stmt = null;
    }


    public function findAll()
    {
        $stmt = $this->db->prepare('SELECT * FROM ouvrage');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $arr = $stmt->fetchAll();

        $stmt = null;
        $articles = [];
        foreach ($arr as $ouvrage) {
            $p = new Ouvrage($ouvrage['idOuvrage'], $ouvrage['titre'], $ouvrage['auteur']);
            $p->setIdOuvrage($ouvrage['idOuvrage']);
            $ouvrage[] = $p;
        }
        return $ouvrage;
    }
}