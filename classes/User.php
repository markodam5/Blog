<?php

class User{

    private $db;
    private $session;

    public function __construct(){
        $this->db = Database::getInstance();
        $this->session = new Session();
    }

    public function loginUser(){
       // Add data: 
       $username = $_POST['username'];
       $password = md5($_POST['password']);
      
       // QUERY:
       $query = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'";
       $row = $this->db->select($query);

       if($row !== FALSE){
           $this->session->start();
           $this->session->set("userLogin",true);
           // $this->session->set("username", $username);
           echo "<script>window.location = 'http://localserver.local/blog/admin/loggedin.php';</script>";

       }else{
           return false;
       }

  }

}


