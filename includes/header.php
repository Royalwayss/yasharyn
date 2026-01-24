<!DOCTYPE html>
<?php 
   include_once('admin/include/config.php');  
   //include_once(__DIR__.'/admin/include/config.php');   
   $categories = get_categories($conn,$status=1); 
   $currentPageName = basename($_SERVER['PHP_SELF']); 
   ?>
<html lang="en">
   <head>
      <?php if(HTTP_HOST != 'localhost'){ ?>
      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-TCF17TJGVC"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         
         function gtag(){dataLayer.push(arguments);}
         
         gtag('js', new Date());
         
         
         
         gtag('config', 'G-TCF17TJGVC');
         
      </script>
      <?php } ?>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <meta property="og:site_name" content="Yasharyn Packaging"/>
	  <?php if($currentPageName == 'index.php'){ ?>
      <title>Pharmaceutical Packaging Manufacturers - Wholesale Pet Bottles, HDPE Tablet Container, Dropper Bottles, Nasal Spray Bottle, Shampoo Bottle, Face Wash Bottle, Cream Jar, Plastic Sharbat Bottle & Aluminum Cap Manufacturers, Exporters & Suppliers in India</title>
      <meta name="description" content="Yasharyn Packaging is one of the leading pharmaceutical packaging manufacturers, exporters & suppliers in India. Get high quality pet bottles, HDPE medicine bottle, dropper bottle, nasal spray bottle, shampoo bottle, lotion bottle, face wash bottle, body wash bottle, pet cream jar, talc powder container, juice bottle, sharbat bottle, powder jar, granule jar, honey jar, handwash bottle, detergent bottle, mist spray pump, dispenser pump, trigger pump, roll on bottles, balm container and all types of plastic pharma accessories."/>
      <meta name="keywords" content="pet bottles, HDPE medicine bottle, dropper bottle, nasal spray bottle, shampoo bottle, lotion bottle, face wash bottle, body wash bottle, cream jar , pet cream jar, talc powder container, juice bottle, sharbat bottle, powder jar, granule jar, honey jar, handwash bottle, detergent bottle, mist spray pump, dispenser pump, trigger pump, roll on bottle, balm container"/>
      <?php }else if($currentPageName == 'about-us.php'){ ?>
      <title>About - Yasharyn Packaging,  Pharmaceutical Accessories Manufacturers India</title>
      <meta name="description" content="Yasharyn Packaging is one of the top plastic pharma accessories manufacturers, exporters & suppliers in India."/>
      <meta name="keywords" content="yasharyn packaging, pharma accessories, plastic packaging, india manufacturers"/>
      <?php }else if($currentPageName == 'csr.php'){ ?>
      <title>Environmental & Social Responsibility -  Yasharyn Packaging</title>
      <meta name="description" content="Yasharyn Packaging prioritizes sustainability and social impact. Our CSR efforts focus on planet-friendly practices and community well-being."/>
      <meta name="keywords" content="csr, yasharyn packaging "/>
      <?php }else if($currentPageName == 'contact-us.php'){ ?>
      <title>Contact Yasharyn Packaging - Get a Quote for PET & HDPE Bottles</title>
      <meta name="description" content="Have questions about our packaging solutions? Contact Yasharyn Packaging today for product inquiries, custom manufacturing quotes and bulk order details."/>
      <meta name="keywords" content="contact yasharyn packaging, packaging manufacturer inquiry, pet bottle suppliers india, hdpe bottle bulk orders"/>
      <?php }else if($currentPageName == 'our-events.php'){ ?>
      <title>Packaging Exhibitions & Industry Events - Yasharyn Packaging</title>
      <meta name="description" content="Stay updated with Yasharyn Packaging’s participation in global exhibitions, trade fairs and plastic packaging events. Discover our latest innovations in PET and HDPE manufacturing.">
      <meta name="keywords" content="packaging exhibitions india, plastic trade fairs, yasharyn packaging events, international packaging expo, pharma packaging events, cosmetic packaging exhibitions, pet bottle industry events">
      <?php }else if($currentPageName == 'jobs-and-career.php'){ ?>
      <title>Careers at Yasharyn Packaging - Leading Pharma & Cosmetic Packaging Jobs</title>
      <meta name="description" content="Join a leader in the packaging industry. Explore current job openings at Yasharyn Packaging and grow your career in pharma and cosmetic manufacturing. Apply today!"/>
      <meta name="keywords" content="yasharyn packaging careers, packaging industry jobs ludhiana, pharma packaging careers, cosmetic packaging jobs, manufacturing vacancies"/>
      <?php }else if($currentPageName == 'blogs.php'){ ?>
      <title>Plastic Packaging Blogs & Industry Insights - Official Blog, Yasharyn Packaging</title>
      <meta name="description" content="Read the latest blogs on PET and HDPE packaging trends, pharmaceutical bottle manufacturing and sustainable cosmetic packaging solutions from Yasharyn Packaging experts.">
      <meta name="keywords" content="plastic packaging blogs, pet bottle manufacturing insights, hdpe container trends, pharmaceutical packaging news, cosmetic packaging industry updates, yasharyn packaging blog, plastic molding guides">
      <?php }else if($currentPageName == 'product_details.php'){  
         
		 if(isset($_GET['id'])){
		     $get_pro = getSingleRow($conn,'select * from products where id='.@$_GET['id']);
         }else{
			  $get_pro = [];
		 }
		 
		 if(!empty($get_pro)){
            $product_name = $get_pro['product_name']; 
         }else{
            $product_name = '';
         }
         ?>
      <title><?php echo $product_name; ?> Manufacturer, Exporters & Suppliers in India - Yasharyn</title>
      <meta name="description" content="Yasharyn Packaging is one of the leading <?php echo $product_name; ?> manufacturer, exporters and suppliers in India. Durable, leak-proof, high quality and available at wholesale prices. Request a quote."/>
      <?php }else if($currentPageName == 'products.php'){ 
         $get_cat = getSingleRow($conn,'select * from categories where id="'.@$_GET['id'].'"'); 
          if(!empty($get_cat) && !empty($get_cat['meta_title'])){
         $meta_title = $get_cat['meta_title']; 
         $meta_dec = $get_cat['meta_dec']; 
         $meta_keyword = $get_cat['meta_keyword']; 
         }else{
         $meta_title = 'Yasharyn';
         $meta_dec = '';
         $meta_keyword = '';
         }
         ?>
      <title><?php echo $meta_title; ?></title>
      <meta name="description" content="<?php echo $meta_dec; ?>">
      <meta name="keywords" content="<?php echo $meta_keyword; ?>">
      <?php }else if($currentPageName == 'blog-detail.php'){
         $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
         $trimmedPath = rtrim($path, '/');
         $segments = explode('/', $trimmedPath);
         $blog_url = end($segments);
            $meta_title = $meta_dec = '';
         if($blog_url == 'from-hive-to-shelf-indian-honey-container-manufacturers'){
         	$meta_title = 'Honey Container Manufacturers in India | Packaging Guide';
         	$meta_dec = 'Learn how honey container manufacturers in India use PET and HDPE packaging to protect purity, improve shelf life, and ensure food safety.';
         }else if($blog_url == 'wide-flip-top-caps-modern-packaging-india'){
         	$meta_title = 'Wide Flip Top Cap Manufacturers in India | Uses & Benefits';
         	$meta_dec = 'Discover why wide flip-top caps are widely used in pharma, food, and FMCG packaging for better hygiene, convenience, and leak protection.';
         }else if($blog_url == 'why-plastic-packaging-still-dominates-global-market'){
         	$meta_title = 'PET Bottle Manufacturers in India | Packaging Industry Insights';
         	$meta_dec = 'Understand why PET bottle manufacturers in India are leading the global packaging market with quality production, scalability, and sustainability.';
         }else if($blog_url == 'applications-of-pet-and-hdpe-packaging-in-everyday-products'){
         	$meta_title = 'Talc Powder Container Manufacturers in India | PET & HDPE Uses';
         	$meta_dec = 'Explore how PET and HDPE packaging is used in everyday products and why talc powder container manufacturers in India prefer HDPE containers.';
         }
         
           ?>
      <title><?php echo $meta_title; ?></title>
      <meta name="description" content="<?php echo $meta_dec; ?>">
      <?php }else{ ?>
      <title>Yasharyn</title>
      <?php } ?>
      <!-- Fav Icon -->
      <link rel="icon" href="<?php echo BASE_URL; ?>assets/images/favicon.ico" type="image/x-icon">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;400;500;600;700;800;900&display=swap"
         rel="stylesheet">
      <link
         href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
         rel="stylesheet">
      <!-- Stylesheets -->
      <link href="<?php echo BASE_URL; ?>assets/css/font-awesome-all.css" rel="stylesheet">
      <link href="<?php echo BASE_URL; ?>assets/css/flaticon.css" rel="stylesheet">
      <link href="<?php echo BASE_URL; ?>assets/css/owl.css" rel="stylesheet">
      <link href="<?php echo BASE_URL; ?>assets/css/bootstrap.css" rel="stylesheet">
      <link href="<?php echo BASE_URL; ?>assets/css/jquery.fancybox.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
      <link href="<?php echo BASE_URL; ?>assets/css/animate.css" rel="stylesheet">
      <link href="<?php echo BASE_URL; ?>assets/css/jquery-ui.css" rel="stylesheet">
      <link href="<?php echo BASE_URL; ?>assets/css/color.css?v=2.0" rel="stylesheet">
      <link href="<?php echo BASE_URL; ?>assets/css/style.css?v=2.4" rel="stylesheet">
      <link href="<?php echo BASE_URL; ?>assets/css/nice-select.css" rel="stylesheet">
      <link href="<?php echo BASE_URL; ?>assets/css/responsive.css?v=2.1" rel="stylesheet">
      <link href="<?php echo BASE_URL; ?>assets/css/select2.min.css" rel="stylesheet" />
      <link href="<?php echo BASE_URL; ?>assets/css/dev.css?v=2.2" rel="stylesheet" />
      <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
      <!-- Swiper CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.3.5/css/intlTelInput.css"/>
	  <?php if(HTTP_HOST != 'localhost' && $currentPageName == 'index.php'){ ?>
	  <script type="application/ld+json">

{

  "@context": "https://schema.org",

  "@type": "Organization",

  "@id": "https://www.yasharyn.com/#organization",

  "name": "Yasharyn Packaging",

  "url": "https://www.yasharyn.com",

  "logo": "https://www.yasharyn.com/assets/images/new-logo.png",

  "contactPoint": {

    "@type": "ContactPoint",

    "telephone": "+91-93170-88991",

    "contactType": "Customer Service",

    "areaServed": "Worldwide",

    "availableLanguage": "en"

  },

  "address": {

    "@type": "PostalAddress",

    "streetAddress": "Sankeshwar Parshavnath Marg, Near Neva Garments, G.T. Road West, Village Hussainpura",

    "addressLocality": "Ludhiana",

    "addressRegion": "Punjab",

    "postalCode": "141008",

    "addressCountry": "IN"

  },

  "sameAs": [

    "https://www.facebook.com/yasharynofficial",

    "https://www.instagram.com/yasharynofficial",

    "https://www.linkedin.com/company/yasharynofficial"

  ]

}

</script>
	  
<?php } ?>	  
	  
	  
	  
	 
	  
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
                  <figure class="logo text-center"><a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/images/logo-w.png"
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
                     rel="nofollow" href="https://www.facebook.com/yasharynofficial"><i class="fab fa-facebook-f "></i></a></li>
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
                     #FCAF45);" rel="nofollow" href="https://www.instagram.com/yasharynofficial/"><i
                     class="fab fa-instagram "></i></a></li>
                  <li><a class="insta-color" style="background-color:#0a66c2;"
                     rel="nofollow" href="https://www.linkedin.com/company/yasharynofficial/"><i
                     class="fab fa-linkedin-in linkedin-color"></i></a></li>
               </ul>
            </div>
            <div class="col-4 col-md-4 col-lg-4 justify-content-center d-flex align-items-centers logo-header-display text-center">
               <figure class="logo"><a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/images/new-logo.png" alt=""></a></figure>
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
                                 <li><a href="<?php echo BASE_URL; ?>about-us">About Us</a></li>
                                 <li><a href="<?php echo BASE_URL; ?>about-us#certification">Certification</a></li>
                                 <li><a href="<?php echo BASE_URL; ?>about-us#management">Management</a></li>
                                 <li><a href="<?php echo BASE_URL; ?>about-us#leads">Why Yasharyn Leads</a></li>
                              </ul>
                           </li>
                           <!-- <li><a href="why-us.php">Why Us</a></li>   -->
                           <li class="dropdown">
                              <a href="product.php">Products</a>
                              <ul>
                                 <?php foreach($categories as $category) { ?>
                                 <li class="dropdown">
                                    <a href="<?php echo BASE_URL.'category/'.$category['id'].'/'.$category['category_url']; ?>">
                                    <?php echo $category['category_name']; ?>
                                    </a>
                                    <ul>
                                       <?php foreach($category['sub_categories'] as $sub_category) { ?>
                                       <li <?php if(!empty($sub_category['sub_categories2'])) { ?>class="dropdown
                                          parent-category"
                                          <?php } ?>>
                                          <a href="<?php echo BASE_URL.'category/'.$sub_category['id'].'/'.$sub_category['category_url']; ?>">
                                          <?php echo $sub_category['category_name']; ?>
                                          </a>
                                          <ul class="subcategory2 ">
                                             <?php foreach($sub_category['sub_categories2'] as $sub_category2) { ?>
                                             <li><a href="<?php echo BASE_URL.'category/'.$sub_category2['id'].'/'.$sub_category2['category_url']; ?>">
                                                <?php echo $sub_category2['category_name']; ?>
                                                </a> 
                                             </li>
                                             <?php } ?>
                                          </ul>
                                       </li>
                                       <?php } ?>
                                    </ul>
                                 </li>
                                 <?php } ?>
                              </ul>
                           </li>
                           <li><a href="<?php echo BASE_URL; ?>infrastructure.php">Infrastructure</a></li>
                           <li><a href="<?php echo BASE_URL; ?>csr.php">CSR</a></li>
                           <li><a href="<?php echo BASE_URL; ?>clients.php">Clients</a></li>
                           <li><a href="<?php echo BASE_URL; ?>contact-us.php">Contact</a></li>
                           <li><a href="<?php echo BASE_URL; ?>our-events.php">Events</a></li>
                           <li><a href="<?php echo BASE_URL; ?>blogs.php">Blogs</a></li>
                           <li><a href="<?php echo BASE_URL; ?>jobs-and-career.php">Career</a></li>
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
                              <form method="get" action="<?php echo BASE_URL; ?>result.php">
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
                  <figure class="logo"><a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/images/new-logo.png" alt=""></a></figure>
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
                              <form method="get" action="<?php echo BASE_URL; ?>result.php">
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
            <div class="nav-logo"><a href="<?php echo BASE_URL; ?>"><img src="assets/images/logo-w.png" alt="Blood Collection Tubes Manufacturer in India"
               title="Blood Collection Tubes Manufacturer in India"></a></div>
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