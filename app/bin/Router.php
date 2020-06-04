<?php 

namespace Core;

/* 

Classe Router que recebe todas as rotas setadas em index e é responsável por controlar toda a organização de páginas junto com as Classes Request, Response e no caso desse projeto Controllers e views.

*/
class Router
{
    public $req; //recebe o obj Request como parametro na criação e guarda aqui.
    public $res; //Cria o objeto Response quando é iniciado no metodo construct.
    public $routes = []; // Armazena as rotas aqui ex:>>
    /*
        $routes =>
            "nome_rota" =>
                $path = "nome_rota",
                ...
    */
    
    public function __construct($req)
    {   
        $this->req = $req; //recebe como parametro o Request e guarda na $res
        $this->res = new Response(); // Criar a Response
    }

    public function get($path, $callback) { // Methodo para criar uma rota para o methodo get
        $this->addRoute($path, $callback, 'GET'); // Ver mais no metodo addRoute da classe.
    }

    public function post($path, $callback) { // Methodo para criar uma rota para o methodo post
        $this->addRoute($path, $callback, 'POST'); // Ver mais no metodo addRoute da classe.
    }

    public function update($path, $callback) { // Methodo para criar uma rota para o methodo update
        $this->addRoute($path, $callback, 'UPDATE'); // Ver mais no metodo addRoute da classe.
    }

    public function delete($path, $callback) { // Methodo para criar uma rota para o methodo delete
        $this->addRoute($path, $callback, 'DELETE'); // Ver mais no metodo addRoute da classe.
    }

    public function addRoute($path, $callback, $method) {// Recebe os mesmos parametros das funções acima porém passando o method junto (Ex> 'GET').

        if(isset($this->routes[$path])) {// checa se a rota ($path) já existe em routes
            $this->routes[$path]->setMethod($callback, $method); // Se sim cria apenas o methodo usando o callback setado em public/index.php
        } else { // Se não cria uma nova rota e adiciona ao routes.
            $route = new Route($path, $callback, $method); 
            $this->routes[$path] = $route;
        }
    }

    public function listen() //Deve ser chamado quando terminar de settar as rotas
    {
        
        if(isset($this->routes[$this->req->__get('uri')])) { // checa se a rota da Request existe
            if(!isset($this->routes[$this->req->__get('uri')]->callbacks[$this->req->__get('method')])) {  // checa se o metodo (ex> GET) da Request existe para aquele path
                $this->res->setMethod('GET');
                $this->res->setCode('404');
                $this->res->render('error');
            } else { // Se existir
                $this->res->setMethod($this->req->__get('method')); //Diz ao Response qual foi o método chamado
                // passa o Request e o Response para a callback da rota e metodo chamados.
                $this->routes[$this->req->__get('uri')]->callbacks[$this->req->__get('method')]($this->req, $this->res);
            }
        } else {// Se não estiver em Rotas
            $this->res->setMethod('GET');
            $this->res->setCode('404');
            $this->res->render('error');
        }
    }
}

?>