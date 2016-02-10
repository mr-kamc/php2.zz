<?php

namespace App\Controllers;


use App\View;

class News
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action)
    {
        $methodName = 'action' . $action;
        $this->beforeAction();
        return $this->$methodName();
    }

    protected function beforeAction()
    {

    }

    protected function actionIndex()
    {
        $this->view->news = \App\Models\News::findLastNews(3);
        $this->view->users = \App\Models\User::findAll();

        echo $this->view->render(__DIR__ . '/../templates/index.php');
    }

}