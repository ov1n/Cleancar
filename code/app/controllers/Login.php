<?php
    //include the models. once is a necessary 
    include_once './models/Customer.php';
    include_once './models/Receptionist.php';
    include_once './models/Manager.php';
    include_once './models/Service_employee.php';

    class Login extends Controller{
        //base controller just for extending
        //IN CASE OF OVERRIDE

        //overloaded view creation to get session variables to regular variables
        public static function create_view($view_name){

            //get an object from session if incorrect_login has happened
            $notification=Session::get("notification");
            require_once("./views/$view_name.php");
        }
        
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
            $unhashed=$_POST['password'];

            //hash the password
            $pwd=md5($unhashed);

            
            //Session::set("pwd", $pwd);
            //set logged in time
            Session::set("in_time",time());

            if($cust->check_credentials($uname,$pwd)){
                
                //set session variables to it through 
                Session::set("uname", $uname);

                //load customer view
                header("Location:home");

            }else if($man->check_credentials($uname,$pwd)){

                //set session variables to it through 
                Session::set("uname", $uname);

                //load manager view
                //echo("in man view");
                header("Location:manager");

            }else if($rec->check_credentials($uname,$pwd)){

                //set session variables to it through 
                Session::set("uname", $uname);

                //load receptionist view
                //echo("in rec view");
                header("Location:receptionist");

            }else if($emp->check_credentials($uname,$pwd)){

                //set session variables to it through 
                Session::set("uname", $uname);

                //load employee view
                //echo("in emp view");
                header("Location:employee");
            }else{
                //redirect to home with message
                header("Location:login");
                //set
                Session::set("notification","incorrect_login");
            }

            //destroy session
            //unset($_SESSION["username"]);
            //unset($_SESSION["password"]);
            //echo 'You have cleaned session';
        }

        //function to unset variables when logging out
        function logout(){

            //reset session
            Session::destroy();
            //set logout message maybe?
            Session::set("notification","logout");

            header("Location:home");
            //echo($_SESSION["username"]);
            //echo("wheres the output");
        }
    }
?>