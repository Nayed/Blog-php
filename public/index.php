<?php

define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();

if(isset($_GET['p'])){
    $page = $_GET['p'];
}
else{
    $page = 'home';
}

if($page === 'home'){
    $controller = new \App\Controller\PostsController;
    $controller->index();
}
elseif($page === 'posts.categorie'){
    $controller->category();
}
elseif($page === 'posts.show'){
    $controller->show();
}
elseif($page === 'login'){
    $controller = new \App\Controller\UsersController;
    $controller->login();
}
