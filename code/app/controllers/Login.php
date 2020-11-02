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

            //session_start();
            //echo($_SESSION["test"]);
            //set database objects to variables
            $cust=new Customer();
            $rec=new Receptionist();
            $man=new Manager();
            $emp=new Service_employee();
            
            
            //get post data 
            $uname=$_POST['user_name'];
            $pwd=$_POST['password'];
            //set session variables to it through 
            Session::set("uname", $uname);
            Session::set("pwd", $pwd);
            //$_SESSION["uname"] = $uname;
            //$_SESSION["pwd"] = $pwd;
            //echo($_SESSION["pwd"]);

            if($cust->check_credentials($uname,$pwd)){
                //load customer view
                //echo("in cust view");
                //echo($_SESSION["uname"]);
                header("Location:home");
                echo($_SESSION["uname"]);

            }else if($man->check_credentials($uname,$pwd)){
                //load manager view
                //echo("in man view");
                header("Location:manager");

            }else if($rec->check_credentials($uname,$pwd)){
                //load receptionist view
                //echo("in rec view");
                header("Location:receptionist");

            }else if($emp->check_credentials($uname,$pwd)){
                //load employee view
                //echo("in emp view");
                header("Location:employee");
            }else{
                header("Location:login");
                Session::set("uname","incorrect");
                //echo("where");
                //echo("wrong credentials");
                //puts a js alert box function;
                //echo "<script type='text/javascript' src='file.js'></script>";
            }

            //destroy session
            //unset($_SESSION["username"]);
            //unset($_SESSION["password"]);
            //echo 'You have cleaned session';
        }

        //function to unset variables when logging out
        function logout(){

            //reset session
            echo($_SESSION["username"]);
            Session::destroy();
            //header("Location:home");
            echo($_SESSION["username"]);
            echo("wheres the output");
        }
    }
?>