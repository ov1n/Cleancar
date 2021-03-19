<?php

// used for all conversions etc. in time
    class Time_func{

        static function sqlto12hour($value){

            if(intval(substr($value, 0,2)>=13)){
                $final=intval(substr($value, 0,2)-12);
                $final ='0'.$final .substr($value,2,3) ." PM";

            }else if(intval(substr($value, 0,2)>=12)){
                $final=substr($value, 0,5);
                $final =$final . " PM";
                
            }else{
                $final=substr($value, 0,5);
                $final =$final . " AM";
            }

            //echo($final);
            return $final;
        }
    }