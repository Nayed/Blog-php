<?php

namespace App\Table;
use Core\Table\Table;

class PostTable extends Table {
    
    /**
     * Recover last articles
     * @return array
     */
    public function last(){
        return $this->query("
            SELECT articles.id, articles.title, articles.content, categories.title as categories 
            FROM articles 
            LEFT JOIN categories 
                on categorie_id = categories.id
            ORDER BY articles.date DESC");
    }
}