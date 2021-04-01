<?php

//include employee class
include_once './models/Customer.php';
include_once './models/Manager.php';
include_once './models/Receptionist.php';
include_once './models/Service_employee.php';

class UserProfile extends Controller
{

    //overloading create view
    public static function create_view($view_name, $role)
    {

        //create Service_type object
        $cust = new Customer();
        $manager = new Manager();
        $emp = new Service_employee();
        $recep = new Receptionist();
        if (Session::get("role") == 'customer') {
            
            $temp_cust_id = $cust->get_custid(Session::get("uname"));

            $array = $cust->get_cust_data($temp_cust_id);
            require_once("./views/$view_name.php");
        } else if (Session::get("role") == 'receptionist') {
            $array = $recep->get_recep_data();
            require_once("./views/$view_name.php");
        } else if (Session::get("role") == "manager") {
            $array = $manager->get_man_data();
            require_once("./views/$view_name.php");
        } else if (Session::get("role") == 'employee') {
            $temp_empt_id = $emp->get_empid(Session::get("uname"));

            $array = $emp->get_emp_data($temp_empt_id);
            $_SESSION["dob"] = $array['dob'];
            $_SESSION["gender"] = $array['gender'];

            require_once("./views/$view_name.php");
        } else {
            require_once("./views/error_403.php");
        }
    }

    public  static function update()
    {
        $cust = new Customer();
        $man = new Manager();
        $emp = new Service_employee();
        $recep = new Receptionist();

        $userid = $_POST['userid'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $nic = $_POST['nic'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $mobile_tel_no = $_POST['mobile_tel_no'];
        $home_tel_no = $_POST['home_tel_no'];
        $dob = session::get("dob");
        $gender = session::get("gender");

        if (session::get("role") == 'customer') {
            $cust->update_record($userid, $first_name, $last_name, $address, $email, $mobile_tel_no, $home_tel_no);
        } elseif (session::get("role") == 'manager') {
            $man->update_record($userid, $first_name, $last_name, $nic, $address, $email, $mobile_tel_no, $home_tel_no);
        } elseif (session::get("role") == 'receptionist') {
            $recep->update_record($userid, $first_name, $last_name, $nic, $address, $email, $mobile_tel_no, $home_tel_no);
        } elseif (session::get("role") == 'employee') {
            $emp->update_record($userid, $first_name, $last_name, $address, $email, $home_tel_no, $mobile_tel_no, $nic, $gender, $dob);
        }
    }
}