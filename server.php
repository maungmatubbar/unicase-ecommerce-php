<?php
    $given_email = $_GET['email'];
    require_once './classes/checkout.php';
    $obj_checkout = new Checkout();
    $query_result = $obj_checkout->customer_email_check($given_email);
    $customer_info = mysqli_fetch_assoc($query_result); 
    if($customer_info) {
        echo 'Already exist';
    } else {
        echo 'Avaliable';
    }
