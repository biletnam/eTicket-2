<?php

require __DIR__.'/vendor/autoload.php';

$twig   = \App\Factory\TwigFactory::create();
$ctrl   = new \App\Controller\SingleProductCtrl($twig);
$render = $ctrl->index();


echo $render;
