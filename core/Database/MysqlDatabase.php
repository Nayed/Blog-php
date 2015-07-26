<?php

namespace Core\Database;

use \PDO;

class MysqlDatabase extends Database{

    private $db_name, $db_user, $db_pass, $db_host, $pdo;

    public function __construct($db_name, $db_user = 'root', $db_pass = '', $db_host = 'localhost'){
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    private function getPDO(){
        if(is_null($this->pdo)){
            $pdo = new PDO('mysql:dbname=blog-php;host=localhost', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    public function query($statement, $className = null, $one = false){
        $req = $this->getPDO()->query($statement);
        if(strpos($statement, 'UPDATE') === 0 || strpos($statement, 'INSERT') === 0 || strpos($statement, 'DELETE') === 0){
            return $req;
        }
        if(is_null($className)){
            $req->setFetchMode(PDO::FETCH_OBJ);
        }
        else{
            $req->setFetchMode(PDO::FETCH_CLASS, $className);
        }
        if($one){
            $data = $req->fetch();
        }
        else{
            $data = $req->fetchAll();
        }
        return $data;
    }

    public function prepare($statement, $attributes, $className = null, $one = false){
        $req = $this->getPDO()->prepare($statement);
        $res = $req->execute($attributes);
        if(strpos($statement, 'UPDATE') === 0 || strpos($statement, 'INSERT') === 0 || strpos($statement, 'DELETE') === 0){
            return $res;
        }
        if(is_null($className)){
            $req->setFetchMode(PDO::FETCH_OBJ);
        }
        else{
            $req->setFetchMode(PDO::FETCH_CLASS, $className);
        }
        $req->setFetchMode(PDO::FETCH_CLASS, $className);
        if($one){
            $data = $req->fetch();
        }
        else{
            $data = $req->fetchAll();
        }
        return $data;
    }

    public function lastInsertId(){
        return $this->getPDO()->lastInsertId();
    }
}