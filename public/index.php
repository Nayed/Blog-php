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

$postController = new \App\Controller\PostsController();
$userController = new \App\Controller\UsersController();
$adminController = new \App\Controller\Admin\PostsController();
if($page === 'home'){
    $postController->index();
}
elseif($page === 'posts.categorie'){
    $postController->category();
}
elseif($page === 'posts.show'){
    $postController->show();
}
elseif($page === 'login'){
    $userController->login();
}
elseif ($page === 'admin.posts.index') {
    $adminController->index();
}
