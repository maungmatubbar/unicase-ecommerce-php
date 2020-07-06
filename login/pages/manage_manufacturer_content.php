<?php


    
    $message = '';
    if(isset($_GET['status'])){
        $manufacturer_id = $_GET['id'];
        if($_GET['status']=='unpublish'){
            $message = $obj_manufacturer->unpublish_manufacturer_info_by_id($manufacturer_id);
        }
        else if($_GET['status']=='publish'){
            $message = $obj_manufacturer->publish_manufacturer_info_by_id($manufacturer_id);
        }
        else if($_GET['status']=='delete'){
            $message = $obj_manufacturer->delete_manufacturer_info_by_id($manufacturer_id);
        }
    }

    $query_result = $obj_manufacturer->select_all_manufacturer_info();
   
?>


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="text-success">All Manufacturer information goes here</h1>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Manufacturer Name</th>
                            <th>Manufacturer Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php while($manufacturer_info = mysqli_fetch_assoc($query_result)): ?>
                        <tr class="odd gradeX">
                            <td><?php echo $manufacturer_info['manufacturer_name']; ?></td>
                            <td><?php echo $manufacturer_info['manufacturer_description']; ?></td>
                            <td>
                                <?php 
                                    if($manufacturer_info['publication_status'] == 1){ 
                                        echo 'Published';
                                    }
                                    else
                                    {
                                        echo 'Unpublished';
                                    }
                                ?>
                            
                            </td>
                            <td class="center-block">
                                <?php if($manufacturer_info['publication_status'] == 1){?>
                                <a href="?status=unpublish&id=<?php echo $manufacturer_info['manufacturer_id'];?>" class="btn btn-success" title="Unpulished">
                                    <span class="glyphicon glyphicon-arrow-down"></span></a>
                                <?php }else{?>
                                <a href="?status=publish&id=<?php echo $manufacturer_info['manufacturer_id'];?>" class="btn btn-warning" title="Published">
                                    <span class="glyphicon glyphicon-arrow-up"></span></a>
                                <?php }?>
                                <a href="edit_manufacturer.php?id=<?php echo $manufacturer_info['manufacturer_id'];?>" class="btn btn-info" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="?status=delete&id=<?php echo $manufacturer_info['manufacturer_id'];?>" class="btn btn-danger" onclick="return checkDelete()" title="Delete">
                                    <span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
                      <?php endwhile;?>
                    </tbody>
                </table>
                <h4 class="text-primary"><?php echo $message; ?></h4>
                <h4 class="text-primary">
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
