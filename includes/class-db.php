<?php
if(!class_exists('DB')){
    class DB{
        public function __construct(){
            $mysqli = new mysqli('localhost', 'root', '', 'cman');

            if($mysqli->connect_errno){
                printf ($mysqli->connect_errno, "Connect failed %s\n");
                exit();
            }
            $this->connection = $mysqli;
        }
        public function insert($query){
            $result = $this->connection->query($query);
            return $result;
        }
        public function select(){
            $query = "
            SELECT * from posts
            ";
            $result = this-connection-query($query);
            return $result;
        }
    }
}
$db = new DB;
?>