<!DOCTYPE html>
<?php
   include('admin/include/config.php');
   $categories = get_categories($conn,$status=1); 
   ?>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <title>Yasharyn</title>
   <!-- Fav Icon -->
   <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
   <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
   <!-- Stylesheets -->
   <link href="assets/css/font-awesome-all.css" rel="stylesheet">
   <link href="assets/css/flaticon.css" rel="stylesheet">
   <link href="assets/css/owl.css" rel="stylesheet">
   <link href="assets/css/bootstrap.css" rel="stylesheet">
   <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
   <link href="assets/css/animate.css" rel="stylesheet">
   <link href="assets/css/jquery-ui.css" rel="stylesheet">
   <link href="assets/css/color.css?v=2.0" rel="stylesheet">
   <link href="assets/css/style.css?v=2.2" rel="stylesheet">
   <link href="assets/css/nice-select.css" rel="stylesheet">
   <link href="assets/css/responsive.css?v=2.0" rel="stylesheet">
   <link href="assets/css/select2.min.css" rel="stylesheet" />
   <link href="assets/css/dev.css" rel="stylesheet" />
   <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
   <!-- Swiper CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
   <style>
      .error {
         color: red;
      }
   </style>
</head>
<!-- page wrapper -->

<body>
   <div class="boxed_wrapper">
      <!-- preloader -->
      <div class="loader-wrap">
         <div class="preloader">
            <!-- <div class="preloader-close">Preloader Close</div> -->
            <div id="handle-preloader" class="handle-preloader">
               <div class="animation-preloader">
                  <!-- <div class="spinner"></div> -->
                  <figure class="logo text-center"><a href="index.php"><img src="assets/images/logo-w.png"
                           class="img-fluid " style="width: 20%;" alt=""></a></figure>
               </div>
            </div>
         </div>
      </div>
      <!-- preloader end -->
      <header class="main-header">
         <div class="row justify-content-center d-flex align-items-centers">
            <div class="col-3 col-md-4 col-lg-4 justify-content-center d-flex align-items-center social-media-display">
               <ul class="header-social-media d-flex align-items-center">
                  <li><a class="fb-color" style="background-color:#3b5998;"
                        href="https://www.facebook.com/yasharynofficial"><i class="fab fa-facebook-f "></i></a></li>
                  <li><a class="insta-color" style="background: linear-gradient(
                     45deg,
                     #405DE6,
                     #5851DB,
                     #833AB4,
                     #C13584,
                     #E1306C,
                     #FD1D1D,
                     #F56040,
                     #F77737,
                     #FCAF45);" href="https://www.instagram.com/yasharynofficial/"><i
                           class="fab fa-instagram "></i></a></li>
                  <li><a class="insta-color" style="background-color:#0a66c2;"
                        href="https://www.linkedin.com/company/yasharynofficial/"><i
                           class="fab fa-linkedin-in linkedin-color"></i></a></li>
               </ul>
            </div>
            <div class="col-4 col-md-4 col-lg-4 justify-content-center d-flex align-items-centers logo-header-display text-center">
               <figure class="logo"><a href="index.php"><img src="assets/images/new-logo.png" alt=""></a></figure>
            </div>
            <div class="col-3 col-md-4 col-lg-4 justify-content-center d-flex align-items-center social-media-display">
               <ul class="header-social-media d-flex align-items-center">
                  <li><a style="background-color:#006a4e;" href="tel:+91-93170-88991"><i class="fal fa-phone"></i></a>
                  </li>
                  <li><a style="background-color:#1d6cb3;" href="mailto:info@yasharyn.com"><i
                           class="fal fa-envelope-open-text"></i></a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="header-lower">
            <div class="outer-box">
               <div class="menu-area clearfix">
                  <!--Mobile Navigation Toggler-->
                  <div class="mobile-nav-toggler">
                     <i class="icon-bar"></i>
                     <i class="icon-bar"></i>
                     <i class="icon-bar"></i>
                  </div>
                  <nav class="main-menu navbar-expand-md navbar-light text-center">
                     <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                           <li class="current"><a href="<?php echo BASE_URL; ?>">Home</a></li>
                           <li class="dropdown">
                              <a href="">About Us</a>
                              <ul>
                                 <li><a href="about-us.php">About Us</a></li>
                                 <li><a href="about-us.php#certification">Certification</a></li>
                                 <li><a href="about-us.php#management">Management</a></li>
                                 <li><a href="about-us.php#leads">Why Yasharyn Leads</a></li>
                              </ul>
                           </li>
                           <!-- <li><a href="why-us.php">Why Us</a></li>   -->
                           <li class="dropdown">
                              <a href="product.php">Products</a>
                              <ul>
                                 <?php foreach($categories as $category) { ?>
                                 <li class="dropdown">

                                    <a href="products.php?category_id=<?php echo $category['id']; ?>">
                                       <?php echo $category['category_name']; ?>
                                    </a>

                                    <ul>
                                       <?php foreach($category['sub_categories'] as $sub_category) { ?>
                                       <li <?php if(!empty($sub_category['sub_categories2'])) { ?>class="dropdown
                                          parent-category"
                                          <?php } ?>>
                                          <a href="products.php?category_id=<?php echo $sub_category['id']; ?>">
                                             <?php echo $sub_category['category_name']; ?>
                                          </a>

                                          <ul class="subcategory2 ">
                                             <?php foreach($sub_category['sub_categories2'] as $sub_category2) { ?>
                                             <li><a href="products.php?category_id=<?php echo $sub_category2['id']; ?>">
                                                   <?php echo $sub_category2['category_name']; ?>
                                                </a> </li>

                                             <?php } ?>
                                          </ul>
                                       </li>
                                       <?php } ?>
                                    </ul>
                                 </li>
                                 <?php } ?>
                              </ul>
                           </li>
                           <li><a href="infrastructure.php">Infrastructure</a></li>
                           <li><a href="csr.php">CSR</a></li>
                           <li><a href="clients.php">Clients</a></li>
                           <li><a href="contacts.php">Contact</a></li>
                           <li><a href="events.php">Events</a></li>
                           <li><a href="blog-listing.php">Blogs</a></li>
                           <li><a href="career.php">Career</a></li>
                           <!-- <li> 
                              <a href="javascript:;" class="yasharyn-download-btn">View Catalogue</a>
                              </li> -->
                        </ul>
                     </div>
                  </nav>
               </div>
               <ul class="nav-right ml-5">
                  <li class="search-box-outer">
                     <div class="dropdown">
                        <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"><i class="far fa-search"></i></button>
                        <div class="dropdown-menu search-panel" id="product-search" aria-labelledby="dropdownMenu3">
                           <div class="form-container">
                              <form method="get" action="result.php">
                                 <div class="form-group">
                                    <input type="search" name="keyword" value=""
                                       placeholder="Search product name, size, category" required="">
                                    <button type="submit" class="search-btn"><span
                                          class="fas fa-search"></span></button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </li>
                  <!--   <li class="cart-box">
                     <a href="shop.html"><i class="fal fa-shopping-cart"></i><span>3</span></a>
                     </li> -->
                  <!-- <li class="btn-box">
                     <a href="javascript:;" class="theme-btn btn-one">Request A Quote</a>
                     </li> -->
               </ul>
            </div>
         </div>
         <div class="sticky-header">
            <div class="outer-box">
               <div class="logo-box">
                  <figure class="logo"><a href="index.php"><img src="assets/images/new-logo.png" alt=""></a></figure>
               </div>
               <div class="menu-area clearfix">
                  <nav class="main-menu clearfix">
                  </nav>
               </div>
               <ul class="nav-right">
                  <li class="search-box-outer">
                     <div class="dropdown">
                        <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"><i class="far fa-search"></i></button>
                        <div class="dropdown-menu search-panel" id="product-search" aria-labelledby="dropdownMenu3">
                           <div class="form-container">
                              <form method="get" action="result.php">
                                 <div class="form-group">
                                    <input type="search" name="keyword" value=""
                                       placeholder="Search product name, size, category" required="">
                                    <button type="submit" class="search-btn"><span
                                          class="fas fa-search"></span></button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </header>
      <!-- Mobile Menu  -->
      <div class="mobile-menu">
         <div class="menu-backdrop"></div>
         <div class="close-btn"><i class="fas fa-times"></i></div>
         <nav class="menu-box">
            <div class="nav-logo"><a href="<?php echo BASE_URL; ?>"><img src="assets/images/logo-w.png" alt=""
                     title=""></a></div>
            <div class="menu-outer">
               <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <!-- <div class="contact-info">
               <h4>Contact Info</h4>
               <ul>
                   <li>Chicago 12, Melborne City, USA</li>
                   <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                   <li><a href="mailto:info@example.com">info@example.com</a></li>
               </ul>
               </div>
               <div class="social-links">
               <ul class="clearfix">
                   <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                   <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                   <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                   <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                   <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
               </ul>
               </div> -->
         </nav>
      </div>
      <!-- End Mobile Menu -->