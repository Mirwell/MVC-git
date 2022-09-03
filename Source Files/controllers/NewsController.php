<?php

class NewsController
{
    public function actionIndex()
    {
        echo 'NewsController actionIntex Простмотр новостей';
        return true;
    }

    public function actionView($number)
    {
        echo "NewsController actionView Просмотр одной новости {$number}";
        return true;
    }

}