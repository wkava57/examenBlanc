<?php

namespace App\Repository;

use App\Model\Abonne;
use App\Service\Database;
use PDO;

class AbonneRepository extends Database implements IAbonneRepository
{


    public function add(Abonne $abonne)
    {
        $stmt = $this->db->prepare("INSERT INTO abonne (idAbonne, prenom, nom) 
        VALUES (:idAbonne, :prenom, :nom)");
        $stmt->bindValue(':idAbonne', $abonne->getidAbonne());
        $stmt->bindValue(':prenom', $abonne->getPrenom());
        $stmt->bindValue(':nom', $abonne->getNom());
        $stmt->execute();
        $stmt = null;
    }


    public function findAll()
    {
        $stmt = $this->db->prepare('SELECT * FROM abonne');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $arr = $stmt->fetchAll();

        $stmt = null;
        $articles = [];
        foreach ($arr as $abonne) {
            $p = new Abonne($abonne['idAbonne'], $abonne['prenom'], $abonne['nom']);
            $p->setIdAbonne($abonne['idAbonne']);
            $articles[] = $p;
        }
        return $abonne;
    }
}