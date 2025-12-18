       <!-- main-footer -->
        <footer class="main-footer">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-12.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                <div class="pattern-3" style="background-image: url(assets/images/shape/shape-14.png);"></div>
            </div>
            <div class="auto-container">
                 <!-- <div class="footer-top clearfix">
                    <div class="line-shape" style="background-image: url(assets/images/shape/shape-11.png);"></div>
                    <div class="text pull-left">
                        <h2>Please <span>Call Us</span> to Take an Extraordinary Service</h2>
                    </div>
                    <div class="support-box pull-right">
                        <a href="tel:+91-93170-88991"><i class="fas fa-phone"></i>+91-93170-88991</a>
                    </div>
                </div> -->
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="index.html"><img src="assets/images/Yamed.png" alt=""></a></figure>
                                <div class="text">
                                    <p>Our team of seasoned professionals is committed to realizing our vision. Their dedication towards growth of the company is immeasurable.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h4>Quick Links</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="<?php echo BASE_URL; ?>about-us.php">About Company</a></li>
                                        <!-- <li><a href="<?php echo BASE_URL; ?>why-us.php">Why Us?</a></li> -->
                                        <!-- <li><a href="javascript:;">For Business</a></li> -->
                                        <li><a href="career.php">Join Us</a></li>
                                          <li><a href="clients.php">Clients</a></li>
                                          <li><a href="csr.php">CSR</a></li>
                                        <li><a href="<?php echo BASE_URL; ?>contacts.php">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-50">
                                <div class="widget-title">
                                    <h4>Our Products</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <?php foreach($categories as $category) { ?>
										<li><a href="products.php?id=<?php echo $category['id']; ?>"><?php echo $category['category_name']; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget ml-50">
                                <div class="widget-title">
                                    <h4>Address</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li><i class="fal fa-map-marker-alt"></i>Sankeshwar Parshavnath Marg, Near Neva Garments, G.T. Road West, Village Hussainpura, Dist - Ludhiana, Punjab - 141008, India.</li>
                                        <li><i class="fal fa-phone"></i><a href="tel:+91-93170-88991">+91-93170-88991</a></li>
                                        <li><i class="fal fa-envelope-open-text"></i><a href="mailto:info@yasharyn.com">info@yasharyn.com</a></li>
                                    </ul>
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
                            <p>Copyright © 2025 <a href="index.html">Yasharyn Packaging Pvt. Ltd.</a> All Rights Reserved.</p>
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
    <script src="assets/js/jquery.js"></script>
	

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/select2.min.js" ></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <!-- main-js -->
    <script src="assets/js/script.js?v=<?php echo time(); ?>"></script>

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
        1200: { slidesPerView: 4 },
        992: { slidesPerView: 3 },
        768: { slidesPerView: 2 },
        480: { slidesPerView: 1 }
    }
});
</script>

 
</body><!-- End of .page_wrapper -->
</html>