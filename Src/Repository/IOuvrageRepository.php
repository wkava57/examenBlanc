<?php

namespace Src\Repository;

use Src\Model\Ouvrage;

interface IOuvrageRepository
{
    public function add(Ouvrage $ouvrage);

    //public function remove();

    public function findAll();

    //public function update();
}