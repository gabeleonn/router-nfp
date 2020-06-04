<?php 

namespace Controllers;

/**
 * Class .
 */
class Home extends Controller  // Recebe Controller como Parent
{
    public function __construct($method){
        $this->$method(); //Chama o método enviado pela response
    }

    public function get($data = []){
        include_once '../app/views/home.php';  // Implementação do metodo GET
    }

    public function post($data = []){
        include_once '../app/views/home.php';  // Implementação do metodo POST
    }

}



?>