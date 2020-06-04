# Simple Router PHP
> Router simples para projetos PHP MVC. Não deve ser usado em produção. É feito apenas para aprendizado.

License [MIT]
PHP ^7.2

A forma de roteamento é bem parecida com a de frameworks como Symfony, Slim, etc. Porém de uma forma bem mais simples, por exemplo, não contém rotas dinâmicas apenas estáticas; Não tenho muita noção de segurança, então não posso assegurar nada (**POR ISSO NÃO USE EM PRODUÇÃO**); Não está implementado para middlewares; E ainda não está completo;
Enfim, é apenas um projeto pessoal, mostrando de forma simples alguns conhecimentos adquiridos na linguagem PHP. Sinta se livre para baixar e usar como código base para qualquer coisa. (_Em caso de dúvidas entrar em [contato][contato]._)

![](home.png)
![](contato.png)
![](notfound.png)

## Necessário para instalação
OS X & Linux & Windows:
- Composer
- PHP ^7.2
> Comando para rodar com o PHP
```sh
    php -S localhost:80 public/index.php
```

## Exemplo de uso
```php
...
    $router = new Core\Router();
    //o Método 'get' Recebe o path como primeiro parâmetro e uma callback como segundo.
    $router->get('/home', function($req, $res) {
       $res.render('home'); 
    });
    // Roteador começa a ouvir as rotas que são chamadas.
    $router->listen();
```

_Para mais informações, entre em [contato][contato]._ 

## Histórico de lançamentos

* 0.0.1
    * Trabalho em andamento

## Meta

Gabriel Leon – [@gabeleonn](https://instagram.com/gabeleonn) – _[gableonn@gmail.com][contato]._

Distribuído sob a licença MIT. Entre em [contato][contato] para mais informações.

[https://github.com/gabeleonn/](https://github.com/gabeleonn/)

## Contributing

1. Faça o _fork_ do projeto (<https://github.com/gabeleonn/router-nfp/fork>)
2. Crie uma _branch_ para sua modificação (`git checkout -b feature/fooBar`)
3. Faça o _commit_ (`git commit -am 'Add some fooBar'`)
4. _Push_ (`git push origin feature/fooBar`)
5. Crie um novo _Pull Request_

[contato]: mailto:gableonn@gmail.com