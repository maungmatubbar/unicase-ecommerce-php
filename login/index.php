<?php
    session_start();
    if(isset($_SESSION['admin_id'])){
        if($_SESSION['admin_id']!=NULL){
            header('Location: admin_master.php');
        }
    }
    $message = '';
    if(isset($_POST['btn'])){
        require '../classes/login.php';
         $obj_login = new Login();
         $message = $obj_login->admin_login_check($_POST);
    }
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 Unicase - Bootstrap Admin Theme</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/back_end/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../assets/back_end/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../assets/back_end/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../assets/back_end/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title">Please Sign In</h1>
                        <h6 class="text-center text-danger"><?php echo $message; ?></h6>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email_address" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <div class="form-group">
                                    <input type="submit" name="btn" value="LOGIN" class="btn btn-success btn-block">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="../assets/back_end/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/back_end/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../assets/back_end/vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../assets/back_end/dist/js/sb-admin-2.js"></script>
</body>
</html>
