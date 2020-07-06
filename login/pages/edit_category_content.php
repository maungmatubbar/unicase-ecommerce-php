<?php
        
        $category_id = $_GET['id'];
        $category_info_select_id = $obj_category->select_category_info_id($category_id );
        $category_info = mysqli_fetch_assoc($category_info_select_id );
        if(isset($_POST['btn'])){
            $obj_category->update_category_info($_POST);
        }


?>


<div class="row">
    <div class="col-lg-12">
        <div class="well" style="padding-bottom: 0px;">
            <p class="lead text-center text-success">Edit Category Form</p>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-lg-12">
        <div class="well">
            <div class="row">
                <form class="form-horizontal" action="" method="post" name="category_info_form">

                    <div class="form-group">
                        <label class="control-label col-lg-3"> Category Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="category_name" class="form-control" value="<?php echo $category_info['category_name']; ?>">
                            <input type="hidden" name="category_id" class="form-control" value="<?php echo $category_info['category_id']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3"> Category Description</label>
                        <div class="col-lg-9">
                            <textarea name="category_description" class="form-control" rows="8"><?php echo $category_info['category_description']; ?></textarea>
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
                            <input type="submit" name="btn" value="Update Category Info" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    document.forms['category_info_form'].elements['publication_status'].value=<?php echo $category_info['publication_status']; ?>;
</script>