<?php 

include 'includes/header.php';

$new_arrival_products =get_new_arrival_products($conn,$limit=3); 
$home_products =home_products($conn,$limit=10);  

 ?>


<!-- banner-section -->
<section class="banner-section">
    <div class="shape" style="background-image: url(assets/images/shape/banner-shap.png);"></div>
    <div class="banner-carousel owl-theme owl-carousel owl-nav owl-dots-none">

        <div class="slide-item" style="background-image: url(assets/images/home-banner-4.jpg);">
            <!-- <div class="pattern-box">
                <div class="pattern-1"></div>
                <div class="pattern-2"></div>
                <div class="pattern-3" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            </div> -->
            <div class="auto-container">
                <div class="inner-box">
                    <!-- <div class="image-box">
                        <figure class="image image-1"><img src="assets/images/banner/vector-1.png" alt=""></figure>
                        <figure class="image image-2"><img src="assets/images/banner/vector-4.png" alt=""></figure>
                    </div> -->
                    <div class="content-box">
                        <h2>Eco-Friendly Bottles for a Greener Tomorrow</h2>
                        <p>Sustainable, reliable, and innovative bottles tailored to your exact needs</p>
                        <div class="btn-box clearfix">
                            <a href="about-us.php" class="theme-btn btn-one">About US</a>
                            <a href="contacts.php" class="theme-btn banner-btn">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="slide-item" style="background-image: url(assets/images/home-banner-1.1.jpg);">
            <!-- <div class="pattern-box">
                <div class="pattern-1"></div>
                <div class="pattern-2"></div>
                <div class="pattern-3" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            </div> -->
            <div class="auto-container">
                <div class="inner-box">
                    <!-- <div class="image-box">
                        <figure class="image image-1"><img src="assets/images/banner/vector-1.png" alt=""></figure>
                        <figure class="image image-2"><img src="assets/images/banner/vector-4.png" alt=""></figure>
                    </div> -->
                    <div class="content-box">
                        <h2>Precision in Storage, Power in Distribution</h2>
                        <p>Advanced warehouse systems ensuring accuracy, safety, and speed</p>
                        <div class="btn-box clearfix">
                            <a href="about-us.php" class="theme-btn btn-one">About US</a>
                            <a href="contacts.php" class="theme-btn banner-btn">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item" style="background-image: url(assets/images/home-banner-5.jpg);">
            <!-- <div class="pattern-box">
                <div class="pattern-1"></div>
                <div class="pattern-2"></div>
                <div class="pattern-3" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            </div> -->
            <div class="auto-container">
                <div class="inner-box">
                    <!-- <div class="image-box">
                        <figure class="image image-1"><img src="assets/images/banner/vector-1.png" alt=""></figure>
                        <figure class="image image-2"><img src="assets/images/banner/vector-4.png" alt=""></figure>
                    </div> -->
                    <div class="content-box">
                        <h2>Precision in Every Bottle</h2>
                        <p>Advanced technology ensuring protection, preservation, and long-lasting quality</p>
                        <div class="btn-box clearfix">
                            <a href="about-us.php" class="theme-btn btn-one">About US</a>
                            <a href="contacts.php" class="theme-btn banner-btn">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- <div class="slide-item">
            <div class="pattern-box">
                <div class="pattern-1"></div>
                <div class="pattern-2"></div>
                <div class="pattern-3" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            </div>
            <div class="auto-container">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image image-1"><img src="assets/images/banner/vector-1.png" alt=""></figure>
                        <figure class="image image-2"><img src="assets/images/banner/vector-4.png" alt=""></figure>
                    </div>
                    <div class="content-box">
                        <h2>Eco-Friendly Bottles for a Greener Tomorrow</h2>
                        <p>Sustainable, reliable, and innovative bottles tailored to your exact needs</p>
                        <div class="btn-box clearfix">
                            <a href="about-us.php" class="theme-btn btn-one">About US</a>
                            <a href="contacts.php" class="theme-btn banner-btn">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="slide-item">
            <div class="pattern-box">
                <div class="pattern-1"></div>
                <div class="pattern-2"></div>
                <div class="pattern-3" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            </div>
            <div class="auto-container">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image image-1"><img src="assets/images/banner/vector-3.2.png" alt=""></figure>
                        <!-- <figure class="image image-2"><img src="assets/images/banner/vector-2.png" alt=""></figure> -->
                    </div>
                    <div class="content-box">
                        <h2>Built for Performance, Designed for the Planet</h2>
                        <p>Smart manufacturing solutions for durable, eco-conscious bottles</p>
                        <div class="btn-box clearfix">
                            <a href="#" class="theme-btn btn-one">Our Services</a>
                            <a href="#" class="theme-btn banner-btn">Discover</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="slide-item">
                    <div class="pattern-box">
                        <div class="pattern-1"></div>
                        <div class="pattern-2"></div>
                        <div class="pattern-3" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                    </div>
                    <div class="auto-container">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image image-1"><img src="assets/images/banner/vector-1.png" alt=""></figure>
                                <figure class="image image-2"><img src="assets/images/banner/vector-2.png" alt=""></figure>
                            </div>
                            <div class="content-box">
                                <h2>Always Want Safe and Good Water for Healthy Life</h2>
                                <p>Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit.</p>
                                <div class="btn-box clearfix">
                                    <a href="#" class="theme-btn btn-one">Our Services</a>
                                    <a href="#" class="theme-btn banner-btn">Discover</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div> -->
    </div>
</section>
<!-- banner-section end -->
<?php if(!empty($home_products)) { ?>
<section class="yasharyan-products">
    <div class="container">
        <div class="product-sec">
            <div class="sec-title centred">
                <h2>Our Product <b>Range</b></h2>
            </div>
            <div class="swiper productSwiper">
                <div class="swiper-wrapper">

                    <?php foreach($home_products as $home_product) { ?>
                    <div class="swiper-slide">
                        <div class="product-box">
                            <a href="product_details.php?id=<?php echo $home_product['id'];  ?>">
							<img src="assets/images/product/list/<?php echo $home_product['image']; ?>" alt="">
                            </a>
							<!-- <h4 class="product-title">Product 1</h4> -->
                        </div>
                    </div>
                    <?php } ?>
					
				
                </div>

                <!-- Arrows -->
                <div class="swiper-button-next product-btn-next"></div>
                <div class="swiper-button-prev product-btn-prev"></div>

            </div>
        </div>
    </div>
</section>
<?php } ?>


