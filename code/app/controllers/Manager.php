<?php
include './models/Invoice.php';
class Manager extends Controller
{
    //overloading create view
    public static function create_view($view_name, $role)
    {

        //create employee object
        $bill = new Invoice();
        $ar = $bill->revenue();

        if (Session::get("role") == $role) {
            require_once("./views/$view_name.php");
        } else {
            require_once("./views/error_403.php");
        }
    }
}