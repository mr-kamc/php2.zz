<?php

namespace App;


class View
    implements \Countable
{

    protected $data = [];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    public function display($path)
    {
        echo $this->render($path);
    }

    public function render($path)
    {
        ob_start();

        foreach ($this->data as $prop => $value) {
            $$prop = $value;
        }
        include $path;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }


    public function count()
    {
        return count($this->data);
    }
}