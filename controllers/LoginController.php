<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 04.10.17
 * Time: 0:35
 */
//echo ("LoginContoller is run");
include_once (ROOT.'/header.php');

class LoginController
{


    public static function actionLogin()
    {

        $login = '';
       $password = '';
       // echo var_dump($_POST);
        if (isset($_POST['vhod'])) {

            $login = $_POST['login'];
            $password = md5($_POST['password']);
            $errors = false;

            $userId = LoginController::CheckUserData($login, $password);
            if ($userId == false) {

                $errors[] = 'невірний логін або пароль';
                return $errors;
                header("Location: ".$_SERVER['HTTP_REFERER']);
//echo $errors;
            } else
                LoginController::auth($userId);
           header("Location: ".$_SERVER['HTTP_REFERER']);
            echo 'logged!';
            return true;
        }

    }

    public static function auth($userId)
    {
        if (session_id() == "") {
            session_start();
        }
        $_SESSION['user'] = $userId;
        $_SESSION['login']=$_POST['login'];

    }

    public static function checkLogged()
    {
        if (session_id() == "") {
            session_start();
        }
       // session_start();
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];

        }
    }


    public static function CheckUserData($login, $password)
    {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM users WHERE login= :login AND password= :password';
        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();

        $user = $result->fetch();
        if ($user) {
            return $user['id'];
        }
        return false;
//echo print_r($_POST);
    }


    public static function actionLogOut()
    {

        unset($_SESSION['user']);
        unset($_SESSION['login']);
        session_destroy();
        header("Location: ".$_SERVER[HTTP_ORIGIN]);
        return true;
    }

    public static function actionRegistration()
    {
     unset($regerrors);
        $name = $_POST['name'];
        $login = $_POST['login'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];

        function check_length($value = "", $min, $max)
        {
            $result = (strlen($value) < $min || strlen($value) > $max);
            return !$result;
        }

        if (!empty($login) &&
            !empty($name) &&
            !empty($email) &&
            !empty($password)&&
        !empty($repassword)) {
        $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL);

        if (!check_length($login, 5, 10)) {
            $regerrors[] = 'Логін повинен бути довжиною від 5 до 10 символів';
        }
        if (!check_length($name, 5, 50)) {
            $regerrors[] = 'Iм\'я та прізвище повинно займати від 5 до 10 символів';
        }
        if (!check_length($password, 5, 10) && !check_length($repassword, 5, 10)) {
            $regerrors[] = 'Пароль повинен займати від 5 до 10 символів';
        }
        if (!$email_validate) {
            $regerrors[] = 'Е-мейл не пройшов валідацію';
        }
        if ($password !== $repassword) {
            $regerrors[] = 'Поля вводу пароля не співпадають';
        }
        if (isset($regerrors)){
            return $regerrors;
        }
    } else {
            $regerrors[] =  "Заповніть порожні поля";
            return $regerrors;
    }

        $db = Db::getConnection();
        $sql = 'SELECT login, email FROM users WHERE login= :login OR email= :email';
        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
//перевірка на входження логіна чи емейла в базі даних
        $records = $result->fetch(PDO::FETCH_ASSOC);
        if ($records) {
            $regerrors[] = 'Такий логін або е-мейл вже існує';
            //header("Location: ".$_SERVER['HTTP_REFERER']);
            return $regerrors;
        }
        else{
            //запис в БД нового користувача

        }

    }

}



