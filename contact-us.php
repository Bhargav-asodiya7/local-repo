<?php include('header.php') ?>
<div class="content-wrapper">

  <!-- Breadcrumb Start -->
  <div class="breadcrumb-wrap bg-f br-1">
    <div class="container">
      <div class="breadcrumb-title">
        <h2>Contact Us</h2>
        <ul class="breadcrumb-menu list-style">
          <li><a href="./">Home </a></li>
          <li>Contact Us</li>
        </ul>
      </div>
    </div>
  </div>
  <section class="contact-us-wrap ptb-100">
    <div class="container">
      <div class="section-title style1 text-center mb-40">
        <span>Contact Us<img src="assets/img/section-shape.png" alt="Image"></span>
        <h2>Get In Touch With Us</h2>
      </div>
      <div class="row gx-5 justify-content-center">
        <div class="col-lg-8">
          <div class="contact-form">
            <form class="form-wrap" id="contactForm">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <input type="text" name="name" placeholder="Name*" id="name" required data-error="Please enter your name">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <input type="email" name="email" id="email" required placeholder="Email*" data-error="Please enter your email">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <input type="email" name="phone" id="phone" required placeholder="Phone*" data-error="Please enter your phone">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <input type="text" name="msg_subject" placeholder="Subject*" id="msg_subject" required data-error="Please enter your subject">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group v1">
                    <textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required data-error="Please enter your message"></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn style1 w-100 d-block">Send Message</button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-item-wrap">
            <div class="contact-item">
              <h3>Our Address</h3>
              <p>Silver Oak University, Ahmedabad, Gujarat</p>
            </div>
            <div class="contact-item">
              <h3>Email Address</h3>
              <a href="#"><span class="__cf_email__">info@lorem.com</span></a>
            </div>
            <div class="contact-item">
              <h3>24/7 Support</h3>
              <a href="tel:+919662442160">+91 9662442160</a>
            </div>
            <div class="contact-item">
              <h3>Follow us</h3>
              <ul class="social-profile style2 list-style">
                <li>
                  <a href="#">
                    <i class="ri-facebook-fill"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="ri-twitter-fill"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="ri-instagram-line"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="ri-linkedin-fill"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php include('footer.php') ?>