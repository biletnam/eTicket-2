<?php

 $bdd = new PDO('mysql:host=localhost;dbname=e-ticket;charset=utf8', 'root', 'root');
 $reponse = $bdd->query('SELECT * FROM account');
 $donnees = $reponse->fetchAll();

  for ($p=0; $p < count($donnees) ; $p++) {
      echo 'mon pseudo est'.$donnees[$p]['name'];
  }


include __DIR__.'/templates/products.html.twig';

 ?>
