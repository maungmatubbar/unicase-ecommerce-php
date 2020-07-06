<?php
    if(isset($_GET['status'])){
        if($_GET['status']=='logout'){
            $obj_check->customer_logout();
        }
    }


?>
<div class="top-bar animate-dropdown">
    <div class="container">
        <div class="header-top-inner">
            <div class="cnt-account">
                <ul class="list-unstyled">
                    <li><a href="#"><i class="icon fa fa-user"></i>My Account</a></li>
                    <li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
                    <li><a href="shop_cart.php"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                    <li><a href="checkout.php"><i class="icon fa fa-key"></i>Checkout</a></li>
                    <li>
                        <?php if(isset($_SESSION['customer_id'])){?>
                        <a href="?status=logout"><i class="icon fa fa-sign-out"></i>Logout</a>
                        <?php }else{?>
                         <a href="login.php"><i class="icon fa fa-sign-in"></i>Login</a>
                        <?php } ?>
                    </li>
                </ul>
            </div><!-- /.cnt-account -->

            <div class="cnt-block">
                <ul class="list-unstyled list-inline">
                    <li class="dropdown dropdown-small">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">USD</a></li>
                            <li><a href="#">INR</a></li>
                            <li><a href="#">GBP</a></li>
                        </ul>
                    </li>

                    <li class="dropdown dropdown-small">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">English</a></li>
                            <li><a href="#">French</a></li>
                            <li><a href="#">German</a></li>
                        </ul>
                    </li>
                </ul><!-- /.list-unstyled -->
            </div><!-- /.cnt-cart -->
            <div class="clearfix"></div>
        </div><!-- /.header-top-inner -->
    </div><!-- /.container -->
</div><!-- /.header-top -->
<!-- ============================================== TOP MENU : END ============================================== -->
<div class="main-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                <!-- ============================================================= LOGO ============================================================= -->
                <div class="logo">
                    <a href="index.php">

                        <img src="assets/fornt_end/images/logo.png" alt="">

                    </a>
                </div><!-- /.logo -->
                <!-- ============================================================= LOGO : END ============================================================= -->				</div><!-- /.logo-holder -->

            <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
                <div class="contact-row">
                    <div class="phone inline">
                        <i class="icon fa fa-phone"></i> (400) 888 888 868
                    </div>
                    <div class="contact inline">
                        <i class="icon fa fa-envelope"></i> <a href="https://demo2.chethemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4734262b22350732292e242634226924282a">[email&#160;protected]</a>
                    </div>
                </div><!-- /.contact-row -->
                <!-- ============================================================= SEARCH AREA ============================================================= -->
                <div class="search-area">
                    <form>
                        <div class="control-group">

                            <ul class="categories-filter animate-dropdown">
                                <li class="dropdown">

                                    <a class="dropdown-toggle"  data-toggle="dropdown" href="indexe2f2.html?page=category">Categories <b class="caret"></b></a>

                                    <ul class="dropdown-menu" role="menu" >
                                        <li class="menu-header">Computer</li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="indexe2f2.html?page=category">- Laptops</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="indexe2f2.html?page=category">- Tv & audio</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="indexe2f2.html?page=category">- Gadgets</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="indexe2f2.html?page=category">- Cameras</a></li>

                                    </ul>
                                </li>
                            </ul>

                            <input class="search-field" placeholder="Search here..." />

                            <a class="search-button" href="#" ></a>    

                        </div>
                    </form>
                </div><!-- /.search-area -->
                <!-- ============================================================= SEARCH AREA : END ============================================================= -->				</div><!-- /.top-search-holder -->

            <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
                <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                <div class="dropdown dropdown-cart">
                    <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                        <div class="items-cart-inner">
                            <div class="total-price-basket">
                                <span class="lbl">cart -</span>
                                <span class="total-price">
                                    <span class="sign">$</span>
                                    <span class="value">600.00</span>
                                </span>
                            </div>
                            <div class="basket">
                                <i class="glyphicon glyphicon-shopping-cart"></i>
                            </div>
                            <div class="basket-item-count"><span class="count">2</span></div>

                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="cart-item product-summary">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="image">
                                            <a href="indexbd17.html?page=detail"><img src="assets/fornt_end/images/cart.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">

                                        <h3 class="name"><a href="index8a95.html?page-detail">Simple Product</a></h3>
                                        <div class="price">$600.00</div>
                                    </div>
                                    <div class="col-xs-1 action">
                                        <a href="#"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </div><!-- /.cart-item -->
                            <div class="clearfix"></div>
                            <hr>

                            <div class="clearfix cart-total">
                                <div class="pull-right">

                                    <span class="text">Sub Total :</span><span class='price'>$600.00</span>

                                </div>
                                <div class="clearfix"></div>

                                <a href="index994a.html?page=checkout" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>	
                            </div><!-- /.cart-total-->


                        </li>
                    </ul><!-- /.dropdown-menu-->
                </div><!-- /.dropdown-cart -->

                <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				</div><!-- /.top-cart-row -->
        </div><!-- /.row -->

    </div><!-- /.container -->

</div>

