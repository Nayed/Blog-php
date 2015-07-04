<?php

namespace App\Table;

use App\App;

class Article extends Table{

    public static function getLast(){
        return App::getDB()->query("
            SELECT articles.id, articles.title, articles.content, categories.title as categories 
            FROM articles 
            LEFT JOIN categories 
                on categorie_id = categories.id", 
            __CLASS__);
    }

    public function __get($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    public function getUrl(){
        return 'index.php?p=article&id=' . $this->id;
    }
    
    public function getPreview(){
        $html = '<p>' . substr($this->content, 0, 150) . '...</p>';
        $html .= '<p><a href="' . $this->getURL() . ' ">See the rest...</a></p>';
        return $html;
    }
}