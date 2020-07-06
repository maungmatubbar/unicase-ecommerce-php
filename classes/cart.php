<?php

require_once 'db_connect.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cart
 *
 * @author Maung pc
 */
class Cart extends Db_connect {

    protected $con;

    public function __construct() {
        $this->con = $this->database_connection();
    }

    public function add_to_cart($data) {
        $product_id = $data['product_id'];
        $session_id = session_id();
        $query = "SELECT * FROM tbl_temp_cart WHERE product_id = '$product_id' AND session_id = '$session_id' ";
        $result=mysqli_query($this->con, $query);
        $info = mysqli_fetch_assoc($result);
        if($info){
            echo $message = "already exists";
            exit();
        }
        else{
            $query = "SELECT product_name,product_price,product_image FROM tbl_product WHERE product_id = '$product_id'";
            $query_result = mysqli_query($this->con, $query);
            $product_info = mysqli_fetch_assoc($query_result);
            $session_id = session_id();
            $query = "INSERT INTO tbl_temp_cart (session_id, product_id, product_name, product_price, product_quantity, product_image) VALUES ('$session_id', '$product_id', '$product_info[product_name]', '$product_info[product_price]','$data[product_quantity]', '$product_info[product_image]')";
            mysqli_query($this->con, $query);
            header('Location:shop_cart.php');
        }
         
        
    }

    public function select_cart_product_by_session_id() {
        $session_id = session_id();
        $query = "SELECT * FROM tbl_temp_cart WHERE session_id = '$session_id'";
        if (mysqli_query($this->con, $query)) {
            $query_result = mysqli_query($this->con, $query);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($this->con));
        }
    }

    public function update_cart_product($data){
        $session_id = session_id();
        if($data['product_quantity']>1){
        $query = "UPDATE tbl_temp_cart SET product_quantity='$data[product_quantity]' WHERE session_id = '$session_id' AND product_id = '$data[product_id]' ";
        if (mysqli_query($this->con, $query)) {
            $message = "Product info update successfully.";
            return $message;
        } else {
            die("Query Problem" . mysqli_error($this->con));
        }
        }else{
            $message = "Insert Valid Quantity";
            return $message;
        }
    }
    public function delete_cart_product($product_id){
        $session_id = session_id();
        $query = "DELETE FROM tbl_temp_cart WHERE session_id='$session_id' AND product_id='$product_id'";
        if (mysqli_query($this->con, $query)) {
            $message = "Product info delete successfully.";
            return $message;
        } else {
            die("Query Problem" . mysqli_error($this->con));
        }
    }

}
