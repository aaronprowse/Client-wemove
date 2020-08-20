<?php
global $page_title, $page_link;
$page_title = "Contact";
$page_link = basename(__FILE__);
include_once('includes/header.php');
?>
<main>
    <div class="sr-only"><h1>Contact</h1></div>

    <section class="banner-container">
        <div id="homeSlider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#homeSlider" data-slide-to="0" class="active"></li>
                <li data-target="#homeSlider" data-slide-to="1"></li>
                <li data-target="#homeSlider" data-slide-to="2"></li>
                <li data-target="#homeSlider" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/slider/we-move-and-clean-slider-1.jpg" class="img-responsive respond">
                    <div class="carousel-caption">
                        <h3>Removals</h3>
                        <p>Home removals across the South</p>
                        <a href="services-removals.php">Request a Quote</a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slider/we-move-and-clean-slider-2.jpg" class="img-responsive respond">
                    <div class="carousel-caption">
                        <h3>Removals</h3>
                        <p>Office removals across the South</p>
                        <a href="services-removals.php#office">Request a Quote</a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slider/we-move-and-clean-slider-3.jpg" class="img-responsive respond">
                    <div class="carousel-caption">
                        <h3>Cleaning</h3>
                        <p>Residential & Commercial cleaning service</p>
                        <a href="services-cleaning.php">Request a Quote</a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slider/we-move-and-clean-slider-4.jpg" class="img-responsive respond">
                    <div class="carousel-caption">
                        <h3>Carpet Cleaning</h3>
                        <p>Professional deep carpet cleaning</p>
                        <a href="services-carpet-cleaning.php">Request a Quote</a>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#homeSlider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right carousel-control" href="#homeSlider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </section>

    <section class="content-container content-contact">
        <div class="row">
            <div class="col-md-3">
                <span class="contact-tab-orange"></span>
                <h2 class="contact-title">Office Address</h2>
                <hr class="hr-orange-blue"/>
                <ul class="list-unstyled">
                    <li class="title-LI">WeMoveandClean</li>
                    <li>24 Birdcombe Road</li>
                    <li>Swindon, SN5 7BL</li>
                </ul>
            </div>

            <div class="col-md-3">
                <span class="contact-tab-orange"></span>
                <h2 class="contact-title">Phone</h2>
                <hr class="hr-orange-blue"/>
                <ul class="list-unstyled">
                    <li class="title-LI">24/7 Support Line</li>
                    <li>07587 282771</li>
                    <li>01795 335429</li>
                </ul>
            </div>

            <div class="col-md-3 word-wrap">
                <span class="contact-tab-blue"></span>
                <h2 class="contact-title">Email Address</h2>
                <hr class="hr-orange-blue"/>
                <ul class="list-unstyled">
                    <li class="title-LI">Email</li>
                    <li><a href="mailto:info@wemoveandclean.co.uk">info@wemoveandclean.co.uk</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <span class="contact-tab-blue"></span>
                <h2 class="contact-title">Working Hours</h2>
                <hr class="hr-orange-blue"/>
                <ul class="list-unstyled">
                    <li class="title-LI">Monday to Saturday</li>
                    <li>9:00 <span class="text-uppercase">am</span> to 7:00 <span class="text-uppercase">pm</span></li>
                    <br/>
                    <li class="title-LI">Sunday</li>
                    <li>We are closed!</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container-full container-map">

        <div id="map-canvas"></div>

    </section>


    <section class="container-full">
        <div class="content-container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Send Us A Message</h2>
                    <hr class="hr-orange-blue-big"/>
                    If you’d like to contact us, please fill in the form below and we will get back to you within 24 hours
                </div>
            </div>
            <form class="contact-form" id="contact_form">
                <div class="row">

                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control required contact-form-control" id="name" name="name" placeholder="NAME">
                            <span class="error">Name is required</span>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control required contact-form-control" id="email" name="email" placeholder="EMAIL">
                            <span class="error">Email is required</span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control required contact-form-control" id="subject" name="subject" placeholder="SUBJECT">
                            <span class="error">Subject is required</span>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <textarea class="form-control required contact-form-control" rows="7" name="message" placeholder="MESSAGE"></textarea>
                        <span class="error">Message is required</span>
                    </div>
                </div>
                <div class="row">
                    <div class="pull-right col-md-4">
                        <div class="contact-form-btn">
                            <span id="mail_success" class="success">Message Sent!</span>
                            <span id="mail_fail" class="error">Message failed to send. Contact the system administrator.</span>
                            <span id="validation" class="error">Validation error. Please check your entries.</span>
                            <button class="btn text-uppercase" id="send_message">Submit <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                        </div>
                    </div>

                </div>
            </form>
            <script type="text/javascript">
                (function ($) {
                    $(document).ready(function () {
                        $('#send_message').click(function (e) {

                            e.preventDefault();

                            $('#mail_success').fadeOut(500);
                            $('#mail_fail').fadeOut(500);
                            $('#validation').fadeOut(500);

                            var error = false;
                            var form = $("#contact_form");

                            //Error messages
                            form.find("input.required, textarea.required, select.required").each(function() {
                                if ($(this).val().length == 0) {
                                    error = true;
                                    $(this).parent().addClass("has-error");
                                    $(this).siblings(".error").fadeIn(500);
                                } else {
                                    $(this).parent().removeClass("has-error");
                                    $(this).siblings(".error").fadeOut(500);
                                }
                            });

                            if (error == false) {
                                $('#send_message').attr({'disabled': 'true', 'value': 'Sending...'});

                                $.post("includes/email/send_email.php", form.serialize(), function (result) {
                                    //Debug - coincides with the debug in the email php file
                                    //console.log(result);

                                    if (result == 'sent') {
                                        $('#mail_success').fadeIn(500);
                                    } else {
                                        $('#mail_fail').fadeIn(500);
                                        $('#send_message').removeAttr('disabled').attr('value', 'Submit');
                                    }
                                });
                            } else {
                                $("#validation").fadeIn(500);
                            }
                        });
                    });
                }(jQuery));
            </script>
        </div>
    </section>
</main>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="js/map.js"></script>
<?php
include_once('includes/footer.php');
?>

