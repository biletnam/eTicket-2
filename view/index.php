<?php
session_start();
require('../model/user.php');
if(isset($_SESSION['user'])){
  $user = unserialize($_SESSION['user']);
 echo 'sa fonctionne '.$user->getEmail();
}
else{
  echo "Vous n'êtes pas connecté ! </br>";
  if(isset($_COOKIE['msg_signin'])){
    echo $_COOKIE['msg_signin'];
  }

}


?>
<form action="../view/signin.php" method="get">
  <input type="submit" value="Connexion"></input>
</form>
<form action="../controller/deconnexionCtrl.php" method="get">
  <input type="submit" value="Deconnexion"></input>
</form>
