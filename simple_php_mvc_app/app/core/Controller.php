<?php
    class Controller
    {
        protected string $Title = 'simple app: ';
        protected function Model($Model)
        {
            if(file_exists("../app/models/$Model.php"))
            {
                require_once "../app/models/$Model.php";
                return new $Model();
            }          
        }
        protected function View($View, $Data = [])
        {
            $BaseUrl = pathinfo($_SERVER['PHP_SELF'])['dirname'];
            $Title = $this->Title;
            require_once '../public/layout.php';
        }
    }