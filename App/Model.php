<?php

namespace App;

abstract class Model
{
    const TABLE = '';

    public static function findAll()
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }

    public static function findOneById($id)
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE . ' WHERE id = :id',
            static::class, [':id' => $id]
        )[0]?:false;
    }

    public static  function findLastNews($num)
    {
        $db = Db::instance();
        return $db->query('SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $num,
            static::class);

    }
}
