<?php

namespace App;

class Config extends Singleton
{
    public $data = [];

    protected function __construct()
    {
        $this->data = include __DIR__ . '/dbData.php';
    }

}