<?php

    //including database settings
    include './lib/Database.php';

    class Model{

        //variable to store connection
        public $conn;

        public function __construct(){

            //make db object
            $db=new Database();
            
            $this->conn=$db->conn();
            //var_dump($db);

            //echo("model constructed");
        }
    }
?>