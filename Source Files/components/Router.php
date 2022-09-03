<?php

class Router
{
    private $routes;
    public function __construct()
    {
       $routesPath = ROOT.'/config/routes.php';
       $this->routes = include($routesPath);
    } 

    private function getURI(): string
    {
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }

    private function getParameters(string $uri,array $position): array {
        $arrUri = explode('/', $uri);
        $parameters = [];
        foreach($position as $pos){
            $parameters[$pos] = $arrUri[$pos];
        }
        return $parameters;
    }
    
    public function run()
    {
        // Получить строку запроса
        
        $uri = $this->getURI();
        // Проверить наличие такого запроса в routes.php
        foreach($this->routes as $uriPattern => $path){
            if(preg_match("~$uriPattern~", $uri)){
                $controllerName = $path['controller'];
                $actionName = $path['action'];
                $controllerFile = ROOT . '/controllers/' . $path['controller'] . '.php';
                

                $parameters = $this->getParameters($uri, $path['paramPosition']);
                var_dump($parameters);
                if(file_exists($controllerFile)){
                    include_once($controllerFile);
                    
                }
                $controllerObject = new $controllerName;
                $result = $controllerObject -> $actionName();
                if ($result != null){
                    break;
                }
            }


            
            
        }
        // Если, есть совпадение, то определить 
        // какой контроллер и action обрабатывают запрос

        // Подключить файл класс-контроллера

        // Создать объект, вызвать метод
    }

}