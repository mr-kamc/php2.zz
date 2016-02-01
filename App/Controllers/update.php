<?php

require __DIR__ . '/../../autoload.php';

$article = \App\Models\News::findOneById($_GET['id']);

require __DIR__ . '/../../Views/update.php';