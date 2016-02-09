<?php

namespace App\Models;

use App\Model;

class News extends Model
{
    const TABLE = 'news';
    const ID = 'id';

    public $id;
    public $name;
    public $text;
    public $author_id;

    protected $data = [];

    /**метод __set устанавливает значение при обращении к несуществующему свойству
     * данного класса
     * @param $k
     * @param $v
     */
    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    /**При запросе свойства author возвращает объект класса Author
     * @param $k
     * @return bool
     */
    public function __get($k)
    {
        if('author' == $k && isset($this->author_id)){
            return Author::getNameAuthors($this->author_id);
        }
        return $this->data[$k];
    }

    /**магический метод isset
     * @param $k
     * @return bool
     */
    public function __isset($k)
    {
        return isset($this->data[$k]);
    }

}