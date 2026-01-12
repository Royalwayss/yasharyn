       <!-- main-footer -->
       <footer class="main-footer">
           <div class="pattern-layer">
               <div class="pattern-1" style="background-image: url(<?php echo BASE_URL; ?>assets/images/shape/shape-12.png);"></div>
               <div class="pattern-2" style="background-image: url(<?php echo BASE_URL; ?>assets/images/shape/shape-13.png);"></div>
               <!-- <div class="pattern-3" style="background-image: url(assets/images/shape/shape-14.png);"></div> -->
           </div>
           <div class="container-fluid px-5">
               <div class="widget-section">
                   <div class="row clearfix">
                       <div class="col-xl-3 col-lg-3  col-md-4 col-sm-5 col-12 footer-column text-center">
                           <div class="footer-widget logo-widget">
                               <figure class="footer-logo"><a href="<?php echo BASE_URL; ?>"><img
                                           src="<?php echo BASE_URL; ?>assets/images/logo-footer-w.png" alt=""></a></figure>
                               <div class="text">
                                   <p>BRINGING EXCELLENCE IN PACKAGING</p>
                               </div>
                           </div>
                       </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-3 col-6 footer-column">
                           <div class="footer-widget links-widget">
                               <div class="widget-title">
                                   <h4>Quick Links</h4>
                               </div>
                               <div class="widget-content">
                                   <ul class="links-list clearfix">
                                       <li><a href="<?php echo BASE_URL; ?>about-us">About Company</a></li>
                                       <!-- <li><a href="<?php echo BASE_URL; ?>why-us.php">Why Us?</a></li> -->
                                       <!-- <li><a href="javascript:;">For Business</a></li> -->
                                       <li><a href="<?php echo BASE_URL; ?>jobs-and-career.php">Join Us</a></li>
                                       <li><a href="<?php echo BASE_URL; ?>clients.php">Clients</a></li>
                                       <li><a href="<?php echo BASE_URL; ?>csr.php">CSR</a></li>
                                       <li><a href="<?php echo BASE_URL; ?>contact-us.php">Contact Us</a></li>
                                   </ul>
                               </div>
                           </div>
                        </div>
                       <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 footer-column">
                           <div class="footer-widget links-widget ml-50">
                               <div class="widget-title">
                                   <h4>Our Products</h4>
                               </div>
                               <div class="widget-content">
                                   <ul class="links-list clearfix">
                                       <?php foreach($categories as $category) { ?>
                                       <li><a
                                               href="<?php echo BASE_URL; ?>products.php?id=<?php echo $category['id']; ?>"><?php echo $category['category_name']; ?></a>
                                       </li>
                                       <?php } ?>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 footer-column">
                           <div class="footer-widget contact-widget ml-50">
                               <div class="widget-title">
                                   <h4>Address</h4>
                               </div>
                               <div class="widget-content">
                                   <ul class="info-list clearfix">
                                       <li>
                                           <!-- <i class="fal fa-map-marker-alt"></i> -->
                                           <!-- <h6 class="footer-heading">Address : </h6> -->
                                           Sankeshwar Parshavnath Marg, Near Neva Garments, G.T. Road West, Village
                                           Hussainpura, Dist - Ludhiana, Punjab - 141008, India.
                                       </li>
                                       <li>
                                           <!-- <i class="fal fa-phone"></i> -->
                                           <h6 class="footer-heading">Call Us : <a
                                                   href="tel:+91-93170-88991">+91-93170-88991</a>
                                               <h6>

                                       </li>
                                       <li>
                                           <!-- <i class="fal fa-envelope-open-text"></i> -->
                                           <h6 class="footer-heading">Email Id : <a
                                                   href="mailto:info@yasharyn.com">info@yasharyn.com</a>
                                               <h6>

                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-2 col-lg-2  col-md-6 col-sm-6 col-12 footer-column text-center">
                           <div class="footer-widget logo-widget text-center">
                               <figure class="footer-logo-new"><a rel="nofollow" href="https://yamedlifesciences.com"><img
                                           src="<?php echo BASE_URL; ?>assets/images/logo-footer.png" alt="Blood Collection Tubes Manufacturer in India" title="Blood Collection Tubes Manufacturer in India"></a></figure>
                               <div class="text mt-3">
                                   <p>GROUP CONCERN</p>
                               </div>

                           </div>
                       </div>
                   </div>
               </div>
           </div>
           </div>
           <div class="footer-bottom">
               <div class="auto-container">
                   <div class="bottom-inner">
                       <div class="copyright">
                           <p>Copyright © <?php echo date('Y'); ?> <a href="<?php echo BASE_URL; ?>">Yasharyn Packaging Pvt. Ltd.</a> All Rights
                               Reserved.</p>
                       </div>
                   </div>
               </div>
           </div>
       </footer>
       <!-- main-footer end -->



       <!--Scroll to top-->
       <button class="scroll-top scroll-to-target" data-target="html">
           <span class="fal fa-angle-up"></span>
       </button>
       </div>


       <!-- jequery plugins -->
       <script src="<?php echo BASE_URL; ?>assets/js/jquery.js"></script>


       <script src="<?php echo BASE_URL; ?>assets/js/popper.min.js"></script>
       <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
       <script src="<?php echo BASE_URL; ?>assets/js/owl.js"></script>
       <script src="<?php echo BASE_URL; ?>assets/js/wow.js"></script>
       <script src="<?php echo BASE_URL; ?>assets/js/validation.js"></script>
       <script src="<?php echo BASE_URL; ?>assets/js/jquery.fancybox.js"></script>
       <script src="<?php echo BASE_URL; ?>assets/js/appear.js"></script>
       <script src="<?php echo BASE_URL; ?>assets/js/scrollbar.js"></script>
       <script src="<?php echo BASE_URL; ?>assets/js/jquery-ui.js"></script>
       <script src="<?php echo BASE_URL; ?>assets/js/jquery.nice-select.min.js"></script>
       <script src="<?php echo BASE_URL; ?>assets/js/select2.min.js"></script>
       <!-- Swiper JS -->
       <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
       <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
       <!-- main-js -->
	   <script src="<?php echo BASE_URL; ?>assets/js/additional-methods.js"></script>

       <script src="<?php echo BASE_URL; ?>assets/js/script.js?v=<?php echo time(); ?>"></script>

       <script>
var swiper = new Swiper(".productSwiper", {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // Responsive breakpoints
    slidesPerView: 4,
    spaceBetween: 20,

    breakpoints: {
        1200: {
            slidesPerView: 4
        },
        992: {
            slidesPerView: 3
        },
        768: {
            slidesPerView: 2
        },
        320: {
            slidesPerView: 2
        }
    
    }
});
       </script>


       </body><!-- End of .page_wrapper -->

       </html>