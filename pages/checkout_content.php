<?php

    if(isset($_POST['btn'])){
        $obj_check->save_customer_info($_POST);
    }
    if(isset($_POST['btn_login'])){
        $obj_check->customer_login($_POST);
    }

?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="text-success">You have to login to complete your check out process.If you are not registered then please register first.</h3>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <div>
                    <h3 class="text-center text-info">You may login here</h3>
                    <hr/>
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label class="control-label col-lg-3">Email Address</label>
                            <div class="col-lg-9">
                                <input type="email" name="email_address" class="form-control" required/>
                            </div>      
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-3">Password</label>
                            <div class="col-lg-9">
                                <input type="password" name="password" class="form-control" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-3"></label>
                            <div class="col-lg-9">
                                <input type="submit" name="btn_login" class="btn btn-primary" value="Login" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <div>
                    <h3 class="text-center text-info">You may register here</h3>
                    <hr/>
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label class="control-label col-lg-3">First Name</label>
                            <div class="col-lg-9">
                                <input type="text" name="first_name" class="form-control" required/>
                            </div>      
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-3">Last Name</label>
                            <div class="col-lg-9">
                                <input type="text" name="last_name" class="form-control" required/>
                            </div>      
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-3">Email Address</label>
                            <div class="col-lg-9">
                                <input type="email" name="email_address" onblur="ajax_email_check(this.value);" class="form-control" required/>
                                <span id="res"></span>
                            </div>      
                        </div>
                         <div class="form-group">
                            <label class="control-label col-lg-3">Password</label>
                            <div class="col-lg-9">
                                <input type="password" name="password" class="form-control" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-3">Address</label>
                            <div class="col-lg-9">
                                <textarea class="form-control" name="address" cols="5" rows="5"></textarea>
                            </div>      
                        </div>
                         <div class="form-group">
                            <label class="control-label col-lg-3">Phone Number</label>
                            <div class="col-lg-9">
                                <input type="number" name="phone_number" class="form-control" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-3"></label>
                            <div class="col-lg-9">
                                <input type="submit" name="btn" id="btn" class="btn btn-primary btn-block" value="Register" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var bitm = new XMLHttpRequest();
    function ajax_email_check(given_text) {
        var server_page = 'server.php?email=' + given_text;
        bitm.open('GET', server_page);
        bitm.onreadystatechange = function () {
            if (bitm.readyState == 4 && bitm.status == 200) {
                document.getElementById('res').innerHTML = bitm.responseText;
                if (bitm.responseText == 'Already exist') {
                    document.getElementById('btn').disabled = true;
                } else {
                    document.getElementById('btn').disabled = false;
                }
            }
        }
        bitm.send(null);
    }
</script>