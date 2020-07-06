<?php
    require_once 'classes/product.php';
    $product_id = $_GET['ID'];
    $obj_product = new Product();
    $product_result = $obj_product->select_product_info_by_id($product_id);
    $product_details = mysqli_fetch_assoc($product_result);
    if(isset($_POST['btn'])){
        require_once 'classes/cart.php';
        $obj_cart = new Cart();
       $cart_info =  $obj_cart->add_to_cart($_POST);
    }




?>
<div class='row single-product outer-bottom-sm '>
    <div class='col-md-3 sidebar'>
        <div class="sidebar-module-container">
            <!-- ==============================================CATEGORY============================================== -->
            <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
                <h3 class="section-title">Category</h3>
                <div class="sidebar-widget-body m-t-10">
                    <div class="accordion">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a href="#collapseOne" data-toggle="collapse" class="accordion-toggle collapsed">
                                    Camera
                                </a>
                            </div><!-- /.accordion-heading -->
                            <div class="accordion-body collapse" id="collapseOne" style="height: 0px;">
                                <div class="accordion-inner">
                                    <ul>
                                        <li><a href="#">gaming</a></li>
                                        <li><a href="#">office</a></li>
                                        <li><a href="#">kids</a></li>
                                        <li><a href="#">for women</a></li>
                                    </ul>
                                </div><!-- /.accordion-inner -->
                            </div><!-- /.accordion-body -->
                        </div><!-- /.accordion-group -->

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a href="#collapseTwo" data-toggle="collapse" class="accordion-toggle collapsed">
                                    Desktops
                                </a>
                            </div><!-- /.accordion-heading -->
                            <div class="accordion-body collapse" id="collapseTwo" style="height: 0px;">
                                <div class="accordion-inner">
                                    <ul>
                                        <li><a href="#">gaming</a></li>
                                        <li><a href="#">office</a></li>
                                        <li><a href="#">kids</a></li>
                                        <li><a href="#">for women</a></li>
                                    </ul>
                                </div><!-- /.accordion-inner -->
                            </div><!-- /.accordion-body -->
                        </div><!-- /.accordion-group -->

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a href="#collapseThree" data-toggle="collapse" class="accordion-toggle collapsed">
                                    Pants
                                </a>
                            </div><!-- /.accordion-heading -->
                            <div class="accordion-body collapse" id="collapseThree" style="height: 0px;">
                                <div class="accordion-inner">
                                    <ul>
                                        <li><a href="#">gaming</a></li>
                                        <li><a href="#">office</a></li>
                                        <li><a href="#">kids</a></li>
                                        <li><a href="#">for women</a></li>
                                    </ul>
                                </div><!-- /.accordion-inner -->
                            </div><!-- /.accordion-body -->
                        </div><!-- /.accordion-group -->

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a href="#collapseFour" data-toggle="collapse" class="accordion-toggle collapsed">
                                    Bags
                                </a>
                            </div><!-- /.accordion-heading -->
                            <div class="accordion-body collapse" id="collapseFour" style="height: 0px;">
                                <div class="accordion-inner">
                                    <ul>
                                        <li><a href="#">gaming</a></li>
                                        <li><a href="#">office</a></li>
                                        <li><a href="#">kids</a></li>
                                        <li><a href="#">for women</a></li>
                                    </ul>
                                </div><!-- /.accordion-inner -->
                            </div><!-- /.accordion-body -->
                        </div><!-- /.accordion-group -->

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a href="#collapseFive" data-toggle="collapse" class="accordion-toggle collapsed">
                                    Hats
                                </a>
                            </div><!-- /.accordion-heading -->
                            <div class="accordion-body collapse" id="collapseFive" style="height: 0px;">
                                <div class="accordion-inner">
                                    <ul>
                                        <li><a href="#">gaming</a></li>
                                        <li><a href="#">office</a></li>
                                        <li><a href="#">kids</a></li>
                                        <li><a href="#">for women</a></li>
                                    </ul>
                                </div><!-- /.accordion-inner -->
                            </div><!-- /.accordion-body -->
                        </div><!-- /.accordion-group -->

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a href="#collapseSix" data-toggle="collapse" class="accordion-toggle collapsed">
                                    Accessories
                                </a>
                            </div><!-- /.accordion-heading -->
                            <div class="accordion-body collapse" id="collapseSix" style="height: 0px;">
                                <div class="accordion-inner">
                                    <ul>
                                        <li><a href="#">gaming</a></li>
                                        <li><a href="#">office</a></li>
                                        <li><a href="#">kids</a></li>
                                        <li><a href="#">for women</a></li>
                                    </ul>
                                </div><!-- /.accordion-inner -->
                            </div><!-- /.accordion-body -->
                        </div><!-- /.accordion-group -->

                    </div><!-- /.accordion -->
                </div><!-- /.sidebar-widget-body -->
            </div><!-- /.sidebar-widget -->
            <!-- ============================================== CATEGORY : END ============================================== -->					<!-- ============================================== HOT DEALS ============================================== -->
            <div class="sidebar-widget hot-deals wow fadeInUp">
                <h3 class="section-title">hot deals</h3>
                <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs">

                    <div class="item">
                        <div class="products">
                            <div class="hot-deal-wrapper">
                                <div class="image">
                                    <img src="assets/fornt_end/images/hot-deals/1.jpg" alt="">
                                </div>
                                <div class="sale-offer-tag"><span>35%<br>off</span></div>
                                <div class="timing-wrapper">
                                    <div class="box-wrapper">
                                        <div class="date box">
                                            <span class="key">120</span>
                                            <span class="value">Days</span>
                                        </div>
                                    </div>

                                    <div class="box-wrapper">
                                        <div class="hour box">
                                            <span class="key">20</span>
                                            <span class="value">HRS</span>
                                        </div>
                                    </div>

                                    <div class="box-wrapper">
                                        <div class="minutes box">
                                            <span class="key">36</span>
                                            <span class="value">MINS</span>
                                        </div>
                                    </div>

                                    <div class="box-wrapper hidden-md">
                                        <div class="seconds box">
                                            <span class="key">60</span>
                                            <span class="value">SEC</span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.hot-deal-wrapper -->

                            <div class="product-info text-left m-t-20">
                                <h3 class="name"><a href="indexbd17.html?page=detail">Apple Iphone 5s 32GB Gold</a></h3>
                                <div class="rating rateit-small"></div>

                                <div class="product-price">	
                                    <span class="price">
                                        $600.00
                                    </span>

                                    <span class="price-before-discount">$800.00</span>					

                                </div><!-- /.product-price -->

                            </div><!-- /.product-info -->

                            <div class="cart clearfix animate-effect">
                                <div class="action">

                                    <div class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                            <i class="fa fa-shopping-cart"></i>													
                                        </button>
                                        <button class="btn btn-primary" type="button">Add to cart</button>

                                    </div>

                                </div><!-- /.action -->
                            </div><!-- /.cart -->
                        </div>	
                    </div>		        
                    <div class="item">
                        <div class="products">
                            <div class="hot-deal-wrapper">
                                <div class="image">
                                    <img src="assets/fornt_end/images/hot-deals/2.jpg" alt="">
                                </div>
                                <div class="sale-offer-tag"><span>35%<br>off</span></div>
                                <div class="timing-wrapper">
                                    <div class="box-wrapper">
                                        <div class="date box">
                                            <span class="key">120</span>
                                            <span class="value">Days</span>
                                        </div>
                                    </div>

                                    <div class="box-wrapper">
                                        <div class="hour box">
                                            <span class="key">20</span>
                                            <span class="value">HRS</span>
                                        </div>
                                    </div>

                                    <div class="box-wrapper">
                                        <div class="minutes box">
                                            <span class="key">36</span>
                                            <span class="value">MINS</span>
                                        </div>
                                    </div>

                                    <div class="box-wrapper hidden-md">
                                        <div class="seconds box">
                                            <span class="key">60</span>
                                            <span class="value">SEC</span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.hot-deal-wrapper -->

                            <div class="product-info text-left m-t-20">
                                <h3 class="name"><a href="indexbd17.html?page=detail">Apple Iphone 5s 32GB Gold</a></h3>
                                <div class="rating rateit-small"></div>

                                <div class="product-price">	
                                    <span class="price">
                                        $600.00
                                    </span>

                                    <span class="price-before-discount">$800.00</span>					

                                </div><!-- /.product-price -->

                            </div><!-- /.product-info -->

                            <div class="cart clearfix animate-effect">
                                <div class="action">

                                    <div class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                            <i class="fa fa-shopping-cart"></i>													
                                        </button>
                                        <button class="btn btn-primary" type="button">Add to cart</button>

                                    </div>

                                </div><!-- /.action -->
                            </div><!-- /.cart -->
                        </div>	
                    </div>		        
                    <div class="item">
                        <div class="products">
                            <div class="hot-deal-wrapper">
                                <div class="image">
                                    <img src="assets/fornt_end/images/hot-deals/3.jpg" alt="">
                                </div>
                                <div class="sale-offer-tag"><span>35%<br>off</span></div>
                                <div class="timing-wrapper">
                                    <div class="box-wrapper">
                                        <div class="date box">
                                            <span class="key">120</span>
                                            <span class="value">Days</span>
                                        </div>
                                    </div>

                                    <div class="box-wrapper">
                                        <div class="hour box">
                                            <span class="key">20</span>
                                            <span class="value">HRS</span>
                                        </div>
                                    </div>

                                    <div class="box-wrapper">
                                        <div class="minutes box">
                                            <span class="key">36</span>
                                            <span class="value">MINS</span>
                                        </div>
                                    </div>

                                    <div class="box-wrapper hidden-md">
                                        <div class="seconds box">
                                            <span class="key">60</span>
                                            <span class="value">SEC</span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.hot-deal-wrapper -->

                            <div class="product-info text-left m-t-20">
                                <h3 class="name"><a href="indexbd17.html?page=detail">Apple Iphone 5s 32GB Gold</a></h3>
                                <div class="rating rateit-small"></div>

                                <div class="product-price">	
                                    <span class="price">
                                        $600.00
                                    </span>

                                    <span class="price-before-discount">$800.00</span>					

                                </div><!-- /.product-price -->

                            </div><!-- /.product-info -->

                            <div class="cart clearfix animate-effect">
                                <div class="action">

                                    <div class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                            <i class="fa fa-shopping-cart"></i>													
                                        </button>
                                        <button class="btn btn-primary" type="button">Add to cart</button>

                                    </div>

                                </div><!-- /.action -->
                            </div><!-- /.cart -->
                        </div>	
                    </div>		        


                </div><!-- /.sidebar-widget -->
            </div>
            <!-- ============================================== HOT DEALS: END ============================================== -->					<!-- ============================================== COLOR============================================== -->
            <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
                <div id="advertisement" class="advertisement">
                    <div class="item bg-color">
                        <div class="container-fluid">
                            <div class="caption vertical-top text-left">
                                <div class="big-text">
                                    Save<span class="big">50%</span>
                                </div>


                                <div class="excerpt">
                                    on selected items
                                </div>
                            </div><!-- /.caption -->
                        </div><!-- /.container-fluid -->
                    </div><!-- /.item -->

                    <div class="item" style="background-image: url('assets/fornt_end/images/advertisement/1.jpg');">

                    </div><!-- /.item -->

                    <div class="item bg-color">
                        <div class="container-fluid">
                            <div class="caption vertical-top text-left">
                                <div class="big-text">
                                    Save<span class="big">50%</span>
                                </div>


                                <div class="excerpt fadeInDown-2">
                                    on selected items
                                </div>
                            </div><!-- /.caption -->
                        </div><!-- /.container-fluid -->
                    </div><!-- /.item -->

                </div><!-- /.owl-carousel -->
            </div>

            <!-- ============================================== COLOR: END ============================================== -->
        </div>
    </div><!-- /.sidebar -->
    <div class='col-md-9'>
        <div class="row  wow fadeInUp">
            <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                <div class="product-item-holder size-big single-product-gallery small-gallery">

                    <div id="owl-single-product">
                        <div class="single-product-gallery-item" id="slide1">
                            <a data-lightbox="image-1" data-title="Gallery" href="assets/<?php echo $product_details['product_image']; ?>">
                                <img class="img-responsive" alt="" src="assets/fornt_end/images/blank.gif" data-echo="assets/<?php echo $product_details['product_image']; ?>" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide2">
                            <a data-lightbox="image-1" data-title="Gallery" href="assets/fornt_end/images/single-product/2.jpg">
                                <img class="img-responsive" alt="" src="assets/fornt_end/images/blank.gif" data-echo="assets/fornt_end/images/single-product/2.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide3">
                            <a data-lightbox="image-1" data-title="Gallery" href="assets/fornt_end/images/single-product/3.jpg">
                                <img class="img-responsive" alt="" src="assets/fornt_end/images/blank.gif" data-echo="assets/fornt_end/images/single-product/3.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->
         
                    </div><!-- /.single-product-slider -->


                    <div class="single-product-gallery-thumbs gallery-thumbs">

                        <div id="owl-single-product-thumbnails">
                            <div class="item">
                                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                                    <img class="img-responsive" width="85" alt="" src="assets/fornt_end/images/blank.gif" data-echo="assets/fornt_end/images/single-product/sm1.jpg" />
                                </a>
                            </div>
                            <div class="item">
                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide2">
                                    <img class="img-responsive" width="85" alt="" src="assets/fornt_end/images/blank.gif" data-echo="assets/fornt_end/images/single-product/sm2.jpg"/>
                                </a>
                            </div>
                            <div class="item">

                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="3" href="#slide3">
                                    <img class="img-responsive" width="85" alt="" src="assets/fornt_end/images/blank.gif" data-echo="assets/fornt_end/images/single-product/sm3.jpg" />
                                </a>
                            </div>
                             
                        </div><!-- /#owl-single-product-thumbnails -->

                    </div><!-- /.gallery-thumbs -->

                </div><!-- /.single-product-gallery -->
            </div><!-- /.gallery-holder -->        			
            <div class='col-sm-6 col-md-7 product-info-block'>
                <div class="product-info">
                    <h1 class="name"><?php echo $product_details['product_name']; ?></h1>

                    <div class="rating-reviews m-t-20">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="rating rateit-small"></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="reviews">
                                    <a href="#" class="lnk">(06 Reviews)</a>
                                </div>
                            </div>
                        </div><!-- /.row -->		
                    </div><!-- /.rating-reviews -->

                    <div class="stock-container info-container m-t-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="stock-box">
                                    <span class="label">Availability :</span>
                                </div>	
                            </div>
                            <div class="col-sm-9">
                                <div class="stock-box">
                                    <span class="value">In Stock</span>
                                </div>	
                            </div>
                        </div><!-- /.row -->	
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="stock-box">
                                    <span class="label">Category :</span>
                                </div>	
                            </div>
                            <div class="col-sm-9">
                                <div class="stock-box">
                                    <span class="value"><?php echo $product_details['category_name']; ?></span>
                                </div>	
                            </div>
                        </div><!-- /.row -->	
                    </div><!-- /.stock-container -->

                    <div class="description-container m-t-20">
                       <?php echo $product_details['product_long_description']; ?>
                    </div><!-- /.description-container -->

                    <div class="price-container info-container m-t-20">
                        <div class="row">


                            <div class="col-sm-6">
                                <div class="price-box">
                                    <span class="price">BDT <?php echo $product_details['product_price']; ?></span>
                                    
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="favorite-button m-t-10">
                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
                                        <i class="fa fa-retweet"></i>
                                    </a>
                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </div>
                            </div>

                        </div><!-- /.row -->
                    </div><!-- /.price-container -->
                    <form action="" method="post">
                        <div class="quantity-container info-container">
                            <div class="row">
                                <div class="col-sm-2">
                                    <span class="label">Qty :</span>
                                </div>

                                <div class="col-sm-2">
                                    <div class="cart-quantity">
                                        <div class="quant-input">
                                            <div class="arrows">
                                                <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                            </div>
                                            <input type="text" name="product_quantity" value="1">
                                            <input type="hidden" name="product_id" value="<?php echo $product_details['product_id']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-7">
                                    <input type="submit" name="btn" value="ADD TO CART" class="btn btn-primary" >
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.quantity-container -->
                    </form>

                    <div class="product-social-link m-t-20 text-right">
                        <span class="social-label">Share :</span>
                        <div class="social-icons">
                            <ul class="list-inline">
                                <li><a class="fa fa-facebook" href="https://facebook.com/transvelo"></a></li>
                                <li><a class="fa fa-twitter" href="#"></a></li>
                                <li><a class="fa fa-linkedin" href="#"></a></li>
                                <li><a class="fa fa-rss" href="#"></a></li>
                                <li><a class="fa fa-pinterest" href="#"></a></li>
                            </ul><!-- /.social-icons -->
                        </div>
                    </div>




                </div><!-- /.product-info -->
            </div><!-- /.col-sm-7 -->
        </div><!-- /.row -->


        <div class="product-tabs inner-bottom-xs  wow fadeInUp">
            <div class="row">
                <div class="col-sm-3">
                    <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                        <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                        <li><a data-toggle="tab" href="#review">REVIEW</a></li>
                        <li><a data-toggle="tab" href="#tags">TAGS</a></li>
                    </ul><!-- /.nav-tabs #product-tabs -->
                </div>
                <div class="col-sm-9">

                    <div class="tab-content">

                        <div id="description" class="tab-pane in active">
                            <div class="product-tab">
                                <p class="text"><?php echo $product_details['product_long_description']; ?></p>
                            </div>	
                        </div><!-- /.tab-pane -->

                        <div id="review" class="tab-pane">
                            <div class="product-tab">

                                <div class="product-reviews">
                                    <h4 class="title">Customer Reviews</h4>

                                    <div class="reviews">
                                        <div class="review">
                                            <div class="review-title"><span class="summary">Best Product For me :)</span><span class="date"><i class="fa fa-calendar"></i><span>20 minutes ago</span></span></div>
                                            <div class="text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aliquam suscipit nisl in adipiscin"</div>
                                            <div class="author m-t-15"><i class="fa fa-pencil-square-o"></i> <span class="name">Michael Lee</span></div>													</div>

                                    </div><!-- /.reviews -->
                                </div><!-- /.product-reviews -->



                                <div class="product-add-review">
                                    <h4 class="title">Write your own review</h4>
                                    <div class="review-table">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">	
                                                <thead>
                                                    <tr>
                                                        <th class="cell-label">&nbsp;</th>
                                                        <th>1 star</th>
                                                        <th>2 stars</th>
                                                        <th>3 stars</th>
                                                        <th>4 stars</th>
                                                        <th>5 stars</th>
                                                    </tr>
                                                </thead>	
                                                <tbody>
                                                    <tr>
                                                        <td class="cell-label">Quality</td>
                                                        <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cell-label">Price</td>
                                                        <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cell-label">Value</td>
                                                        <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                    </tr>
                                                </tbody>
                                            </table><!-- /.table .table-bordered -->
                                        </div><!-- /.table-responsive -->
                                    </div><!-- /.review-table -->

                                    <div class="review-form">
                                        <div class="form-container">
                                            <form role="form" class="cnt-form">

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputName">Your Name <span class="astk">*</span></label>
                                                            <input type="text" class="form-control txt" id="exampleInputName" placeholder="">
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label for="exampleInputSummary">Summary <span class="astk">*</span></label>
                                                            <input type="text" class="form-control txt" id="exampleInputSummary" placeholder="">
                                                        </div><!-- /.form-group -->
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputReview">Review <span class="astk">*</span></label>
                                                            <textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder=""></textarea>
                                                        </div><!-- /.form-group -->
                                                    </div>
                                                </div><!-- /.row -->

                                                <div class="action text-right">
                                                    <button class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
                                                </div><!-- /.action -->

                                            </form><!-- /.cnt-form -->
                                        </div><!-- /.form-container -->
                                    </div><!-- /.review-form -->

                                </div><!-- /.product-add-review -->										

                            </div><!-- /.product-tab -->
                        </div><!-- /.tab-pane -->

                        <div id="tags" class="tab-pane">
                            <div class="product-tag">

                                <h4 class="title">Product Tags</h4>
                                <form role="form" class="form-inline form-cnt">
                                    <div class="form-container">

                                        <div class="form-group">
                                            <label for="exampleInputTag">Add Your Tags: </label>
                                            <input type="email" id="exampleInputTag" class="form-control txt">


                                        </div>

                                        <button class="btn btn-upper btn-primary" type="submit">ADD TAGS</button>
                                    </div><!-- /.form-container -->
                                </form><!-- /.form-cnt -->

                                <form role="form" class="form-inline form-cnt">
                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span>
                                    </div>
                                </form><!-- /.form-cnt -->

                            </div><!-- /.product-tab -->
                        </div><!-- /.tab-pane -->

                    </div><!-- /.tab-content -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.product-tabs -->

        <!-- ============================================== UPSELL PRODUCTS ============================================== -->
        <section class="section featured-product wow fadeInUp">
            <h3 class="section-title">upsell products</h3>
            <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">

                <div class="item item-carousel">
                    <div class="products">

                        <div class="product">		
                            <div class="product-image">
                                <div class="image">
                                    <a href="indexbd17.html?page=detail"><img  src="assets/fornt_end/images/blank.gif" data-echo="assets/fornt_end/images/products/1.jpg" alt=""></a>
                                </div><!-- /.image -->			

                                <div class="tag hot"><span>hot</span></div>		   
                            </div><!-- /.product-image -->


                            <div class="product-info text-left">
                                <h3 class="name"><a href="indexbd17.html?page=detail">Sony Ericson Vaga</a></h3>
                                <div class="rating rateit-small"></div>
                                <div class="description"></div>

                                <div class="product-price">	
                                    <span class="price">
                                        $650.99				</span>
                                    <span class="price-before-discount">$ 800</span>

                                </div><!-- /.product-price -->

                            </div><!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                        <li class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                <i class="fa fa-shopping-cart"></i>													
                                            </button>
                                            <button class="btn btn-primary" type="button">Add to cart</button>

                                        </li>

                                        <li class="lnk wishlist">
                                            <a class="add-to-cart" href="indexbd17.html?page=detail" title="Wishlist">
                                                <i class="icon fa fa-heart"></i>
                                            </a>
                                        </li>

                                        <li class="lnk">
                                            <a class="add-to-cart" href="indexbd17.html?page=detail" title="Compare">
                                                <i class="fa fa-retweet"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- /.action -->
                            </div><!-- /.cart -->
                        </div><!-- /.product -->

                    </div><!-- /.products -->
                </div><!-- /.item -->

                <div class="item item-carousel">
                    <div class="products">

                        <div class="product">		
                            <div class="product-image">
                                <div class="image">
                                    <a href="indexbd17.html?page=detail"><img  src="assets/fornt_end/images/blank.gif" data-echo="assets/fornt_end/images/products/6.jpg" alt=""></a>
                                </div><!-- /.image -->			

                                <div class="tag new"><span>new</span></div>                        		   
                            </div><!-- /.product-image -->


                            <div class="product-info text-left">
                                <h3 class="name"><a href="indexbd17.html?page=detail">Nokia Lumia 520</a></h3>
                                <div class="rating rateit-small"></div>
                                <div class="description"></div>

                                <div class="product-price">	
                                    <span class="price">
                                        $650.99				</span>
                                    <span class="price-before-discount">$ 800</span>

                                </div><!-- /.product-price -->

                            </div><!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                        <li class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                <i class="fa fa-shopping-cart"></i>													
                                            </button>
                                            <button class="btn btn-primary" type="button">Add to cart</button>

                                        </li>

                                        <li class="lnk wishlist">
                                            <a class="add-to-cart" href="indexbd17.html?page=detail" title="Wishlist">
                                                <i class="icon fa fa-heart"></i>
                                            </a>
                                        </li>

                                        <li class="lnk">
                                            <a class="add-to-cart" href="indexbd17.html?page=detail" title="Compare">
                                                <i class="fa fa-retweet"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- /.action -->
                            </div><!-- /.cart -->
                        </div><!-- /.product -->

                    </div><!-- /.products -->
                </div><!-- /.item -->

                <div class="item item-carousel">
                    <div class="products">

                        <div class="product">		
                            <div class="product-image">
                                <div class="image">
                                    <a href="indexbd17.html?page=detail"><img  src="assets/fornt_end/images/blank.gif" data-echo="assets/fornt_end/images/products/4.jpg" alt=""></a>
                                </div><!-- /.image -->			

                                <div class="tag sale"><span>sale</span></div>            		   
                            </div><!-- /.product-image -->


                            <div class="product-info text-left">
                                <h3 class="name"><a href="indexbd17.html?page=detail">LG Smart Phone LP68</a></h3>
                                <div class="rating rateit-small"></div>
                                <div class="description"></div>

                                <div class="product-price">	
                                    <span class="price">
                                        $650.99				</span>
                                    <span class="price-before-discount">$ 800</span>

                                </div><!-- /.product-price -->

                            </div><!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                        <li class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                <i class="fa fa-shopping-cart"></i>													
                                            </button>
                                            <button class="btn btn-primary" type="button">Add to cart</button>

                                        </li>

                                        <li class="lnk wishlist">
                                            <a class="add-to-cart" href="indexbd17.html?page=detail" title="Wishlist">
                                                <i class="icon fa fa-heart"></i>
                                            </a>
                                        </li>

                                        <li class="lnk">
                                            <a class="add-to-cart" href="indexbd17.html?page=detail" title="Compare">
                                                <i class="fa fa-retweet"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- /.action -->
                            </div><!-- /.cart -->
                        </div><!-- /.product -->

                    </div><!-- /.products -->
                </div><!-- /.item -->

                <div class="item item-carousel">
                    <div class="products">

                        <div class="product">		
                            <div class="product-image">
                                <div class="image">
                                    <a href="indexbd17.html?page=detail"><img  src="assets/fornt_end/images/blank.gif" data-echo="assets/fornt_end/images/products/3.jpg" alt=""></a>
                                </div><!-- /.image -->			

                                <div class="tag sale"><span>sale</span></div>            		   
                            </div><!-- /.product-image -->


                            <div class="product-info text-left">
                                <h3 class="name"><a href="indexbd17.html?page=detail">Apple Iphone 5s 32GB</a></h3>
                                <div class="rating rateit-small"></div>
                                <div class="description"></div>

                                <div class="product-price">	
                                    <span class="price">
                                        $650.99				</span>
                                    <span class="price-before-discount">$ 800</span>

                                </div><!-- /.product-price -->

                            </div><!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                        <li class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                <i class="fa fa-shopping-cart"></i>													
                                            </button>
                                            <button class="btn btn-primary" type="button">Add to cart</button>

                                        </li>

                                        <li class="lnk wishlist">
                                            <a class="add-to-cart" href="indexbd17.html?page=detail" title="Wishlist">
                                                <i class="icon fa fa-heart"></i>
                                            </a>
                                        </li>

                                        <li class="lnk">
                                            <a class="add-to-cart" href="indexbd17.html?page=detail" title="Compare">
                                                <i class="fa fa-retweet"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- /.action -->
                            </div><!-- /.cart -->
                        </div><!-- /.product -->

                    </div><!-- /.products -->
                </div><!-- /.item -->

                <div class="item item-carousel">
                    <div class="products">

                        <div class="product">		
                            <div class="product-image">
                                <div class="image">
                                    <a href="indexbd17.html?page=detail"><img  src="assets/fornt_end/images/blank.gif" data-echo="assets/fornt_end/images/products/2.jpg" alt=""></a>
                                </div><!-- /.image -->			

                                <div class="tag hot"><span>hot</span></div>		   
                            </div><!-- /.product-image -->


                            <div class="product-info text-left">
                                <h3 class="name"><a href="indexbd17.html?page=detail">Samsung Galaxy S4</a></h3>
                                <div class="rating rateit-small"></div>
                                <div class="description"></div>

                                <div class="product-price">	
                                    <span class="price">
                                        $650.99				</span>
                                    <span class="price-before-discount">$ 800</span>

                                </div><!-- /.product-price -->

                            </div><!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                        <li class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                <i class="fa fa-shopping-cart"></i>													
                                            </button>
                                            <button class="btn btn-primary" type="button">Add to cart</button>

                                        </li>

                                        <li class="lnk wishlist">
                                            <a class="add-to-cart" href="indexbd17.html?page=detail" title="Wishlist">
                                                <i class="icon fa fa-heart"></i>
                                            </a>
                                        </li>

                                        <li class="lnk">
                                            <a class="add-to-cart" href="indexbd17.html?page=detail" title="Compare">
                                                <i class="fa fa-retweet"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- /.action -->
                            </div><!-- /.cart -->
                        </div><!-- /.product -->

                    </div><!-- /.products -->
                </div><!-- /.item -->

                <div class="item item-carousel">
                    <div class="products">

                        <div class="product">		
                            <div class="product-image">
                                <div class="image">
                                    <a href="indexbd17.html?page=detail"><img  src="assets/fornt_end/images/blank.gif" data-echo="assets/fornt_end/images/products/2.jpg" alt=""></a>
                                </div><!-- /.image -->			

                                <div class="tag new"><span>new</span></div>                        		   
                            </div><!-- /.product-image -->


                            <div class="product-info text-left">
                                <h3 class="name"><a href="indexbd17.html?page=detail">Samsung Galaxy S4</a></h3>
                                <div class="rating rateit-small"></div>
                                <div class="description"></div>

                                <div class="product-price">	
                                    <span class="price">
                                        $650.99				</span>
                                    <span class="price-before-discount">$ 800</span>

                                </div><!-- /.product-price -->

                            </div><!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                        <li class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                <i class="fa fa-shopping-cart"></i>													
                                            </button>
                                            <button class="btn btn-primary" type="button">Add to cart</button>

                                        </li>

                                        <li class="lnk wishlist">
                                            <a class="add-to-cart" href="indexbd17.html?page=detail" title="Wishlist">
                                                <i class="icon fa fa-heart"></i>
                                            </a>
                                        </li>

                                        <li class="lnk">
                                            <a class="add-to-cart" href="indexbd17.html?page=detail" title="Compare">
                                                <i class="fa fa-retweet"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- /.action -->
                            </div><!-- /.cart -->
                        </div><!-- /.product -->

                    </div><!-- /.products -->
                </div><!-- /.item -->
            </div><!-- /.home-owl-carousel -->
        </section><!-- /.section -->
        <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

    </div><!-- /.col -->
    <div class="clearfix"></div>
</div><!-- /.row -->