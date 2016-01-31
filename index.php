<?php

require __DIR__ . '/autoload.php';

/*$users = \App\Models\User::findAll();
var_dump($users);

$usersId = \App\Models\User::findOneById(21);
var_dump($usersId);*/

$news = \App\Models\News::findLastNews(3);

require __DIR__ . '/Views/news.php';