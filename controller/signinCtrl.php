<?php
if(isset('pseudo') && isset($_POST['password']) && !empty($_POST['pseudo']) && !empty($_POST['password'])){
  require_once('../model/user.php');
  require_once('../model/bdd.php');
  $pseudo = $_POST['pseudo'];
  $password = $_POST['password'];  
  $user = new User(new Bdd(),$pseudo,$password);
  if($user->verif_exist()){
    $user->addUser();
  }

}
?>
