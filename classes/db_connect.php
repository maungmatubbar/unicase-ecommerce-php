<?php


class Db_connect {
    
     protected function database_connection(){
        $host_name = 'localhost';
        $user_name = 'root';
        $password = '';
        $db_name = 'db_ecommerce';
        $con = mysqli_connect($host_name,$user_name,$password,$db_name);
        if(!$con){
            die('Connection Fail'.mysqli_error($con));
        }
        return $con;
    }
    
}

    