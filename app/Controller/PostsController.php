<?php 

namespace App\Controller;

use Core\Controller\Controller;

class PostsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Post');
        $this->loadModel('Categorie');
    }

    public function index(){
        $posts = $this->Post->last();
        $categories = $this->Categorie->all();
        $this->render('posts.index', compact('posts', 'categories'));
    }

    public function category(){
        $categorie = $this->Categorie->find($_GET['id']);
        if($categorie === false){
            $this->notFound();
        }
        $articles = $this->Post->lastByCategorie($_GET['id']);
        $categories = $this->Categorie->all();
        $this->render('posts.categorie', compact('articles', 'categories', 'categorie'));
    }

    public function show(){

    }
}