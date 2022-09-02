<?php

class ProductController
{
    public function actionIndex()
    {
        echo 'ProductController actionIntex Простмотр продуктов';
        return true;
    }

    public function actionView()
    {
        echo 'NewsController actionView Просмотр одного продукта';
        return true;
    }

}
