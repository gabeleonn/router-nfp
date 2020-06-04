<?php 

namespace Core;

// apenas guarda os callbacks das funções e o path
class Route
{
    public $path;
    public $callbacks = [];

    public function __construct($path, $callback, $method)
    {
        $this->path = $path;
        $this->callbacks[$method] = $callback;
    }

    public function __get($var)
    {
        return $this->$var;
    }

    public function setMethod($callback, $method)
    {
        $this->callbacks[$method] = $callback;
    }
    
}



?>