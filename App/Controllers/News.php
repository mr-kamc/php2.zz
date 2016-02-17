<?php

namespace App\Controllers;


use App\MultiException;
use App\View;

class News
extends AbstractController
{


    protected function actionIndex()
    {
        $this->view->news = \App\Models\News::findLastNews(3);
        $this->view->users = \App\Models\User::findAll();

        echo $this->view->render(__DIR__ . '/../templates/index.php');
    }

    protected function actionOne()
    {
        $id = (int)$_GET['id'];
        $this->view->article = \App\Models\News::findOneById($id);
        $this->view->display(__DIR__ . '/../templates/article.php');
    }

}