<?php

require_once 'db_connect.php';

class Application extends Db_connect {

    protected $con;

    public function __construct() {
        $this->con = $this->database_connection();
    }

    public function select_all_published_category_info() {
        $query = "SELECT * FROM tbl_category WHERE deletion_status = 1 AND publication_status = 1";
        if (mysqli_query($this->con, $query)) {
            $query_result = mysqli_query($this->con, $query);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->con));
        }
    }

    public function select_all_published_manufacturer_info() {
        $query = "SELECT * FROM tbl_manufacturer WHERE deletion_status = 1 AND publication_status = 1";
        if (mysqli_query($this->con, $query)) {
            $query_result = mysqli_query($this->con, $query);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->con));
        }
    }

    public function select_published_new_product_info() {
        $query = "SELECT product_id,product_name,product_price,product_image FROM tbl_product WHERE publication_status = 1 ORDER BY product_id DESC LIMIT 0,10";
        if (mysqli_query($this->con, $query)) {
            $query_result = mysqli_query($this->con, $query);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->con));
        }
    }

    public function select_published_product_category_by_id($category_id) {
        $query = "SELECT product_id,product_name,product_price,product_image FROM tbl_product WHERE publication_status = 1 AND category_id = $category_id";
        if (mysqli_query($this->con, $query)) {
            $query_result = mysqli_query($this->con, $query);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->con));
        }
    }

}
