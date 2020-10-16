<?php

    include './models/Customer.php';

    class Login extends Controller{
        //base controller just for extending
        //IN CASE OF OVERRIDE
        
        function authenticate(){

                $cust=new Customer();
                //check if variable is set
                
                //session commence
                session_start();
                
                //get post data
                $uname=$_POST['user_name'];
                $pwd=$_POST['password'];
                $_SESSION["uname"] = $uname;
                $_SESSION["pwd"] = $pwd;

                $cust->check_credentials($uname,$pwd);
        }
    }
?>