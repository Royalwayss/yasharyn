<?php

 include 'includes/header.php';
 
 $products = search_products($conn,@$_GET['keyword']);  
 
 ?>

<!-- Page Title -->
        <section class="page-title centred inner-pages" style="background-image: url(assets/images/background/product.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <h2>Search Products</h2>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


         <!-- shop-page-section -->
         <section class="shop-page-section product-listing">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="shop-sidebar default-sidebar">
                            <div class="sidebar-widget sidebar-category">
                                <div class="widget-title">
                                    <h3><?php echo $_GET['keyword']; ?></h3>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                        <div class="our-shop">
                            <div class="item-shorting clearfix">
                                <?php $product_count = count($products);?>
								<div class="left-column pull-left clearfix">
                                    <div class="text"><p>Showing <?php echo $product_count; if($product_count > 1){ echo ' products'; } else {  echo ' product';  } ?></p></div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <?php foreach($products as $product){  ?>
								<div class="col-lg-4 col-md-4 col-sm-12 shop-block">
                                    <div class="shop-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500m">
                                        <div class="inner-box">
                                            <?php if($product['image']) { ?>
											<figure class="image-box"><img src="assets/images/product/list/<?php echo $product['image']; ?>" alt=""></figure>
                                            <?php } ?>
											<div class="lower-content">
                                            <span><?php echo $product['size'] ; ?></span>
								               <h4><a href="product_details.php?id=<?php echo $product['id']; ?>"><?php echo $product['product_name']; ?></a></h4>
											  <?php /* <h6>INR 70.00</h6> */ ?>
                                                <a href="product_details.php?id=<?php echo $product['id']; ?>" class="theme-btn btn-two">View Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-page-section end -->


<?php include 'includes/footer.php'; ?>