<?php

class SingleProductCtrl extends BaseCtrl
{
    public function index()
    {
        $bdd = new PDO('mysql:host=localhost;dbname=e-ticket;charset=utf8', 'root', 'root');
        $reponse = $bdd->query('SELECT * FROM product');
        $donnees = $reponse->fetchAll();

        /* Check if Id exists */
        $idProduct = $_GET["id"];
        $trueProduct = false;

        if (!$idProduct) {
          header('Location:products.php');
        }
        for ($i=0; $i < count($donnees); $i++) {
          if ($donnees[$i]["id"] == $idProduct) {
            $trueProduct = true;
          }
        }
        if (!$trueProduct) {
          header('Location:products.php');
        }


        /* Send mail */
        if (isset($_POST['name'])) {
          $mandrill = new Mandrill('34Yv8CSaxAEYPj0ouWDBng');

          $textBody = $donnees[$idProduct-1]['name'].' <br> '.$donnees[$idProduct-1]['price'].'€';
          $message = new stdClass();
          $message->html = $textBody;
          $message->text = $textBody;
          $message->subject = "Votre reservation : ".$donnees[$idProduct-1]['name'];
          $message->from_email = "iim@iim2232323234.fr";
          $message->from_name  = "From Name";
          $message->to = array(array("email" => "fabmontillot@gmail.com"));
          $message->track_opens = true;
          print_r("Reservation envoyée par mail <br><br>");
          $response = $mandrill->messages->send($message);

        }

        return $this->render('single-product.html.twig', [
          'idProduct' => $donnees[$idProduct-1]
        ]);
    }
}
