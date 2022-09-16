<?php

namespace App\Repository;

use App\Model\Association;

interface IAssociationRepository
{
    public function add(Association $association);

    //public function remove();

    public function findAll();

    //public function update();
}