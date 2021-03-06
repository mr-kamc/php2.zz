<?php

namespace App\Controllers;


class Error
extends AbstractController
{
    public function action404()
    {
        echo $this->view->render(__DIR__ . '/../templates/404.php');
    }
    public function error($e)
    {
        $this->view->error = $e;
        echo $this->view->render(__DIR__ . '/../templates/error.php');
    }
    public function errorForm($e)
    {
        $this->view->errors = $e;
        echo $this->view->render(__DIR__ . '/../templates/add.php');
    }

} 