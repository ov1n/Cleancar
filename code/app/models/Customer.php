<?php
    include 'Model.php';

    class Customer extends Model{
        
        function check_credentials($uname,$pwd){
            if(conn()){
                echo("wada");
            }
        }
        
    }
?>