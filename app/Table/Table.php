<?php

namespace App\Table;

use App\App;

class Table{

    protected static $table;

    private static function getTable(){
        if(is_null(static::$table)){
            $classname = explode('\\', get_called_class());
            static::$table = strtolower(end($classname)) . 's';
        }
        return static::$table;
    }

    public static function find($id){
        return App::getDB()->prepare("
            SELECT * 
            FROM " . static::getTable() . "
            WHERE id = ?", [$id],
            get_called_class(), true);
    }

    public static function all(){
        return App::getDB()->query("
            SELECT * 
            FROM " . static::getTable() . "",
            get_called_class());
    }

    public function __get($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }
}