<?php
global $page_title, $page_link;
$page_title = "FAQ";
$page_link = basename(__FILE__);
include_once('includes/header.php');
?>
    <main>
        <div class="sr-only"><h1>FAQ</h1></div>

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
                <div class="col-sm-12">
                    <h2 class="underline">FAQ</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porta nibh sit amet dictum rutrum.
                        Suspendisse iaculis eu erat eget tristique. Nam gravida vel tortor ut iaculis. Phasellus tempor
                        posuere erat, euismod pretium augue semper eget. Nam dignissim tellus rhoncus leo pulvinar
                        mattis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam erat volutpat. Aliquam
                        erat volutpat. Etiam porta ac tortor sed sodales. Proin tincidunt elit id sapien faucibus
                        malesuada. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                        egestas.
                    </p>
                </div>
            </div>
        </section>

        <section class="content-container">
            <h2 class="underline">What People Say</h2>
            <div id="testimonials" class="carousel carousel--testimonials carousel--about slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonials" data-slide-to="1"></li>
                    <li data-target="#testimonials" data-slide-to="2"></li>
                    <li data-target="#testimonials" data-slide-to="3"></li>
                    <li data-target="#testimonials" data-slide-to="4"></li>
                    <li data-target="#testimonials" data-slide-to="5"></li>
                    <li data-target="#testimonials" data-slide-to="6"></li>
                    <li data-target="#testimonials" data-slide-to="7"></li>
                    <li data-target="#testimonials" data-slide-to="8"></li>
                    <li data-target="#testimonials" data-slide-to="9"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="images/testimonials/we-move-and-clean-testimonial-kelly-swindon.jpg"
                                     alt="We Move & Clean - Kelly T. , Swindon - Testimonial" class="img-responsive"/>
                            </div>

                            <div class="col-sm-10">
                                Thank you Lucas for a smooth and stress free move yesterday. We needed to move the
                                entire contents of our 3 bedroom home into storage. All of our furniture was handled
                                with great care and the speed with which you both worked was amazing. We cannot thank
                                you enough for the dedicated and professional service. I would highly recommend you call
                                Lucas for removals, top guy!<br/>
                                <span class="pull-right"><strong>Kelly T. , Swindon</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="images/testimonials/we-move-and-clean-testimonial-david-swindon.jpg"
                                     alt="We Move & Clean - David K. , Swindon - Testimonial" class="img-responsive"/>
                            </div>

                            <div class="col-sm-10">
                                Lucas provided us with a great service - at very short notice. Great guy, very positive
                                and genuine and will do his best to help you out. I would certainly use him again!
                                <br/>
                                <span class="pull-right"><strong>David K. , Swindon</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="images/testimonials/we-move-and-clean-testimonial-Rahul-oxford.jpg"
                                     alt="We Move & Clean - Rahul R. , Oxford - Testimonial" class="img-responsive"/>
                            </div>

                            <div class="col-sm-10">
                                Lucas is excellent. He is a very dedicated and hardworking individual who really goes
                                out of his way to make sure that everything is completed well. He will tailor his
                                service for your needs and takes excellent care to make sure that everything is done
                                properly. I can't recommend him highly enough. Thank you. Rahul.
                                <br/>
                                <span class="pull-right"><strong>Rahul R. , Oxford</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="images/testimonials/we-move-and-clean-testimonial-scott-oxford.jpg"
                                     alt="We Move & Clean - Scott M. , Oxford - Testimonial" class="img-responsive"/>
                            </div>

                            <div class="col-sm-10">
                                Lucas was really helpful when moving our business from Oxford to Banbury. He managed to
                                fit an amazing amount of stuff in the van and was polite and professional throughout. We
                                will definitely be using him for all of our moving in the future and can't recommend him
                                highly enough.
                                <br/>
                                <span class="pull-right"><strong>Scott M. , Oxford</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="images/testimonials/we-move-and-clean-testimonial-cath-swindon.jpg"
                                     alt="We Move & Clean - Cath L. , Swindon - Testimonial" class="img-responsive"/>
                            </div>

                            <div class="col-sm-10">
                                Excellent last minute delivery from Swindon to Bolton. Punctual, communicative,
                                professional and a fabulous all round guy. I'm thinking of hiring him full time!
                                <br/>
                                <span class="pull-right"><strong>Cath L. , Swindon</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="images/testimonials/we-move-and-clean-testimonial-maya-oxford.jpg"
                                     alt="We Move & Clean - Maya M. , Oxford - Testimonial" class="img-responsive"/>
                            </div>

                            <div class="col-sm-10">
                                Professional, reliable and kept to promises. Would highly recommend. Prices were very
                                competitive whilst providing first-class service. Thank you Lucas ! One very satisfied
                                customer.
                                <br/>
                                <span class="pull-right"><strong>Maya M. , Oxford</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="images/testimonials/we-move-and-clean-testimonial-andrew-oxford.jpg"
                                     alt="We Move & Clean - Andrew K. , Oxford - Testimonial" class="img-responsive"/>
                            </div>

                            <div class="col-sm-10">
                                Lucas was amazing he was very efficient on time and so very helpful. They moved my
                                furniture from the storage unit to my flat without any damage and made sure everything
                                was in the right place. With many thanks for making this move so easy.
                                <br/>
                                <span class="pull-right"><strong>Andrew K. , Oxford</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="images/testimonials/we-move-and-clean-testimonial-hareesh-bristol.jpg"
                                     alt="We Move & Clean - Hareesh R. , Bristol - Testimonial" class="img-responsive"/>
                            </div>

                            <div class="col-sm-10">
                                Excellent service with 100 % commitment. Will use Lucas services whenever needed.
                                <br/>
                                <span class="pull-right"><strong>Hareesh R. , Bristol</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="images/testimonials/we-move-and-clean-testimonial-andrea-swindon.jpg"
                                     alt="We Move & Clean - Andrea D. , Swindon - Testimonial" class="img-responsive"/>
                            </div>

                            <div class="col-sm-10">
                                I'd like to say ‘thank you Lucas’ for your excellent work. I and my family appreciated
                                it so much. The service was perfect and you are polite, helpful and punctual.
                                Whoever wants a good quality service .....Lucas is the right guy for this !!!
                                <br/>
                                <span class="pull-right"><strong>Andrea D. , Swindon</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="images/testimonials/we-move-and-clean-testimonial-jamie-swindon.jpg"
                                     alt="We Move & Clean - Jamie O. , Swindon - Testimonial" class="img-responsive"/>
                            </div>

                            <div class="col-sm-10">
                                I had some garden and house waste that needed to be cleared. Lucas provided an excellent
                                service, he arrived when he said he would and worked through heavy rain to remove all
                                the waste, he even swept up afterwards. Lucas was also good value for money and I would
                                definitely use him again.
                                <br/>
                                <span class="pull-right"><strong>Jamie O. , Swindon</strong></span>
                            </div>
                        </div>
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
<?php
include_once('includes/footer.php');
?>