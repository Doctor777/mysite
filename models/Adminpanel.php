<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 26.10.17
 * Time: 20:55
 */

class Adminpanel
{

    private static function can_upload($file){
        // если имя пустое, значит файл не выбран
        if($file['name'] == '')
            return 'Вы не выбрали файл.';

        /* если размер файла 0, значит его не пропустили настройки
        сервера из-за того, что он слишком большой */
        if($file['size'] == 0)
            return 'Файл слишком большой.';

        // разбиваем имя файла по точке и получаем массив
        $getMime = explode('.', $file['name']);
        // нас интересует последний элемент массива - расширение
        $mime = strtolower(end($getMime));
        // объявим массив допустимых расширений
        $types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');

        // если расширение не входит в список допустимых - return
        if(!in_array($mime, $types))
            return 'Недопустимый тип файла.';

        return true;
    }

    private static function make_upload($file){
        // формируем уникальное имя картинки: случайное число и name
        $name = mt_rand(0, 10000);
        copy($file['tmp_name'], ROOT.'/template/images/blogimages/' . $name);
        $new_name = '/template/images/blogimages/' . $name;
        return $new_name;
    }

    private static function Setphoto()
    {
        if (isset($_FILES['photo'])) {
            // проверяем, можно ли загружать изображение
            $check = Adminpanel::can_upload($_FILES['photo']);

            if ($check === true) {
                // загружаем изображение на сервер
                $new_name = Adminpanel::make_upload($_FILES['photo']);
                // echo "<strong>Файл успешно загружен!</strong>";
            } else {
                $new_name = "";
            }
            return $new_name;
        }
    }

    public static function Addblog()
    {
        $new_name = Adminpanel::Setphoto();
        if (session_id() == "") {
            session_start();
        }



        $db = Db::getConnection();
        $data = $db->prepare('INSERT INTO blogs (title, content, short_content, author_name, preview) 
VALUES (?, ?, ?, ?, ?) ');
        $data->bindValue(1, $_POST['blog_title']);
        // $data->bindValue(2, $_POST['blog_content']);
        $data->bindValue(2, htmlentities(nl2br($_POST['blog_content'], ENT_QUOTES)));
        $data->bindValue(3, mb_substr($_POST['blog_content'], 0, 80));
        $data->bindValue(4, $_SESSION['login']);
        $data->bindValue(5, $new_name);
        $data->execute();
        return true;

        //  header("Location: ".$_SERVER['HTTP_REFERER']);

    }


    public static function BlogEdit($id)
    {
        //if ($_POST['preview']=='') {
            $new_name = Adminpanel::Setphoto();
        //}else{
         //   $new_name = $_POST['preview'];
        //}
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
            $data->bindValue(':content', htmlentities(nl2br($_POST['blog_content'], ENT_QUOTES)));

            //$data->bindValue(':content', $_POST['blog_content']);
            $data->bindValue(':short_content', mb_substr($_POST['blog_content'], 0, 80));
            $data->bindValue(':author_name', $_SESSION['login']);
            $data->bindValue(':preview', $new_name);
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

    public static function getBlogItemBySearch($context)
    {

        $db = Db::getConnection();
        $sql = "SELECT * from blogs WHERE title OR content LIKE '%$context%'";
        $result = $db->prepare($sql);
        $result->execute();
        $blogList = $result->fetchAll(PDO::FETCH_ASSOC);
        return $blogList;
        // header("Location: ".$_SERVER['HTTP_REFERER']);
    }

    public static function getUsersList()
    {
        //запрос до БД

        $db = Db::getConnection();

        $userslist = array();

        $result = $db->query('SELECT * FROM users ORDER BY login ASC');
        $i = 0;
//var_dump($result);

        while ($row = $result->fetch()) {
            //var_dump($row);
            $userslist[$i]['id'] = $row['id'];
            $userslist[$i]['login'] = $row['login'];
            $userslist[$i]['email'] = $row['email'];
            $userslist[$i]['permissions'] = $row['permissions'];
            $userslist[$i]['banned'] = $row['banned'];
            $userslist[$i]['online'] = $row['online'];
            $i++;
        }
        return $userslist;

    }

    public static function Userban($id)
    {
        //вертаємо цілочисельне значення ІД
        $id = intval($id);

// якщо ІД - істина, то берем інфу з БД
        if ($id) {

//echo 'id='.$id;
            $db = Db::getConnection();
            $sql = 'UPDATE users SET banned = IF(banned = 1, 0 ,1) WHERE id = :id ';

            // умова в  mysql якщо 1, то 0, /якщо 0, то 1

            $data = $db->prepare($sql);
            $data->bindValue(':id', $id, PDO::PARAM_INT);
            // $data->bindValue(':banned', 1, PDO::PARAM_INT);

            if ($data->execute()) {
                return true;
            }

        }

    }


    public static function Userdelete($id)
    {

        //вертаємо цілочисельне значення ІД
        $id = intval($id);

// якщо ІД - істина, то берем інфу з БД
        if ($id) {

//echo 'id='.$id;
            $db = Db::getConnection();
            $sql = 'DELETE FROM users WHERE id = :id';
            $data = $db->prepare($sql);
            $data->bindValue(':id', $id, PDO::PARAM_INT);

            if ($data->execute()) {
                return true;
            }

        }

    }

    public static function getUsersPermissionsList()
    {
        //запрос до БД

        $db = Db::getConnection();

        $userslist = array();

        $result = $db->query('SELECT * FROM users ORDER BY login ASC');
        $i = 0;
//var_dump($result);

        while ($row = $result->fetch()) {
            //var_dump($row);
            $userslist[$i]['id'] = $row['id'];
            $userslist[$i]['login'] = $row['login'];
            $userslist[$i]['email'] = $row['email'];
            $userslist[$i]['permissions'] = $row['permissions'];
            $userslist[$i]['banned'] = $row['banned'];
            $userslist[$i]['online'] = $row['online'];
            $i++;
        }
        return $userslist;

    }

}