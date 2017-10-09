<?php
include_once ROOT . '/models/News.php';

class NewsController
{
    public function actionIndex()
    {
        //echo '<br><br>Список новин';
        $newsList = array();
        $newsList = News::getNewsList();

        require_once(ROOT . '/views/news/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $newsItem = News::getNewsItemById($id);
        }
        require_once(ROOT . '/views/news/index.php');
        // echo 'перегляд однієї новини';
        return true;
    }
}