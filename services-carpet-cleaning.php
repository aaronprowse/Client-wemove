<?php
global $page_title, $page_link;
$page_title = "Carpet Cleaning Services";
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
                            <li role="presentation" class="active"><a href="#residential" aria-controls="residential"
                                                                      role="tab"
                                                                      data-toggle="tab">Residential</a></li>
                            <li role="presentation"><a href="#commercial" aria-controls="commercial" role="tab"
                                                       data-toggle="tab">Commercial</a></li>
                            <li role="presentation"><a href="#upholstery" aria-controls="upholstery" role="tab"
                                                       data-toggle="tab">Upholstery Cleaning</a></li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade in active" id="residential">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/we-move-and-clean-service-residential-carpet-cleaning.jpg"
                                 class="img-responsive respond"
                                 alt="We Move & Clean - Residential Carpet Cleaning">
                        </div>
                        <div class="col-md-6 one-line-padding">
                            <p>This service is ideal for people who require their carpet brought back to its pristine
                                condition:</p>
                            <ul>
                                <li>when moving into a new property</li>
                                <li>when moving out or selling their current property</li>
                                <li>when they already occupy their house / office / commercial space</li>
                            </ul>
                            <p>Most of our customers add:</p>
                            <p>&lsquo;<a href="services-cleaning.php">Cleaning</a>&rsquo; and &lsquo;<a
                                    href="services-clearance.php">Clearance</a>&rsquo;</p>

                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="contact-btn">
                                        <a href="#service-collapse" class="btn" data-toggle="collapse" data-untoggle="#service-commercial-collapse">Get A Quote</a>
                                    </div>

                                </div>

                                <div class="col-xs-4">
                                    <div class="contact-btn">
                                        <a href="#why-us-resi-collapse" class="btn" data-toggle="collapse" data-untoggle="#why-us-upholstery-collapse;#why-us-commercial-collapse">Why Us?</a>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="contact-btn">
                                        <a href="FAQ.php" class="btn">FAQ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="commercial">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/we-move-and-clean-service-commercial-carpet-cleaning-2.jpg"
                                 class="img-responsive respond"
                                 alt="We Move & Clean - Commercial Carpet Cleaning">
                        </div>
                        <div class="col-md-6 one-line-padding">
                            <p>
                                This service is ideal for people who require their carpet brought back to its pristine condition:
                            </p>
                            <ul>
                                <li>when moving into a new office / commercial space</li>
                                <li>when moving out or selling their current office / commercial space</li>
                                <li>when they already occupy their current office / commercial space</li>
                            </ul>
                            <p>
                                Most of our customers add:
                            </p>
                            <p>
                                ‘<a href="services-cleaning.php#commercial">Commercial Cleaning</a>’ and ‘<a href="services-clearance.php">Clearance</a>’
                            </p>


                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="contact-btn">
                                        <a href="#service-commercial-collapse" class="btn" data-toggle="collapse" data-untoggle="#service-collapse">Get A
                                            Quote</a>
                                    </div>

                                </div>

                                <div class="col-xs-4">
                                    <div class="contact-btn">
                                        <a href="#why-us-commercial-collapse" class="btn" data-toggle="collapse" data-untoggle="#why-us-upholstery-collapse;#why-us-resi-collapse">Why Us?</a>
                                    </div>
                                </div>

                                <div class="col-xs-3">
                                    <div class="contact-btn">
                                        <a href="FAQ.php" class="btn">FAQ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="upholstery">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/we-move-and-clean-service-upholstery-cleaning.jpg"
                                 class="img-responsive respond"
                                 alt="We Move & Clean - Upholstery Cleaning">
                        </div>
                        <div class="col-md-6 one-line-padding">
                            <p>This service is ideal for people who require their sofas, armchairs and, mattresses
                                brought back to pristine condition:</p>
                            <ul>
                                <li>when moving into a new house / office / commercial space</li>
                                <li>when moving out or selling their current house / office / commercial space</li>
                                <li>when they already occupy their house / office / commercial space</li>
                            </ul>
                            <p>Most of our customers add:</p>
                            <p>&lsquo;<a href="services-carpet-cleaning.php">Carpet Cleaning</a>&rsquo;, &lsquo;<a
                                    href="services-cleaning.php">Cleaning</a>&rsquo;, &lsquo;<a
                                    href="services-clearance.php">Clearance</a>&rsquo;</p>
                            <div class="row">
