<?php
if(!class_exists('DB')){
    class DB{
        public function __construct(){
            $mysqli = new mysqli('localhost', 'root', '', 'cman');

            if($mysqli->connect_errno){
                printf ("Connect failed %s\n", $mysqli->connect_errno);
                exit();
            }
            $this->connection = $mysqli;
        }
        public function insert(){
            $mysqli = $this->connection;
            $query = "
                INSERT INTO posts (post_title, post_content, post_category)
                VALUES(title, content, content)
            ";
            $result = $mysqli->query($query);
            return $result;
        }
    }
}
?>