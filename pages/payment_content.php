<?php
if (isset($_POST['btn'])) {
    $obj_check->save_order_info($_POST);
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="text-center text-success">Hello <?php echo $_SESSION['customer_name']; ?>. You have to give us product payment information to  complete your check out process. Thanks !.</h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="text-center text-success">Your payment information here</h3>
                <hr/>
                <form class="form-horizontal" action="" method="post"> 
                    <table class="table table-bordered table-hover">
                        <tr>
                            <td>Cash On delivery</td>
                            <td><input type="radio" name="payment_type" value="cash_on_delivery"></td>
                        </tr>
                        <tr>
                            <td>BKash</td>
                            <td><input type="radio" name="payment_type" value="bkash"></td>
                        </tr>
                        <tr>
                            <td>Paypal</td>
                            <td><input type="radio" name="payment_type" value="paypal"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="btn" value="Confirm Order" class="btn btn-primary btn-block"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>