<?php
        
   require_once '../classes/application.php';
    $obj_app = new Application();
    $query_result = $obj_app->select_all_published_category_info();
    $manufacturer_result = $obj_app->select_all_published_manufacturer_info();
    $product_id = $_GET['id'];
    $product_select = $obj_product->select_product_info_by_id($product_id);
    $product_info = mysqli_fetch_assoc($product_select);
  
    if(isset($_POST['btn'])){
        $message = $obj_product->update_product_info($_POST);
    }
?>
<div class="row">
    <div class="col-lg-12">
        <div class="well" style="padding-bottom: 0px;">
            <p class="lead text-center text-primary">Edit Product Info Form</p>
        </div>
    </div>
    
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="well">
            <div class="row">
                <form class="form-horizontal" name="edit_product" action="" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label class="control-label col-lg-3">Product Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="product_name" value="<?php echo $product_info['product_name']; ?>" class="form-control">
                            <input type="hidden" name="product_id" value="<?php echo $product_info['product_id']; ?>" class="form-control">
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
                            <input type="text" name="product_price" value="<?php echo $product_info['product_price']; ?>" class="form-control">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-lg-3"> Product Quantity</label>
                        <div class="col-lg-9">
                            <input type="text" name="product_quantity" value="<?php echo $product_info['product_quantity']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3"> Product Short Description</label>
                        <div class="col-lg-9">
                            <textarea name="product_short_description" class="form-control" rows="8"><?php echo $product_info['product_short_description']; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3"> Product Long Description</label>
                        <div class="col-lg-9">
                            <textarea name="product_long_description" class="form-control" rows="8"><?php echo $product_info['product_long_description']; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3"> Product Image</label>
                        <div class="col-lg-9">
                            <img src="<?php echo $product_info['product_image']; ?>" alt="" height="200" width="200" class="image_rounded">
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
                            <input type="submit" name="btn" value="Save Product Info" class="btn btn-primary">
                        </div>
                    </div> 
                </form>   
            </div>
        </div>
    </div>
</div>
<script>
    document.forms['edit_product'].elements['publication_status'].value=<?php echo $product_info['publication_status']; ?>;
    document.forms['edit_product'].elements['category_id'].value=<?php echo $product_info['category_id']; ?>;
    document.forms['edit_product'].elements['manufacturer_id'].value=<?php echo $product_info['manufacturer_id']; ?>;
</script>
