<?php
global $page_title, $page_link;
$page_title = "Home";
$page_link = basename(__FILE__);
include_once('includes/header.php');
?>
    <main>
        <div class="sr-only"><h1>Home</h1></div>

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

        <section class="content-container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="underline">Our Mission</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center"><em>“To provide a first-class and affordable service to our customers”</em>
                    </p>
                    <br/>
                </div>
                <div class="col-md-6">
                    <p>
                        Dear Customer,
                    </p>
                    <p>
                        Thank you for visiting our website and considering our services. We’re glad you’re here and
                        you’ve come to the right place if you’re looking for a professional, reliable and friendly
                        service. When you choose a company you may struggle to decide whether to go with quality or
                        price. What if you found a company that combines both? We offer a broad range of <a
                            href="services.php">services</a> which
                        can be separately but the true potential of our company is revealed when two or more <a
                            href="services.php">services</a>
                        are booked at the same time.
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="right">
                        We specialise in providing solutions to complex and demanding scenarios. For example, you’re
                        <a href="services-removals.php">moving out</a> and require <a href="services-cleaning.php#eot">end
                            of tenancy cleaning</a>, <a href="services-carpet-cleaning.php">carpet cleaning</a>, <a
                            href="services-packing-service.php">packing service</a>, <a
                            href="services-furniture-assembly.php">furniture
                            assembly</a> or <a href="services-clearance.php">clearance</a> at the same time. No problem! What’s more, our work doesn’t end here
                            since
                            we can take care of your new property as well by offering <a href="services-cleaning.php#pretenancy">pre-tenancy cleaning</a> or <a href="services-packing-service.php">unpacking
                            service</a>.
                    </p>
                    <p class="right">
                        We’d love to <a href="contact.php">hear from you</a> if you’d like to receive a first-class and affordable service.
                    </p>
                    <p class="pull-right">Lucas and the team</p>
                </div>
            </div>
        </section>

        <section class="container-full container-full--alt">
            <div class="content-container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>What We Do</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="homepage-box-main homepage-box text-center">
                            <h3>Old Property?</h3>

                            <i class="fa fa-home home-icon home-icon-old" aria-hidden="true"></i>

                            <div class="row">
                                <ul class="list-unstyled">
                                    <div class="col-md-6">
                                        <li>Removals</li>
                                        <li>Packing Service</li>
                                        <li>Van & Driver Hire</li>
                                        <li>Furniture Assembly</li>
                                        <li>Crates Hire</li>
                                    </div>
                                    <div class="col-md-6">
                                        <li>Storage</li>
                                        <li>Carpet Cleaning</li>
                                        <li>End of Tenancy Cleaning</li>
                                        <li>Clearance</li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="homepage-box-main homepage-box text-center">
                            <h3>New Property?</h3>

                            <i class="fa fa-home home-icon home-icon-new" aria-hidden="true"></i>
                            <div class="row">
                                <ul class="list-unstyled">
                                    <div class="col-md-6">
                                        <li>Furniture Assembly</li>
                                        <li>Unpacking Service</li>
                                        <li>Carpet Cleaning</li>
                                        <li>Pre-Tenancy Cleaning</li>
                                        <li>One-off / Spring Cleaning</li>
                                    </div>
                                    <div class="col-md-6">
                                        <li>Domestic Cleaning</li>
                                        <li>Appliances Cleaning</li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="homepage-box text-center">
                            <h3>Bespoke</h3>

                            <h3>Get in touch, explain your requirements and leave the rest to us.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-container">
            <!--            <div class="row">-->
            <!--                <div class="col-md-12">-->
            <!--                    <h2 class="underline">Why Us</h2>-->
            <!--                </div>-->
            <!--            </div>-->
            <!---->
            <!--            <div class="row row--alt">-->
            <!--                <div class="col-md-12">-->
            <!--                    <br>-->
            <!--                    <br>-->
            <!--                    <br>-->
            <!--                    <br>-->
            <!--                    <br>-->
            <!--                    <br>-->
            <!--                    <br>-->
            <!--                    <br>-->
            <!--                    <br>-->
            <!--                    <br>-->
            <!--                    <br>-->
            <!--                    <br>-->
            <!--                </div>-->
            <!--            </div>-->

            <div class="row">
                <div class="col-md-12">
                    <h2 class="underline">Areas We Cover</h2>
                    <div class="container-map">
                        <div id="map-canvas"></div>
                    </div>
                </div>
            </div>


        </section>

        <section class="content-container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="underline">Latest News</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <article>
                        <h3>New Website</h3>
                        <img src="images/we-move-and-clean-blog-image.png" class="img-responsive">
                        <p>
                            We have a new website.
                        </p>
                        <div class="link">
                            <a href="single.php">Read More</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="js/map.js"></script>
<?php
include_once('includes/footer.php');
?>