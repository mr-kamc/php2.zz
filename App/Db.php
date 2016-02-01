<?php

namespace App;

class Db extends Singleton
{

    protected $dbh;
    protected $lastId;

    public function getLastId()
    {
        return $this->lastId;
    }

    protected function __construct()
    {
        $config = Config::instance();
        $s = $this->dbh = new \PDO('mysql:host=' .$config->data['host']. ';dbname='.$config->data['dbname'].';
        charset=UTF8', $config->data['user'], $config->data['password']);
        //$this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=test;charset=UTF8', 'root', '131318');
    }

    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        return $res;
    }

    public function query($sql, $class, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        if (false !== $res)
        {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }


}