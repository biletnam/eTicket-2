<?php

namespace App\Controller;

use App\Model\Bdd;
use App\Model\User;

class SigninCtrl extends BasePdoCtrl
{

  public function index()
  {
    if(isset($_POST['signin'])){
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
