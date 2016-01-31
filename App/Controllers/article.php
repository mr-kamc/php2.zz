<?php

require __DIR__ . '/../../autoload.php';

$article = \App\Models\News::findOneById($_GET['id']);

if($article)
{
    require __DIR__ . '/../../Views/article.php';
}
else
{
    header('Location: /');
}