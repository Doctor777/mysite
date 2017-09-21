<?php


// Загальні налаштування
ini_set('display_errors', 1);
error_reporting(E_ALL); // вмикаємо відображення всіх помилок

// підключення файлів системи
define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Router.php');
require_once (ROOT.'/components/Db.php');


//виклик Router

/*var_dump($_GET);
var_dump($_SERVER["REQUEST_URI"]);*/

$router = new Router();
$router->run();