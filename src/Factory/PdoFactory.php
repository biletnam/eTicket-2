<?php

namespace App\Factory;

class PdoFactory
{
    public static function create(array $db)
    {
      try{
          $strConnexion  = 'mysql:host='.$db["hostname"].';dbname='.$db["dbname"];
          $arrExtraParam = array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
          $pdo           = new \PDO($strConnexion, $db["username"], $db["password"], $arrExtraParam);
      }
      catch(\PDOException $e) {
          $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
          die($msg);
      }

      return $pdo;
    }
}
