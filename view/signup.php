<?php
/* inscription + redirection vers sign in / vérificationn données */
require'../model/bdd.php';
  for ($p=0; $p < count($donnees) ; $p++) {
  	echo 'mon pseudo est '.$donnees[$p]['pseudo'].'<br>';
  };
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="../controller/signupCtrl.php" method="post">
      <input type="text" name="pseudo" placeholder="pseudo">
      <input type="password" name="password" placeholder="password">
      <input type="email" name="email" placeholder="email">
      <button type="submit" name="btnbdd">submit</button>
    </form>
  </body>
</html>
