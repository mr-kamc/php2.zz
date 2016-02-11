<?php

require __DIR__ . '/autoload.php';

$ctrl = !empty($_GET['ctrl']) ? 'App\\Controllers\\' . $_GET['ctrl'] : 'App\Controllers\\News';
$controller = new $ctrl;

$action = !empty($_GET['action']) ? $_GET['action'] : 'Index';
$controller->action($action);
/*
$view = new \App\View();
$view->news = \App\Models\News::findLastNews(3);
$view->users = \App\Models\User::findAll();

echo $view->render(__DIR__ . '/App/templates/index.php');
*/
//var_dump($view);
/*
$news = \App\Models\News::findAll();

foreach ($news as $article){
    var_dump($article);
    $author = \App\Models\Author::getNameAuthors($article->author_id);
    var_dump($author);
}
*/

/*
$view = new \App\View();
//$view->users = \App\Models\User::findAll();
$view->users = \App\Models\User::findOneById(1);

echo $view->render(__DIR__ . '/App/templates/index.php');
*/

/*
use App\Models\User;


$news = \App\Models\Author::findOneById(2);;

var_dump($news);
*/

/*
$user = new User();
$user->name = 'Vasilisa';
$user->email = 'v@pupkin.ru';
$user->id = 5;
$user->delete();
*/


