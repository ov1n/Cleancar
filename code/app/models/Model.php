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
        public function select($arr,$value,$field,$tableName){
 
            //if array is empty select all from the table
            if(!count($arr)){
                $sql = "SELECT* FROM ".$tableName." WHERE ".$field."="."\"$value\"";
            
            //otherwise string concat the fields to select
            }else{

                $sql = "SELECT";

                //if an array is the input get the fields
                if(gettype($arr)=='array'){

                    foreach ($arr as $elem) {

                        //if it's the last field comma is omitted
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

                
                $sql.=" FROM ".$tableName." WHERE ".$field."="."\"$value\"";
            }

            echo($sql);
            $result= mysqli_query($this->conn,$query);

            return $result;

        }
        
        public function delete($id , $tableName){
            $sql = "DELETE FROM" + $tableName +" WHERE id="+"$id";
            //rest of the code goes here 
        }
    }
?>