<?php


require'../model/bdd.php';

if(isset($_POST['btnbdd'])) {
  $pseudo = $_POST['pseudo'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  connectMaBase();

  $sql = 'INSERT INTO account (pseudo, password, email) VALUES("'.$pseudo.'","'.$password.'","'.$email.'")';
  mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
        mysql_close();
        header('Location: ../view/signup.php');
  }

/* $pdo = $this->bdd->getPdo();


  $query = "INSERT INTO account (pseudo,password,email) VALUES(?,?,?)";
  $prep = $pdo->prepare($query);
  $prep->bindValue(1,$this->pseudo,PDO::PARAM_STR);
  $prep->bindValue(2,$this->password,PDO::PARAM_STR);
  $prep->bindValue(3,$this->email,PDO::PARAM_STR);

  $prep->execute();

  $bdd->deconnexion();*/

?>
