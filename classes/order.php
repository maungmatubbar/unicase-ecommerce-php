<?php

require_once 'db_connect.php';

class Order extends Db_connect {

    protected $con;

    public function __construct() {
        $this->con = $this->database_connection();
    }

    public function select_all_order_info() {
        $query = "SELECT o.*, c.first_name, c.last_name ,p.payment_type,p.payment_status FROM tbl_order as o, tbl_customer as c , tbl_payment as p WHERE o.customer_id = c.customer_id AND o.order_info_id = p.order_id ";
        if (mysqli_query($this->con, $query)) {
            $query_result = mysqli_query($this->con, $query);
            return $query_result;
        } else {
            die('Query_problem' . mysqli_errno($this->con));
        }
    }

    public function select_customer_info_by_id($order_info_id) {
        $query = "SELECT c.* FROM tbl_customer as c,tbl_order as o WHERE c.customer_id = o.customer_id AND o.order_info_id = '$order_info_id'";
        if (mysqli_query($this->con, $query)) {
            $query_result = mysqli_query($this->con, $query);
            return $query_result;
        } else {
            die('Query_problem' . mysqli_errno($this->con));
        }
    }

    public function select_shipping_info_by_id($order_info_id) {
        $query = "SELECT s.* FROM tbl_order as o,tbl_shipping as s WHERE o.shipping_id = s.shipping_id AND o.order_info_id = '$order_info_id'";
        if (mysqli_query($this->con, $query)) {
            $query_result = mysqli_query($this->con, $query);
            return $query_result;
        } else {
            die('Query_problem' . mysqli_errno($this->con));
        }
    }

    public function select_order_product_info_by_id($order_info_id) {
        $query = "SELECT od.* FROM tbl_order as o,tbl_order_details as od WHERE o.order_info_id = od.order_id AND o.order_info_id = '$order_info_id'";
        if (mysqli_query($this->con, $query)) {
            $query_result = mysqli_query($this->con, $query);
            return $query_result;
        } else {
            die('Query_problem' . mysqli_errno($this->con));
        }
    }

}
