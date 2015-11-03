<?php
if(isset($_POST['signin'])){
  require_once('../model/user.php');
  require_once('../model/bdd.php');
  $pseudo = $_POST['pseudo'];
  $password = $_POST['password'];
  $user = new User(new Bdd(),$pseudo,$password);
  if($user->verif_exist()){
    $user->connect();
    echo "Bienvenue ".$user->getPseudo()." !";
    echo "Voici ton mail: ".$user->getEmail();
  }

}
?>
