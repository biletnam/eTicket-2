<?php
function connectMaBase(){
    $base = mysql_connect ('localhost', 'root', '');  
    mysql_select_db ('e-ticket', $base) ;
}
  $bdd = new PDO('mysql:host=localhost;dbname=e-ticket;charset=utf8', 'root', '');
         $reponse = $bdd->query('SELECT * FROM account');
         $donnees = $reponse->fetchAll();





 ?>
