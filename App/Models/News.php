<?php

namespace App\Models;

use App\Model;
use App\MultiException;

class News extends Model
{
    const TABLE = 'news';
    const ID = 'id';

    public $id;
    public $name;
    public $text;
    public $author_id;

    //protected $data = [];

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
        switch ($k) {
            case 'author':
                return Author::getNameAuthors($this->author_id);
            break;
            default:
                return null;
        }
    }

    /**магический метод isset
     * @param $k
     * @return bool
     */
    public function __isset($k)
    {
        switch ($k) {
            case 'author':
                return true;
            break;
            default:
                return null;
        }

    }

    public function fill($data = []) {
        $e = new MultiException();
        if (true) {
            $e[] = new \Exception('Заголовок неверный');
        }
        if (true) {
            $e[] = new \Exception('Текст неверный');
        }
        throw $e;
    }
}

