<?php

namespace App\Models;

use App\Db;
use App\Model;

class Author extends Model
{
    const TABLE = 'authors';
    const ID = 'author_id';


    static function getNameAuthors($idAuthor){
        $id = static::ID;
        if (empty($id)){
            return false;
        }

        $res = self::findOneById($idAuthor);
        return $res->name;
    }



} 