<?php 

namespace App\Controller;

use Core\Controller\Controller;
use \App;

class PostsController extends Controller{

    public function index(){
        $posts = App::getInstance()->getTable('Post')->last();
        $categories = App::getInstance()->getTable('Categorie')->all();
        $this->render('posts.index');
    }

    public function categories(){

    }

    public function show(){

    }
}