<?php

namespace App\Model;

class Bdd
{
    /**
     * @var \PDO
     */
    protected $pdo;

    public function __construct()
    {
        $args = func_get_args();
        // $this->pdo = $args[1];
        // var_dump($args);
    }

    public function getPdo(){
        return $this->pdo;
    }

    public function donnees(){
        $bdd = new \PDO('mysql:host=localhost;dbname=e-ticket;charset=utf8', 'root', 'root');
            $reponse = $bdd->query('SELECT * FROM account');
            $donnees = $reponse->fetchAll();

        return $donnees;
    }
}
