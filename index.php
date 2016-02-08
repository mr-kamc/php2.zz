<?php

require __DIR__ . '/autoload.php';


$news = \App\Models\News::findAll();
$authors = \App\Models\Author::findAll();


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


