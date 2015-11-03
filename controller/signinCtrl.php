<?php
if(isset($_POST['signin'])){
  require_once('../model/user.php');
  $pseudo = $_POST['pseudo'];
  $password = $_POST['password'];
  $user = new User($pseudo,$password);
  if($user->verif_exist()){
    $user->connect();
    session_start();
    $_SESSION['user'] = serialize($user);
    echo "Bienvenue ".$user->getPseudo()." !";
    echo "Voici ton mail: ".$user->getEmail();
    setcookie("msg_signin","Authenticated successfully !",time()+10, '/');
  }
  else{
    setcookie("msg_signin","Authentication failed !",time()+10, '/');
  }
  header('Location: ../view/index.php');

}
?>
