<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 19.09.17
 * Time: 17:47
 */


class News
{


    public static function getNewsItemById($id)
    {
        //вертаємо цілочисельне значення ІД
        $id = intval($id);

// якщо ІД - істина, то берем інфу з БД
        if ($id) {

//echo 'id='.$id;
            $db = Db::getConnection();
            $result = $db->query('SELECT * from news WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $newsItem = $result->fetch();

            return $newsItem;

        }
        //запрос до БД
    }

    public static function getNewsList()
    {
        //запрос до БД

        $db = Db::getConnection();

        $newslist = array();

        $result = $db->query('SELECT id, title, date, short_content FROM news ORDER BY date DESC LIMIT 10');
        //  $result = $db->query('SELECT id, title, date, content, SUBSTRING(content,10,100) FROM news ORDER BY date DESC LIMIT 10');
        $i = 0;
//var_dump($result);

        while ($row = $result->fetch()) {
            //var_dump($row);
            $newslist[$i]['id'] = $row['id'];
            $newslist[$i]['title'] = $row['title'];
            $newslist[$i]['date'] = $row['date'];
            $newslist[$i]['short_content'] = $row['short_content'];
            $i++;
        }
        return $newslist;

    }
}