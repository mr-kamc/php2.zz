<?php

require __DIR__ . '/autoload.php';

$ctrl = !empty($_GET['ctrl']) ? 'App\\Controllers\\' . $_GET['ctrl'] : 'App\Controllers\\News';
$controller = new $ctrl;

$action = !empty($_GET['action']) ? $_GET['action'] : 'Index';

try {
    $controller->action($action);
} catch (\App\Exceptions\Core $e) {
    echo 'Возникло исключение ' . $e->getMessage();
} catch (\App\Exceptions\Db $e) {
    echo 'Что-то не так с базой ' . $e->getMessage();
}