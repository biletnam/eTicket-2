<?php

require'../model/bdd.php';

		for ($p=0; $p < count($donnees) ; $p++) {
		echo 'mon pseudo est '.$donnees[$p]['pseudo'].' ';
  };

  if(isset($_POST['btnbdd'])) {


$pseudo = $_POST['pseudo'];
$password = $_POST['password'];
$email = $_POST['email'];
connectMaBase();

	$sql = 'INSERT INTO account (pseudo, password, email) VALUES("'.$pseudo.'","'.$password.'","'.$email.'")';

  mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());


        mysql_close();

}

  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.php" method="post">
      <input type="text" name="pseudo" value="pseudo">
      <input type="password" name="password" value="password">
      <input type="email" name="email" value="email">
      <button type="submit" name="btnbdd">submit</button>
    </form>
  </body>
</html>
