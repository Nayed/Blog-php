<?php 

namespace App\Controller;

use Core\Database\QueryBuilder;

class DemoController extends AppController{

    public function index(){
        //$query = new QueryBuilder();
        //echo $query
        require ROOT . '/Query.php';
        echo \Query::select('id', 'title', 'content')
            ->from('articles', 'Post')
            ->where('Post.categorie_id = 1')
            ->where('Post.date > NOW()');
    }
}