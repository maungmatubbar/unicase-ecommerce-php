<?php

    
    class Manufacturer extends Db_connect{
        protected $con;
        public function __construct() {
            $this->con = $this->database_connection();
        }
        public function save_manufacturer_info($data){
            $query = "INSERT INTO tbl_manufacturer(manufacturer_name,manufacturer_description,publication_status)VALUES('$data[manufacturer_name]','$data[manufacturer_description]','$data[publication_status]')";
            if(mysqli_query($this->con, $query)){
                $message = 'Manufactrer info save successfully.';
                return $message;
            }
            else
            {
                die('Query Problem'.mysqli_errno($this->con));
            }
        }
        public function select_all_manufacturer_info(){
            $query = "SELECT * FROM tbl_manufacturer WHERE deletion_status = 1";
            if(mysqli_query($this->con, $query)){
               $query_result = mysqli_query($this->con, $query);
               return $query_result;
            }
            else
            {
                die('Query Problem'.mysqli_errno($this->con));
            }
        }
        public function unpublish_manufacturer_info_by_id($manufacturer_id){
            $query = "UPDATE tbl_manufacturer SET publication_status = 0 WHERE manufacturer_id='$manufacturer_id'";
            if(mysqli_query($this->con, $query)){
               $message = 'Manufacturer info unpublished successfully.';
               return $message;
            }
            else
            {
                die('Query Problem'.mysqli_errno($this->con));
            }
        }
        public function publish_manufacturer_info_by_id($manufacturer_id){
            $query = "UPDATE tbl_manufacturer SET publication_status = 1 WHERE manufacturer_id='$manufacturer_id'";
            if(mysqli_query($this->con, $query)){
               $message = 'Manufacturer info published successfully.';
               return $message;
            }
            else
            {
                die('Query Problem'.mysqli_errno($this->con));
            } 
        }
        public function delete_manufacturer_info_by_id($manufacturer_id){
            $query = "UPDATE tbl_manufacturer SET deletion_status = 0 WHERE manufacturer_id='$manufacturer_id'";
            if(mysqli_query($this->con, $query)){
               $message = 'Manufacturer info delete successfully.';
               return $message;
            }
            else
            {
                die('Query Problem'.mysqli_errno($this->con));
            } 
        }
        public function select_manufacturer_info_id($manufacturer_id ){
            $query = "SELECT * FROM tbl_manufacturer WHERE manufacturer_id='$manufacturer_id'";
            if(mysqli_query($this->con, $query)){
               $query_result = mysqli_query($this->con, $query);
               return $query_result;
            }
            else
            {
                die('Query Problem'.mysqli_errno($this->con));
            } 
        }
        public function update_manufacturer_info($data){
            $query = "UPDATE tbl_manufacturer SET manufacturer_name='$data[manufacturer_name]',manufacturer_description='$data[manufacturer_description]',publication_status='$data[publication_status]' WHERE manufacturer_id='$data[manufacturer_id]'";
            if(mysqli_query($this->con, $query)){
               $_SESSION['message'] = "Manufacturer info update successfully.";
               header('Location:manage_manufacturer.php');
            }
            else
            {
                die('Query Problem'.mysqli_errno($this->con));
            } 
        }
    }
