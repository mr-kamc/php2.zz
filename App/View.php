<?php

namespace App;


class View
    implements \Countable
{
    use Magic;


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