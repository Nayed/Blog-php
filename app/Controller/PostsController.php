<?php 

namespace App\Controller;

use Core\Controller\Controller;
use \App;

class PostsController extends AppController{

    public function index(){
        $posts = App::getInstance()->getTable('Post')->last();
        $categories = App::getInstance()->getTable('Categorie')->all();
        $this->render('posts.index', compact('posts', 'categories'));
    }

    public function categories(){

    }

    public function show(){

    }
}