<!--                                <div class="col-xs-6">-->
<!--                                    <div class="contact-btn">-->
<!--                                        <a href="#service-commercial-collapse" class="btn" data-toggle="collapse">Get A-->
<!--                                            Quote</a>-->
<!--                                    </div>-->
<!--                                </div>-->

                                <div class="col-xs-6">
                                    <div class="contact-btn">
                                        <a href="#why-us-upholstery-collapse" class="btn" data-toggle="collapse" data-untoggle="#why-us-commercial-collapse;#why-us-resi-collapse">Why Us?</a>
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

        <section class="content-container collapse" id="why-us-resi-collapse">
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
                        We’ve got more than a decade of combined experience in the Carpet Cleaning Industry. What’s more, your property and your belongings are covered by ‘Public
                        Liability Insurance (£1,000,000)’
                    </p>
                    <p>
                        <strong>YOU CAN TRUST US </strong>
                        We’ve been checked and are regularly monitored by ‘<a href="https://www.buywithconfidence.gov.uk/home/?usertype=consumer">Trading Standards</a>’ and ‘<a href="http://www.checkatrade.com/WeMoveAndClean/">Checkatrade</a>’.
                    </p>
                    <p>
                        <strong>YOU WILL HIRE PROFESSIONALS </strong>
                        We use specialised equipment (like deep steam carpet cleaning equipment etc.) which allows removes 99.99% of bacteria, viruses and dirt. Our staff are
                        fully trained and uniformed.
                    </p>
                    <p>
                        <strong>YOU KNOW WHAT'S GOING ON</strong>
                        <strong> </strong>
                        You'll know in advance what the plan of action is and you'll always be kept updated.
                    </p>
                    <p>
                        <strong>YOU WILL SAVE TIME AND MONEY </strong>
                        If you wish to add ‘<a href="services-cleaning.php">Cleaning</a>’ or ‘<a href="services-clearance.php">Clearance</a>’ service to your ‘<a href="services-carpet-cleaning.php">Carpet Cleaning</a>’ you’ll save time by contacting only one company. You’ll save money due to
                        our huge discounts when taking two or more services.
                    </p>
                    <p>
                        <strong></strong>
                    </p>
                    <p>
                        <strong>YOU CHOOSE, YOU DECIDE </strong>
                        You’re always in control so it’s up to you if you’d like to have the whole property cleaned or only one room.
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

        <section class="content-container collapse" id="why-us-commercial-collapse">
            <div class="row">
                <div class="col-md-8">
                    <p>
                        <u>Why should you choose 'We Move and Clean’?</u>
                    </p>
                    <p>
                        <strong>IT'S ALL ABOUT YOU </strong>
                        Our aim is your satisfaction and we won’t settle for anything else. You’ll always receive personal and tailored service
                    </p>
                    <p>
                        <strong>YOU ARE IN SAFE HANDS </strong>
                        We’ve got more than a decade of combined experience in the Carpet Cleaning Industry. What’s more, your property and your belongings are covered by ‘Public
                        Liability Insurance (£1,000,000)’
                    </p>
                    <p>
                        <strong>YOU CAN TRUST US </strong>
                        We’ve been checked and are regularly monitored by ‘<a href="https://www.buywithconfidence.gov.uk/home/?usertype=consumer">Trading Standards</a>’ and ‘<a href="http://www.checkatrade.com/WeMoveAndClean/"Checkatrade</a>’.
                    </p>
                    <p>
                        <strong>YOU WILL HIRE PROFESSIONALS </strong>
                        We use specialised equipment (like deep steam carpet cleaning equipment etc.) which removes 99.99% of bacteria, viruses and dirt. Our staff is fully
                        trained and uniformed.
                    </p>
                    <p>
                        <strong>YOU KNOW WHAT'S GOING ON</strong>
                        <strong> </strong>
                        You'll know in advance what the plan of action is and you'll always be kept updated.
                    </p>
                    <p>
                        <strong>YOU WILL SAVE TIME AND MONEY </strong>
                        If you wish to add ‘<a href="services-cleaning.php#commercial">Commercial Cleaning</a>’ or ‘<a href="services-clearance.php">Clearance</a>’ service to your ‘<a href="services-carpet-cleaning.php#commercial">Commercial Carpet Cleaning</a>’ you’ll save time by contacting only one company.
                        You’ll save money due to our huge discounts when taking two or more services.
                    </p>
                    <p>
                        <strong>YOU CHOOSE, YOU DECIDE </strong>
                        You’re always in control so it’s up to you if you’d like to have cleaned the whole property or only one room.
                    </p>
                    <p align="center">
                        we accept last minute bookings and if necessary work on Sundays and bank holidays
                    </p>
                </div>
                <div class="col-md-4">
                    <a href="http://www.checkatrade.com/WeMoveAndClean/Reviews.aspx" target="_blank">
                        <img src="http://www.checkatrade.com/Reputation/ApiChart/WeMoveAndClean.png" alt="Checkatrade information for We Move and Clean "/>
                    </a>
                </div>
            </div>
        </section>

        <section class="content-container collapse" id="why-us-upholstery-collapse">
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
                        We’ve got more than a decade of combined experience in the Carpet Cleaning Industry. What’s more, your property and your belongings are covered by ‘Public
                        Liability Insurance (£1,000,000)’
                    </p>
                    <p>
                        <strong>YOU CAN TRUST US </strong>
                        We’ve been checked and are regularly monitored by ‘<a href="https://www.buywithconfidence.gov.uk/home/?usertype=consumer">Trading Standards</a>’ and ‘<a href="http://www.checkatrade.com/WeMoveAndClean/">Checkatrade</a>’.
                    </p>
                    <p>
                        <strong>YOU WILL HIRE PROFESSIONALS </strong>
                        We use specialised equipment (like deep steam upholstery cleaning equipment etc.) which removes 99.99% of bacteria, viruses and dirt. Our staff is fully
                        trained and uniformed.
                    </p>
                    <p>
                        <strong>YOU KNOW WHAT'S GOING ON</strong>
                        <strong> </strong>
                        You'll know in advance what the plan of action is and you'll always be kept updated.
                    </p>
                    <p>
                        <strong></strong>
                    </p>
                    <p>
                        <strong>YOU WILL SAVE TIME AND MONEY </strong>
                        If you wish to add ‘<a href="services-carpet-cleaning.php">Carpet Cleaning</a>’, ‘<a href="services-cleaning.php">Cleaning</a>’ or ‘<a href="services-clearance.php">Clearance</a>’ service to your ‘<a href="services-cleaning.php#upholstery">Upholstery Cleaning</a>’ you’ll save time by contacting only one company.
                        You’ll save money due to our huge discounts when taking two or more services.
                    </p>
                    <p>
                        <strong>YOU CHOOSE, YOU DECIDE </strong>
                        You’re always in control so it’s up to you if you’d like to have only one piece cleaned or more.
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

        <section class="content-container collapse" id="service-collapse">
            <form id="contact_form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="service" value="Residential Carpet Cleaning">
                <div class="row">
                    <div class="col-md-6">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-calendar"></i></span>Date</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>From</label>
                                            <input type="date" class="form-control" id="from_date" name="from_date">
                                            <span id="from_date_error" class="error">From date is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>To</label>
                                            <input type="date" class="form-control" id="to_date" name="to_date">
                                            <span id="to_date_error" class="error">To date is required</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-calendar"></i></span>Time</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>From</label>
                                            <select class="form-control" id="from_time" name="from_time">
                                                <option value="6.00">6.00</option>
                                                <option value="6.30">6.30</option>
                                                <option value="7.00">7.00</option>
                                                <option value="7.30">7.30</option>
                                                <option value="8.00">8.00</option>
                                                <option value="8.30">8.30</option>
                                                <option value="9.00">9.00</option>
                                                <option value="9.30">9.30</option>
                                                <option value="10.00">10.00</option>
                                                <option value="10.30">10.30</option>
                                                <option value="11.00">11.00</option>
                                                <option value="11.30">11.30</option>
                                                <option value="12.00">12.00</option>
                                                <option value="12.30">12.30</option>
                                                <option value="13.00">13.00</option>
                                                <option value="13.30">13.30</option>
                                                <option value="14.00">14.00</option>
                                                <option value="14.30">14.30</option>
                                                <option value="15.00">15.00</option>
                                                <option value="15.30">15.30</option>
                                                <option value="16.00">16.00</option>
                                                <option value="16.30">16.30</option>
                                                <option value="17.00">17.00</option>
                                                <option value="17.30">17.30</option>
                                                <option value="18.00">18.00</option>
                                                <option value="18.30">18.30</option>
                                                <option value="19.00">19.00</option>
                                                <option value="19.30">19.30</option>
                                                <option value="20.00">20.00</option>
                                                <option value="20.30">20.30</option>
                                                <option value="21.00">21.00</option>
                                                <option value="21.30">21.30</option>
                                                <option value="22.00">22.00</option>
                                                <option value="22.30">22.30</option>
                                                <option value="23.00">23.00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>To</label>
                                            <select class="form-control" id="to_time" name="to_time">
                                                <option value="6.00">6.00</option>
                                                <option value="6.30">6.30</option>
                                                <option value="7.00">7.00</option>
                                                <option value="7.30">7.30</option>
                                                <option value="8.00">8.00</option>
                                                <option value="8.30">8.30</option>
                                                <option value="9.00">9.00</option>
                                                <option value="9.30">9.30</option>
                                                <option value="10.00">10.00</option>
                                                <option value="10.30">10.30</option>
                                                <option value="11.00">11.00</option>
                                                <option value="11.30">11.30</option>
                                                <option value="12.00">12.00</option>
                                                <option value="12.30">12.30</option>
                                                <option value="13.00">13.00</option>
                                                <option value="13.30">13.30</option>
                                                <option value="14.00">14.00</option>
                                                <option value="14.30">14.30</option>
                                                <option value="15.00">15.00</option>
                                                <option value="15.30">15.30</option>
                                                <option value="16.00">16.00</option>
                                                <option value="16.30">16.30</option>
                                                <option value="17.00">17.00</option>
                                                <option value="17.30">17.30</option>
                                                <option value="18.00">18.00</option>
                                                <option value="18.30">18.30</option>
                                                <option value="19.00">19.00</option>
                                                <option value="19.30">19.30</option>
                                                <option value="20.00">20.00</option>
                                                <option value="20.30">20.30</option>
                                                <option value="21.00">21.00</option>
                                                <option value="21.30">21.30</option>
                                                <option value="22.00">22.00</option>
                                                <option value="22.30">22.30</option>
                                                <option value="23.00">23.00</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-user"></i></span>Personal Info</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <select class="form-control valid" id="title" name="title">
                                                <option value="Mr">Mr</option>
                                                <option value="Mrs">Mrs</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                            <span id="name_error" class="error">Name is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email <span class="red">*</span></label>
                                            <input type="text" class="form-control required" id="email" name="email">
                                            <span id="email_error" class="error">Email is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input type="text" class="form-control" id="contact_number"
                                                   name="contact_number">
                                            <span id="contact_number_error"
                                                  class="error">Contact Number is required</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-home"></i></span>Your Property</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Property number and street name</label>
                                            <input type="text" class="form-control" id="pty_number" name="pty_number">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Postcode <span class="red">*</span></label>
                                            <input type="text" class="form-control required" id="postcode"
                                                   name="postcode">
                                            <span id="postcode_error" class="error">Postcode is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Property type <span class="red">*</span></label>
                                            <select class="form-control required" id="pty_type" name="pty_type">
                                                <option value="">--- Select ---</option>
                                                <option value="Bungalow">Bungalow</option>
                                                <option value="">-------</option>
                                                <option value="1 bed house">1 bed house</option>
                                                <option value="2 bed house">2 bed house</option>
                                                <option value="3 bed house">3 bed house</option>
                                                <option value="4 bed house">4 bed house</option>
                                                <option value="">------------</option>
                                                <option value="Studio flat">Studio flat</option>
                                                <option value="1 bed flat">1 bed flat</option>
                                                <option value="2 bed flat">2 bed flat</option>
                                                <option value="3 bed flat">3 bed flat</option>
                                                <option value="4 bed flat">4 bed flat</option>
                                            </select>
                                            <span id="pty_type_error" class="error">Property type is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Furniture <span class="red">*</span></label>
                                            <select class="form-control required" id="furniture" name="furniture">
                                                <option value="">--- Select ---</option>
                                                <option value="Fully Furnished">Fully Furnished</option>
                                                <option value="Partly Furnished">Partly Furnished</option>
                                                <option value="Unfurnished">Unfurnished</option>
                                            </select>
                                            <span id="furniture_error" class="error">Furniture is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                Is there electricity at your property?
                                            </div>

                                            <div class="col-xs-12 col-md-6">
                                                <input type="checkbox" class="toggle" id="commercial_electricity_available"
                                                       name="commercial_electricity_available">
                                                <label
                                                    for="commercial_electricity_available"><span>Yes</span><span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                I will arrange parking space for "We Move and Clean" staff
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <input type="checkbox" class="toggle" id="commercial_parking_for_staff"
                                                       name="commercial_parking_for_staff">
                                                <label for="commercial_parking_for_staff"><span>Yes</span><span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                Is there hot water at the property?
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <input type="checkbox" class="toggle" id="commercial_water_available"
                                                       name="commercial_water_available">
                                                <label for="commercial_water_available"><span>Yes</span><span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>(Resident's Parking Scheme - a temporary permit must be provided)</p>
                                        <p>(Pay and Display Parking - parking charge will be added to the final
                                            bill)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-th-list"></i></span>List of Rooms in your
                                    Property</h3>
                                <span id="img_check_error" class="error">You must select at least one room</span>
                            </div>
                            <div class="serviceFormBox__content serviceFormBox__content--alt">
                                <div class="imgCheckList" id="rooms_list">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Kitchen</h4>
                                                <label for="kitchen_room"><img src="images/quote-imgs/kitchen.jpg"
                                                                          class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="kitchen_room"
                                                           name="kitchen_room">
                                                    <label for="kitchen_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Living Room</h4>
                                                <label for="living_room"><img src="images/quote-imgs/living_room.jpg"
                                                                              class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="living_room"
                                                           name="living_room">
                                                    <label for="living_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Dining Room</h4>
                                                <label for="dining_room"><img src="images/quote-imgs/dining_room.jpg"
                                                                              class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="dining_room"
                                                           name="dining_room">
                                                    <label for="dining_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Hallway</h4>
                                                <label for="hallway_room"><img src="images/quote-imgs/hallway.jpg"
                                                                          class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="hallway_room"
                                                           name="hallway_room">
                                                    <label for="hallway_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>1st Bedroom</h4>
                                                <label for="first_bedroom"><img src="images/quote-imgs/bedroom.jpg"
                                                                                class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="first_bedroom"
                                                           name="first_bedroom">
                                                    <label for="first_bedroom"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>2nd Bedroom</h4>
                                                <label for="second_bedroom"><img src="images/quote-imgs/bedroom.jpg"
                                                                                 class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="second_bedroom"
                                                           name="second_bedroom">
                                                    <label for="second_bedroom"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>3rd Bedroom</h4>
                                                <label for="third_bedroom"><img src="images/quote-imgs/bedroom.jpg"
                                                                                class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="third_bedroom"
                                                           name="third_bedroom">
                                                    <label for="third_bedroom"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>4th Bedroom</h4>
                                                <label for="fourth_bedroom"><img src="images/quote-imgs/bedroom.jpg"
                                                                                 class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="fourth_bedroom"
                                                           name="fourth_bedroom">
                                                    <label for="fourth_bedroom"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>1st Flight of Stairs</h4>
                                                <label for="first_flight_of_stairs_room"><img
                                                        src="images/quote-imgs/stairs.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="first_flight_of_stairs_room"
                                                           name="first_flight_of_stairs_room">
                                                    <label
                                                        for="first_flight_of_stairs_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>2nd Flight of Stairs</h4>
                                                <label for="second_flight_of_stairs_room"><img
                                                        src="images/quote-imgs/stairs.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="second_flight_of_stairs_room"
                                                           name="second_flight_of_stairs_room">
                                                    <label
                                                        for="second_flight_of_stairs_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>1st Box / Storage Room</h4>
                                                <label for="first_box_storage_room"><img
                                                        src="images/quote-imgs/box_storage_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="first_box_storage_room"
                                                           name="first_box_storage_room">
                                                    <label
                                                        for="first_box_storage_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>2nd Box / Storage Room</h4>
                                                <label for="second_box_storage_room"><img
                                                        src="images/quote-imgs/box_storage_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="second_box_storage_room"
                                                           name="second_box_storage_room">
                                                    <label
                                                        for="second_box_storage_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Bathroom</h4>
                                                <label for="bathroom"><img src="images/quote-imgs/bathroom.jpg"
                                                                           class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="bathroom" name="bathroom">
                                                    <label for="bathroom"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Shower Room</h4>
                                                <label for="first_shower_room"><img
                                                        src="images/quote-imgs/shower_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="first_shower_room"
                                                           name="first_shower_room">
                                                    <label
                                                        for="first_shower_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Toilet Room</h4>
                                                <label for="toilet_room"><img src="images/quote-imgs/toilet_room.jpg"
                                                                              class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="toilet_room"
                                                           name="toilet_room">
                                                    <label for="toilet_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Conservatory Room</h4>
                                                <label for="conservatory_room"><img
                                                        src="images/quote-imgs/conservatory_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="conservatory_room"
                                                           name="conservatory_room">
                                                    <label
                                                        for="conservatory_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="other_rooms">Please point out any other room which is not listed
                                                above:</label>
                                            <textarea id="other_rooms" name="other_rooms"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-wrench"></i></span>Upholstery Cleaning</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Armchair</label>
                                            <select class="form-control valid" id="armchair" name="armchair">
                                                <option value="">--- Select ---</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>2 Seater Sofa</label>
                                            <select class="form-control valid" id="two-seater-sofa"
                                                    name="two-seater-sofa">
                                                <option value="">--- Select ---</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>3 Seater Sofa</label>
                                            <select class="form-control valid" id="three-seater-sofa"
                                                    name="three-seater-sofa">
                                                <option value="">--- Select ---</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>L Shaped Sofa</label>
                                            <select class="form-control valid" id="l-shaped-sofa" name="l-shaped-sofa">
                                                <option value="">--- Select ---</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Dining Chair</label>
                                            <select class="form-control valid" id="dining-chair" name="dining-chair">
                                                <option value="">--- Select ---</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="other_upholstery_box">Please point out any other items requiring
                                                upholstery cleaning:</label>
                                            <textarea id="other_upholstery_box" name="other_upholstery_box"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-wrench"></i></span>Mattress Cleaning</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Small</label>
                                            <select class="form-control valid" id="small-mattress"
                                                    name="small-mattress">
                                                <option value="">--- Select ---</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Double</label>
                                            <select class="form-control valid" id="double-mattress"
                                                    name="double-mattress">
                                                <option value="">--- Select ---</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>King Size</label>
                                            <select class="form-control valid" id="king-mattress" name="king-mattress">
                                                <option value="">--- Select ---</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-wrench"></i></span>Rug Cleaning</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <select class="form-control valid" id="rug-quantity" name="rug-quantity">
                                                <option value="">--- Select ---</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label>Size</label>
                                            <input type="text" class="form-control" id="rug-size"
                                                   name="rug-size">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-plus"></i></span>Additional Information</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="additional_message">Write your notes or message</label>
                                            <textarea id="additional_message" name="additional_message"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <span class="success">Message Sent!</span>
                        <span class="error failed">Message failed to send. Contact the system administrator.</span>
                        <span class="error validation">Validation error. Please check your entries.</span>
                        <button type="submit" class="btn btn--green send_message">Submit</button>
                        <input type="hidden" name="subject" value="We Move and Clean - Carpet Cleaning Contact Form">
                    </div>
                </div>
            </form>
        </section>

        <section class="content-container collapse" id="service-commercial-collapse">
            <form id="contact_form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="service" value="Commercial Carpet Cleaning">
                <div class="row">
                    <div class="col-md-6">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-calendar"></i></span>Date</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>From</label>
                                            <input type="date" class="form-control" id="from_date" name="from_date">
                                            <span id="from_date_error" class="error">From date is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>To</label>
                                            <input type="date" class="form-control" id="to_date" name="to_date">
                                            <span id="to_date_error" class="error">To date is required</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-calendar"></i></span>Time</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>From</label>
                                            <select class="form-control" id="from_time" name="from_time">
                                                <option value="6.00">6.00</option>
                                                <option value="6.30">6.30</option>
                                                <option value="7.00">7.00</option>
                                                <option value="7.30">7.30</option>
                                                <option value="8.00">8.00</option>
                                                <option value="8.30">8.30</option>
                                                <option value="9.00">9.00</option>
                                                <option value="9.30">9.30</option>
                                                <option value="10.00">10.00</option>
                                                <option value="10.30">10.30</option>
                                                <option value="11.00">11.00</option>
                                                <option value="11.30">11.30</option>
                                                <option value="12.00">12.00</option>
                                                <option value="12.30">12.30</option>
                                                <option value="13.00">13.00</option>
                                                <option value="13.30">13.30</option>
                                                <option value="14.00">14.00</option>
                                                <option value="14.30">14.30</option>
                                                <option value="15.00">15.00</option>
                                                <option value="15.30">15.30</option>
                                                <option value="16.00">16.00</option>
                                                <option value="16.30">16.30</option>
                                                <option value="17.00">17.00</option>
                                                <option value="17.30">17.30</option>
                                                <option value="18.00">18.00</option>
                                                <option value="18.30">18.30</option>
                                                <option value="19.00">19.00</option>
                                                <option value="19.30">19.30</option>
                                                <option value="20.00">20.00</option>
                                                <option value="20.30">20.30</option>
                                                <option value="21.00">21.00</option>
                                                <option value="21.30">21.30</option>
                                                <option value="22.00">22.00</option>
                                                <option value="22.30">22.30</option>
                                                <option value="23.00">23.00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>To</label>
                                            <select class="form-control" id="to_time" name="to_time">
                                                <option value="6.00">6.00</option>
                                                <option value="6.30">6.30</option>
                                                <option value="7.00">7.00</option>
                                                <option value="7.30">7.30</option>
                                                <option value="8.00">8.00</option>
                                                <option value="8.30">8.30</option>
                                                <option value="9.00">9.00</option>
                                                <option value="9.30">9.30</option>
                                                <option value="10.00">10.00</option>
                                                <option value="10.30">10.30</option>
                                                <option value="11.00">11.00</option>
                                                <option value="11.30">11.30</option>
                                                <option value="12.00">12.00</option>
                                                <option value="12.30">12.30</option>
                                                <option value="13.00">13.00</option>
                                                <option value="13.30">13.30</option>
                                                <option value="14.00">14.00</option>
                                                <option value="14.30">14.30</option>
                                                <option value="15.00">15.00</option>
                                                <option value="15.30">15.30</option>
                                                <option value="16.00">16.00</option>
                                                <option value="16.30">16.30</option>
                                                <option value="17.00">17.00</option>
                                                <option value="17.30">17.30</option>
                                                <option value="18.00">18.00</option>
                                                <option value="18.30">18.30</option>
                                                <option value="19.00">19.00</option>
                                                <option value="19.30">19.30</option>
                                                <option value="20.00">20.00</option>
                                                <option value="20.30">20.30</option>
                                                <option value="21.00">21.00</option>
                                                <option value="21.30">21.30</option>
                                                <option value="22.00">22.00</option>
                                                <option value="22.30">22.30</option>
                                                <option value="23.00">23.00</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-user"></i></span>Personal Info</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Company</label>
                                            <input type="text" class="form-control" id="company" name="company">
                                            <span id="company_error" class="error">Company is required</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <select class="form-control valid" id="title" name="title">
                                                <option value="Mr">Mr</option>
                                                <option value="Mrs">Mrs</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                            <span id="name_error" class="error">Name is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email <span class="red">*</span></label>
                                            <input type="text" class="form-control required" id="email" name="email">
                                            <span id="email_error" class="error">Email is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input type="text" class="form-control" id="contact_number"
                                                   name="contact_number">
                                            <span id="contact_number_error"
                                                  class="error">Contact Number is required</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-home"></i></span>Your Property</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Property number and street name</label>
                                            <input type="text" class="form-control" id="pty_number" name="pty_number">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Postcode <span class="red">*</span></label>
                                            <input type="text" class="form-control required" id="postcode"
                                                   name="postcode">
                                            <span id="postcode_error" class="error">Postcode is required</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                Is there electricity at your property?
                                            </div>

                                            <div class="col-xs-12 col-md-6">
                                                <input type="checkbox" class="toggle" id="electricity_available"
                                                       name="electricity_available">
                                                <label
                                                    for="electricity_available"><span>Yes</span><span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                I will arrange parking space for "We Move and Clean" staff
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <input type="checkbox" class="toggle" id="parking_for_staff"
                                                       name="parking_for_staff">
                                                <label for="parking_for_staff"><span>Yes</span><span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                Is there hot water at the property?
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <input type="checkbox" class="toggle" id="water_available"
                                                       name="water_available">
                                                <label for="water_available"><span>Yes</span><span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>(Resident's Parking Scheme - a temporary permit must be provided)</p>
                                        <p>(Pay and Display Parking - parking charge will be added to the final
                                            bill)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-bars"></i></span>Requirements</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="requirements_message">Please describe how many rooms and other
                                                areas (specifying sizes) need carpet cleaning:</label>
                                            <textarea id="requirements_message" name="requirements_message"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-plus"></i></span>Additional Information</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="additional_message">Write your notes or message</label>
                                            <textarea id="additional_message" name="additional_message"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <span class="success">Message Sent!</span>
                        <span class="error failed">Message failed to send. Contact the system administrator.</span>
                        <span class="error validation">Validation error. Please check your entries.</span>
                        <button type="submit" class="btn btn--green send_message">Submit</button>
                        <input type="hidden" name="subject" value="We Move and Clean - Carpet Cleaning Contact Form">
                    </div>
                </div>
            </form>
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
                            src="images/trading-standards-approved-buy-with-confidence.png"
                            class="img-responsive image-center"
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