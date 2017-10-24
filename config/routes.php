<?php


return array(
    'search'=>'search/search',
    'reg'=>'main/reg',
    'blog/([0-9]+)'=>'blog/view/$1',
    'blog'=> 'blog/index', //виклик екшин index в контроллері blog
    'index.php'=>'main/index',
    '()'=>'main/index',
    //'news/login'=>'../login',
    //'products' => 'product/list',
);
