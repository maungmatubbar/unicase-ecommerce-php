<?php


    $message = '';
    if(isset($_GET['status'])){
        $product_id = $_GET['id'];
        if($_GET['status']=='unpublish'){
            $message = $obj_product->unpublish_product_info_by_id($product_id);
        }
        else if($_GET['status']=='publish'){
            $message = $obj_product->publish_product_info_by_id($product_id);
        }
        else if($_GET['status']=='delete'){
            $message = $obj_product->delete_product_info_by_id($product_id);
        }
    }

    $query_result = $obj_product->select_all_product_info();
  
    
    
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                All product information goes here
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Category Name </th>
                            <th>Manufacturer Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Publications Status </th>
                            <th>Action</th>                          
                                                   
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($product_info = mysqli_fetch_assoc($query_result)): ?>
                        <tr class="odd gradeX">
                            <td><?php echo $product_info['product_name']; ?></td>
                            <td><?php echo $product_info['category_name']; ?></td>
                            <td><?php echo $product_info['manufacturer_name']; ?></td>
                            <td><?php echo $product_info['product_price']; ?></td>
                            <td><?php echo $product_info['product_quantity']; ?></td>
                            <td><?php if($product_info['publication_status'] == 1 ){
                                        echo "Published";
                                        }
                                        else{
                                            echo "Unpublished";
                                        }
                                
                                ?>
                            </td>                            
                            <td class="center">  
                                <a href="view_product.php?status=view&&id=<?php echo $product_info['product_id'];?>" class="btn btn-default" title="View Product">
                                    <span class=" glyphicon glyphicon-zoom-in"></span> 
                                </a> 
                                <?php if($product_info['publication_status']==1){ ?>
                                 <a href="?status=unpublish&&id=<?php echo $product_info['product_id'];?>" class="btn btn-success" title=Unpublished">
                                    <span class=" glyphicon glyphicon-arrow-down"></span> 
                                </a>
                                <?php }else{?>
                                <a href="?status=publish&&id=<?php echo $product_info['product_id'];?>" class="btn btn-danger" title="Published">
                                    <span class=" glyphicon glyphicon-arrow-up"></span> 
                                </a>
                                <?php }?>
                                
                                <a href="edit_product.php?id=<?php echo $product_info['product_id'];?>" class="btn btn-primary" title="edit">
                                    <span class="glyphicon glyphicon-edit"></span> 
                                </a>
                                <a href="?status=delete&&id=<?php echo $product_info['product_id'];?>" onclick="return checkDelete()" class="btn btn-danger" title="delete">
                                    <span class="glyphicon glyphicon-trash"></span> 
                                </a>
                            </td>
                        </tr> 
                        <?php endwhile; ?>
                    </tbody>
                </table>
                <h4 class="text-info"><?php echo $message; ?></h4>
                <h4 class="text-info">
                    <?php 
                        if(isset($_SESSION['message'])){
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                        }
                    ?>
                </h4>
            </div>
           
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
