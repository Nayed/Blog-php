<?php 

namespace App\Controller\Admin;
use Core\HTML\BootstrapForm;

class CategoriesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Categorie');
    }

    public function index(){
        $categories = $this->Categorie->all();
        $this->render('admin.categories.index', compact('categories'));
    }

    public function add(){
        if(!empty($_POST)){
            $result = $this->Categorie->create([
                'title' => $_POST['title']
            ]);
            return $this->index();
        }
        $form = new BootstrapForm($_POST);
        $this->render('admin.categories.edit', compact('form'));
    }

    public function edit(){
        if(!empty($_POST)){
            $result = $this->Categorie->update($_GET['id'], [
                'title' => $_POST['title']
            ]);
            return $this->index();
        }
        $category = $this->Categorie->find($_GET['id']);
        $form = new BootstrapForm($category);
        $this->render('admin.categories.edit', compact('form'));
    }

    public function delete(){
        if(!empty($_POST)){
            $result = $this->Categorie->delete($_POST['id']);
            return $this->index();
        }
    }
}