<?php

namespace App\Controller;

class signinCtrl extends BaseCtrl
{

  public function index()
  {
    if(isset($_POST['signin'])){
      require_once('../model/User.php');
      require_once('../model/Bdd.php');
      $pseudo = $_POST['pseudo'];
      $password = $_POST['password'];
      $user = new User(new Bdd(),$pseudo,$password);
      if($user->verif_exist()){
        $user->connect();
        echo "Bienvenue ".$user->getPseudo()." !";
        echo "Voici ton mail: ".$user->getEmail();
      }
    }

    return $this->render('signin.html.twig', [
        'title' => "Sign up!",
    ]);


  }


}