<!-- feature-section -->
<!-- <section class="feature-section centred">
    <div class="auto-container">
        <div class="inner-container wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
            <div class="title-text">
                <h2>Innovation in Every Bottle <br><b>We Create</b></h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                            <div class="icon-box"><i class="far fa-lightbulb-on"></i></div>
                            <h4>Innovative</h4>
                            <p>Passion for innovation is at the heart of every business initiative undertaken...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                            <div class="icon-box"><i class="flaticon-water-drop-1"></i></div>
                            <h4>Full Service Partner</h4>
                            <p>At Yasharyn, we pride ourselves on providing a bouquet of best-in-class...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-recycle"></i></div>
                            <h4>Sustainable</h4>
                            <p>At Yasharyn, we are committed to reducing our carbon footprints and empowering...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- feature-section end -->

<section class="about-new">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 content-column home-about-bg">
                <div class="content_block_1">
                    <div class="content-box wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="sec-title">
                            <h2>About <b>YASHARYN</b></h2>
                        </div>
                        <div class="text text-white">
                            <p>Yasharyn Packaging began its manufacturing journey in 2005 with a clear vision to deliver
                                world-class, reliable, and sustainable packaging solutions. Founded by Mr. Yashpal Jain,
                                the company was established with the ambition of building a globally respected brand in
                                packaging and allied products.</p>
                            <p>Driven by innovation, integrity, and an unwavering commitment to quality, Yasharyn
                                Packaging has grown into a trusted name in the industry. Our strength lies in our
                                experienced team, advanced infrastructure, customer-centric approach, and consistent
                                promise of on-time delivery.</p>
                        </div>
                        <div class="btn-box">
                            <a href="about-us.php" class="theme-btn btn-one">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- about-section -->
<!-- <section class="about-section">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <figure class="image-box clearfix wow fadeInLeft animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms"><img src="assets/images/hom-about-1.jpg" alt=""></figure>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="sec-title">
                            <h2>About <b>YASHARYN</b></h2>
                        </div>
                        <div class="text">
                            <p>Yasharyn Packaging began its manufacturing journey in 2005 with a clear vision to deliver
                                world-class, reliable, and sustainable packaging solutions. Founded by Mr. Yashpal Jain,
                                the company was established with the ambition of building a globally respected brand in
                                packaging and allied products.</p>
                            <p>Driven by innovation, integrity, and an unwavering commitment to quality, Yasharyn
                                Packaging has grown into a trusted name in the industry. Our strength lies in our
                                experienced team, advanced infrastructure, customer-centric approach, and consistent
                                promise of on-time delivery.</p>
                        </div>
                        <div class="btn-box">
                            <a href="about-us.php" class="theme-btn btn-one">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- about-section end -->


