<?php
session_start();
require('model/user.php');
 $user = unserialize($_SESSION['user']);
  /* Let's go */
  //echo $_COOKIE["msg_signin"];
echo 'sa fonctionne '.$user->getEmail();

?>
