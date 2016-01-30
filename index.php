<?php

require __DIR__ . '/autoload.php';

$users = \App\Models\User::findAll();

var_dump($users);

$usersId = \App\Models\User::findOneById(21);
var_dump($usersId);