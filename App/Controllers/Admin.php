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

        header('Location: /index.php');
    }

    protected function actionSave()
    {
        $post = $_POST;
        if (!empty($post)) {
            $article = new News();
            $article->name = $post['name'];
            $article->text = $post['text'];
            $article->author_id = 2;
            $article->save();

            header('Location: /index.php');
        } else {
            header('Location: /index.php');
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
