<?php

class Database{

    public static function conn(){

        $host='localhost';
        $username='root';
        $password='';
        $db='cleancar';

        $conn = mysqli_connect($host,$username,$password,$db);
        
        if(mysqli_connect_errno()){
            die('Connection Error' . mysqli_connect_error());
        }
        return $conn;
    }

}