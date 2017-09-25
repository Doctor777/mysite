<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 19.09.17
 * Time: 12:14
 */

class Router
{
private $routes; // масив з роутами

public function __construct()
{
$routesPath=ROOT.'/config/routes.php';
$this->routes = include ($routesPath);
}

private function getURI()   //метод вертає строку запроса
{
    if (!empty($_SERVER['REQUEST_URI'])) {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}
public function run()
{
    //перевіряємо строку запроса
    $uri = $this->getURI();

    // перевіряємо чи є такий запрос в наших роутах
    foreach ($this->routes as $uriPattern => $path){
        //порівнюємо $uriPattern та $uri
        if (preg_match("~$uriPattern~", $uri)){

            //отримуємо внутрішній шлях із зовнішнього, відповідно до правил
            $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

            // забиваємо в масив складові строкИ запроса, розділені слешем
            $segments = explode('/',$internalRoute);

            //затираємо перший елемент масиву, до залишку додаємо Controller
            $controllerName = array_shift($segments).'Controller';
            $controllerName = ucfirst($controllerName); // робимо першу букву в назві великою

            //те саме робимо з екшинами
            $actionName = 'action'.ucfirst(array_shift($segments));

 /*           echo '<br>controller name:'.$controllerName;
            echo '<br>action name:'.$actionName;
            echo '<br>internalRoute:'.$internalRoute;
            echo '<br>uri:'.$uri;*/
            // все що залишилося в масиві після array_shift - це параметри
            $parameters = $segments;

            /*echo '<pre>';
            echo 'parameters: ';
            print_r($parameters);
            echo '</pre>';*/
            //die;

            //підключаємо файл класу контроллера
            $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
            if (file_exists($controllerFile)) {
              /*  echo 'file exist';*/
                include_once ($controllerFile);
            }
            //створюємо об"єкт класу контроллера
            $controllerObject = new $controllerName;
            //$result = $controllerObject->$actionName($parameters);
            $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
            if ($result != null) {
                break;  // перериває наш цикл пошуку співпадінь роутів
            }


          // echo '<pre>';
         //  print_r($path);
          /* print_r($controllerName);
           echo '<br>';
           print_r($actionName);

           // echo '+';*/
        }

 }

/*      print_r($this->routes);
    echo '<br>';
    print_r($uriPattern.'=>'.$path);*/
//echo '<br>Class Router, method run';*/

//  echo $uri;

}

}