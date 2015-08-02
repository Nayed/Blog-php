<?php

define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();

if(isset($_GET['p'])){
    $page = $_GET['p'];
}
else{
    $page = 'posts.index';
}

$page = explode('.', $page);
$action = $page[1];
$controller = '\App\Controller\\' . ucfirst($page[0]) . 'Controller';
$controller = new $controller();
$controller->$action();