<!-- service-section -->
<section class="service-section bg-color-1">
    <!-- <div class="shape" style="background-image: url(assets/images/shape/shape-4.png);"></div>-->
    <figure class="image-layer"><img src="assets/images/resource/service-1.png" alt=""></figure>
    <div class="bg-shape">
        <div class="bg-shape-1"></div>
        <div class="bg-shape-2"></div>
        <div class="bg-shape-3"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title centred">

            <h2>Infrastructure That <b>Drives Innovation</b></h2>


            <p>A perfect blend of technology, talent, and advanced systems for unmatched product quality.</p>
        </div>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 big-column">
                <div class="left-column text-right">
                    <div class="service-block-one wow fadeInLeft animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box">
                                <!-- <svg id="turbo" width="70" height="70" class="draw-path-tool" id="fi_7400030"
                                    enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <path
                                                d="m415.02 226.791c8.059-1.607 14.15-8.736 14.15-17.261v-28.28c0-8.525-6.092-15.653-14.15-17.261v-12.269c0-21.691-14.64-40.733-35.605-46.309l-76.595-20.328c-1.143-.305-1.94-1.342-1.94-2.523v-13.607c7.543-1.986 13.13-8.845 13.13-17.002v-34.351c0-9.705-7.896-17.6-17.6-17.6h-22.91c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h22.91c1.434 0 2.6 1.167 2.6 2.6v34.35c0 1.434-1.166 2.6-2.6 2.6h-80.82c-1.434 0-2.6-1.166-2.6-2.6v-34.35c0-1.434 1.166-2.6 2.6-2.6h22.91c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-22.91c-9.705 0-17.6 7.896-17.6 17.6v34.35c0 8.158 5.587 15.017 13.13 17.002v13.608c0 1.181-.798 2.218-1.934 2.521l-76.604 20.331c-20.962 5.575-35.602 24.618-35.602 46.308v12.269c-8.059 1.608-14.15 8.736-14.15 17.261v28.28c0 8.524 6.091 15.652 14.15 17.261v173.569c-8.059 1.609-14.15 8.741-14.15 17.27v28.28c0 8.524 6.091 15.652 14.15 17.26v31.23c0 9.705 7.896 17.6 17.6 17.6h18.38c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-18.38c-1.434 0-2.6-1.167-2.6-2.6v-30.888h288.04v30.888c0 1.434-1.166 2.6-2.6 2.6h-229.46c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h229.46c9.704 0 17.6-7.896 17.6-17.6v-31.23c8.059-1.607 14.15-8.736 14.15-17.26v-28.28c0-8.53-6.092-15.662-14.15-17.271zm-.85 219.119c0 1.434-1.166 2.6-2.6 2.6h-311.14c-1.434 0-2.6-1.166-2.6-2.6v-28.28c0-1.439 1.167-2.61 2.6-2.61h311.14c1.434 0 2.6 1.171 2.6 2.61zm-316.34-264.66c0-1.434 1.167-2.6 2.6-2.6h311.14c1.434 0 2.6 1.167 2.6 2.6v28.28c0 1.434-1.166 2.6-2.6 2.6h-311.14c-1.434 0-2.6-1.167-2.6-2.6zm261.03 78.21h41.159v108.239h-288.039v-108.239h211.88c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-211.88v-17.326h288.04v17.326h-41.16c-4.143 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5zm41.16 140.564h-288.04v-17.325h288.04zm-263.586-280.115 76.607-20.332c7.701-2.051 13.08-9.049 13.08-17.017v-13.01h59.76v13.01c0 7.968 5.378 14.965 13.086 17.019l76.597 20.329c14.4 3.83 24.457 16.911 24.457 31.812v11.926h-288.041v-11.926c0-14.901 10.057-27.982 24.454-31.811z">
                                            </path>
                                            <path
                                                d="m265.196 279.338c-5.155-4.762-13.235-4.764-18.393 0-8.421 7.775-22.548 23.355-22.548 40.339 0 17.503 14.24 31.744 31.744 31.744s31.744-14.24 31.744-31.744c.001-16.986-14.126-32.565-22.547-40.339zm-9.196 57.082c-9.233 0-16.744-7.511-16.744-16.744 0-7.87 6.237-18.421 16.744-28.401 10.507 9.979 16.744 20.531 16.744 28.401 0 9.233-7.512 16.744-16.744 16.744z">
                                            </path>
                                        </g>
                                    </g>
                                </svg> -->
                               <svg id="turbo" width="70" height="70" class="draw-path-tool" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="512" height="512">
  <path d="M10 21.367h108.771c5.523 0 10-4.477 10-10s-4.477-10-10-10H10c-5.523 0-10 4.477-10 10s4.477 10 10 10zm144.734-4.447c2.988 4.565 9.355 5.75 13.86 2.76 4.534-3.01 5.795-9.337 2.77-13.86-3.028-4.528-9.336-5.8-13.87-2.77-4.53 3.028-5.778 9.339-2.76 13.87zM10 319.781h148.619c5.523 0 10-4.477 10-10s-4.477-10-10-10H10c-5.523 0-10 4.477-10 10s4.477 10 10 10zm141.906 41.841h6.602c28.588 0 51.846-23.258 51.846-51.846 0-28.583-23.258-51.836-51.846-51.836h-19.989c.317-1.532.484-3.117.484-4.741v-67.51c0-11.065-4.652-22.626-13.828-34.361-4.486-5.738-7.087-12.604-7.529-19.868l-.533-48.599c2.928-1.744 4.895-4.932 4.895-8.588 0-5.523-4.477-10-10-10h-48.562c-5.523 0-10 4.477-10 10 0 3.656 1.968 6.844 4.896 8.588l-.533 48.599c-.441 7.265-3.042 14.131-7.528 19.869-9.176 11.734-13.828 23.295-13.828 34.361v67.51c0 1.624.167 3.21.484 4.741h-26.937c-5.523 0-10 4.477-10 10s4.477 10 10 10h148.508c17.56 0 31.846 14.282 31.846 31.836 0 17.56-14.286 31.846-31.846 31.846h-148.508c-5.523 0-10 4.477-10 10s4.477 10 10 10h121.906v127.569h-121.906c-5.523 0-10 4.477-10 10s4.477 10 10 10h131.906c5.523 0 10-4.477 10-10zm-95.454-175.934c0-6.402 3.314-14.024 9.583-22.042 7.06-9.029 11.125-19.851 11.754-31.294.008-.146.013-.293.015-.44l.522-47.64h18.8l.522 47.641c.001.146.006.293.015.44.63 11.444 4.695 22.265 11.755 31.294 6.27 8.019 9.583 15.64 9.583 22.042v68.863c0 1.869-1.52 3.389-3.389 3.389h-55.772c-1.869 0-3.389-1.52-3.389-3.389zM374.288 61.894c5.523 0 10-4.477 10-10v-30.527h114.977c5.523 0 10-4.477 10-10s-4.477-10-10-10h-293.007c-5.523 0-10 4.477-10 10s4.477 10 10 10h88.553v30.527c0 5.523 4.477 10 10 10h24.638v31.399c-12.316 4.179-21.207 15.843-21.207 29.553 0 1.474.11 2.922.309 4.342l-48.455 31.274c-2.854 1.842-4.577 5.006-4.577 8.402v31.037c0 3.433 1.761 6.625 4.664 8.458l49.476 31.217-.085 7.786c-.441 7.265-3.042 14.131-7.528 19.868-9.176 11.734-13.829 23.295-13.829 34.361v67.51c0 12.896 10.492 23.388 23.389 23.388h55.774c12.896 0 23.388-10.492 23.388-23.389v-67.51c0-11.066-4.652-22.627-13.828-34.361-4.486-5.738-7.087-12.604-7.529-19.869l-.085-7.714 49.589-31.289c2.903-1.832 4.664-5.024 4.664-8.457v-31.037c0-3.396-1.724-6.56-4.577-8.402l-48.641-31.394c.188-1.382.294-2.79.294-4.222 0-13.71-8.891-25.374-21.206-29.553v-31.398zm-3.521 237.698v67.51c0 1.869-1.52 3.389-3.388 3.389h-55.774c-1.869 0-3.389-1.52-3.389-3.388v-67.51c0-6.402 3.314-14.023 9.584-22.042 6.928-8.861 11.618-20.385 11.769-31.734l.141-12.863c.039-.467.381-34.777.381-34.777h18.8s.344 34.381.383 34.846l.14 12.795c.151 11.35 4.841 22.874 11.77 31.735 6.269 8.015 9.583 15.636 9.583 22.039zm32.813-107.205-34.511 21.775-.191-17.399c2.928-1.744 4.896-4.932 4.896-8.588 0-5.523-4.477-10-10-10h-48.564c-5.523 0-10 4.477-10 10 0 3.656 1.968 6.844 4.895 8.588l-.19 17.327-34.397-21.703v-20.075l42.114-27.182c5.631 5.513 13.331 8.921 21.816 8.921 8.525 0 16.259-3.439 21.897-8.999l42.234 27.259v20.076zm-64.131-58.334c-6.079 0-11.207-5.115-11.207-11.206 0-6.179 5.027-11.206 11.207-11.206s11.206 5.027 11.206 11.206-5.027 11.206-11.206 11.206zm-24.638-112.686h49.477v20.527h-49.477zm109.504 316.4c-1.867-1.996-4.569-3.169-7.304-3.169h-216.653c-2.735 0-5.435 1.173-7.304 3.169l-50.146 53.617c-3.772 4.033-3.561 10.361.473 14.134 1.929 1.804 4.381 2.696 6.829 2.696 2.671 0 5.337-1.064 7.306-3.169l32.843-35.116v52.069c0 5.523 4.477 10 10 10s10-4.477 10-10v-67.401h196.653v67.402c0 5.523 4.477 10 10 10 5.522 0 10-4.478 10-10v-52.07l32.843 35.116c1.969 2.105 4.634 3.169 7.306 3.169 2.447 0 4.9-.893 6.829-2.696 4.034-3.772 4.246-10.101.473-14.134z" />
</svg>
                            </div>
                            <h4><a href="infrastructure.php#infrablow">Advanced Machinery</a></h4>
                        </div>
                    </div>
                    <div class="service-block-one wow fadeInLeft animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box">
