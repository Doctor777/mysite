<?php
include_once ROOT . '/models/Blog.php';

class BlogController
{
    public function actionIndex()
    {
        $blogList = array();
        $blogList = Blog::getBlogList();

        require_once(ROOT . '/views/blog/index.php');
        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $blogItem = Blog::getBlogItemById($id);
        }
        require_once(ROOT . '/views/blog/index.php');
        return true;
    }



}