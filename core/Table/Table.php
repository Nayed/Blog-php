<?php

namespace Core\Table;

use Core\Database\Database;

class Table{

    protected $table;
    protected $db;

    public function __construct(\Core\Database\Database $db){
        $this->db = $db;
        if(is_null($this->$table)){
            $parts = explode('\\', get_class($this));
            $className = end($parts);
            $this->table = strtolower(str_replace('Table', '', $className));
        }
    }

    public function all(){
        return $this->db->query('SELECT * FROM articles');
    }
}