<!--                                 
                                <svg id="fi_3843106" id="turbo" width="70" height="70" class="draw-path-tool"
                                    viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                                    <g>

                                        <path
                                            d="m504.534 447.985h-85.986c-3-7.691-10.47-13.164-19.211-13.164h-6.939c5.204-6.965 8.203-15.571 8.203-24.755v-106.756c0-14.883-8.643-28.718-22.021-35.245-2.547-1.242-4.193-3.876-4.193-6.71v-6.539h1.535c8.508 0 15.43-6.922 15.43-15.43v-23.025c0-8.508-6.922-15.43-15.43-15.43h-9.001c-4.124 0-7.466 3.343-7.466 7.466s3.342 7.466 7.466 7.466h9.001c.274 0 .498.223.498.498v23.025c0 .275-.224.498-.498.498h-85.646c-.274 0-.498-.223-.498-.498v-23.025c0-.275.224-.498.498-.498h43.038c4.124 0 7.466-3.343 7.466-7.466s-3.342-7.466-7.466-7.466h-43.038c-8.508 0-15.43 6.922-15.43 15.43v23.025c0 8.508 6.922 15.43 15.43 15.43h1.534v6.539c0 2.834-1.646 5.467-4.193 6.71-13.377 6.527-22.02 20.361-22.02 35.245v106.756c0 2.552.238 5.076.697 7.555h-14.334c.455-2.47.695-4.99.695-7.555v-165.437c0-6.24-1.096-12.371-3.258-18.222l-18.164-49.184c-2.578-6.983-3.886-14.297-3.886-21.738v-120.946c0-13.916-11.322-25.238-25.238-25.238s-25.239 11.322-25.239 25.238v10.848c0 4.123 3.342 7.466 7.466 7.466s7.466-3.343 7.466-7.466v-10.848c0-5.683 4.624-10.306 10.307-10.306 5.682 0 10.306 4.624 10.306 10.306v85.904h-20.612v-41.459c0-4.123-3.342-7.466-7.466-7.466s-7.466 3.343-7.466 7.466v76.501c0 7.443-1.308 14.757-3.885 21.738l-13.956 37.787-13.163-35.644c-1.896-5.133-1.199-10.905 1.865-15.437 5.67-8.389 7.025-19.091 3.625-28.628-5.508-14.392-10.554-30.025-10.167-45.575v-55.187c0-13.916-11.322-25.238-25.239-25.238-13.916 0-25.238 11.322-25.238 25.238v55.187c.391 15.532-4.663 31.199-10.168 45.575-3.399 9.537-2.043 20.238 3.625 28.627 3.063 4.534 3.761 10.305 1.866 15.437l-17.372 47.041c-2.162 5.851-3.258 11.982-3.258 18.222v74.484c0 4.123 3.342 7.466 7.466 7.466s7.466-3.343 7.466-7.466v-31.827h71.225v122.779c0 2.599-.369 5.126-1.095 7.555h-37.583v-1.972c.142-9.69-15.075-9.685-14.932 0v12.681h-10.267c-4.737-4.936-7.347-11.42-7.347-18.265v-56.275c0-4.123-3.342-7.466-7.466-7.466s-7.466 3.343-7.466 7.466v56.275c0 6.511 1.516 12.81 4.362 18.487-6.831.395-13.853 6.041-20.668 6.268h-34.169v-.498c0-4.123-3.342-7.466-7.466-7.466s-7.466 3.346-7.466 7.469v41.261c0 4.123 3.342 7.466 7.466 7.466 3.956 0 7.184-3.078 7.441-6.969h34.194c8.059.558 15.806 7.178 24.177 6.49h24.676v12.862c-.142 9.69 15.075 9.685 14.932 0v-2.153h211.591c4.813 0 9.502-1.977 12.863-5.425l10.585-10.86c.567-.581 1.357-.914 2.17-.914h49.241c8.741 0 16.211-5.473 19.211-13.164h85.986c4.124 0 7.466-3.343 7.466-7.466s-3.341-7.466-7.465-7.466zm-222.886-30.364c-.729-2.441-1.119-4.972-1.119-7.555v-75.202h105.14v75.202c0 11.149-6.913 20.955-17.298 24.755h-18.275c-.812 0-1.603-.333-2.17-.915l-10.586-10.86c-3.362-3.447-8.049-5.424-12.862-5.424h-42.83zm12.516-136.135c7.64-3.727 12.578-11.628 12.578-20.13v-6.539h52.713v6.539c0 8.501 4.938 16.403 12.578 20.13 8.284 4.042 13.636 12.609 13.636 21.825v16.622h-105.14v-16.623c0-9.216 5.352-17.783 13.635-21.824zm-126.573 136.135c-.726-2.43-1.094-4.957-1.094-7.555v-143.071h71.226v143.071c0 2.598-.369 5.125-1.095 7.555zm1.238-186.041 18.165-49.184c3.192-8.643 4.81-17.697 4.81-26.911v-20.109h20.612v20.109c0 9.212 1.619 18.266 4.811 26.911l18.164 49.184c1.548 4.19 2.332 8.581 2.332 13.049v7.433h-71.226v-7.433c0-4.466.784-8.857 2.332-13.049zm-74.218-91.266c6.185-16.03 11.405-33.273 11.035-50.588v-55.187c0-5.683 4.624-10.306 10.306-10.306 5.683 0 10.307 4.624 10.307 10.306v55.187c-.373 17.308 4.853 34.569 11.034 50.588 1.811 5.082 1.089 10.784-1.932 15.254-2.187 3.236-3.727 6.808-4.605 10.522h-29.607c-.878-3.714-2.419-7.286-4.605-10.522-3.02-4.47-3.743-10.172-1.933-15.254zm-14.272 132.041v-27.726c0-4.468.785-8.859 2.332-13.049 0 0 18.153-49.373 18.44-50.558h29.681c.288 1.185 18.44 50.558 18.44 50.558 1.548 4.19 2.332 8.581 2.332 13.05v27.726h-71.225zm-7.06 195.284c-8.058-.557-15.809-7.178-24.177-6.49h-34.17v-11.396h34.169c8.367.689 16.121-5.933 24.177-6.49h24.676v24.376zm39.608-35.086h22.683v11.511c0 4.123 3.342 7.466 7.466 7.466s7.466-3.343 7.466-7.466v-11.511h17.945v30.489c0 4.123 3.342 7.466 7.466 7.466s7.466-3.343 7.466-7.466v-30.489h17.991v45.795h-88.483zm224.345 34.021-10.584 10.859c-.567.582-1.358.916-2.171.916h-108.175v-45.795h17.991v30.489c0 4.123 3.342 7.466 7.466 7.466s7.466-3.343 7.466-7.466v-30.489h17.946v11.511c0 4.123 3.342 7.466 7.466 7.466s7.466-3.343 7.466-7.466v-11.511h17.945v30.489c0 4.123 3.342 7.466 7.466 7.466s7.466-3.343 7.466-7.466v-30.489h9.498c.812 0 1.603.334 2.17.915l10.585 10.859c4.957 5.69 13.335 5.696 20.262 5.426v11.396c-6.936-.27-15.299-.265-20.263 5.424zm62.105-5.424h-26.91v-11.396h26.91c3.142 0 5.699 2.556 5.699 5.698s-2.557 5.698-5.699 5.698z">
                                        </path>
                                    </g>
                                </svg> -->
                               <svg id="fi_3843106" id="turbo" width="70" height="70" class="draw-path-tool" id="fi_8683100" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m450.179 359.157c.407-1.749.629-3.567.629-5.438v-70.516c0-12.846-4.358-25.495-12.271-35.617-4.777-6.108-7.531-13.429-7.968-21.171l-2.322-50.656c2.88-1.755 4.81-4.916 4.81-8.536 0-5.522-4.478-10-10-10h-50.725c-5.522 0-10 4.478-10 10 0 3.62 1.93 6.781 4.811 8.536l-2.321 50.608c-.427 7.76-3.183 15.097-7.97 21.219-7.913 10.121-12.271 22.771-12.271 35.616v70.516c0 1.358.119 2.688.337 3.984h-180.655c.218-1.297.337-2.627.337-3.984v-70.516c0-12.846-4.358-25.495-12.271-35.617-4.778-6.11-7.533-13.432-7.968-21.175l-2.323-50.651c2.881-1.755 4.811-4.917 4.811-8.536 0-5.522-4.478-10-10-10h-50.724c-5.522 0-10 4.478-10 10 0 3.62 1.93 6.781 4.81 8.536l-2.32 50.609c-.427 7.759-3.183 15.096-7.97 21.219-7.913 10.121-12.271 22.771-12.271 35.616v70.516c0 2.091.271 4.12.776 6.055-13.626 3.249-26.215 10.265-36.514 20.565-14.597 14.597-22.636 33.781-22.636 54.017 0 42.271 34.387 76.662 76.653 76.662h135.559c5.522 0 10-4.478 10-10s-4.478-10-10-10h-135.559c-31.239.001-56.653-25.418-56.653-56.662 0-30.709 25.944-56.653 56.653-56.653h358.693c31.239 0 56.653 25.419 56.653 56.662 0 30.709-25.944 56.653-56.653 56.653h-135.244c-5.522 0-10 4.478-10 10s4.478 10 10 10h135.245c20.236 0 39.421-8.039 54.018-22.636s22.635-33.78 22.635-54.017c0-37.196-26.63-68.278-61.821-75.208zm-367.821-1.454c-2.197 0-3.984-1.787-3.984-3.984v-70.516c0-8.402 2.851-16.677 8.027-23.297 7.318-9.36 11.531-20.577 12.188-32.53l2.299-50.152h21.196l2.3 50.152c.001.03.003.061.004.092.653 11.861 4.866 23.078 12.185 32.438 5.177 6.621 8.027 14.896 8.027 23.298v70.516c0 2.197-1.788 3.984-3.985 3.984h-58.257zm286.209 0c-2.197 0-3.985-1.787-3.985-3.984v-70.516c0-8.402 2.851-16.677 8.026-23.297 7.319-9.358 11.532-20.575 12.189-32.53l2.3-50.152h21.196l2.299 50.152c.001.03.003.062.004.093.654 11.862 4.867 23.079 12.185 32.437 5.177 6.621 8.027 14.896 8.027 23.298v70.516c0 2.197-1.787 3.984-3.984 3.984h-58.257z"></path><path d="m432.326 468.873c19.067 0 35.067-15.875 35.067-34.985s-16-34.985-35.067-34.985h-350.468s0 0-.001 0c-19.292 0-34.987 15.695-34.987 34.987s15.695 34.987 34.987 34.987c.052 0 .103-.004.154-.004zm-191.558-34.985c0-8.251 6.703-14.964 14.949-14.985h.077c8.246.021 14.949 6.735 14.949 14.985s-6.703 14.964-14.949 14.985h-.077c-8.247-.021-14.949-6.735-14.949-14.985zm191.63-14.986c8.137 0 14.992 6.844 14.992 14.985 0 8.154-6.876 15.003-15.026 14.985-8.246-.021-14.949-6.735-14.949-14.985s6.703-14.964 14.949-14.985zm-31.603 29.971h-113.431c2.164-4.545 3.379-9.625 3.379-14.985s-1.215-10.44-3.379-14.985h113.431c-2.164 4.545-3.379 9.625-3.379 14.985s1.215 10.44 3.379 14.985zm-333.925-14.983c0-8.264 6.724-14.987 14.987-14.987 8.155 0 14.986 6.822 14.986 14.985 0 8.263-6.723 14.985-14.985 14.985-.013 0-.026.002-.039.002-8.246-.021-14.949-6.735-14.949-14.985zm46.722 14.707c4.34-9.329 4.3-20.398-.123-29.694h110.677c-2.164 4.545-3.379 9.625-3.379 14.985s1.215 10.44 3.379 14.985h-110.676c.043-.091.08-.185.122-.276z"></path><path d="m340.183 137.679v-31.179c0-3.396-1.724-6.561-4.577-8.402l-48.889-31.554c.191-1.396.298-2.817.298-4.264 0-13.764-8.933-25.473-21.304-29.656v-21.643c0-5.522-4.478-10-10-10s-10 4.478-10 10v21.642c-12.37 4.183-21.303 15.892-21.303 29.656 0 1.489.112 2.951.313 4.385l-48.701 31.434c-2.854 1.842-4.577 5.006-4.577 8.402v31.179c0 3.433 1.761 6.626 4.664 8.457l47.122 29.732-.346 7.543c-.427 7.759-3.183 15.096-7.97 21.218-7.913 10.121-12.271 22.77-12.271 35.617v70.516c0 13.225 10.76 23.984 23.984 23.984h58.258c13.225 0 23.984-10.76 23.984-23.984v-70.516c0-12.848-4.358-25.496-12.271-35.617-4.778-6.11-7.533-13.432-7.968-21.175l-.345-7.515 47.234-29.803c2.904-1.832 4.665-5.025 4.665-8.457zm-84.472-86.703c6.232 0 11.304 5.071 11.304 11.304s-5.071 11.304-11.304 11.304c-6.292.034-11.291-5.221-11.303-11.304 0-6.233 5.071-11.304 11.303-11.304zm33.157 189.27v70.516c0 2.197-1.787 3.984-3.984 3.984h-58.258c-2.197 0-3.984-1.787-3.984-3.984v-70.516c0-8.403 2.851-16.678 8.027-23.297 7.318-9.36 11.531-20.577 12.188-32.53l2.3-50.152h21.195l2.3 50.152c.001.03.003.061.004.092.653 11.861 4.866 23.078 12.185 32.438 5.177 6.619 8.027 14.894 8.027 23.297zm31.315-108.082-32.952 20.792-.924-20.153c2.881-1.755 4.811-4.917 4.811-8.536 0-5.522-4.478-10-10-10h-50.725c-5.522 0-10 4.478-10 10 0 3.62 1.93 6.781 4.811 8.536l-.921 20.082-32.84-20.721v-20.217l42.359-27.339c5.651 5.546 13.386 8.975 21.91 8.975 8.565 0 16.334-3.46 21.992-9.053l42.48 27.417v20.217z"></path><path d="m246.77 504.84c3.437 8.392 15.793 7.889 18.691-.608 2.865-8.402-6.368-16.208-14.173-12.033-4.478 2.395-6.473 7.953-4.518 12.641z"></path></g></svg>
                            </div>
                            <h4><a href="infrastructure.php#infraroom">In-House Tool Room</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 big-column">
                <div class="right-column text-left">
                    <div class="service-block-one wow fadeInRight animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box">
                                <svg id="turbo" width="70" height="70" class="draw-path-lab" viewBox="0 0 512 512"
                                    width="512" xmlns="http://www.w3.org/2000/svg" id="fi_9396629">
                                    <g id="_x32_9_Microscope">
                                        <g>
                                            <path
                                                d="m428.805 304.252c0-66.028-41.133-125.317-102.657-148.823-3.315-8.552-8.696-16.191-15.698-22.149l21.195-39.926c0-.005.005-.01.005-.015 5.652-10.705 2.142-23.777-7.634-30.471l8.911-16.785c2.055-3.868 2.484-8.301 1.202-12.485-1.281-4.184-4.12-7.621-7.983-9.674l-29.739-15.794c-7.988-4.245-17.923-1.195-22.161 6.786l-8.908 16.771c-11.747-4.687-24.097.536-29.516 10.754l-103.57 194.974c-5.655 10.7-2.152 23.77 7.622 30.471l-8.908 16.776c-2.06 3.871-2.489 8.306-1.202 12.492 1.281 4.184 4.12 7.619 7.983 9.671l29.735 15.794c8.022 4.262 17.945 1.149 22.161-6.786l8.861-16.682c2.791 1.117 5.731 1.699 8.697 1.699 8.395 0 16.612-4.497 20.875-12.566l31.99-60.198c4.535 1.27 9.053 2.105 14.879 2.105 13.151 0 25.586-4.779 35.305-12.927 33.76 15.845 55.354 49.459 55.354 86.989 0 52.973-43.095 96.068-96.07 96.068-27.811 0-53.751-11.947-71.866-32.482h22.581c4.179 0 7.569-3.388 7.569-7.569s-3.39-7.569-7.569-7.569c-76.744 0-57.889 0-129.486 0-4.179 0-7.569 3.388-7.569 7.569s3.39 7.569 7.569 7.569h32.844c12.389 28.274 32.827 52.399 58.345 69.309h-9.479c-15.878 0-28.799 12.919-28.799 28.799v32.271c0 4.181 3.39 7.569 7.569 7.569h247.353c4.179 0 7.569-3.388 7.569-7.569v-32.271c0-15.88-12.921-28.799-28.799-28.799h-20.272c44.311-29.094 71.711-78.47 71.711-132.896zm-141.185-282.237c.325-.618 1.069-.843 1.685-.515l29.74 15.794c.379.202.542.513.611.737.064.224.103.572-.099.951l-8.786 16.55-31.943-16.967zm-112.086 287.328c-.217.069-.572.108-.951-.094l-29.735-15.794c-.379-.204-.542-.513-.611-.737s-.108-.569.099-.951l8.785-16.545 31.939 16.962-8.791 16.55c-.203.38-.508.54-.735.609zm70.598-87.296-31.43 59.148c-1.06 2.003-2.834 3.472-4.997 4.135s-4.45.441-6.465-.628c-73.935-39.277-39.259-20.851-54.079-28.722-4.13-2.2-5.711-7.355-3.528-11.475l103.559-194.963c2.135-4.036 7.227-5.74 11.472-3.484 77.037 40.921 36.655 19.468 54.079 28.722 4.12 2.198 5.702 7.343 3.528 11.477l-20.623 38.852c-2.378-1.083-7.407-2.929-12.019-3.844-29.693-5.894-58.753 13.472-64.674 43.272-4.419 22.39 5.744 45.568 25.177 57.51zm21.052-7.761c-19.865-3.937-33.642-22.32-31.964-42.361.014-.176.016-.352.033-.529 2.28-23.514 24.495-39.829 47.474-35.266 21.124 4.103 35.563 25.155 31.258 46.818-4.209 21.267-25.069 35.652-46.801 31.338zm123.844 251.659v24.701h-232.214v-24.701c0-7.532 6.13-13.66 13.66-13.66h204.894c7.53 0 13.66 6.128 13.66 13.66zm-65.803-28.798h-111.42c-31.943-13.446-58.209-38.312-73.554-69.309h38.137c20.865 29.898 54.631 47.621 91.147 47.621 61.318 0 111.209-49.888 111.209-111.206 0-41.919-23.23-79.672-59.963-98.741 6.438-9.757 9.442-21.19 9.082-32.209 50.62 23.413 83.804 74.496 83.804 130.95 0 58.297-34.663 110.299-88.442 132.894z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <h4><a href="infrastructure.php#infralab">Quality Check Lab</a></h4>
                        </div>
                    </div>
                    <div class="service-block-one wow fadeInRight animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box">
                                <svg id="turbo" width="70" height="70" class="draw-path-house" id="fi_3467231"
                                    enable-background="new 0 0 512 512" height="70" viewBox="0 0 512 512" width="512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="m492.025 175.849-56.025 19.696v-135.545c0-8.284-6.716-15-15-15h-90c-8.284 0-15 6.716-15 15v177.732l-60 21.094v-68.826c0-10.587-10.7-17.854-20.55-13.936l-39.45 15.71v-131.774c0-8.284-6.716-15-15-15h-90c-8.284 0-15 6.716-15 15v179.563l-66.55 26.502c-5.706 2.272-9.45 7.793-9.45 13.935v172c0 8.284 6.716 15 15 15h482c8.284 0 15-6.716 15-15v-262c0-10.303-10.195-17.589-19.975-14.151zm-86.025-100.849v30h-60v-30zm-60 60h60v71.092l-60 21.094zm-180-60v30h-60v-30zm-60 60h60v68.722l-60 23.894zm45 302h-30v-30h30zm120 0h-30v-30h30zm120 0h-30v-30h30zm91 0h-61v-45c0-8.284-6.716-15-15-15h-60c-8.284 0-15 6.716-15 15v45h-30v-45c0-8.284-6.716-15-15-15h-60c-8.284 0-15 6.716-15 15v45h-30v-45c0-8.284-6.716-15-15-15h-60c-8.284 0-15 6.716-15 15v45h-61v-146.828l196-78.053v67.881c0 10.303 10.195 17.589 19.975 14.151l236.025-82.977z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <h4><a href="infrastructure.php#infrawarehouse">Modern Warehouse</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-section end -->


