<?php 

class Query{

    public static function __callStatic($methods, $arguments){
        $query = new \Core\Database\QueryBuilder;
        return call_user_func_array([$query, $methods], $arguments);

    }
}