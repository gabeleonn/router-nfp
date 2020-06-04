<?php 

namespace Core;

class Response
{
    public $method;
    public $code;

    public function setMethod($method)
    {
        $this->method = strtolower($method); // Para saber qual metodo foi chamado
    }

    public function setCode($code) // Para saber qual code da response
    //ainda nao implementei
    {
        $this->code = $code;
    }

    public function render($page) // Chama o controller necessário para aquela page, passando o methodo requisitado
    {
        $controller = 'Controllers\\' . ucfirst($page);
        $controller = new $controller($this->method);
    }

}



?>