<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/controller/BaseCtrl.php';
require_once __DIR__.'/controller/ReservationCtrl.php';


$ctrl   = new ReservationCtrl();
$render = $ctrl->index();


echo $render;
