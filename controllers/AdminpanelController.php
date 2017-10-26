<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 26.10.17
 * Time: 20:52
 */

include_once ROOT . '/models/Adminpanel.php';


class AdminpanelController
{
    public function actionIndex()
    {
        // додаткова перевірка на адміна
        if (session_id() == "") {
            session_start();
        }
        if (isset($_SESSION['user']) != null && ($_SESSION['user']) === "1") {

            require_once(ROOT . '/views/adminpanel/index.php');
            return true;
        }
    }

    public function actionAddblog()
    {
//unset($add_blog_errors);

        function check_length($value = "", $min, $max)
        {
            $result = (strlen($value) < $min || strlen($value) > $max);
            return !$result;
        }


        if (check_length($_POST['blog_title'], 5, 100)
            && check_length($_POST['blog_content'], 5, 100)) {
            Adminpanel::Addblog();
            require_once(ROOT . '/views/adminpanel/index.php');
            return true;
        }
        else{
    $add_blog_errors[]='Помилка! Недозволена кількість символів в тексті або назві !';
     require_once (ROOT . '/views/adminpanel/index.php');
    return $add_blog_errors;
    }
    }
}