<!-- chooseus-section -->
<!-- <section class="chooseus-section">
            <div class="bg-layer" style="background-image: url(assets/images/shape/shape-5.png);"></div>
            <div class="shape-layer">
                <div class="shape-1" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                <div class="shape-2"></div>
                <div class="shape-3"></div>
                <div class="shape-4" style="background-image: url(assets/images/shape/shape-32.png);"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_2">
                            <div class="content-box">
                                <div class="sec-title light">
                                    <h2>Protect Your Family with One of The Best Water Filtering System.</h2>
                                </div>
                                <div class="inner-box">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-draw-check-mark"></i></div>
                                        <div class="text">
                                            <h4>Content Marketing</h4>
                                            <p>Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor incididunt labore.</p>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-draw-check-mark"></i></div>
                                        <div class="text">
                                            <h4>Marketing Strategy</h4>
                                            <p>Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor incididunt labore.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <figure class="image"><img src="assets/images/resource/chooseus-1.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
<!-- chooseus-section end -->

<?php if(!empty($new_arrival_products)){ ?>
<!-- shop-section -->
<section class="shop-section centred">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Latest <b>Products</b></h2>
        </div>
        <div class="row clearfix">

            <?php foreach($new_arrival_products as $product){ ?>
            <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                <div class="shop-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500m">
                    <div class="inner-box">
                        <?php if($product['image']) { ?>
                        <figure class="image-box"><img src="assets/images/product/list/<?php echo $product['image']; ?>"
                                alt=""></figure>
                        <?php } ?>
                        <div class="lower-content">

                            <h4><a
                                    href="product_details.php?id=<?php echo $product['id']; ?>"><?php echo $product['product_name']; ?></a>
                            </h4>
                            <div class="btn-box">
                                <a href="product_details.php?id=<?php echo $product['id']; ?>"
                                    class="theme-btn btn-two">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
        <a href="new_arrival_products.php" class="theme-btn btn-one mt-5">View All</a>
    </div>
</section>
<!-- shop-section end -->
<?php } ?>
<!-- <section class="cta-section bg-color-2 infra-bg">
    <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-10.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                <div class="pattern-3" style="background-image: url(assets/images/shape/shape-33.png);"></div>
                <div class="pattern-4" style="background-image: url(assets/images/shape/shape-34.png);"></div>
            </div>
    <div class="auto-container">
        <div class="row align-items-center clearfix">
           
            <div class="col-lg-12 col-md-12 col-sm-12 content-column text-center">
                <div class="content_block_3">
                    <div class="content-box">
                        <div class="sec-title light">
                            <h2>Where Cutting-Edge Infrastructure <b>Meets Perfect Bottles</b></h2>
                        </div>
                        <div class="text">
                            <p>Yasharyn Packaging has proven in-house expertise and cutting-edge technology to drive
                                customer delight through our innovative packaging products and processes for different
                                industry segments.</p>
                        </div>
                        <div class="btn-box">
                            <a href="#" class="theme-btn btn-one">View Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<section class="clients-section alternat-2">
    <div class="auto-container">
        <div class="sec-title centred">
            <h2>Our Precious <b>Clients</b></h2>
        </div>
        <div class="four-column-carousel owl-carousel owl-theme owl-nav-none owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-7.png" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-2.png" alt="">
                            </div>
                        </div>
                    </div> -->
                    <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-3.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-20.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-5.png" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-23.png" alt="">
                            </div>
                        </div>
                    </div> -->
                    <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-6.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-8.png" alt="">
                            </div>
                        </div>
                    </div>
                   
                    <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-10.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-11.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-12.png" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-9.png" alt="">
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-13.png" alt="">
                            </div>
                        </div>
                    </div> -->
                    <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-14.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-15.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-22.png" alt="">
                            </div>
                        </div>
                    </div>
                     <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-24.png" alt="">
                            </div>
                        </div>
                    </div>
                     <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-27.png" alt="">
                            </div>
                        </div>
                    </div>
                       <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-28.png" alt="">
                            </div>
                        </div>
                    </div>
                       <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-29.png" alt="">
                            </div>
                        </div>
                    </div>
                       <div class="owl-item">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <img src="assets/images/clients/new-30.png" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>

<!-- testimonial-section -->
<section class="testimonial-section bg-color-2">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-10.png);"></div>
        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-2.png);"></div>
        <div class="pattern-3" style="background-image: url(assets/images/shape/shape-33.png);"></div>
        <div class="pattern-4" style="background-image: url(assets/images/shape/shape-34.png);"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title">
            <h2>What Client Says <br /><b>About Yasharyn</b></h2>
        </div>
        <div class="two-column-carousel owl-carousel owl-theme owl-nav-none">
            <div class="testimonial-block-one">
                <div class="inner-box  bg-light testimonial-feedback">
                    <div class="inner">
                        <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p> I am Arul Gupta from Mahatva Ayurveda(Panchkula). We've been working with Yasharyn Packaging
                            for a long time, Yash Aryan Company offers a great variety of high-quality products. Their
                            staff, especially Rakshanda Ma'am, is very kind, humble, and professional. She promptly
                            answers calls and provides excellent assistance. Her behavior and communication are truly
                            commendable. I am very happy to work with Yash Aryan Company</p>
                        <h4>Arul Gupta</h4>
                        <p>Mahatva Ayurveda(Panchkula)</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box  bg-light testimonial-feedback">
                    <div class="inner">
                        <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p> Yasharyan Packaging has been our trusted pharmaceutical bottle supplier since 2011,
                            consistently delivering high-quality products with professional service and timely delivery.
                            Special appreciation to Mrs. Neha for her prompt, efficient support. We value this
                            long-standing partnership and look forward to many more years of collaboration.</p>
                        <h4>Ravi Goyal</h4>
                        <p>National Ayurved, Sirsa (HR)</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box bg-light testimonial-feedback">
                    <div class="inner">
                        <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p>I'm Pushpinder from Growell Pharmacy. We've been working with Yasharyn Packaging for a long
                            time, and it's been a great experience throughout. Their service is reliable, the quality is
                            always up to the mark, and they’ve been very professional in every interaction.
                        </p>
                        <p>Really happy to be associated with them and looking forward to more years of working
                            together!</p>
                        <h4>Pushpinder </h4>
                        <p>Growell Pharmacy</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box  bg-light testimonial-feedback">
                    <div class="inner">
                        <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p> Mother Sparsh has enjoyed a long and excellent association with Yasharyn Packaging. Their
                            dependable service, consistent product quality, and professional approach stand out. The
                            proactive management ensures smooth coordination and timely communication. We value this
                            partnership and look forward to many more years of successful collaboration.</p>
                        <h4>Ravi Kumar, Head–Purchase</h4>
                        <p>Mother Sparsh Baby Care Pvt. Ltd.</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box bg-light testimonial-feedback">
                    <div class="inner">
                        <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p>I'm Balwinder Kumar from Healthcam Remefies Pharma. We've been working with Yasharyn
                            Packaging for a long time, and it's been a great experience throughout. Their service is
                            reliable, the quality is always up to the mark, and they’ve been very professional in every
                            interaction.</p>
                        <p>Really happy to be associated with them and looking forward to more years of working
                            together!</p>
                        <h4>Balwinder Kumar</h4>
                        <p>Healthcam Remefies Pharma</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box bg-light testimonial-feedback">
                    <div class="inner">
                        <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p>Hi, I am Sohail Mansoori, founder of BN Herbal</p>
                        <p>I have been working in Ayurvedic medicine for the past five years. We bought bottles from
                            Yasharyan Packaging Pvt. Ltd. for our products — including capsules, juices, drops, and
                            syrups. I am very happy with their services. The bottle quality, staff behavior, and
                            delivery timing are all excellent. Thank you very much to the Yasharyan Packaging team! </p>
                        <h4>Sohail Mansoori</h4>
                        <p> BN Herbal</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box bg-light testimonial-feedback">
                    <div class="inner">
                        <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>

                        <p>We sincerely appreciate our excellent business relationship built on quality, timely
                            deliveries, and a professional approach. Your transparency, consistency, and integrity have
                            contributed greatly to our shared success. We look forward to continuing this positive
                            partnership and achieving greater milestones together. </p>
                        <h4>Puneet Walia</h4>
                        <p>Alna Biotech</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box bg-light testimonial-feedback">
                    <div class="inner">
                        <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>

                        <p>We work with several packaging suppliers, but Yasharyan Packaging stands out for its
                            commendable supply and service. Their team consistently delivers reliable support. Special
                            thanks to Kiran Ma’am for her prompt responses and ensuring timely deliveries. We appreciate
                            the effort and look forward to continued excellence. </p>
                        <h4>Led Ram, Purchase Manager</h4>
                        <p> Allrite Pharmaceuticals (Leeford Healthcare)</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- testimonial-section end -->
