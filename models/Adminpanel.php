<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 26.10.17
 * Time: 20:55
 */

class Adminpanel
{
    public static function Addblog(){
        if (session_id() == "") {
            session_start();
        }
            $db = Db::getConnection();
            $data = $db->prepare('INSERT INTO blogs (title, content, short_content, author_name, preview) 
VALUES (?, ?, ?, ?, ?) ');
            $data->bindValue(1, $_POST['blog_title']);
            $data->bindValue(2, $_POST['blog_content']);
            $data->bindValue(3, mb_substr($_POST['blog_content'],0,80));
            $data->bindValue(4, $_SESSION['login']);
            $data->bindValue(5, '../шлях до картинки');
            $data->execute();
            return true;

          //  header("Location: ".$_SERVER['HTTP_REFERER']);

        }
}