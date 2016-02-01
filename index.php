<?php

use App\Models\User;

require __DIR__ . '/autoload.php';
/*
$news = \App\Models\News::findLastNews(3);

require __DIR__ . '/Views/news.php';*/



$user = new User();
$user->name = 'Vasilisa';
$user->email = 'v@pupkin.ru';
$user->insert();

