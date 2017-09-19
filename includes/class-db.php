<?php
if(!class_exists('DB')){
    class DB{
        public function __construct(){
            $mysqli = new mysqli('localhost', 'root', '', 'cman');

            if($mysqli->connect_errno){
                printf ("Connect failed %s\n", $mysqli->connect_errno);
                exit();
            }
            return $mysqli;
        }
        public function insert(){
            $query = "
            INSERT INTO 
            ";
        }
    }
}
?>