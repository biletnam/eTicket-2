<?php

require_once __DIR__.'/vendor/autoload.php';


$twig   = \App\Factory\TwigFactory::create();
$ctrl   = new \App\Controller\SignupCtrl($twig);
$render = $ctrl->index();

echo $render;
