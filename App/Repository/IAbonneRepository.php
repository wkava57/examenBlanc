<?php

namespace App\Repository;

use App\Model\Abonne;

interface IAbonneRepository
{
    public function add(Abonne $abonne);

    //public function remove();

    public function findAll();

    //public function update();
}
