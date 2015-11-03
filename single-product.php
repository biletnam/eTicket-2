<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/controller/BaseCtrl.php';
require_once __DIR__.'/controller/SingleProductCtrl.php';


$ctrl   = new SingleProductCtrl();
$render = $ctrl->index();

echo $render;
