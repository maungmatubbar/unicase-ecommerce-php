<?php
    $order_info_id =$_GET['order_id'];
    $customer_info_result = $obj_order->select_customer_info_by_id($order_info_id);
    $customer_info = mysqli_fetch_assoc($customer_info_result);
    $shipping_info_result = $obj_order->select_shipping_info_by_id($order_info_id);
    $shipping_info = mysqli_fetch_assoc($shipping_info_result);
    $order_product_info_result =  $obj_order->select_order_product_info_by_id($order_info_id);
    if(isset($_POST['btn'])){
        require_once '../dompdf/dompdf_config.inc.php';
        $obj_dom = new DOMPDF();
      
        $obj_dom->load_html($order_info);
        $obj_dom->render();
        $obj_dom->stream('order_info.pdf');
    }
    

?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="panel-heading">Order Details information goes here</div>
                <div>
                    <form action="" method="post">
                        <input type="submit" name="btn" value="pdf" />
                    
                
                        <table class="table table-bordered" align="center">
                            <h1 class="text-success text-center">Customer infomation for this here</h1>
                            <hr>
                            <tr>
                                <td>Customer Name</td>
                                <td><?php echo $customer_info['first_name'].' '.$customer_info['last_name']; ?></td>
                            </tr>
                            <tr>
                                <td>Email Address</td>
                                <td><?php echo $customer_info['email_address']; ?></td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td><?php echo $customer_info['phone_number']; ?></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><?php echo $customer_info['address']; ?></td>
                            </tr>
                        </table>
                        <table class="table table-bordered" align="center">
                            <h1 class="text-success text-center">Shipping infomation for this here</h1>
                            <hr>
                            <tr>
                                <td>Shipping Name</td>
                                <td><?php echo $shipping_info['full_name']; ?></td>
                            </tr>
                            <tr>
                                <td>Email Address</td>
                                <td><?php echo $shipping_info['email_address']; ?></td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td><?php echo $shipping_info['phone_number']; ?></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><?php echo $shipping_info['address']; ?></td>
                            </tr>
                        </table>
                        <table class="table table-bordered" align="center">
                            <h1 class="text-success text-center">Product infomation for this here</h1>
                            <hr>
                            <tr>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Total Quantity</th>
                            </tr>
                            <?php while($order_product_info = mysqli_fetch_assoc($order_product_info_result)):?>
                            <tr>
                                <td><?php echo $order_product_info['product_id']; ?></td>
                                <td><?php echo $order_product_info['product_name']; ?></td>
                                <td><?php echo $order_product_info['product_price']; ?></td>
                                <td><?php echo $order_product_info['product_quantity']; ?></td>
                                <td><?php echo $order_product_info['product_id']*$order_product_info['product_price']; ?></td>
                            </tr>
                            <?php endwhile; ?>
                        </table>
                     </form> 
                </div>
            </div>
        </div>
    </div>
</div>