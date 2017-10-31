<?php


return array(
    'search'=>'search/search',
    'adminpanel/blogedit/([0-9]+)'=>'adminpanel/blogedit/$1',
    'adminpanel/blogdelete/([0-9]+)'=>'adminpanel/blogdelete/$1',
    'addblog'=>'adminpanel/addblog',
    'adminpanel/adminpanel/'=>'adminpanel/index',
    'adminpanel'=>'adminpanel/index',
    'reg'=>'main/reg',
    'blog/([0-9]+)'=>'blog/view/$1',
    'blog'=> 'blog/index', //виклик екшин index в контроллері blog
    'index.php'=>'main/index',
    '()'=>'main/index'
);
