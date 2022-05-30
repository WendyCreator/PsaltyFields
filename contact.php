<?php include_once 'head.php' ?>
<?php include_once 'header.php' ?>
    <!--=========header end============-->

    <!-- hero-about-area start -->
    <div class="hero-about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-about-text text-center">
                        <h2>Contact us</h2>
                        <h4><span>Home / </span><a href="#">Contact us</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero-about-area End -->

    <!--contuct-area-start-->
    <div class="contuct-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-form-area">
                        <form name="frmContact" id="frmContact" action="https://medics.themechampion.com/html/pharmacy/contact_process.php" method="post">
						<input type="hidden" name="frmCont" name="frmCont" value="frmCont" />
                            <h3>Get In touch for any kind of Information</h3>
                            <input type="text" placeholder="Name" name="fname" id="fname" value="">
                            <input type="email" placeholder="Email" name="femail" id="femail" value="">
                            <input type="text" placeholder="Website" name="fwebsite" id="fwebsite" value="">
                            <textarea cols="30" rows="10" placeholder="Comment" name="fcomment" id="fcomment"></textarea>
                            <button class="team-1" type="submit">Submit Now!</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contect-location">
                        <div class="contact-fl">
                            <address>
                                <div class="single-contact">
                                    <i class="icofont-map-pins"></i>
                                    <p>11 Georgian Rd, <br>
                                        58/A, New York City</p>
                                </div>
                                <div class="single-contact">
                                    <i class="icofont-envelope"></i>
                                    <p><a href="mailto:info@info.com">info@info.com</a><br>
                                        <a href="mailto:info@medics.com">info@medics.com</a></p>
                                </div>
                                <div class="single-contact">
                                    <i class="icofont-mobile-phone"></i>
                                    <p><a href="tel:0123456789">01213-456-7890</a><br>
                                        <a href="0123456789.html">01213-456-7899</a></p>
                                </div>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contuct-area-end-->

    <!--    contact-map-area-start-->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.7399040776495!2d-6.261147484122739!3d53.34791197997939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!3m2!1sen!2sus!4v1462581622087"
        style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="google-map__contact"></iframe>
    <!--    contact-map-area-end-->

    <!-- footer-area-start-->
    <?php include_once 'footer.php' ?>