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
}