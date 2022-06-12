<?php

class DB{

    private $db_host = "localhost";
    private $db_username = "root";
    private $db_pass = "";
    private $db_name = "mysnap";

    function connect(){
        $connection = mysqli_connect($this->db_host,$this->db_username,$this->db_pass,$this->db_name);
        return $connection;
    }
    
    function read($query){
        $connect = $this->connect();
        $result = mysqli_query($connect,$query);

        if(!$result){
            return false;
        }else{
            $data = false;
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    function save($query){
        $connect = $this->connect();
        $result = mysqli_query($connect,$query);

        if(!$result){
            return false;
        }else{
            return true;
        }
    }
}