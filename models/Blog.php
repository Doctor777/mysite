<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 19.09.17
 * Time: 17:47
 */


class Blog
{

    public static function getBlogItemById($id)
    {
        //вертаємо цілочисельне значення ІД
        $id = intval($id);

// якщо ІД - істина, то берем інфу з БД
        if ($id) {

//echo 'id='.$id;
            $db = Db::getConnection();
            $result = $db->query('SELECT * from blogs WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $blogItem = $result->fetch();

            return $blogItem;

        }
        //запрос до БД
    }

    public static function getBlogList()
    {
        //запрос до БД

        $db = Db::getConnection();

        $bloglist = array();

        $result = $db->query('SELECT id, title, date, short_content FROM blogs ORDER BY date DESC LIMIT 10');
        $i = 0;
//var_dump($result);

        while ($row = $result->fetch()) {
            //var_dump($row);
            $bloglist[$i]['id'] = $row['id'];
            $bloglist[$i]['title'] = $row['title'];
            $bloglist[$i]['date'] = $row['date'];
            $bloglist[$i]['short_content'] = $row['short_content'];
            $i++;
        }
        return $bloglist;

    }

    public static function AddBlogComment($id, $comment){
        $db = Db::getConnection();
        $data = $db->prepare('INSERT INTO blog_comments VALUES (:id, :comment, :username)');
        $data->bindParam(':id',$id);
        $data->bindParam(':comment', $comment);
        $data->bindParam('username', $_SESSION['user']);
        $result = $data->execute();

        return $result;

    }

}