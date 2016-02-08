<?php

namespace App\Models;

use App\Model;

class News extends Model
{
    const TABLE = 'news';
    const ID = 'id';

    public $name;
    public $text;

}