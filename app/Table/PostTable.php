<?php

namespace App\Table;
use Core\Table\Table;

class PostTable extends Table {
    
    protected $table = 'articles';

    /**
     * Find last articles
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

    /**
     * Find last articles of the category
     * @param $categorie_id int
     * @return array
     */
    public function lastByCategorie($categorie_id){
        return $this->query("
            SELECT articles.id, articles.title, articles.content, categories.title as categories 
            FROM articles 
            LEFT JOIN categories 
                on categorie_id = categories.id
            WHERE articles.categorie_id = ?
            ORDER BY articles.date DESC", [$categorie_id]);
    }

    /**
     * Find a single article with it categorie
     * @param $id int
     * @return \App\Entity\PostEntity
     */
    public function findWithCategory($id){
        return $this->query("
            SELECT articles.id, articles.title, articles.content, articles.date, categories.title as categories 
            FROM articles 
            LEFT JOIN categories 
                on categorie_id = categories.id
            WHERE articles.id = ?", [$id], true);
    }
}