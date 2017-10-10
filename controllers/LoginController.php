<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 04.10.17
 * Time: 0:35
 */
//echo ("LoginContoller is run");

class LoginController
{
    public static function actionLogin()
    {

        $login = '';
        $password = '';
        echo var_dump($_POST);
        if (isset($_POST['vhod'])) {

            $login = $_POST['login'];
            $password = md5($_POST['password']);
            $errors[] = false;
//echo 'here';
            /*if (!User::checkLogin($login)){
$errors='невірний логін або пароль'

            */
            $userId = LoginController::CheckUserData($login, $password);
            if ($userId == false) {

                $errors[] = 'невірний логін або пароль';
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
        session_start();
        $_SESSION['user'] = $userId;
        $_SESSION['login']=$_POST['login'];

    }

    public static function checkLogged()
    {
        session_start();
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];

        }
    }


    public static function CheckUserData($login, $password)
    {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM users WHERE login= :login AND password= :password';
        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
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
        header("Location: ".$_SERVER['HTTP_REFERER']);
        return true;
    }

}



