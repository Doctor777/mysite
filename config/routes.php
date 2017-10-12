<?php


return array(
    'reg'=>'main/reg',
    'news/([0-9]+)'=>'news/view/$1',
    'news'=> 'news/index',          //виклик екшин index в контроллері news
    'index.php'=>'main/index',
    '()'=>'main/index',
    //'news/login'=>'../login',
    //'products' => 'product/list',
);
