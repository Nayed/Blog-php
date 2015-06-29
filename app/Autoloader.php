<?php

namespace App;

class Autoloader{

    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($classname){
        if(strpos($classname, __NAMESPACE__ . '\\') === 0){
            $classname = str_replace(__NAMESPACE__ . '\\', '', $classname);
            $classname = str_replace('\\', '/', $classname);
            require __DIR__ . '/' . $classname . '.php';
        }
    }

}