<?php
global $page_title, $page_link;
$page_title = "Packing Services";
$page_link = basename(__FILE__);
include_once('includes/header.php');
?>
    <main>
        <div class="sr-only"><h1>Services</h1></div>

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
            <div class="tab-content">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#house" aria-controls="house" role="tab"
                                                                      data-toggle="tab">House</a></li>
                            <li role="presentation"><a href="#office" aria-controls="office" role="tab"
                                                       data-toggle="tab">Office</a></li>
                        </ul>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade in active" id="house">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QA1bHRWGA8Q?rel=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-6 one-line-padding">
                            <p>There are 4 main types of packing:</p>
                            <strong>PACKING &amp; UNPACKING</strong>
                            <p>Ideal for you if:</p>
                            <ul>
                                <li>You&rsquo;d like to save time and effort by having your belongings packed and unpacked by us</li>
                                <li>You want to have the peace of mind that all your items will be moved safely and are covered by Insurance</li>
                            </ul>
                            <strong>PACKING &amp; UNPACKING (fragile items only)</strong>
                            <p>Ideal for you if:</p>
                            <ul>
                                <li>You don&rsquo;t mind spending time on packing but you&rsquo;d like to be confident that any breakable items (china, glass etc.) will survive the journey to your new property</li>
                                <li>You want to lower your expenses by having only fragile items packed and unpacked.</li>
                            </ul>
                            <strong>PACKING</strong>
                            <p>Ideal for you if:</p>
                            <ul>
                                <li>You&rsquo;d like to save time by having your belongings safely packed for you but feel comfortable doing the unpacking yourself</li>
                                <li>You want to have the peace of mind that your items will be moved safely and are covered by Insurance</li>
                            </ul>
                            <strong>SELF - PACKING</strong>
                            <p>Ideal for you if:</p>
                            <ul>
                                <li>You&rsquo;ve got time to do the packing and unpacking yourself</li>
                            </ul>
                            <p>Most of our customers add:</p>
                            <ul>
                                <li>&lsquo;<a href="services-removals.php">House Removal</a>&rsquo;, &lsquo;<a href="services-van-with-driver-hire.php">Van &amp; Driver Hire</a>&rsquo;, &lsquo;<a href="services-furniture-assembly.php">Furniture Assembly</a>&rsquo; and &lsquo;<a href="services-storage.php">Storage</a>&rsquo;</li>
                            </ul>

                            <div class="row">
<!--                                <div class="col-xs-6">-->
<!---->
<!--                                </div>-->

                                <div class="col-xs-6">
                                    <div class="contact-btn">
                                        <a href="#why-us-house-collapse" class="btn" data-toggle="collapse" data-untoggle="#why-us-office-collapse">Why Us?</a>
                                    </div>
                                </div>

                                <div class="col-xs-6">
                                    <div class="contact-btn">
                                        <a href="FAQ.php" class="btn">FAQ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="office">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/we-move-and-clean-service-packing-service-2.jpg"
                                 class="img-responsive respond"
                                 alt="We Move & Clean - Packing Service">
                        </div>
                        <div class="col-md-6 one-line-padding">
                            <p>There are 3 main types of packing services available:</p>
                            <p><strong>PACKING &amp; UNPACKING</strong></p>
                            <p>Ideal for you if:</p>
                            <ul>
                                <li>You&rsquo;d like to save time and effort by having your belongings packed and unpacked by us</li>
                                <li>You want to have the peace of mind that all of your items will be moved safely and are covered by Insurance</li>
                            </ul>
                            <p><strong>PACKING</strong></p>
                            <p>Ideal for you if:</p>
                            <ul>
                                <li>You&rsquo;d like to save time by having your belongings safely packed for you but feel comfortable doing the unpacking yourself</li>
                                <li>You want to have a peace of mind that your items will be moved safely and are covered by Insurance</li>
                            </ul>
                            <p><strong>SELF - PACKING</strong></p>
                            <p>Ideal for you if:</p>
                            <ul>
                                <li>You&rsquo;ve got time to do the packing and unpacking yourself</li>
                            </ul>
                            <p>Most of our customers add:</p>
                            <ul>
                                <li>&lsquo;<a href="services-removals.php#office">Office Removal</a>&rsquo;, &lsquo;<a href="services-van-with-driver-hire.php">Van &amp; Driver Hire</a>&rsquo;, &lsquo;<a href="services-furniture-assembly.php">Furniture Assembly</a>&rsquo; and &lsquo;<a href="services-storage.php">Storage</a>&rsquo;</li>
                            </ul>

                            <div class="row">
