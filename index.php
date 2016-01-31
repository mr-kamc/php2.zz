<?php

require __DIR__ . '/autoload.php';

$news = \App\Models\News::findLastNews(3);

require __DIR__ . '/Views/news.php';
