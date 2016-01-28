<?php


namespace App;


class Db
{

    function __construct()
    {
        $dbh = new \PDO('mysql:host=127.0.0.1;dbname=test', 'root', 'werq');
    }

}