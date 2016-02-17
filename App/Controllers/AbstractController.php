<?php

namespace App\Controllers;


use App\Exceptions\Core;
use App\View;

class AbstractController
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
       // $ex = new Core('Сообщение исключения');

       // throw $ex;

    }

}