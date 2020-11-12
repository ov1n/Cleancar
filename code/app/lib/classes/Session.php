<?php

//all session settings abstracted
class Session {

    //variable which stores time per session
    public static $timeout_duration = 1800;

    //starts session
    public static function init() {
        @session_start();

        //OVERLOAD TEST
        Session::set("curr_time", time());
    }

    //sets values
    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    //returns value in session
    public static function get($key) {
        if(isset($_SESSION[$key]))
            return $_SESSION[$key];
    }

    public static function destroy() {
        session_destroy();
    }

    //remove value from array
    public static function unset($key) {
        unset($_SESSION[$key]);
    }

    //function to check if session has ecpired
}
?>