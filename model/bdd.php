<?php

class Bdd{

  private $pdo;
  function __construct(){

  }/*
  function connectMaBase(){
      $base = mysql_connect ('localhost', 'root', '');
      mysql_select_db ('e-ticket', $base) ;
  }*/
  function connexion(){
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
  function getPdo(){return $this->pdo;}
  function donnees(){
    $bdd = new PDO('mysql:host=localhost;dbname=e-ticket;charset=utf8', 'root', 'root');
				$reponse = $bdd->query('SELECT * FROM account');
				$donnees = $reponse->fetchAll();
        return $donnees;
  }

}
