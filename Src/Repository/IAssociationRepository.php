<?php

namespace Src\Repository;

use Src\Model\modelAssociation;

interface IAssociationRepository
{
    public function add(Association $association);

    //public function remove();

    public function findAll();

    //public function update();
}