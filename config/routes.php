<?php


return array(
    'adminpanel/blogedit/([0-9]+)'=>'adminpanel/blogedit/$1',
    'adminpanel/blogdelete/([0-9]+)'=>'adminpanel/blogdelete/$1',
    'searchadm'=>'adminpanel/searchadm',
    'addblog'=>'adminpanel/addblog',
    'adminpanel/adminpanel/'=>'adminpanel/index',
    'adminpanel'=>'adminpanel/index',
    'search'=>'search/search',
    'reg'=>'main/reg',
    'blog/([0-9]+)'=>'blog/view/$1',
    'blog'=> 'blog/index', //виклик екшин index в контроллері blog
    'index.php'=>'main/index',
    '()'=>'main/index'
);
