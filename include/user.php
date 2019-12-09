<?php
include_once 'db.php';
class User extends DB{

    private $nombre;
    private $username;

    public function userExists($user, $pass){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('select * from usuarios where user = :user and password = :pass');
        $query->execute(['user'=>$user, 'pass'=>$md5pass]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
        
    }
    public function setUser($user){
        $query = $this->connect()->prepare('select * from usuarios where user = :user');
        $query->execute(['user'=>$user]);
        foreach($query as $currentUser){
            $this->nombre = $currentUser['user'];
        }
    }
}

?>