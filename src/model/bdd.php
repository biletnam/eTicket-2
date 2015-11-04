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
      try{
          $strConnexion = 'mysql:host=localhost;dbname=e-ticket';
          $arrExtraParam= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
          $this->pdo = new PDO($strConnexion, 'root', 'root', $arrExtraParam);
          $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch(PDOException $e) {
          $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
          die($msg);
      }
    }

    public function connexion()
    {

    }

    public function getPdo(){
        return $this->pdo;
    }

    public function donnees(){
        $bdd = new PDO('mysql:host=localhost;dbname=e-ticket;charset=utf8', 'root', 'root');
            $reponse = $bdd->query('SELECT * FROM account');
            $donnees = $reponse->fetchAll();

        return $donnees;
    }
}