<!-- 
<section class="contact-section bg-color-1">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-23.png);"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                <div class="title-inner">
                    <div class="sec-title">
                        <h2>Get a Free Quote to Create <b>Your Desired Business.</b></h2>
                    </div>
                    <div class="text">
                        <p>Thank you for expressing interest in Yasharyn’s packing solutions. Tell us your packing needs
                            to provide you with the best information on our packing products. And request for a Quick
                            Quote. Our Sales Representative will get in touch with you shortly. Have a nice day!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                <div class="content_block_5">
                    <div class="form-inner">
                        <form method="post" action="save-contact.php?form_type=home" id="contact-form" method="post"
                            class="default-form" novalidate="novalidate">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="name" placeholder="Your Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone number">
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message..."></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">

                                    <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITE_KEY; ?>"
                                        data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired">
                                    </div>
                                    <input id="hidden-grecaptcha" name="hidden-grecaptcha" type="hidden" />


                                </div>



                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button class="theme-btn btn-one" type="submit" name="submit-form">Submit
                                        Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- team-section -->
<section class="team-section">
    <div class="auto-container">
        <div class="sec-title centred">
            <h2>Turning Social Media Into <br /><b>Business Success</b></h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500m">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/social-media/1.jpg" alt=""></figure>
                            <ul class="social-links clearfix">
                                <li><a href="https://www.facebook.com/yasharynofficial"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/yasharynofficial/"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/yasharynofficial/"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h4><a href="https://www.instagram.com/yasharynofficial/">yasharynofficial</a></h4>
                            <div class="share-box"><a href="https://www.instagram.com/yasharynofficial/"><i
                                        class="fab fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500m">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/social-media/2.jpg" alt=""></figure>
                            <ul class="social-links clearfix">
                                <li><a href="https://www.facebook.com/yasharynofficial"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/yasharynofficial/"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/yasharynofficial/"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h4><a href="https://www.facebook.com/yasharynofficial">yasharynofficial</a></h4>
                            <div class="share-box"><a href="https://www.facebook.com/yasharynofficial"><i
                                        class="fab fa-facebook-f"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500m">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/social-media/3.jpg" alt=""></figure>
                            <ul class="social-links clearfix">
                                <li><a href="https://www.facebook.com/yasharynofficial"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/yasharynofficial/"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/yasharynofficial/"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h4><a href="https://www.linkedin.com/company/yasharynofficial">yasharynofficial</a></h4>
                            <div class="share-box"><a href="https://www.linkedin.com/company/yasharynofficial/"><i
                                        class="fab fa-linkedin-in"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team-section end -->


<?php include 'includes/footer.php'; ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
function recaptchaCallback() {
    var response = grecaptcha.getResponse(),
        $button = jQuery(".document-btn");
    jQuery("#hidden-grecaptcha").val(response);
}
</script>