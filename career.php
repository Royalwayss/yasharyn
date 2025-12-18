<?php include 'includes/header.php'; ?>
<!-- Page Title -->
<section class="page-title centred inner-pages" style="background-image: url(assets/images/background/contact.jpg);">
   <div class="auto-container">
      <div class="content-box">
         <h2>Join Us</h2>
      </div>
   </div>
</section>
<!-- End Page Title -->
<!-- contact-style-two -->
<section class="contact-style-two">
   <div class="auto-container">
      <div class="row clearfix">
         <div class="col-lg-10 col-md-12 col-sm-12 form-column m-auto">
            <div class="form-inner bg-color-1 p-5">
               <div class="sec-title">
                  <h2>Join<b>Us</b></h2>
               </div>
               <form method="post" action="save-career.php" id="career-form" class="default-form" enctype="multipart/form-data">
                  <div class="row clearfix">
                     <!-- Name -->
                     <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="name" placeholder="Your Name" required="">
                     </div>
                     <!-- Email -->
                     <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="email" name="email" placeholder="Email Address" required="">
                     </div>
                     <!-- Phone -->
                     <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                        <input type="text" name="phone" required="" placeholder="Phone Number">
                     </div>
                     <!-- Subject -->
                     <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                        <input type="text" name="subject" required="" placeholder="Subject">
                     </div>
                     <!-- Join Us Dropdown -->
                  <?php /*   <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <select name="join_us" class="form-control">
                           <option value="">Join Us For?</option>
                           <option value="career">Career</option>
                           <option value="partnership">Partnership</option>
                           <option value="franchise">Franchise</option>
                           <option value="internship">Internship</option>
                           <option value="vendor">Vendor Registration</option>
                           <option value="business_inquiry">Business Inquiry</option>
                           <option value="collaboration">Collaboration</option>
                           <option value="others">Others</option>
                        </select>
                     </div> */ ?>
                     <!-- Join Type (Radio Buttons) -->
                     <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <label>Join Us Type:</label><br>
                        <label><input type="radio" name="join_type" value="Career"> Career</label> &nbsp;&nbsp;
                        <label><input type="radio" name="join_type" value="Vendor"> Vendor</label> &nbsp;&nbsp;
                        <label><input type="radio" name="join_type" value="Partner"> Partner</label> &nbsp;&nbsp;
                        <label><input type="radio" name="join_type" value="Other"> Other</label>
                     </div>
                     <!-- Category / Department -->
                     <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="category" placeholder="Category / Department">
                     </div>
                     <!-- Experience -->
                     <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="experience" placeholder="Experience (Years)">
                     </div>
                     <!-- Skills (Checkboxes) -->
                     <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <label>Skills:</label><br>
                        <label><input type="checkbox" name="skills[]" value="management"> Management</label> &nbsp;
                        <label><input type="checkbox" name="skills[]" value="marketing"> Marketing</label> &nbsp;
                        <label><input type="checkbox" name="skills[]" value="technical"> Technical</label> &nbsp;
                        <label><input type="checkbox" name="skills[]" value="communication"> Communication</label>
                     </div>
                     <!-- Upload Resume -->
                     <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <label>Upload Resume (PDF / Doc):</label>
                        <input type="file" name="resume" class="form-control" accept="application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                     </div>
                     <!-- Message -->
                     <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <textarea name="message" placeholder="Leave A Comment"></textarea>
                     </div>
                     <!-- Submit Button -->
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
<?php include 'includes/footer.php'; ?>