<?php

//include employee class
include './models/Service_type.php';

class ServiceType extends Controller
{

    //overloading create view
    public static function create_view($view_name, $role)
    {

        $Service_type = new Service_type();
        $array = $Service_type->get_all();
        if (Session::get("role") == $role) {
            require_once("./views/$view_name.php");
        } else {
            require_once("./views/error_403.php");
        }
    }

    //function to view service type
    public function view($view_name, $role)
    {

        $typeid = $_GET['type_id'];

        $Service_type = new Service_type();
        $array = $Service_type->get_servicetype($typeid);
        if (Session::get("role") == $role) {
            require_once("./views/$view_name.php");
        } else {
            require_once("./views/error_403.php");
        }
    }

    //function to delete sevice type
    public static function delete($view_name)
    {
        $type_id = $_GET['type_id'];

        $Service_type = new Service_type();
        $Service_type->delete_record($type_id);
        $array = $Service_type->get_all();
        require_once("./views/$view_name.php");
    }

    public static function search($view_name, $role)
    {
        $search_key = $_POST['search'];
        $Service_type = new Service_type();
        $array = $Service_type->get_search_data($search_key);
        if ($array) {
            require_once("./views/$view_name.php");
        } else {
            require_once("./views/$view_name.php");
            Session::set("serh_error", "search_error");
        }
    }
}
?>