<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 19.09.17
 * Time: 15:13
 */

include_once ROOT.'/models/News.php';

class NewsController
{
    public function actionIndex()
    {
       //echo '<br><br>Список новин';
        $newsList = array();
        $newsList = News::getNewsList();

        require_once (ROOT.'/views/news/index.php');

        /*echo '<pre>';
        print_r($newsList);
        echo '</pre>';*/
        //echo '<br><br>Список новин';
        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $newsItem=News::getNewsItemById($id);
       /* echo '<pre>';
        print_r($newsItem);
        echo '</pre>';
        echo 'actionView';*/
        }

      /*  echo '<br>'.$category;
        echo '<br>'.$id;*/

       // echo 'перегляд однієї новини';
        return true;
    }
}