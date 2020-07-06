<?php

require 'db_connect.php';

class Login extends Db_connect {
    
    public function admin_login_check($data) {
        $con = $this->database_connection();
        $password = md5($data['password']);
        $query = "SELECT * FROM tbl_admin WHERE email_address='$data[email_address]' AND password='$password'";
        $query_result = mysqli_query($con,$query);
        $admin_info = mysqli_fetch_assoc($query_result);
          if($admin_info){
              session_start();
              $_SESSION['admin_name'] = $admin_info['admin_name'];
              $_SESSION['admin_id'] = $admin_info['admin_id'];
              header('Location: admin_master.php');
          }
          else{
             $message = "Please enter valid email address & password" ;
             return $message;
          }
        
    }

}
