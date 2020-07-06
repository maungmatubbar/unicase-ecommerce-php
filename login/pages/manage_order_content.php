<?php
    
   $query_result = $obj_order->select_all_order_info();

   
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                All Order information goes here
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Name </th>
                            <th>Order Total</th>
                            <th>Order Status</th>
                            <th>Payment Type</th>
                            <th>Payment Status </th>
                            <th>Action</th>                          
                                                   
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($order_info = mysqli_fetch_assoc($query_result)): ?>
                        <tr class="odd gradeX">
                            
                            <td><?php echo $order_info['order_info_id']; ?></td>
                            <td><?php echo $order_info['first_name'].' '.$order_info['last_name']; ?></td>
                            <td><?php echo $order_info['order_total']; ?></td>
                            <td><?php echo $order_info['order_status']; ?></td>
                            <td><?php echo $order_info['payment_type']; ?></td>
                            <td><?php echo $order_info['payment_status']; ?></td>
                            <td>
                                <a href="" title="" class="btn btn-success"><span class="glyphicon glyphicon-arrow-down"></span></a>
                                <a href="view_order.php?order_id=<?php echo $order_info['order_info_id']?>" title="View Order" class="btn btn-warning"><span class="glyphicon glyphicon-zoom-in"></span></a>
                                <a href="" title="Edit" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="" title="Delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr> 
                        <?php endwhile;?>
                    </tbody>
                </table>
                <h4 class="text-info"><?php //echo $message; ?></h4>
                <h4 class="text-info">
                    <?php 
//                        if(isset($_SESSION['message'])){
//                            echo $_SESSION['message'];
//                            unset($_SESSION['message']);
//                        }
                    ?>
                </h4>
            </div>
           
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
