<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 04.10.17
 * Time: 0:35
 */

class login
{
public function run() {
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
   header('Location: ../dashboard');
  } else {
   header('Location: ../login');
  }
}
}