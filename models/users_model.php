<?php

class Users_Model{

    private $data;
    private $conn;

    public function __construct(){
        try {
            $dsn = 'mysql:host=localhost;dbname=shop';
            $this->conn = new PDO($dsn,'root','root');
        }catch(Exception $e){
            echo "erreur : sur le PDO<br>";
            die();
        }
    }

    public function getAll(){
        $sql = "SELECT * FROM user order by idpers";
        $st = $this->conn->prepare($sql);
        $st->execute();
        $this->data = $st->fetchAll(PDO::FETCH_ASSOC);
        return $this->data;
    }

    public function getOne($id){
        $sql = "select * from stagiaires where id = $id";
        $st = $this->conn->prepare($sql);
        $st->execute();
        $this->data = $st->fetch(PDO::FETCH_ASSOC);
        return $this->data;
    }

    public function insertOne($nom, $email, $password){
        $sql = "insert into user (pseudo, email, password) values ('$nom', '$email', '$password')";
        $st = $this->conn->prepare($sql);
        return $st->execute();
    }
    
    // function upadateOne : id 
    // function deleteOne : id
    // function insertMany : array

    function __destruct(){
        $this->conn = null;
    }

}