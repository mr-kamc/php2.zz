<?php

require __DIR__ . '/autoload.php';


$view = new \App\View();
$view->authors = \App\Models\Author::findAll();
var_dump($view->authors);

/*
$view = new \App\View();
$view->users = \App\Models\User::findAll();

echo $view->render(__DIR__ . '/App/templates/index.php');
*/

/*
use App\Models\User;

require __DIR__ . '/autoload.php';

$news = \App\Models\News::findLastNews(3);

require __DIR__ . '/Views/news.php';
*/

/*
$user = new User();
$user->name = 'Vasilisa';
$user->email = 'v@pupkin.ru';
$user->id = 5;
$user->delete();
*/


