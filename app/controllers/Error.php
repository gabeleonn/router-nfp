<?php 

namespace Controllers;

/**
 * Class .
 */
class Error extends Controller // Recebe Controller como Parent
{
    public function __construct($method){
        $this->$method(); //Chama o método enviado pela response
    }

    public function get($data = []){  // Implementação do metodo GET
        include_once '../app/views/error.php'; 
    }
}



?>