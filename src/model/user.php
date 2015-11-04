<?php


namespace App\Model;

class User
{
=======
require 'bdd.php';
class User{
  private $id;
  private $pseudo;
  private $password;
  private $email;

  function __construct(){
    $ctp = func_num_args();
    $args = func_get_args();

    switch($ctp)
    {
      case 2:

      $this->pseudo = $args[0];
      $this->password = $args[1];
      break;
      case 3:

      $this->pseudo = $args[0];
      $this->password = $args[1];
      $this->email = $args[2];
      break;
    }
  }

  function getId(){return $this->id;}
  function getPseudo(){return $this->pseudo;}
  function getEmail(){return $this->email;}

  function verif_exist()
  {
    $bdd = new Bdd();
    $bdd->connexion();
    $pdo = $bdd->getPdo();
    $pseudo = $this->pseudo;
    $password = $this->password;
    $query = "SELECT id FROM account WHERE pseudo = ?";
    $prep = $pdo->prepare($query);
    $prep->bindValue(1,$this->pseudo,PDO::PARAM_STR);
    $prep->execute();
    if($prep->rowCount() == 1)
    {
      return true;
    }
    else
    {
      return false;
    }
    $prep->closeCursor();
  }

  function add()
  {
    $bdd = new Bdd();
    $bdd->connexion();
    $pdo = $bdd->getPdo();

    $query = "INSERT INTO account (pseudo,password,email) VALUES(?,?,?)";
    $prep = $pdo->prepare($query);
    $prep->bindValue(1,$this->pseudo,PDO::PARAM_STR);
    $prep->bindValue(2,$this->password,PDO::PARAM_STR);
    $prep->bindValue(3,$this->email,PDO::PARAM_STR);

    $prep->execute();

    $prep->closeCursor();


  }

  function connect(){
    $bdd = new Bdd();
    $bdd->connexion();
    $pdo = $bdd->getPdo();
    $query = "SELECT id,email FROM account WHERE pseudo = ? AND password = ?";
    $prep = $pdo->prepare($query);
    $prep->bindValue(1,$this->pseudo,PDO::PARAM_STR);
    $prep->bindValue(2,$this->password,PDO::PARAM_STR);
    $prep->execute();
    $array = $prep->fetch();
    $this->id = $array["id"];
    $this->email = $array["email"];
    $prep->closeCursor();
  }
<<<<<<< HEAD:src/model/user.php
=======




>>>>>>> 000ec9251c203c05b881b4c917cd89e02199b7ce:model/user.php
}
