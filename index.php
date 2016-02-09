<?php

require __DIR__ . '/autoload.php';

$view = new \App\View();
$view->news = \App\Models\News::findAll();
$view->users = \App\Models\User::findAll();
$view->authors = \App\Models\Author::findAll();
foreach ($view->news as $res){
    $res->author = \App\Models\Author::getNameAuthors($res->author_id);
}
echo $view->render(__DIR__ . '/App/templates/index.php');

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


