<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 19.09.17
 * Time: 15:13
 */

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
        // echo 'перегляд однієї новини';
        return true;
    }
}