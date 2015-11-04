<?php

namespace App\Controller;

use App\Model\Bdd;

abstract class BasePdoCtrl extends BaseCtrl
{
    protected $bdd;

    public function __construct($pdo)
    {
        $this->bdd = new Bdd($pdo);
    }
}