<!--                                <div class="col-xs-6">-->
<!---->
<!--                                </div>-->

                                <div class="col-xs-6">
                                    <div class="contact-btn">
                                        <a href="#why-us-office-collapse" class="btn" data-toggle="collapse" data-untoggle="why-us-house-collapse">Why Us?</a>
                                    </div>
                                </div>

                                <div class="col-xs-6">
                                    <div class="contact-btn">
                                        <a href="FAQ.php" class="btn">FAQ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-container collapse" id="why-us-house-collapse">
            <div class="row">
                <div class="col-md-8">
                    <p>
                        <u>Why should you choose ‘We Move and Clean’?</u>
                    </p>
                    <p>
                        <strong>IT'S ALL ABOUT YOU </strong>
                        Our aim is your satisfaction and we won’t settle for anything else. You’ll always receive a personal and tailored service
                    </p>
                    <p>
                        <strong>YOU ARE IN SAFE HANDS </strong>
                        We’ve got more than a decade of combined experience in the transport and logistics industry. What’s more, you’re always covered by ‘Public Liability
                        Insurance (£1,000,000)’ and ‘Goods in Transit Insurance (£10,000)’ if you use us to do the packing for you
                    </p>
                    <p>
                        <strong>YOU CAN TRUST US </strong>
                        We’ve been checked and are regularly monitored by ‘<a href="https://www.buywithconfidence.gov.uk/home/?usertype=consumer">Trading Standards</a>’ and ‘<a href="http://www.checkatrade.com/WeMoveAndClean/">Checkatrade</a>’.
                    </p>
                    <p>
                        <strong>YOU WILL HIRE PROFESSIONALS </strong>
                        We’ll always be on time and the equipment we provide is of the best quality and durability which means your items will always be safe and secure in
                        transit.
                    </p>
                    <p>
                        <strong>YOU KNOW WHAT'S GOING ON</strong>
                        <strong> </strong>
                        You'll know in advance what the plan of action is and you'll always be kept updated.
                    </p>
                    <p>
                        <strong>YOU WILL SAVE TIME AND MONEY </strong>
                        If you wish to add ‘<a href="services-removals.php">House Removal</a>’, ‘<a href="services-van-with-driver-hire.php">Van &amp; Driver Hire</a>’, ‘<a href="services-furniture-assembly.php"Furniture Assembly</a>’ or ‘<a href="services-storage.php">Storage</a>’ to your ‘<a href="services-packing-service.php">Packing Service</a>’ you’ll save time by contacting
                        only one company. You’ll save money due to our huge discounts when taking two or more services.
                    </p>
                    <p>
                        <strong>YOU CHOOSE, YOU DECIDE </strong>
                        You’re always in control so it’s up to you what type of ‘Packing Service’ is most suitable for you.
                    </p>
                    <p align="center">
                        We accept last minute bookings and if necessary work on Sundays and bank holidays
                    </p>
                </div>
                <div class="col-md-4">
                    <a href="http://www.checkatrade.com/WeMoveAndClean/Reviews.aspx" target="_blank">
                        <img src="http://www.checkatrade.com/Reputation/ApiChart/WeMoveAndClean.png" alt="Checkatrade information for We Move and Clean "/>
                    </a>
                </div>
            </div>
        </section>

        <section class="content-container collapse" id="why-us-office-collapse">
            <div class="row">
                <div class="col-md-8">
                    <p>
                        <u>Why should you choose ‘We Move and Clean’?</u>
                    </p>
                    <p>
                        <strong>IT'S ALL ABOUT YOU </strong>
                        Our aim is your satisfaction and we won’t settle for anything else. You’ll always receive a personal and tailored service
                    </p>
                    <p>
                        <strong>YOU ARE IN SAFE HANDS </strong>
                        We’ve got more than a decade of combined experience in the transport and logistics industry. What’s more, you’re always covered by ‘Public Liability
                        Insurance (£1,000,000)’ and ‘Goods in Transit Insurance (£10,000)’ if you have the packing done by us
                    </p>
                    <p>
                        <strong>YOU CAN TRUST US </strong>
                        We’ve been checked and are regularly monitored by ‘<a href="https://www.buywithconfidence.gov.uk/home/?usertype=consumer">Trading Standards</a>’ and ‘<a href="http://www.checkatrade.com/WeMoveAndClean/">Checkatrade</a>’.
                    </p>
                    <p>
                        <strong>YOU WILL HIRE PROFESSIONALS </strong>
                        We’ll always be on time and the equipment we provide is of the best quality and durability which means your items will always be safe and secure in
                        transit.
                    </p>
                    <p>
                        <strong>YOU KNOW WHAT'S GOING ON</strong>
                        <strong> </strong>
                        You'll know in advance what the plan of action is and you'll always be kept updated.
                    </p>
                    <p>
                        <strong>YOU WILL SAVE TIME AND MONEY </strong>
                        If you wish to add ‘<a href="services-removals.php#office">Office Removal</a>’, ‘<a href="services-van-with-driver-hire.php">Van &amp; Driver Hire</a>’, ‘<a href="services-furniture-assembly.php">Furniture Assembly</a>’ or ‘<a href="services-storage.php">Storage</a>’ to your ‘<a href="services-packing-service.php">Packing Service</a>’ you’ll save time by contacting
                        only one company. You’ll save money due to our huge discounts when taking two or more services.
                    </p>
                    <p>
                        <strong>YOU CHOOSE, YOU DECIDE </strong>
                        You’re always in control so it’s up to you what type of ‘Packing Service’ is most suitable for you.
                    </p>
                    <p align="center">
                        We accept last minute bookings and if necessary work on Sundays and bank holidays
                    </p>
                </div>
                <div class="col-md-4">
                    <a href="http://www.checkatrade.com/WeMoveAndClean/Reviews.aspx" target="_blank">
                        <img src="http://www.checkatrade.com/Reputation/ApiChart/WeMoveAndClean.png" alt="Checkatrade information for We Move and Clean "/>
                    </a>
                </div>
            </div>
        </section>

        <section class="content-container">
            <div class="row">
                <div class="col-md-6">
                    <a href="http://www.checkatrade.com/WeMoveAndClean/"><img src="images/Check-A-Trade-Logo-webgif.gif"
                                                                              class="img-responsive image-center"
                                                                              alt="We Move & Clean - Check A Trade"></a>
                </div>
                <div class="col-md-6">
                    <a href="https://www.buywithconfidence.gov.uk/home/?usertype=consumer"><img
                            src="images/trading-standards-approved-buy-with-confidence.png" class="img-responsive image-center"
                            alt="We Move & Clean - Trading Standards Approved"></a>
                </div>
            </div>
        </section>

        <section class="content-container">
            <h2>What Our Clients Say</h2>
            <div id="testimonials" class="carousel carousel--testimonials slide" data-ride="carousel">
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
                                Lucas provided us with a great service - at very short notice. Great guy, very positive and genuine and will do his best to help you out. I would certainly use him again!
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
                                Lucas is excellent. He is a very dedicated and hardworking individual who really goes out of his way to make sure that everything is completed well. He will tailor his service for your needs and takes excellent care to make sure that everything is done properly. I can't recommend him highly enough. Thank you. Rahul.
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
                                Lucas was really helpful when moving our business from Oxford to Banbury. He managed to fit an amazing amount of stuff in the van and was polite and professional throughout. We will definitely be using him for all of our moving in the future and can't recommend him highly enough.
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
                                Excellent last minute delivery from Swindon to Bolton. Punctual, communicative, professional and a fabulous all round guy. I'm thinking of hiring him full time!
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
                                Professional, reliable and kept to promises. Would highly recommend. Prices were very competitive whilst providing first-class service. Thank you Lucas ! One very satisfied customer.
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
                                Lucas was amazing he was very efficient on time and so very helpful. They moved my furniture from the storage unit to my flat without any damage and made sure everything was in the right place. With many thanks for making this move so easy.
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
                                I'd like to say ‘thank you Lucas’ for your excellent work. I and my family appreciated it so much. The service was perfect and you are polite, helpful and punctual.
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
                                I had some garden and house waste that needed to be cleared. Lucas provided an excellent service, he arrived when he said he would and worked through heavy rain to remove all the waste, he even swept up afterwards. Lucas was also good value for money and I would definitely use him again.
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