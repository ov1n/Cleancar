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

            //echo(Session::get("login"));
            $notification=Session::get("login");
            require_once("./views/$view_name.php");
            Session::unset("login");
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

            //var_dump($man);
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

                //set loggedin to session
                Session::set("login","loggedin");

                header("Location:manager");

            }else if($rec->check_credentials($uname,$pwd)){

                //set session variables to it through 
                Session::set("uname", $uname);

                //load receptionist view
                //echo("in rec view");

                //set loggedin to session
                Session::set("login","loggedin");

                header("Location:receptionist");

            }else if($emp->check_credentials($uname,$pwd)){

                //set session variables to it through 
                Session::set("uname", $uname);

                //load employee view
                //echo("in emp view");

                //set loggedin to session
                Session::set("login","loggedin");

                header("Location:employee");
            }else{
                //redirect to home with message
                header("Location:login");
                //set
                Session::set("login","incorrect_login");
            }

        }

        //function to unset variables when logging out
        function logout(){

            //reset session
            Session::destroy();
            //set logout message maybe?
            Session::set("notification","logout");
            Session::set("login","");

            header("Location:home");
            //echo($_SESSION["username"]);
            //echo("wheres the output");
        }

        //function to automatically logout if timeout
        function timeout($curr_time){

            //getting times from session
            $in_time=Session::get("in_time");
            
            //timeout duration is declared as the maxximum time a user can stay idle
            $out_time=Session::$timeout_duration;

            if((Session::get("uname")) && ($curr_time-$in_time)>$out_time){

                //logout with session time out notification

                header("Location:login");

                //set login message and unset other variables
                Session::unset("uname");
                Session::set("login","session_expire");
                Session::unset("in_time");
                Session::unset("uname");
            }else{
                //set current time as user is active
                Session::set("in_time",$curr_time);
            }

        }
    }
?>