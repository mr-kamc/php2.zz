<?php

namespace App\Controllers;


use App\Models\News;
use App\Models\User;
use App\MultiException;

class Admin
    extends AbstractController
{
    protected function actionIndex()
    {
        $this->view->news = News::findLastNews(5);
        $this->view->users = User::findAll();

        echo $this->view->render(__DIR__ . '/../templates/admin.php');
    }

    /**
     * удаление новости
     */
    protected function actionDel()
    {
        $news = new News();
        $news->id = $_GET['id'];
        $news->delete();

        header('Location: /');
    }

    protected function actionSave()
    {
        $post = $_POST;
        if (!empty($post)) {
            $article = new News();
            if (isset($post['id'])) {
                $article->id = $post['id'];
            }
            $article->fill($post);

            $article->save();

            header('Location: /');
        } else {
            header('Location: /');
        }
    }



    protected function actionCreate()
    {

        try {
            $article = new News();
            $article->fill([]);
            $article->save();
        } catch (MultiException $e) {
            $this->view->errors = $e;
        }
        echo $this->view->render(__DIR__ . '/../templates/update.php');
    }

}
