<?php
//include the models. once is a necessary 
include_once './models/Customer.php';
include_once './models/Receptionist.php';
include_once './models/Manager.php';
include_once './models/Service_employee.php';

class Login extends Controller
{
    //base controller just for extending
    //IN CASE OF OVERRIDE

    //overloaded view creation to get session variables to regular variables
    public static function create_view($view_name, $role)
    {
        $notification = Session::get("login");
        require_once("./views/$view_name.php");
        Session::unset("login");
    }

    function authenticate()
    {
        $cust = new Customer();
        $rec = new Receptionist();
        $man = new Manager();
        $emp = new Service_employee();


        //get post data 
        $uname = $_POST['user_name'];
        $unhashed = $_POST['password'];
        $pwd = sha1($unhashed);
        Session::set("in_time", time());

        if ($cust->check_credentials($uname, $pwd)) {
            $details = $cust->get_cust_data($uname);
            $first_name = $details['first_name'];
            $intial = $first_name[0];

            $log_name = strtoupper($intial . "." . $details['last_name']);
            session::set("log_name", $log_name);
            //set session variables to it through 
            Session::set("uname", $uname);

            //set loggedin to session
            Session::set("login", "loggedin");

            //set role which is logged in
            Session::set("role", "customer");

            //load customer view
            header("Location:home");
        } else if ($man->check_credentials($uname, $pwd)) {
            $details = $man->get_man_data();
            $first_name = $details['first_name'];
            $intial = $first_name[0];

            $log_name = strtoupper($intial . "." . $details['last_name']);
            session::set("log_name", $log_name);
            //set session variables to it through 
            Session::set("uname", $uname);
            //set loggedin to session
            Session::set("login", "loggedin");

            //set role which is logged in
            Session::set("role", "manager");

            header("Location:manager");
        } else if ($rec->check_credentials($uname, $pwd)) {
            $details = $rec->get_recep_data();
            $first_name = $details['first_name'];
            $intial = $first_name[0];

            $log_name = strtoupper($intial . "." . $details['last_name']);
            session::set("log_name", $log_name);
            //set session variables to it through 
            Session::set("uname", $uname);

            //set loggedin to session
            Session::set("login", "loggedin");

            //set role which is logged in
            Session::set("role", "receptionist");

            header("Location:receptionist");
        } else if ($emp->check_credentials($uname, $pwd)) {
            $details = $emp->get_emp_data($uname);
            $first_name = $details['first_name'];
            $intial = $first_name[0];

            $log_name = strtoupper($intial . "." . $details['last_name']);
            session::set("log_name", $log_name);
            //set session variables to it through 
            Session::set("uname", $uname);

            //set loggedin to session
            Session::set("login", "loggedin");

            //set role which is logged in
            Session::set("role", "employee");

            header("Location:employee");
        } else {
            //redirect to home with message
            header("Location:login");
            Session::set("login", "incorrect_login");
        }
    }

    //function to unset variables when logging out
    function logout()
    {

        //reset session
        Session::destroy();
        //set logout message maybe?
        Session::set("notification", "logout");
        Session::unset("login");
        Session::unset("role");

        header("Location:home");
    }

    //function to automatically logout if timeout
    function timeout($curr_time)
    {

        //getting times from session
        $in_time = Session::get("in_time");

        //timeout duration is declared as the maxximum time a user can stay idle
        $out_time = Session::$timeout_duration;

        if ((Session::get("uname")) && ($curr_time - $in_time) > $out_time) {

            //logout with session time out notification

            header("Location:login");

            //set login message and unset other variables
            Session::unset("uname");
            Session::set("login", "session_expire");
            Session::unset("in_time");
            Session::unset("uname");
            Session::unset("role");
        } else {
            //set current time as user is active
            Session::set("in_time", $curr_time);
        }
    }
}