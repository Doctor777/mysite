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
    public function actionLogin(){

        $login='';
        $password='';

        if (isset($_POST['submit'])){

            $login=$_POST['login'];
            $password=$_POST['password'];
            $errors=false;

            /*if (!User::checkLogin($login)){
$errors='невірний логін або пароль'

            */
$userId=LoginController::CheckUserData($login, $password);
if ($userId == false) {

    $errors = 'невірний логін або пароль';

}
else
    LoginController::auth($userId);
header("Location: /news/");

        }
return true;
    }

    public static function auth($userId){
session_start();
$_SESSION['user']=$userId;


    }

    public static function checkLogged(){
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

}




/*public function actionRun() {
  $sth = $this->db->prepare("SELECT id FROM users WHERE login = :login AND password = MD5(:password)");
  $sth->execute(array(
   ':login' => $_POST['login'],
   ':password' => $_POST['password']
  ));

  $data = $sth->fetchAll();
  $count = $sth = rowCount();
  if($count > 0) {
   Session::init();
   Session::set('loggedIn', true);

   /*header('Location: ../dashboard');
  } else {
   header('Location: ../login');*/

/*  }
    return true;
}*/



