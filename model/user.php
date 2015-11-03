<?php

require_once('bdd.php');

class User{
  private $id;
  private $pseudo;
  private $password;
  private $email;
  private $bdd;

  function __construct(Bdd $bdd){
    $this->bdd = $bdd;
    $ctp = func_num_args();
    $args = func_get_args();

    switch($ctp)
    {
      case 2:
      $this->pseudo = $args[0];
      $this->password = $args[1];
      break;
      case 4:
      $this->pseudo = $args[0];
      $this->password = $args[1];
      $this->email = $args[2];
      break;
    }
  }

  function getId(){return $this->id;}
  function getPseudo{return $this->pseudo;}
  function getEmail{return $this->email;}

  function verif_exist()
  {
    $pdo = $this->bdd->getPdo();
    $login = $this->login;
    $password = $this->password;
    $query = "SELECT id
    FROM account
    WHERE pseudo = ?";
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
    $bdd->deconnexion();
  }

  function addUser()
  {
    $pdo = $this->bdd->getPdo();


    $query = "INSERT INTO account (pseudo,password,email) VALUES(?,?,?)";
    $prep = $pdo->prepare($query);
    $prep->bindValue(1,$this->pseudo,PDO::PARAM_STR);
    $prep->bindValue(2,$this->password,PDO::PARAM_STR);
    $prep->bindValue(3,$this->email,PDO::PARAM_STR);

    $prep->execute();

    $bdd->deconnexion();


  }



}
?>
