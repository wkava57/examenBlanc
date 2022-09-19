<?php

namespace Src\Repository;

use Src\Model\Association;
use Src\Service\Database;
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
        $abonne = [];
        foreach ($arr as $abonne) {
            $p = new Abonne($abonne['idAbonne'], $abonne['prenom'], $abonne['nom']);
            $p->setIdAbonne($abonne['idAbonne']);
            $articles[] = $p;
        }
        return $abonne;
    }
}