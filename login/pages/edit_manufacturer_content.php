<?php
        
        $manufacturer_id = $_GET['id'];
        $manufacturer_info_select_id = $obj_manufacturer->select_manufacturer_info_id($manufacturer_id );
        $manufacturer_info = mysqli_fetch_assoc($manufacturer_info_select_id);
        if(isset($_POST['btn'])){
           $obj_manufacturer->update_manufacturer_info($_POST);
       }


?>


<div class="row">
    <div class="col-lg-12">
        <div class="well" style="padding-bottom: 0px;">
            <p class="lead text-center text-success">Edit Manufacturer Form</p>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-lg-12">
        <div class="well">
            <div class="row">
                <form class="form-horizontal" action="" method="post" name="manufacturer_info_form">

                    <div class="form-group">
                        <label class="control-label col-lg-3"> Manufacturer Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="manufacturer_name" class="form-control" value="<?php echo $manufacturer_info['manufacturer_name']; ?>">
                            <input type="hidden" name="manufacturer_id" class="form-control" value="<?php echo $manufacturer_info['manufacturer_id']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3"> Manufacturer Description</label>
                        <div class="col-lg-9">
                            <textarea name="manufacturer_description" class="form-control" rows="8"><?php echo $manufacturer_info['manufacturer_description']; ?></textarea>
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
                            <input type="submit" name="btn" value="Update Manufacturer Info" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    document.forms['manufacturer_info_form'].elements['publication_status'].value=<?php echo $manufacturer_info['publication_status']; ?>;
</script>
