<?php 
    $message = '';
    require_once 'classes/cart.php';
    $obj_cart = new Cart();
     if(isset($_POST['btn'])){
        $message = $obj_cart->update_cart_product($_POST);
    }
    if(isset($_GET['status'])){
        $product_id = $_GET['id'];
        if($_GET['status']=='delete'){
            $message = $obj_cart->delete_cart_product($product_id);
        }
    }
    $query_result = $obj_cart ->select_cart_product_by_session_id();
    
   

?>
<hr>
<div class="row">
    <div class="col-lg-12">
        <h3 class="text-center text-success"><?php echo $message; ?></h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div>
                    <table class="table table-bordered">
                        <tr>
                            <th>SL NO</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>	
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                        <?php $i=1; $sum=0; while ($cart_product_info = mysqli_fetch_assoc($query_result)){?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $cart_product_info['product_name']; ?></td>
                            <td><img src="assets/<?php echo $cart_product_info['product_image'];?>" alt="" style="height:100px;width:150px"></td>
                            <td><?php echo $cart_product_info['product_price']; ?></td>
                            <td>
                                <form class="form-group" action="" method="post">
                                    <input class="" type="number" name="product_quantity" value="<?php echo $cart_product_info['product_quantity']; ?>">
                                    <input class="" type="hidden" name="product_id" value="<?php echo $cart_product_info['product_id']; ?>">
                                    <input class="btn btn-default" type="submit" name="btn" value="Update">
                                </form>
                            </td>
                            <td><?php $total=$cart_product_info['product_price']*$cart_product_info['product_quantity'];
                                echo 'BDT '.$total;
                            ?></td>
                            <td>
                                <a href="?status=delete&id=<?php echo $cart_product_info['product_id'];?>" onclick="return checkDelete()"><i class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></i></a>
                            </td>
                        </tr>
                        <?php $i++;$sum+=$total; }?>
                    </table>
                </div>
                <div>
                    <table class="table table-bordered text-center" border="1">
                        <tr>
                            <td>Sub Total</td>
                            <td>BDT <?php echo $sum; ?>/-</td>
                        </tr>
                        <tr>
                            <td>Vat Total</td>
                            <td>BDT <?php
                                $vat =($sum*15)/100;
                                echo $vat;
                                ?>/-
                            </td>
                        </tr>
                        <tr>
                            <td>Grand Total</td>
                            <td>BDT <?php
                            
                            $grand_total = $sum+$vat;
                            echo $grand_total;
                            $_SESSION['order_total'] = $grand_total;
                            
                                ?>/-
                            </td>
                        </tr>
                    </table>
                </div>
                <div>
                    <?php if(isset($_SESSION['customer_id'])){?>
                        <a href="shipping.php" class="btn btn-info">Check Out</a>
                    <?php }else{?>
                        <a href="checkout.php" class="btn btn-info">Check Out</a>
                    <?php }?>
                    <a href="index.php" class="btn btn-primary">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>
</div>
 <script type="text/javascript">
    function checkDelete(){
        var check = confirm('Are you sure delete this?');
        if(check){
            return true;
        }
        else
        {
            return false;
        }
    }
</script>