<?php

class Router
{
    private $routes;
    public function __construct()
    {
       $routesPath = ROOT.'/config/routes.php';
       $this->routes = include($routesPath);
    } 

    private function getURI()
    {
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }

    public function run()
    {
        // Получить строку запроса
        
        $uri = $this->getURI();
        echo $uri;

        // Проверить наличие такого запроса в routes.php

        // Если, есть совпадение, то определить 
        // какой контроллер и action обрабатывают запрос

        // Подключить файл класс-контроллера

        // Создать объект, вызвать метод
    }

}