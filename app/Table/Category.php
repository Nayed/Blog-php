<?php

namespace App\Table;

use App\App;

class Category{

    private static $table = 'categories';

    public static function all(){
        return App::getDB()->query("
            SELECT * 
            FROM " . self::$table . "",
            __CLASS__);
    }
}