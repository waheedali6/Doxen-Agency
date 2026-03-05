<div class="form-popup-overlay">
<div class="popup popup-layout popup-default" style="display: block;">
    <a class="popup-close" href="javascript:;"><i class="fa fa-times" aria-hidden="true"></i></a>
    <div class="popup-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="popup-head">
                    <h5><strong>Wait!</strong>Looking for an <strong>Amazing Offer?</strong></h5>
                    <h4>Get Your <strong>Design Now</strong></h4>
                </div>
            </div>


            <div class="col-lg-7">
                <form class="validate-popupform" method="post" action="">
                    <div class="row">
                      <div class="col-sm-12 col-md-6">
                        <div class="form-group form-icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" name="name" class="popup-field" placeholder="Enter Your Name" required>
                        </div>
                      </div>

                      <div class="col-sm-12 col-md-6">
                        <div class="form-group form-icon">
                            <i class="fa fa-envelope fs-18" aria-hidden="true"></i>
                            <input type="email" name="email" class="popup-field" placeholder="Email Address" required>
                        </div>
                      </div>

                      <div class="col-sm-12 col-md-6">
                        <div class="form-group form-icon">
                            <i class="fa fa-phone fs-18" aria-hidden="true"></i>
                            <input type="number" name="phone" class="popup-field" placeholder="Phone Number" required>
                        </div>
                      </div>

                      <div class="col-sm-12 col-md-6">
                        <div class="form-group form-icon">
                            <i class="fa-solid fa-screwdriver-wrench fs-18" aria-hidden="true"></i>
                            
                            <select class="select popup-field" name="subject" required>
                                <option class="popup-option" value="Item-1">Website Development</option>
                                <option class="popup-option" value="Item-2">Logo Design</option>
                                <option class="popup-option" value="Item-3">Ecommerce Solutions</option>
                                <option class="popup-option" value="Item-3">Illustration</option>
                                <option class="popup-option" value="Item-3">Marketing Collateral</option>
                                <option class="popup-option" value="Item-3">Mobile Apps</option>
                                <option class="popup-option" value="Item-3">SEO Services</option>
                                <option class="popup-option" value="Item-3">Digital Marketing</option>
                                <option class="popup-option" value="Item-3">Creative Copywriting</option>
                            </select>
                            
                        </div>
                      </div>

                      <div class="col-sm-12 col-md-12">
                        <div class="form-group form-icon text-area-box">
                            <i class="fa-solid fa-message fs-18" aria-hidden="true"></i>
                            <textarea name="message" class="popup-field text-area py-2 rounded-4" rows="5" placeholder="Message"></textarea>
                        </div>
                      </div>

                    </div>

                    <div class="form-group mb-0">
                        <button type="submit" name="submit" class="btn-style-2 theme-btn"
                            >Get in Touch</button>
                    </div>
                </form>



            </div>
            <div class="col-lg-5 mob-display-none get_in_touch">
                <div class="element seprator"></div>
                <div class="contact-info">
                    <h6>Email</h6>
                    <a href="mailto:example@domain.com">example@domain.com</a>
                </div>
                <div class="contact-info">
                    <h6>Phone</h6>
                    <a href="tel:+880123456789">+880123456789</a>
                </div>
                <div class="contact-info">
                    <h6>Address</h6>
                    <a href="#">Kazipur 6710, Dhaka, BD.</a>
                </div>
            </div>
            <div class="col-lg-4 mob-display-none order_package_details d-none">
                <div class="element seprator"></div>
                <div class="contact-info ">
                    <h6>Package</h6>

                </div>
                <div class="contact-info">
                    <h5 class="pkg_title text-white"></h5>
                    <p class="pkg_price text-white"></p>
                </div>
            </div>
        </div>
    </div>
    <img class="lazy-loaded-image img-fluid element element-24 show"
        src="assets/img/element-11.png"
        width="60" height="59">
</div>
</div>



<script>
  $('.dropdown-el').click(function(e) {
  e.preventDefault();
  e.stopPropagation();
  $(this).toggleClass('expanded');
  $('#'+$(e.target).attr('for')).prop('checked',true);
});
$(document).click(function() {
  $('.dropdown-el').removeClass('expanded');
});
</script>