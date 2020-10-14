<?php

    include './models/Customer.php';

    class Login extends Controller{
        //base controller just for extending
        //IN CASE OF OVERRIDE
        
        function authenticate(){

                $cust=new Customer();
                //get post data
                $uname=$_POST['user_name'];
                $pwd=$_POST['password'];

                $cust->check_credentials($uname,$pwd);
        }
    }
?>