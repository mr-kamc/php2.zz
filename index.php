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
if (!method_exists($controller,'action' . $action)){
    throw new \App\Exceptions\Error404();
}
    $controller->action($action);
} catch (\App\Exceptions\Error404 $e) {
    $error = new \App\Controllers\Error();
    $error->action404();
} catch (\App\Exceptions\Core $e) {
    echo 'Возникло исключение ' . $e->getMessage();
} catch (\App\Exceptions\Db $e) {
    $error = new \App\Controllers\Error();
    $error->error($e->getMessage());
  //  echo 'Что-то не так с базой ' . $e->getMessage();
} catch (\App\MultiException $e) {
    $error = new \App\Controllers\Error();
    $error->errorForm($e);
}