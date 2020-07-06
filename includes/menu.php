<?php

    $query_result = $obj_app->select_all_published_category_info();
?>

<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                    <div class="nav-outer">
                        <ul class="nav navbar-nav">
                            <li class="active dropdown yamm-fw">
                                <a href="index9ba3.html?page=home" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                            </li>
                            <?php while($category_info=mysqli_fetch_assoc($query_result)){ ?>
                            <li class="dropdown">
                                <a href="category.php?category_id=<?php echo $category_info['category_id']; ?>"><?php echo $category_info['category_name']; ?></a>    
                            </li>
                            <?php } ?>
                            <li class="dropdown">
                                <a href="contact.php">Contact</a>
                            </li>
                        </ul><!-- /.navbar-nav -->
                        <div class="clearfix"></div>				
                    </div><!-- /.nav-outer -->
                </div><!-- /.navbar-collapse -->


            </div><!-- /.nav-bg-class -->
        </div><!-- /.navbar-default -->
    </div><!-- /.container-class -->

</div>