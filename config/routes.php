<?php


return array(
    'search'=>'search/search',
    'reg'=>'main/reg',
    'blog/([0-9]+)'=>'blog/view/$1',
    'blog'=> 'blog/index',
    'news/([0-9]+)'=>'news/view/$1',
    'news'=> 'news/index',          //виклик екшин index в контроллері news
    'index.php'=>'main/index',
    '()'=>'main/index',
    //'news/login'=>'../login',
    //'products' => 'product/list',
);
