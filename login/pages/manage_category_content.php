<?php
    $message = '';
    
    if(isset($_GET['status'])){
        $category_id = $_GET['id'];
        if($_GET['status'] == 'unpublish'){
           $message = $obj_category->unpublish_category_by_id($category_id);
        }
        else if($_GET['status'] == 'publish')
        {
           $message = $obj_category->publish_category_by_id($category_id);
        }
        else if($_GET['status'] == 'delete'){
            $message = $obj_category->delete_category_info_id($category_id);
        }
    }

    $query_result = $obj_category->select_all_category_info();
    
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                All category information goes here
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php while($category_info=mysqli_fetch_assoc($query_result)){?>
                        <tr class="odd gradeX">
                            <td><?php echo $category_info['category_name']; ?></td>
                            <td><?php echo $category_info['category_description']; ?></td>
                            <td>
                                <?php
                                if($category_info['publication_status']==1){
                                    echo"Published";
                                      }
                                      else{
                                          echo "Unpublished";
                                      }
                                ?>
                            </td>
                            
                            <td class="center">
                                <?php if($category_info['publication_status'] == 1){ ?>
                                <a href="?status=unpublish&&id=<?php echo $category_info['category_id'];?>" class="btn btn-success" title="Unpublished">
                                    <span class=" glyphicon glyphicon-arrow-down"></span> 
                                </a>
                                <?php }else{?>
                                <a href="?status=publish&&id=<?php echo $category_info['category_id'];?>" class="btn btn-warning" title="Published">
                                    <span class=" glyphicon glyphicon-arrow-up"></span> 
                                </a>
                                <?php }?>
                                
                                
                                <a href="edit_category.php?id=<?php echo $category_info['category_id'];?>" class="btn btn-primary" title="edit">
                                    <span class="glyphicon glyphicon-edit"></span> 
                                </a>
                                <a href="?status=delete&&id=<?php echo $category_info['category_id'];?>" onclick="return checkDelete()" class="btn btn-danger" title="delete">
                                    <span class="glyphicon glyphicon-trash"></span> 
                                </a>
                            </td>
                        </tr>
                       <?php }?>
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
