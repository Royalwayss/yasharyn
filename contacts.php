<?php include 'includes/header.php'; ?>

        <!-- Page Title -->
        <section class="page-title centred inner-pages" style="background-image: url(assets/images/background/contact.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- contact-style-two -->
        <section class="contact-style-two">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-12 col-sm-12 info-column ">
                        <div class="info-inner">
                            <div class="sec-title">
                                <h2>We’re Here <b>For You</b></h2>
                            </div>
                            <ul class="info-list clearfix">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <h5>Communication Office</h5>
                                    <p>Jalandhar Rd, near Neva Garments, Hussainpura, Ludhiana, Punjab 141008</p>
                                </li>
                                <li>
                                    <i class="fas fa-envelope-open"></i>
                                    <h5>Email Drop Us</h5>
                                    <p><a href="mailto:info@yasharyn.com">info@yasharyn.com</a></p>
                                    <p><a href="mailto:sales@yasharyn.com">sales@yasharyn.com</a></p>
                                </li>
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <h5>Call for Inquery</h5>
                                    <p><a href="tel:+91-93177-55220">+91-93177-55220</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 form-column">
                        <div class="form-inner bg-color-1 p-5">
                            <div class="sec-title">
                                <h2>Get in <b>Touch</b></h2>
                            </div>
                            <form method="post" action="save-contact.php" id="contact-form" class="default-form" method="post"> 
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="name" placeholder="Your Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email Address" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="phone" required="" placeholder="Phone Number">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="subject" required="" placeholder="Subject">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Leave A Comment"></textarea>
                                    </div>
                                     <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                         
                                       <div  class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITE_KEY; ?>" data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired"></div>
							            <input id="hidden-grecaptcha" name="hidden-grecaptcha" type="hidden"/>
                                        
                                        
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn btn-one" type="submit" name="submit-form">Submit Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-style-two end -->

        <section class="faq-page-section">
            <div class="shape-layer">
                <div class="shape-1" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                <div class="shape-2"></div>
                <div class="shape-3"></div>
                <div class="shape-4" style="background-image: url(assets/images/shape/shape-37.png);"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                        <div class="faq-content">
                            <div class="sec-title">
                                <h2>Serving You From <b>Every Corner</b></h2>
                            </div>
                            <ul class="accordion-box">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="icon-outer"><i class="fal fa-plus"></i></div>
                                        <h4>Head Office</h4>
                                    </div>
                                    <div class="acc-content current"> 
                                        <div class="text">
                                            <p>Sankeshwar Parshavnath Marg, Near Neva Garments, G.T. Road West, Village Hussainpura, Dist - Ludhiana, Punjab - 141008, India.</p>
                                            <ul class="list clearfix">
                                                <li>Mr. Yashik : +91-99212-00000</li>
                                                <!-- <li>Ms. Geeta : +91-79869-99632</li>
                                                <li>Ms. Simran : +91-96460-00866</li>
                                                <li>Ms. Rakshanda : +91-93177-55226</li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                     <div class="acc-btn">
                                        <div class="icon-outer"><i class="fal fa-plus"></i></div>
                                        <h4>Karnal Office</h4>
                                    </div>
                                    <div class="acc-content">
                                        <div class="text">
                                            <p>Shop No. 3-4, Plot No. 3, Vijay Nagar, Backside Shiv Filling Station, Near Namaste Chowk. KARNAL 132001, India.</p>
                                            <ul class="list clearfix">
                                                <li>Mr. Amit : +91-79869-98231</li>
                                                <li>karnalbranch@yasharyn.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- google-map-section -->
        <section class="google-map-section">
            <div class="auto-container">
                <div class="map-inner">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27379.983004680445!2d75.81448353499027!3d30.92865653083698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a83c263636f99%3A0xf91f3a12d2a9452!2sYASHARYN%20PACKAGING%20PVT.%20LTD.!5e0!3m2!1sen!2sin!4v1753423618496!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <!-- google-map-section -->


<?php include 'includes/footer.php'; ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    function recaptchaCallback() {
	    var response = grecaptcha.getResponse(),
		$button = jQuery(".document-btn");
		jQuery("#hidden-grecaptcha").val(response);
}
</script>
