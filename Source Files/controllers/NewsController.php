<?php

class NewsController
{
    public function actionIndex()
    {
        echo 'NewsController actionIntex Простмотр новостей';
        return true;
    }

    public function actionView()
    {
        echo 'NewsController actionView Просмотр одной новости';
        return true;
    }

}