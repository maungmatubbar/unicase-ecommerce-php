<?php

require 'db_connect.php';

/**
 * Description of category
 *
 * @author Maung pc
 */
class Category extends Db_connect {
    protected $con;
    public function __construct() {
         $this->con = $this->database_connection();
    }

    public function save_category_info($data) {
        $query = "INSERT INTO tbl_category(category_name,category_description,publication_status)VALUES('$data[category_name]','$data[category_description]','$data[publication_status]')";
        if (mysqli_query($this->con, $query)) {
            $message = "Category info save successfully.";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->con));
        }
    }

    public function select_all_category_info() {
        $query = "SELECT * FROM tbl_category WHERE deletion_status = 1";
        if (mysqli_query($this->con, $query)) {
            $query_result = mysqli_query($this->con, $query);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->con));
        }
    }
    public function select_category_info_id($category_id){
        $query = "SELECT * FROM tbl_category WHERE category_id = '$category_id'";
        if (mysqli_query($this->con, $query)) {
            $query_result = mysqli_query($this->con, $query);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->con));
        }
    }
    public function update_category_info($data){
        $query = "UPDATE tbl_category SET category_name='$data[category_name]',category_description='$data[category_description]',publication_status='$data[publication_status]' WHERE category_id='$data[category_id]'";
        if (mysqli_query($this->con, $query)) {
            $_SESSION['message'] = 'Category info update successfully';
            header('Location: manage_category.php');
        } else {
            die('Query Problem' . mysqli_error($this->con));
        }
    }
    public function delete_category_info_id($category_id){
        $query = "UPDATE tbl_category SET deletion_status = 0  WHERE category_id='$category_id'";
        if (mysqli_query($this->con, $query)) {
           $message = "Category info delete successfully.";
           return $message;
        } else {
            die('Query Problem' . mysqli_error($this->con));
        }
    }
    public function unpublish_category_by_id($category_id){
        $query = "UPDATE tbl_category SET publication_status = 0  WHERE category_id='$category_id'";
        if (mysqli_query($this->con, $query)) {
           $message= "Category info unpublished successfully.";
           return $message;
        } else {
            die('Query Problem' . mysqli_error($this->con));
        }
    }
     public function publish_category_by_id($category_id){
        $query = "UPDATE tbl_category SET publication_status = 1  WHERE category_id='$category_id'";
        if (mysqli_query($this->con, $query)) {
           $message= "Category info published successfully.";
           return $message;
        } else {
            die('Query Problem' . mysqli_error($this->con));
        }
    }
}
