<?php

namespace App\Controller;

class SingleProductCtrl extends BaseCtrl
{
    public function index()
    {
        $bdd = new PDO('mysql:host=localhost;dbname=e-ticket;charset=utf8', 'root', '');
        $reponse = $bdd->query('SELECT * FROM product');
        $donnees = $reponse->fetchAll();

        $idProduct = $_GET["id"];

        if (!$idProduct) {
          header('Location:products.php');
        }

        return $this->render('single-product.html.twig', [
            'idProduct' => $donnees[$idProduct-1]
        ]);
    }
}
