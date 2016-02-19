<?php

require __DIR__ . '/autoload.php';

//$ctrl = !empty($_GET['ctrl']) ? 'App\\Controllers\\' . $_GET['ctrl'] : 'App\Controllers\\News';
//$controller = new $ctrl;

//$action = !empty($_GET['action']) ? $_GET['action'] : 'Index';
$url = 'http://php2.zz/Admin';
//разбираем url
$path =explode('/',parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));
$pathRev = array_reverse($path);


switch(count($pathRev)) {
    case 1:
        echo 'в кейсе-1';
        break;
    case 2:
        $ctrl = !empty($pathRev[0]) ? 'App\\Controllers\\' . $pathRev[0] : 'App\Controllers\\News';
        $action = 'Index';
        break;
    case 3:
        $ctrl = !empty($pathRev[1]) ? 'App\\Controllers\\' . $pathRev[1] : 'App\Controllers\\News';
        $action = !empty($pathRev[0]) ? $pathRev[0] : 'Index';
        break;
    default:
        $ctrl = !empty($pathRev[2]) ? 'App\\Controllers\\' . $pathRev[2] : 'App\Controllers\\News';
        $action = !empty($pathRev[1]) ? $pathRev[1] : 'Index';
        break;
}


try {
    $controller = new $ctrl;

    $controller->action($action);
} catch (\App\Exceptions\Core $e) {
    echo 'Возникло исключение ' . $e->getMessage();
} catch (\App\Exceptions\Db $e) {
    echo 'Что-то не так с базой ' . $e->getMessage();
} catch (\App\MultiException $e) {
    echo 'Что-то не так с базой ' . $e->getMessage();
}