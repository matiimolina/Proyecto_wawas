<?php

require_once 'config.php';

class userModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host='. MYSQL_HOST .';dbname='. MYSQL_DB .';charset=utf8', MYSQL_USER, MYSQL_PASS);
    }

    public function getUser($username){
        $query = $this->db->prepare('SELECT * FROM users WHERE user_name = ?');
        $query->execute([$username]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    public function getAllUsers(){
        $query = $this->db->prepare('SELECT * FROM users');
        $query->execute();
        $users = query->fetchAll(PDO:FETCH_OBJ);
        return $users;
    }
}