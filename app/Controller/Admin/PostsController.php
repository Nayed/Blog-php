<?php 

namespace App\Controller\Admin;
use Core\HTML\BootstrapForm;

class PostsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Post');
    }

    public function index(){
        $posts = $this->Post->all();
        $this->render('admin.posts.index', compact('posts'));
    }

    public function add(){
        if(!empty($_POST)){
            $result = $this->Post->create([
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'categorie_id' => $_POST['categorie_id']
            ]);

            if($result){
                header('Location: admin.php?p=admin.posts.edit&id=' . App::getInstance()->getDb()->lastInsertId());
            }
        }
        $this->loadModel('Categorie');
        $categories = $this->Categorie->extract('id', 'title');
        $form = new BootstrapForm($_POST);
    }

    public function edit(){

    }

    public function delete(){

    }
}