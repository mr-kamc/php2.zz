<?php

namespace App\Controllers;


class Error
extends AbstractController
{
    public function action404()
    {
        echo $this->view->render(__DIR__ . '/../templates/404.php');
    }

} 