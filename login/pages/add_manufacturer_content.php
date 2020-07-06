<?php
    $message = '';
   if(isset($_POST['btn'])){
       $message = $obj_manufacturer->save_manufacturer_info($_POST);
    }


?>


<div class="row">
    <div class="col-lg-12">
        <div class="well" style="padding-bottom: 0px;">
            <p class="lead text-center text-primary">Add Manufacturer Form</p>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-lg-12">
        <div class="well">
            <div class="row">
                <form class="form-horizontal" action="" method="post">

                    <div class="form-group">
                        <label class="control-label col-lg-3"> Manufacturer Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="manufacturer_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3"> Manufacturer Description</label>
                        <div class="col-lg-9">
                            <textarea name="manufacturer_description" class="form-control" rows="8"></textarea>
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
                            <input type="submit" name="btn" value="Save Manufacturer Info" class="btn btn-primary">
                        </div>
                    </div> 
                </form>    
               <h4 class="text-success"><?php echo $message;  ?></h4>
            </div>
        </div>
    </div>
</div>
