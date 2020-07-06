<?php

require_once 'db_connect.php';

class Checkout extends Db_connect {

    protected $con;

    public function __construct() {
        $this->con = $this->database_connection();
    }

    public function save_customer_info($data) {
        $query = "INSERT INTO tbl_customer(first_name,last_name,email_address,password,address,phone_number)VALUES('$data[first_name]','$data[last_name]','$data[email_address]','$data[password]','$data[address]','$data[phone_number]')";
        if (mysqli_query($this->con, $query)) {
            $customer_id = mysqli_insert_id($this->con);
            $_SESSION['customer_name'] = $data['first_name'] . ' ' . $data['last_name'];
            $_SESSION['customer_id'] = $customer_id;

            header('Location:shipping.php');
        } else {
            die('Query Problem' . mysqli_error($this->con));
        }
    }

    public function select_customer_info_by_id($customer_id) {
        $query = "SELECT * FROM tbl_customer WHERE customer_id = $customer_id";
        if (mysqli_query($this->con, $query)) {
            $query_result = mysqli_query($this->con, $query);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->con));
        }
    }

    public function customer_logout() {
        unset($_SESSION['customer_name']);
        unset($_SESSION['customer_id']);
        header('Location:index.php');
    }

    public function customer_login($data) {

        $query = "SELECT * FROM tbl_customer WHERE email_address='$data[email_address]' AND password='$data[password]' AND customer_id = '$customer_id'";
        if (mysqli_query($this->con, $query)) {
            header('Location:index.php');
        } else {
            die('Query Problem' . mysqli_error($this->con));
        }
    }

    public function customer_email_check($given_email) {
        $query = "SELECT * FROM tbl_customer WHERE email_address='$given_email'";
        if (mysqli_query($this->con, $query)) {
            $query_result = mysqli_query($this->con, $query);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->con));
        }
    }

    public function save_shipping_info($data, $customer_id) {
        $query = "INSERT INTO tbl_shipping (customer_id,full_name,email_address,address,phone_number)VALUES('$customer_id','$data[full_name]','$data[email_address]','$data[address]','$data[phone_number]')";
        if (mysqli_query($this->con, $query)) {
            $shipping_id = mysqli_insert_id($this->con);
            $_SESSION['shipping_id'] = $shipping_id;
            header('Location:payment.php');
        } else {
            die('Query Problem' . mysqli_error($this->con));
        }
    }
    public function save_order_info($data){
        $payment_type = $data['payment_type'];
        if($payment_type == 'cash_on_delivery'){
            $customer_id = $_SESSION['customer_id'];
            $shipping_id = $_SESSION['shipping_id'];
            $order_total = $_SESSION['order_total'];
            $query ="INSERT INTO tbl_order (customer_id, shipping_id, order_total) VALUES ('$customer_id', '$shipping_id', '$order_total')";
            if(mysqli_query($this->con,$query)){
               
              $order_id = mysqli_insert_id($this->con);
              $query = "INSERT INTO tbl_payment(order_id,payment_type)VALUES('$order_id','$payment_type')";
              if(mysqli_query($this->con,$query)){
                  $session_id = session_id();
                  $query = "SELECT * FROM tbl_temp_cart WHERE session_id ='$session_id'";
                  $query_result = mysqli_query($this->con,$query);
                  while($cart_product = mysqli_fetch_assoc($query_result)){
                      $query = "INSERT INTO  tbl_order_details (order_id, product_id, product_name, product_price, product_quantity) VALUES ('$order_id', '$cart_product[product_id]', '$cart_product[product_name]', '$cart_product[product_price]', '$cart_product[product_quantity]')";
                      mysqli_query($this->con, $query);
                  }
                  $query = "DELETE FROM tbl_temp_cart WHERE session_id = '$session_id'";
                  mysqli_query($this->con, $query);
                  header('Location:customer_home.php');
              }else{
                  die('Payment Query Problem'.mysqli_error($this->con));
              }
                
            }else{
                die('Order Query Problem'.mysqli_error($this->con));
            }
        }else if ($payment_type == 'bkash'){
            echo $payment_type;
        } else if($payment_type == 'paypal'){
            echo $payment_type;
        }
        
    }

}
