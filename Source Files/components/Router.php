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
        // Проверить наличие такого запроса в routes.php
        foreach($this->routes as $uriPattern => $path){
            if(preg_match("~$uriPattern~", $uri)){
                $segments = explode('/', $path);
                
                $controllerName = array_shift($segments).'Controller';
                
                $controllerName = ucfirst($controllerName);

                $actionName = 'action' . ucfirst(array_shift($segments));

                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                echo $controllerFile;
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