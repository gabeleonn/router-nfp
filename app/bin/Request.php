<?php 

namespace Core;

class Request
{
    public $uri;
    public $method;
    public $status;
    public $body = [];

    public function __construct($opt) // Recebe a global $_SERVER e retira as infos necessárias para funcionamento
    {
        $this->uri = str_replace('/Router/public', '', $opt['REQUEST_URI']);
        $this->method = $opt['REQUEST_METHOD'];
        $this->status = $opt['REDIRECT_STATUS'];
        $this->body = $_POST;
    }

    public function __get($var)
    {
        return $this->$var;
    }

    public function __set($var, $value)
    {
        $this->$var = $value;    
    }

}



?>