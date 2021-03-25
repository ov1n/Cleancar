<?php
//include the models. once is a necessary 
include_once './models/Customer.php';
include_once './models/Receptionist.php';
include_once './models/Manager.php';
include_once './models/Service_employee.php';

class ChangePassword extends Controller
{
    public static function authenticate()
    {

        //session_start();
        //echo($_SESSION["test"]);
        //set database objects to variables
        $cust = new Customer();
        $rec = new Receptionist();
        $man = new Manager();
        $emp = new Service_employee();

        echo ($_POST['crrpassword']);

        //get post data 
        $unhashed_curr_pwd = $_POST['crrpassword'];
        $unhashed_con_pwd = $_POST['confirm_password'];
        echo ($unhashed_curr_pwd);
        //hash the password
        // Original PHP code by Chirp Internet: www.chirp.com.au
        // Please acknowledge use of this code by including this header.

        //hash the password

        //$pwd=md5($unhashed);
        $curr_pwd = sha1($unhashed_curr_pwd);
        $con_pwd = sha1($unhashed_con_pwd);
        echo ($curr_pwd);
        echo ($con_pwd);

        //$pwd = password_hash($unhashed,PASSWORD_BCRYPT);
        $uname = session::get("uname");

        //var_dump($man);
        //Session::set("pwd", $pwd);
        //set logged in time
        // Session::set("in_time", time());

        if ($cust->check_credentials($uname, $curr_pwd)) {
            $cust->change_password($curr_pwd, $con_pwd);

            //set session variables to it through 
            // Session::set("uname", $uname);

            //set loggedin to session
            //Session::set("login", "loggedin");

            //set role which is logged in
            // Session::set("role", "customer");

            //load customer view
            header("Location:home");
        } else if ($man->check_credentials($uname, $curr_pwd)) {
            $man->change_password($curr_pwd, $con_pwd);
            //set session variables to it through 
            //Session::set("uname", $uname);

            //load manager view
            //echo("in man view");

            //set loggedin to session
            //Session::set("login", "loggedin");

            //set role which is logged in
            //Session::set("role", "manager");

            header("Location:manager");
        } else if ($rec->check_credentials($uname, $curr_pwd)) {
            $rec->change_password($curr_pwd, $con_pwd);
            //set session variables to it through 
            // Session::set("uname", $uname);

            //load receptionist view
            //echo("in rec view");

            //set loggedin to session
            //Session::set("login", "loggedin");

            //set role which is logged in
            //Session::set("role", "receptionist");

            header("Location:receptionist");
        } else if ($emp->check_credentials($uname, $curr_pwd)) {
            $emp->change_password($curr_pwd, $con_pwd);
            //set session variables to it through 
            //Session::set("uname", $uname);

            //load employee view
            //echo("in emp view");

            //set loggedin to session
            //Session::set("login", "loggedin");

            //set role which is logged in
            // Session::set("role", "employee");

            header("Location:employee");
        } else {
            
            header("Location:change_password");
            //set session
            Session::set("changePassword", "Incorrect_Password");
        }
    }
}