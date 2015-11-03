<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/controller/BaseCtrl.php';
require_once __DIR__.'/controller/ProductsCtrl.php';


$ctrl   = new ProductsCtrl();
$render = $ctrl->index();

echo $render;