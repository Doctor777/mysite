<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 26.10.17
 * Time: 20:55
 */

class Adminpanel
{

    private static function can_upload($file)
    {
        // если имя пустое, значит файл не выбран
        if ($file['name'] == '')
            return 'Вы не выбрали файл.';

        /* если размер файла 0, значит его не пропустили настройки
        сервера из-за того, что он слишком большой */
        if ($file['size'] == 0)
            return 'Файл слишком большой.';

        // разбиваем имя файла по точке и получаем массив
        $getMime = explode('.', $file['name']);
        // нас интересует последний элемент массива - расширение
        $mime = strtolower(end($getMime));
        // объявим массив допустимых расширений
        $types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');

        // если расширение не входит в список допустимых - return
        if (!in_array($mime, $types))
            return 'Недопустимый тип файла.';

        return true;
    }

    private static function make_upload($file)
    {
        // формируем уникальное имя картинки: случайное число и name
        $name = mt_rand(0, 10000);
        copy($file['tmp_name'], ROOT . '/template/images/blogimages/' . $name);
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

    private static function WorkVithPriv($sql)
    {
        $db = Db::getConnection();


        // умова в  mysql якщо 1, то 0, /якщо 0, то 1

        $data = $db->prepare($sql);
        //$data->bindValue(':id', $id, PDO::PARAM_INT);
        // $data->bindValue(':banned', 1, PDO::PARAM_INT);

        if ($data->execute()) {
            return true;
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

    private static function AddGroupName($group_name)
    {

        $db = Db::getConnection();

        $sql = 'SELECT * FROM roles WHERE role = :group_name';
        // $row = $result->fetch();
        $result = $db->prepare($sql);
        $result->bindParam(':group_name', $group_name, PDO::PARAM_STR);
        $result->execute();
//перевірка на входження логіна чи емейла в базі даних
        $records = $result->fetch(PDO::FETCH_ASSOC);
        if (!$records) {
            //$db = Db::getConnection();
            $data = $db->prepare('INSERT INTO roles (role) VALUES (?) ');
            $data->bindValue(1, $_POST['add_group_name']);
            $data->execute();
            return true;
        }


    }

    public static function getRolesList()
    {

        $db = Db::getConnection();

        $rolelist = array();

        $result = $db->query("SELECT * FROM roles INNER JOIN priv ON priv.id = roles.id ORDER BY roles.id ASC");
        $i = 0;
//var_dump($result);

        while ($row = $result->fetch()) {
            //var_dump($row);
            $rolelist[$i]['id'] = $row['id'];
            $rolelist[$i]['role'] = $row['role'];
            $rolelist[$i]['rule'] = $row['rule'];
            $rolelist[$i]['val'] = $row['val'];
            $i++;
        }
        return $rolelist;


    }


private static function UpdateRules()
{

// затираємо два нам непотрібних останніх елементи масиву (службові)
    $values = array();
    $values = $_POST;
    array_splice($values, -2);

    $db = Db::getConnection();

    $sql = "SELECT * FROM priv ORDER BY rule ASC ";
    // $row = $result->fetch();
    $result = $db->prepare($sql);
    //$result->bindParam(':group_name', $group_name, PDO::PARAM_STR);
    $result->execute();
    $records = $result->fetchAll(PDO::FETCH_ASSOC);
    $a = 0;
    //селектимо з бази всі рули, і перебираємо в циклі, порівнюючи чи є
    //в нашому масиві з ПОСТу співпадіння по рулу та ід.
    // оскільки в ПОСТ попадає тільки лог 1, то якщо відсутній рул в СЕЛЕКТі, пишемо 0 в базу

    foreach ($records as $record => $rec_val) {
        $searched_rule = $records[$a]['rule'];
        $searched_id = $records[$a]['id'];

        if (in_array($searched_id, $values[$searched_rule])) {
//echo 'true';
// перевіряємо значення пишемо апдейт в базу, якщо в базі 0
            if ($records[$a]['val'] == 0) {
                $val = 1;
                $sql = "UPDATE priv SET val = $val WHERE id = $searched_id AND rule = $searched_rule";
                Adminpanel::WorkVithPriv($sql);
            }
        } else {
            // (нема такого ід в таких рулах, значить інсерт в базу
            $val=1;
            $sql = "INSERT INTO priv SET (id = $searched_id, rule = $searched_rule, val=$val)";
            Adminpanel::WorkVithPriv($sql);
        }
       // $values3=array($values[$searched_rule]);
      /*  if(($key = array_search($searched_rule, array($values[$searched_rule])) !== false)) {
            unset($values[$searched_rule][$key]);
        }*/

      unset($values[$searched_rule][$searched_id]);//!!! треба видалити по значенню
       // $values = array_diff($values3, $searched_id);
        $a++;

    }
    if (!empty($values)){
        foreach ($values as $key => $value ) {
            foreach ($value as $key2 =>$value2){
                $val=1;
                $sql = "INSERT INTO priv SET (id = $value2, rule = $key, val=$val)";
                Adminpanel::WorkVithPriv($sql);

            }

        }

    }

}



    public static function getUsersPermissionsList()
    {

        if (isset($_POST['add_group_name']) && $_POST['add_group_name']!=""){
            Adminpanel::AddGroupName($_POST['add_group_name']);
        }
        if (isset($_POST['edit_rules'])){

          Adminpanel::UpdateRules();
        }

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