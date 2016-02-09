<?php

require __DIR__ . '/../../autoload.php';

$news = \App\Models\News::findAll();

require __DIR__ . '/../templates/admin.php';