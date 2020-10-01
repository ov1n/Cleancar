<?php

//routing file
class Route {
    //public static $validRoutes=array();

    public static function set($route,$function){
        //self::$validRoutes[]=$routeDEBUGGING;
        //print_r(self::$validRoutes)DEBUGGING;
        //execute code in function parameter variable if
        //route is correct
        if($_GET['url']==$route){
            $function->__invoke();
        }
        
    }
}
   