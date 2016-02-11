<?php

namespace App\Controllers;


use App\Models\News;
use App\Models\User;

class Admin
extends AbstractController
{

    public function actionTest()
    {
        $this->view->news = News::findLastNews(5);
        $this->view->users = User::findAll();

        echo $this->view->render(__DIR__ . '/../templates/admin.php');
    }

}