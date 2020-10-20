<?php
    //include the models. once is a necessary 
    include_once './models/Customer.php';
    include_once './models/Receptionist.php';
    include_once './models/Manager.php';
    include_once './models/Service_employee.php';

    class Login extends Controller{
        //base controller just for extending
        //IN CASE OF OVERRIDE
        
        function authenticate(){

                //set database objects to variables
                $cust=new Customer();
                $rec=new Receptionist();
                $man=new Manager();
                $emp=new Service_employee();
                
                //session commence
                session_start();
                
                //get post data
                $uname=$_POST['user_name'];
                $pwd=$_POST['password'];
                $_SESSION["uname"] = $uname;
                $_SESSION["pwd"] = $pwd;

                if($cust->check_credentials($uname,$pwd)){
                    //load customer view
                    echo("in cust view");
                    header("Location:home");

                }else if($man->check_credentials($uname,$pwd)){
                    //load manager view
                    //echo("in man view");
                    header("Location:manager_home");

                }else if($rec->check_credentials($uname,$pwd)){
                    //load receptionist view
                    //echo("in rec view");
                    header("Location:manager_home");
                }else if($emp->check_credentials($uname,$pwd)){
                    //load employee view
                    //echo("in emp view");
                }else{
                    echo("wrong credentials");
                    
                }

                //destroy session
                unset($_SESSION["username"]);
                unset($_SESSION["password"]);
                //echo 'You have cleaned session';
        }
    }
?>