<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 26.10.17
 * Time: 20:55
 */

class Adminpanel
{
    public static function Addblog()
    {
        if (session_id() == "") {
            session_start();
        }
        $db = Db::getConnection();
        $data = $db->prepare('INSERT INTO blogs (title, content, short_content, author_name, preview) 
VALUES (?, ?, ?, ?, ?) ');
        $data->bindValue(1, $_POST['blog_title']);
        $data->bindValue(2, $_POST['blog_content']);
        $data->bindValue(3, mb_substr($_POST['blog_content'], 0, 80));
        $data->bindValue(4, $_SESSION['login']);
        $data->bindValue(5, '../шлях до картинки');
        $data->execute();
        return true;

        //  header("Location: ".$_SERVER['HTTP_REFERER']);

    }


    public static function BlogEdit($id)
    {

        //вертаємо цілочисельне значення ІД
        $id = intval($id);

// якщо ІД - істина, то берем інфу з БД
        if ($id) {

//echo 'id='.$id;
            $db = Db::getConnection();
            $sql = 'UPDATE blogs 
SET title = :title, 
content = :content, 
short_content = :short_content, 
author_name = :author_name, 
preview = :preview 
WHERE id = :id';
            $data = $db->prepare($sql);
            $data->bindValue(':title', $_POST['blog_title']);
            $data->bindValue(':content', $_POST['blog_content']);
            $data->bindValue(':short_content', mb_substr($_POST['blog_content'], 0, 80));
            $data->bindValue(':author_name', $_SESSION['login']);
            $data->bindValue(':preview', '../шлях до картинки');
            $data->bindValue(':id', $id, PDO::PARAM_INT);

            if ($data->execute()) {
                $res = 'Запис успішно оновлено!';
            } else {
                $res = 'помилка запису!';

            }
            return $res;


        }


    }

    public static function BlogDelete($id)
    {

        //вертаємо цілочисельне значення ІД
        $id = intval($id);

// якщо ІД - істина, то берем інфу з БД
        if ($id) {

//echo 'id='.$id;
            $db = Db::getConnection();
            $sql = 'DELETE FROM blogs WHERE id = :id';
            $data = $db->prepare($sql);
            $data->bindValue(':id', $id, PDO::PARAM_INT);

            if ($data->execute()) {
                return true;
            }

        }


    }
}