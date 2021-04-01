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
            return $final;
        }

        static function week_generate($date){

            $week_dates=array();

            for ($x = 0; $x <7; $x++) {
                $currdate = new DateTime($date);
                $currdate->add(new DateInterval("P".strval($x)."D")); // P1D means a period of 1 day
                $date2 = $currdate->format('Y-m-d');

                array_push($week_dates,$date2);
            }

            return($week_dates);     
        }

    }