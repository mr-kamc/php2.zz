<?php

require __DIR__ . '/autoload.php';

$ctrl = !empty($_GET['ctrl']) ? 'App\\Controllers\\' . $_GET['ctrl'] : 'App\Controllers\\News';
$controller = new $ctrl;

$action = !empty($_GET['action']) ? $_GET['action'] : 'Index';
$url = 'http://php2.zz/App/Controllers/Admin/Index';
//разбираем url
$path =explode('/',parse_url($url,PHP_URL_PATH));
var_dump($path);
die;


try {
    $controller->action($action);
} catch (\App\Exceptions\Core $e) {
    echo 'Возникло исключение ' . $e->getMessage();
} catch (\App\Exceptions\Db $e) {
    echo 'Что-то не так с базой ' . $e->getMessage();
} catch (\App\MultiException $e) {
    echo 'Что-то не так с базой ' . $e->getMessage();
}