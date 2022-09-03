<?php
return array(
    // 'uri' => 'Controller/method()/Parameter_position'
    'news/([0-9]+)$' => ['controller' => 'NewsController', 'action' => 'actionView', 'paramPosition' => [1]],
    'news$' => ['controller' => 'NewsController', 'action' => 'actionIndex', 'parameters' => false], // будет вызван метод actionIndex в классе NesController
    'products' => ['controller' => 'ProductController', 'action' => 'actionIndex', 'parameters' => false],
    'article' => ['controller' => 'ArticleController', 'action' => 'actionIndex', 'parameters' => false]
);