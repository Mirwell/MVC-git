<?php
return array(
    // 'uri' => 'Controller/method()'
    'news/([0-9]+)$' => ['controller' => 'NewsController', 'action' => 'actionView', 1],
    'news$' => ['controller' => 'NewsController', 'action' => 'actionIndex', 0], // будет вызван метод actionIndex в классе NesController
    'products' => ['controller' => 'ProductController', 'action' => 'actionIndex', 0],
    'article' => ['controller' => 'ArticleController', 'action' => 'actionIndex', 0]
);