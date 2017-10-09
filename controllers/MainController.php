<?php

include_once (ROOT.'/models/Main.php');

class MainController
{
    public function actionIndex()
    {
        require_once(ROOT . '/views/main/index.php');
return true;
    }


}