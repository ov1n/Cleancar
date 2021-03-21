<?php

    //including database settings
    include './lib/Database.php';

    class Model{

        //variable to store connection
        public $conn;

        public function __construct(){

            //make db object
            $db=new Database();
            
            $this->conn=$db->conn();
            //var_dump($db);

            //echo("model constructed");
        }

        //DML functions

        // SELECT $arr <or> $arr[0],$arr[1],...$arr[n-1] 
        // FROM $tableName
        // WHERE $field=$value

        public function select($arr,$tableName,$condition){
            //$condition= "WHERE custid=.......INNER JOIN...."

             //if arr is * select all from the table
             if($arr=="*"){
                $sql = "SELECT* FROM ".$tableName." ".$condition;
            
            //otherwise string concat the fields to select
            }else{

                $sql = "SELECT";
                //WHERE e='p' group by ................
                //if an array is the input get the fields
                if(gettype($arr)=='array'){

                    foreach ($arr as $elem) {

                        //if it's the last field comma is omitted
                        //SQL HAS ERROR IF LAST ELEMENT IS RECURRING BEFORE ITLL BE TAKEN AS FINAL ELEMENT
                        if($elem==$arr[count($arr)-1]){
                            $sql.=" ".$elem;
                        
                        //if not get all fields necessary for select
                        }else{
    
                        $sql.=" ".$elem.",";
                        }
                        
                    }
                
                //otherwise if its a string just append it without a loop
                }else if(gettype($arr)=='string'){

                    $sql.=" ".$arr;
                }

                
                $sql.=" FROM ".$tableName." ".$condition;
            }

            //echo($sql."\n");
            $result= mysqli_query($this->conn,$sql);

            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($this->conn));
                exit();
            }

            return $result;

        }
        
        //INSERT INTO $table VALUES($columns[0],$columns[1].........$columns[n-1]) VALUES($values[0],$values[1].........$values[n-1]);
        public function insert($table,$columns,$values){

            $sql = "INSERT INTO ". $table."(";
            
            if(gettype($columns)=='string' && gettype($values)=='string'){

                $sql.="$columns) VALUES($values);";

            }else {

                foreach ($columns as $elem) {

                    //if it's the last field comma is omitted
                    if($elem==$columns[count($columns)-1]){
                        $sql.=$elem;
                    
                    //if not get all fields necessary for select
                    }else{

                    $sql.=$elem.",";
                    }
                    
                }

                $sql.=") VALUES(";

                foreach ($values as $elem) {

                    //if it's the last field comma is omitted
                    if($elem==$values[count($values)-1]){
                        $sql.="\""."$elem"."\"";
                    
                    //if not get all fields necessary for select
                    }else{
                    
                        //echo($elem);
                        $sql.="\""."$elem"."\"".",";  
                    }
                    
                }

                $sql.=");";
            }

            //echo($sql."\n");
            //var_dump($this->conn);

            $result= mysqli_query($this->conn,$sql);

            if (mysqli_errno($this->conn) == 1062) {
                print 'duplicate entry';
                exit();
            }
            //debugging
            if (!$result) {
                printf("Error: insert wrong%s\n", mysqli_error($this->conn));
                exit();
            }else{
                echo("no error");
            }

            return $result;
        }


        public function delete($table,$condition){
            
            //
            $sql = "DELETE FROM ". $table." ".$condition;

            //echo($sql);

            $result= mysqli_query($this->conn,$sql);

            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($this->conn));
                exit();
            }

            return($result);
        }

        //TEST
        public function update($table,$column,$values,$condition){

            //
            $sql="UPDATE ".$table." "."SET ";

            if((gettype($column)=="string") && (gettype($values)=="string")){

                $sql.=$column."=".$values;

            }else if(gettype($column)=="array" && (gettype($values)=="array")){
                //do something

            }

            $sql.=" ".$condition;

            //echo($sql);

            $result= mysqli_query($this->conn,$sql);

            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($this->conn));
                exit();
            }

            return($result);
        }
    }
?>