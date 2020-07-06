<?php
        
   require_once '../classes/application.php';
    $obj_app = new Application();
    $query_result = $obj_app->select_all_published_category_info();
    $manufacturer_result = $obj_app->select_all_published_manufacturer_info();
    
    
    $message = '';
    if(isset($_POST['btn'])){
        $message = $obj_product->save_product_info($_POST);
    }
?>
<div class="row">
    <div class="col-lg-12">
        <div class="well" style="padding-bottom: 0px;">
            <p class="lead text-center text-primary">Add Product Info Form</p>
        </div>
    </div>
    
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="well">
            <div class="row">
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label class="control-label col-lg-3"> Product Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="product_name" class="form-control">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-lg-3"> Category Name </label>
                        <div class="col-lg-9">
                            <select class="form-control" name="category_id">
                                <option>---Select Category Name---</option>
                                <?php while($published_category = mysqli_fetch_assoc($query_result)):?>
                                <option value="<?php echo $published_category['category_id']; ?>"><?php echo $published_category['category_name']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-lg-3"> Manufacturer Name </label>
                        <div class="col-lg-9">
                            <select class="form-control" name="manufacturer_id">
                                <option>---Select Manufacturer Name ---</option>
                                <?php while($published_manufacturer = mysqli_fetch_assoc($manufacturer_result)): ?>
                                <option value="<?php echo $published_manufacturer['manufacturer_id']; ?>"><?php echo $published_manufacturer['manufacturer_name']; ?></option>
                                <?php endwhile;?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3"> Product Price</label>
                        <div class="col-lg-9">
                            <input type="text" name="product_price" class="form-control">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-lg-3"> Product Quantity</label>
                        <div class="col-lg-9">
                            <input type="text" name="product_quantity" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3"> Product Short Description</label>
                        <div class="col-lg-9">
                            <textarea name="product_short_description" class="form-control" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3"> Product Long Description</label>
                        <div class="col-lg-9">
                            <textarea name="product_long_description" class="form-control" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3"> Product Image</label>
                        <div class="col-lg-9">
                            <input type="file" name="product_image" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3"> Publication Status </label>
                        <div class="col-lg-9">
                            <select class="form-control" name="publication_status">
                                <option>---Select publication status---</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-9">
                            <input type="submit" name="btn" value="Update Product Info" class="btn btn-primary">
                        </div>
                    </div> 
                </form> 
                <h4 class="text-success"><?php echo $message; ?></h4> 
            </div>
        </div>
    </div>
</div>
