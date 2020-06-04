<?php 

namespace Controllers;

class Contact extends Controller // Recebe Controller como Parent
{
    public function __construct($method){
        $this->$method(); //Chama o método enviado pela response
    }

    public function get($data = []){
        include_once '../app/views/contact.php'; // Implementação do metodo GET
    }
}



?>