<?php
require __DIR__ . '/../../autoload.php';

$news = new \App\Models\News();
$news->id = $_GET['id'];
$news->delete();

header('Location: /index.php');