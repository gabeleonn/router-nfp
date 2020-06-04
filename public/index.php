<?php
require_once '../vendor/autoload.php'; //Chama o autoload do composer

$req = new Core\Request($_SERVER); // Cria uma request e passa como parametro a $_SERVER

$router = new Core\Router($req); // Criar um Router

$router->get('/', function($req, $res) { // Seta a rota '/' com o metodo GET
    $res->render('home');
});

$router->post('/', function($req, $res) {// Seta a rota '/' com o metodo POST
    $res->render('home');
});

$router->get('/contact', function($req, $res) {// Seta a rota '/' com o metodo GET
    $res->render('contact');
});


$router->listen();// Verifica a Request e faz o processamento para chamar o controller necessário

?>