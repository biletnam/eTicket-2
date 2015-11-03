<?php

 $bdd = new PDO('mysql:host=localhost;dbname=e-ticket;charset=utf8', 'root', '');
 				$reponse = $bdd->query('SELECT * FROM account');
 				$donnees = $reponse->fetchAll();

		echo 'mon pseudo est'.$pseudo;
  ?>
