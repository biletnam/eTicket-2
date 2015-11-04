<?php

require __DIR__.'/vendor/autoload.php';

$config = \Symfony\Component\Yaml\Yaml::parse(file_get_contents(__DIR__.'/config/parameters.yml'));
$pdo    = \App\Factory\PdoFactory::create($config["database"]);

var_dump($pdo);

$twig   = \App\Factory\TwigFactory::create();
$ctrl   = new \App\Controller\SigninCtrl($twig, $pdo);
$render = $ctrl->index();

echo $render;
