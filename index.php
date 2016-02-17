<?php

require __DIR__ . '/autoload.php';

$ctrl = !empty($_GET['ctrl']) ? 'App\\Controllers\\' . $_GET['ctrl'] : 'App\Controllers\\News';
$controller = new $ctrl;

$action = !empty($_GET['action']) ? $_GET['action'] : 'Index';
$controller->action($action);
