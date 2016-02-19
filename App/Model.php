<?php

namespace App;

abstract class Model
{
    const TABLE = '';
    const ID = '';


    /**получение всех записей из БД
     * @return mixed
     */
    public static function findAll()
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }

    /**получение одной записи из БД по id
     * @param integer $id
     * @return bool
     */
    public static function findOneById($id)
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE . ' WHERE ' . static::ID . ' = :id',
            static::class, [':id' => $id]
        )[0] ?: false;
    }

    /**получение $num последних новосей, где $num-кол-во
     * @param integer $num количество выводимых новостей
     * @return mixed
     */
    public static function findLastNews($num)
    {
        $db = Db::instance();
        return $db->query('SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $num,
            static::class);
    }

    /**проверка на существование записи
     * @return bool
     */
    public function isNew()
    {
        return empty($this->id);
    }

    /**
     * вставка новой записи в БД
     */
    public function insert()
    {
        if (!$this->isNew()) {
            return;
        }

        $columns = [];
        $values = [];

        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $columns[] = $k;
            $values[':' . $k] = $v;
        }
        $sql = '
INSERT INTO ' . static::TABLE . '
(' . implode(',', $columns) . ')
VALUES (' . implode(',', array_keys($values)) . ')';



        $db = Db::instance();
        $db->execute($sql, $values);

        $this->id = $db->lastInsertId();

    }

    /**
     * обновление записи в БД
     */
    public function update()
    {
        if ($this->isNew()) {
            return;
        }
        $columns = [];
        $values = [];

        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $columns[] = $k . '=:' . $k;
            $values[':' . $k] = $v;
        }

        $sql = '
        UPDATE ' . static::TABLE . '
         SET ' . implode(',', $columns) . '
          WHERE ' . static::ID . '=' . $this->id;

        $db = Db::instance();
        $db->execute($sql, $values);
    }

    /**
     * удаление записи из БД
     */
    public function delete()
    {
        if ($this->isNew()) {
            return;
        }
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=' . $this->id;


        $db = Db::instance();
        $db->execute($sql);
    }

    /**
     * сохранение записи в БД
     */
    public function save()
    {
        if ($this->isNew()) {
            $this->insert();
        } else {
            $this->update();
        }
    }
}
