<?php 

namespace Core\Auth;

use Core\Database\Database;

class DBAuth{

    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    /**
     * @param $username
     * @param $password
     * @return boolean
     */ 
    public function login($username, $password){
        $user = $this->db->prepare('SELECT * FROM users WHERE username = ?', [$username], 'users', true);
        if($user){
            return $user->password === sha1($password);
        }
        else{
            return false;
        }
    }

    public function logged(){
        return isset($_SESSION['auth']);
    }
}