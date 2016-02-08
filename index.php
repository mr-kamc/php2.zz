<?php

require __DIR__ . '/autoload.php';


$authors = new \App\Models\Author();
$authors->firstName = 'Alex';
var_dump($authors);

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


