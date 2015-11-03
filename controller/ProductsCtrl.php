<?php

class ProductsCtrl extends BaseCtrl
{
    public function index()
    {
        $bdd = new PDO('mysql:host=localhost;dbname=e-ticket;charset=utf8', 'root', 'root');
        $reponse = $bdd->query('SELECT * FROM product');
        $donnees = $reponse->fetchAll();


        return $this->render('products.html.twig', [
            'name' => $donnees
        ]);
    }
}
