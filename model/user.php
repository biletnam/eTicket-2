<?php
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



}
?>
