<?php

namespace App\Controller;

class SignupCtrl extends BaseCtrl
{
  public function index()
  {
    if(isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['email']) && !empty($_POST['pseudo']) && !empty($_POST['password']) && !empty($_POST['email'])){
      //require_once 'src/Model/bdd.php';
      require_once 'src/Model/user.php';
      $pseudo = $_POST['pseudo'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $user = new User(new Bdd(), $pseudo, $password, $email);
      if(!$user->verif_exist()){
        //header('Location: ../view/signup.php');
        print_r('ta mere');
        $user->add();
      }
    }

    return $this->render('signup.html.twig', [
        'title' => "Sign in!",
    ]);

  }
}



/*require'../model/bdd.php';

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
*/
