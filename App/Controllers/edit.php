<?php

require __DIR__ . '/../../autoload.php';

$post = $_POST;
if (!empty($post)) {
$article = new \App\Models\News();
$article->name = $post['name'];
$article->text = $post['text'];
$article->update();

include __DIR__ . '/../../Views/article.php';
} else {
header('Location: /');
}