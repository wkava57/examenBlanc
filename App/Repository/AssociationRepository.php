<?php

namespace App\Repository;

use App\Model\Association;
use App\Service\Database;
use PDO;

class AssociationRepository extends Database implements IAssociationRepository
{


    public function add(Association $association)
    {
        $stmt = $this->db->prepare("INSERT INTO association (idAssociation, idAbonne, idOuvrage) 
        VALUES (:idAssociation, :idAbonne, :idOuvrage)");
        $stmt->bindValue(':idAssociation', $association->getIdAssociation());
        $stmt->bindValue(':idAbonne', $association->getIdAbonne());
        $stmt->bindValue(':idOuvrage', $association->getIdOuvrage());
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