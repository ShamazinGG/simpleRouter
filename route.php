<?php

class Route
{
//    private $_uri = array();
//
//    public function add($uri, $file)
//    {
//        $this->_uri[$file] =   $uri;
//    }

    public function run()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if ($uri === '/')
            require 'main.php';
        elseif ($uri === 'user/create')
            require 'create.php';
        elseif ($uri === 'user/view' )
            require 'view.php';
        elseif ($uri == 'user/update')
            require 'update.php';
        elseif ($uri == 'user/delete')
            require 'delete.php';
        else
            require 'error404.php';



//        foreach ($this->_uri as $key => $value)
//        {
//            if ($uri == $value)
//            {
////                echo 'match! ' . $key;
////                echo 'match! ' . $key;
//                require $key;
//                return;
//            }
//        }
//        echo "404";
   }
}
