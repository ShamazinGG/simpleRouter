<?php
require_once 'partials/header.php';
require_once 'users/users.php';

$uri = $_SERVER['REQUEST_URI'];

$routes = [
    "/" => "main.php",
    "/user/create" => "create.php",
    "/user/{id}/view" => "view.php",
    "/user/{id}/update" => "update.php",
    "/user/{id}/delete" => "delete.php",




];

foreach ($routes as $route => $file) {
    $match = true;
    $param = [];
    //var_dump($route);
    $routeParts = explode('/', $route);
    //var_dump($routeParts);
    $uriParts = explode('/', $uri);

    foreach ($uriParts as $key => $uriPartName) {
        if (!isset($routeParts[$key])){
            $match = false;
            continue;
        }
        if (substr($routeParts[$key], 0, 1) == '{' && substr($routeParts[$key], -1, 1) == '}') {
            $match = true;
            $param[trim($routeParts[$key], '{}')] = $uriParts[$key];
            //var_dump($userId);

        } elseif ($routeParts[$key] !== $uriParts[$key]) {
            $match = false;
        }
    }
    if ($match)
    {
        require $file;
    }
}

die(404);

//$segments = explode('/', trim($uri, '/'));
//
//if($segments[0] === 'user')
//{
//    if($segments[1] === 'create')
//        $file = 'create.php';
//    elseif($segments[1] === 'view')
//        $file = 'view.php';
//    elseif($segments[1] === 'update')
//        $file = 'update.php';
//    elseif($segments[1] === 'delete')
//        $file = 'delete.php';
//
//}
//
//else
//{
//    if($uri === '/')
//        $file = 'main.php';
//    else
//        $file = 'error404.php';
//}
//


//$route->run();

