<?php
    //include the models
    include './models/Customer.php';
    include './models/Receptionist.php';
    include './models/Manager.php';
    include './models/Service_employee.php';

    class Login extends Controller{
        //base controller just for extending
        //IN CASE OF OVERRIDE
        
        function authenticate(){

                $cust=new Customer();
                $rec=new Receptionist();
                $man=new Manager();
                $emp=new Service_employee();
                //check if variable is set
                
                //session commence
                session_start();
                
                //get post data
                $uname=$_POST['user_name'];
                $pwd=$_POST['password'];
                $_SESSION["uname"] = $uname;
                $_SESSION["pwd"] = $pwd;

                if($cust->check_credentials($uname,$pwd)){
                    //load customer view
                }else if($man->check_credentials($uname,$pwd)){
                    //load manager view

                }else if($rec->check_credentials($uname,$pwd)){
                    //load receptionist view
                }else if($emp->check_credentials($uname,$pwd)){
                    //load employee view
                }else{
                    //print error not avaiable
                }

                //destroy session
                unset($_SESSION["username"]);
                unset($_SESSION["password"]);
                echo 'You have cleaned session';
        }
    }
?>