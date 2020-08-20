<?php
global $page_title, $page_link;
$page_title = "Removal Services";
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
                                <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/QA1bHRWGA8Q?rel=0" frameborder="0"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-6 one-line-padding">
                            <p>This service is ideal for:</p>
                            <ul>
                                <li>People moving out because they&rsquo;ve purchased or will rent a new property</li>
                            </ul>
                            <p>Most of our customers add:</p>
                            <p>&lsquo;<a href="services-packing-service.php">Packing Service</a>&rsquo;, &lsquo;<a
                                    href="services-furniture-assembly.php">Furniture Assembly</a>&rsquo; and &lsquo;<a
                                    href="services-storage.php">Storage</a>&rsquo; to their House Move</p>
                            <p>Budget alternative:</p>
                            <ul>
                                <li>&lsquo;<a href="services-van-with-driver-hire.php">Van &amp; Driver Hire</a>&rsquo;
                                    and &lsquo;<a href="services-crate-hire.php">Crate Hire</a>&rsquo;</li>
                            </ul>


                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="contact-btn">
                                        <a href="#house-collapse" class="btn" data-toggle="collapse"
                                           data-untoggle="#office-collapse">Get A Quote</a>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="contact-btn">
                                        <a href="#why-us-house-collapse" class="btn" data-toggle="collapse"
                                           data-untoggle="#why-us-office-collapse">Why Us?</a>
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
                <div role="tabpanel" class="tab-pane fade" id="office">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/we-move-and-clean-service-removals.jpg" class="img-responsive respond"
                                 alt="We Move & Clean - Removals">
                        </div>
                        <div class="col-md-6 one-line-padding">
                            <p>This service is ideal for:</p>
                            <ul>
                                <li>People moving office</li>
                            </ul>
                            <p>Most of our customers add:</p>
                            <p>&lsquo;<a href="services-packing-service.php#office">Office Packing
                                    Service</a>&rsquo;, &lsquo;<a href="services-furniture-assembly.php">Furniture
                                    Assembly</a>&rsquo; and &lsquo;<a href="services-storage.php">Storage</a>&rsquo; to
                                their Office Move</p>
                            <p>Budget alternative:</p>
                            <ul>
                                <li>&lsquo;<a href="services-van-with-driver-hire.php">Van &amp; Driver&rsquo; hire</a>
                                    and &lsquo;<a href="services-crate-hire.php">Crate Hire</a>&rsquo;</li>
                            </ul>


                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="contact-btn">
                                        <a href="#office-collapse" class="btn" data-toggle="collapse"
                                           data-untoggle="#house-collapse">Get A
                                            Quote</a>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="contact-btn text-center">
                                        <a href="#why-us-office-collapse" class="btn text-center" data-toggle="collapse"
                                           data-untoggle="#why-us-house-collapse">Why Us?</a>
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
                        Our aim is your satisfaction and we won’t settle for anything else. You’ll always receive a
                        personal and tailored service
                    </p>
                    <p>
                        <strong>YOU ARE IN SAFE HANDS </strong>
                        We’ve got more than a decade of combined experience in the removals industry. What’s more, your
                        property and your goods are always covered by ‘Public
                        Liability (£1,000,000)’ and ‘Goods in Transit (£10,000)’ Insurance
                    </p>
                    <p>
                        <strong>YOU CAN TRUST US </strong>
                        We’ve been checked and are regularly monitored by ‘<a
                            href="https://www.buywithconfidence.gov.uk/home/?usertype=consumer">Trading Standards</a>’
                        and ‘<a href="http://www.checkatrade.com/WeMoveAndClean/">Checkatrade</a>’.
                    </p>
                    <p>
                        <strong>YOU WILL HIRE PROFESSIONALS </strong>
                        We use specialised equipment (like covers for sofa, mattress, TV, beds, white goods etc.) and
                        our staff are fully trained and uniformed.
                    </p>
                    <p>
                        <strong>YOU KNOW WHAT'S GOING ON</strong>
                        <strong> </strong>
                        You'll know in advance what the plan of action is and you'll be always kept updated.
                    </p>
                    <p>
                        <strong>YOU WILL SAVE TIME AND MONEY </strong>
                        If you wish to add ‘<a href="services-cleaning.php">Cleaning</a>’ or ‘<a
                            href="services-clearance.php">Clearance</a>’ service to your house move you’ll save time by
                        contacting only one company. You’ll save money due to our huge
                        discounts when taking two or more services.
                    </p>
                    <p>
                        <strong>YOU CHOOSE, YOU DECIDE </strong>
                        You’re always in control so it’s up to you if you’d like to add ‘<a
                            href="services-packing-service.php">Packing and Unpacking Service</a>’, ‘<a
                            href="services-furniture-assembly.php">Furniture Assembly Service</a>’ or ‘<a
                            href="services-storage.php">Storage</a>’. Alternatively,
                        if you’re a hands-on person we’d love to offer our ‘<a href="services-van-with-driver-hire.php">Van
                            &amp; Driver Hire</a>’ and ‘<a href="services-crate-hire.php">Crate Hire</a>’ services.
                    </p>
                    <p align="center">
                        We accept last minute bookings and if necessary work on Sundays and bank holidays
                    </p>
                </div>
                <div class="col-md-4">
                    <a href="http://www.checkatrade.com/WeMoveAndClean/Reviews.aspx" target="_blank">
                        <img src="http://www.checkatrade.com/Reputation/ApiChart/WeMoveAndClean.png"
                             alt="Checkatrade information for We Move and Clean "/>
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
                        Our aim is your satisfaction and we won’t settle for anything else. You’ll always receive a
                        personal and tailored service
                    </p>
                    <p>
                        <strong>YOU ARE IN SAFE HANDS </strong>
                        We’ve got more than a decade of combined experience in the removals industry. What’s more, your
                        property and your goods are always covered by ‘Public
                        Liability (£1,000,000)’ and ‘Goods in Transit (£10,000)’ Insurance
                    </p>
                    <p>
                        <strong>YOU CAN TRUST US </strong>
                        We’ve been checked and are regularly monitored by ‘<a
                            href="https://www.buywithconfidence.gov.uk/#">Trading Standards</a>’ and ‘<a
                            href="http://www.checkatrade.com/WeMoveAndClean/">Checkatrade</a>’.
                    </p>
                    <p>
                        <strong>YOU WILL HIRE PROFESSIONALS </strong>
                        We use specialised equipment (like screens covers, anti-static keyboard bags etc.) and our staff
                        are fully trained and uniformed.
                    </p>
                    <p>
                        <strong>YOU KNOW WHAT'S GOING ON</strong>
                        <strong> </strong>
                        You'll know in advance what the plan of action is and you'll always be kept updated.
                    </p>
                    <p>
                        <strong>YOU WILL SAVE TIME AND MONEY </strong>
                        If you wish to add ‘<a href="services-cleaning.php#office">Office Cleaning</a>’ or ‘<a
                            href="services-clearance.php">Clearance</a>’ service to your office move you’ll save time by
                        contacting only one company. You’ll save money due to
                        our huge discounts when taking two or more services.
                    </p>
                    <p>
                        <strong>YOU CHOOSE, YOU DECIDE </strong>
                        You’re always in control so it’s up to you if you’d like to add ‘<a
                            href="services-packing-service.php">Packing and Unpacking Service</a>’, ‘<a
                            href="services-furniture-assembly.php">Furniture Assembly Service</a>’ or ‘<a
                            href="services-storage.php">Storage</a>’. Alternatively,
                        if you’re hands-on person we’d love to offer our ‘<a href="services-van-with-driver-hire.php">Van
                            &amp; Driver Hire</a>’ and ‘<a href="services-crate-hire.php">Crate Hire</a>’ services.
                    </p>
                    <p align="center">
                        We accept last minute bookings and if necessary work on Sundays and bank holidays
                    </p>
                </div>
                <div class="col-md-4">
                    <a href="http://www.checkatrade.com/WeMoveAndClean/Reviews.aspx" target="_blank">
                        <img src="http://www.checkatrade.com/Reputation/ApiChart/WeMoveAndClean.png"
                             alt="Checkatrade information for We Move and Clean "/>
                    </a>
                </div>
            </div>
        </section>

        <section class="content-container collapse" id="house-collapse">
            <form id="contact_form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="service" value="Domestic Removals">
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
                                            <input type="date" class="form-control required" id="from_date"
                                                   name="from_date">
                                            <span id="from_date_error" class="error">From date is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>To</label>
                                            <input type="date" class="form-control required" id="to_date"
                                                   name="to_date">
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
                    <div class="col-md-6">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-truck"></i></span>Collection Info</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Property number and street name</label>
                                            <input type="text" class="form-control" id="collection_property_number" name="collection_property_number">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Postcode <span class="red">*</span></label>
                                            <input type="text" class="form-control required" id="collection_postcode"
                                                   name="collection_postcode">
                                            <span id="collection_postcode_error" class="error">Postcode is required</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Parking <span class="red">*</span></label>
                                            <select class="form-control required" id="collection_parking"
                                                    name="collection_parking">
                                                <option value="">--- Select ---</option>
                                                <option value="Driveway">Driveway</option>
                                                <option value="Street (same side as the property)">Street (same side as
                                                    the property)
                                                </option>
                                                <option value="Street (opposite side to the property)">Street (opposite
                                                    side to the property)
                                                </option>
                                            </select>
                                            <span class="error">Collection parking is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Distance from the door <span class="red">*</span></label>
                                            <select class="form-control required" id="collection_door_distance"
                                                    name="collection_door_distance">
                                                <option value="">--- Select ---</option>
                                                <option value="Less than 16 feet (5 meters)">Less than 16 feet (5
                                                    meters)
                                                </option>
                                                <option value="Less than 50 feet (15 meters)">Less than 50 feet (15
                                                    meters)
                                                </option>
                                                <option value="Less than 100 feet (30 meters)">Less than 100 feet (30
                                                    meters)
                                                </option>
                                            </select>
                                            <span class="error">Collection door distance is required</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Property type <span class="red">*</span></label>
                                                    <select class="form-control required" id="collection_pty_type"
                                                            name="collection_pty_type" data-toggle_field="true"
                                                            data-fields="#collection_floor_hidden">
                                                        <option value="">--- Select ---</option>
                                                        <option value="Bungalow">Bungalow</option>
                                                        <option value="">-------</option>
                                                        <option value="1 bed house">1 bed house</option>
                                                        <option value="2 bed house">2 bed house</option>
                                                        <option value="3 bed house">3 bed house</option>
                                                        <option value="4 bed house">4 bed house</option>
                                                        <option value="">------------</option>
                                                        <option value="Studioflat">Studio flat</option>
                                                        <option value="1bedflat">1 bed flat</option>
                                                        <option value="2bedflat">2 bed flat</option>
                                                        <option value="3bedflat">3 bed flat</option>
                                                        <option value="4bedflat">4 bed flat</option>
                                                    </select>
                                                    <span class="error">Collection property type is required</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="collection_floor_hidden" class="soft-hide">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="collection_floor_number">Floor <span
                                                                        class="red">*</span></label>
                                                                <select class="form-control"
                                                                        id="collection_floor_number"
                                                                        name="collection_floor_number">
                                                                    <option value="">--- Select ---</option>
                                                                    <option value="ground">Ground</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>

                                                                </select>
                                                                <span class="error">Floor field is required.</span>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="collection_lift">Access to lift <span
                                                                        class="red">*</span></label>
                                                                <select class="form-control"
                                                                        id="collection_lift"
                                                                        name="collection_lift">
                                                                    <option value="">--- Select ---</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>

                                                                </select>
                                                                <span class="error">Floor field is required.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-truck"></i></span>Delivery Info</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Property number and street name</label>
                                            <input type="text" class="form-control" id="delivery_property__number" name="delivery_property_number">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Postcode <span class="red">*</span></label>
                                            <input type="text" class="form-control required" id="delivery_property_postcode"
                                                   name="delivery_property_postcode">
                                            <span id="delivery_property_postcode_error" class="error">Postcode is required</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Parking <span class="red">*</span></label>
                                            <select class="form-control required" id="delivery_parking"
                                                    name="delivery_parking">
                                                <option value="">--- Select ---</option>
                                                <option value="Driveway">Driveway</option>
                                                <option value="Street (same side as the property)">Street (same side as
                                                    the property)
                                                </option>
                                                <option value="Street (opposite side to the property)">Street (opposite
                                                    side to the property)
                                                </option>
                                            </select>
                                            <span class="error">Delivery parking is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Distance from the door <span class="red">*</span></label>
                                            <select class="form-control required" id="delivery_door_distance"
                                                    name="delivery_door_distance">
                                                <option value="">--- Select ---</option>
                                                <option value="Less than 16 feet (5 meters)">Less than 16 feet (5
                                                    meters)
                                                </option>
                                                <option value="Less than 50 feet (15 meters)">Less than 50 feet (15
                                                    meters)
                                                </option>
                                                <option value="Less than 100 feet (30 meters)">Less than 100 feet (30
                                                    meters)
                                                </option>
                                            </select>
                                            <span class="error">Delivery door distance is required</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Property type <span class="red">*</span></label>
                                                    <select class="form-control required" id="delivery_pty_type"
                                                            name="delivery_pty_type" data-toggle_field="true"
                                                            data-fields="#delivery_flat_hidden">
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
                                                    <span class="error">Delivery property type is required</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="delivery_flat_hidden" class="soft-hide">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="delivery_floor_number">Floor <span
                                                                        class="red">*</span></label>
                                                                <select class="form-control"
                                                                        id="delivery_floor_number"
                                                                        name="delivery_floor_number">
                                                                    <option value="">--- Select ---</option>
                                                                    <option value="ground">Ground</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>

                                                                </select>
                                                                <span class="error">Floor field is required.</span>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="delivery_lift">Access to lift <span
                                                                        class="red">*</span></label>
                                                                <select class="form-control" id="delivery_lift"
                                                                        name="delivery_lift">
                                                                    <option value="">--- Select ---</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>

                                                                </select>
                                                                <span class="error">Floor field is required.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                <h3><span class="greenIcon"><i class="fa fa-th-list"></i></span>List of inventory</h3>
                                <span class="error img_check_error">You must select at least one room</span>
                            </div>
                            <div class="serviceFormBox__content serviceFormBox__content--alt">
                                <div class="imgCheckList rooms_list">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Kitchen</h4>
                                                <label for="kitchen"><img src="images/quote-imgs/kitchen.jpg"
                                                                          class="img-responsive"></label>
                                                <div class="center">
                                                    Are you taking any white goods from your kitchen ?
                                                    <br/>
                                                    <input type="checkbox" class="toggle" id="kitchen"
                                                           name="kitchen_room">
                                                    <label for="kitchen"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Living Room</h4>
                                                <label for="living_room"><img src="images/quote-imgs/living_room.jpg"
                                                                              class="img-responsive"></label>
                                                <div class="center">
                                                    Are you taking any furniture from your living room?
                                                    <br/>
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
                                                    Are you taking any furniture from your dining Room?
                                                    <br/>
                                                    <input type="checkbox" class="toggle" id="dining_room"
                                                           name="dining_room">
                                                    <label for="dining_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Garden / Shed</h4>
                                                <label for="garden-shed"><img src="images/quote-imgs/garden_shed.jpg"
                                                                              class="img-responsive"></label>
                                                <div class="center">
                                                    Are you taking any items form your garden / shed?
                                                    <br/>
                                                    <input type="checkbox" class="toggle" id="garden-shed"
                                                           name="garden-shed">
                                                    <label for="garden-shed"><span>Yes</span><span>No</span></label>
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
                                                    Are you taking any furniture from your 1st bedroom?
                                                    <br/>
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
                                                    Are you taking any furniture from your 2nd bedroom?
                                                    <br/>
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
                                                    Are you taking any furniture from your 3rd bedroom?<br/>
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
                                                    Are you taking any furniture from your 4th bedroom?
                                                    <br/>
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
                                                <h4>Conservatory Room</h4>
                                                <label for="conservatory_room"><img
                                                        src="images/quote-imgs/conservatory_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    Are you taking any furniture from your
                                                    conservatory?<br/>
                                                    <input type="checkbox" class="toggle" id="conservatory_room"
                                                           name="conservatory_room">
                                                    <label
                                                        for="conservatory_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Garage</h4>
                                                <label for="garage_room"><img
                                                        src="images/quote-imgs/garage.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    Are you taking any items from your garage?<br/>
                                                    <input type="checkbox" class="toggle" id="garage_room"
                                                           name="garage_room">
                                                    <label
                                                        for="garage_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Loft</h4>
                                                <label for="loft_room"><img
                                                        src="images/quote-imgs/loft.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    Are you taking any items from your loft?<br/>
                                                    <input type="checkbox" class="toggle" id="loft_room"
                                                           name="loft_room">
                                                    <label
                                                        for="loft_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Basement</h4>
                                                <label for="basement_room"><img
                                                        src="images/quote-imgs/basement.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    Are you taking any items from your basement?<br/>
                                                    <input type="checkbox" class="toggle" id="basement_room"
                                                           name="basement_room">
                                                    <label
                                                        for="basement_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Lounge</h4>
                                                <label for="lounge"><img src="images/quote-imgs/lounge.jpg"
                                                                         class="img-responsive"></label>
                                                <div class="center">
                                                    Are you taking any furniture from your lounge?<br/>
                                                    <input type="checkbox" class="toggle" id="lounge"
                                                           name="lounge_room">
                                                    <label for="lounge"><span>Yes</span><span>No</span></label>
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
                                                    Are you taking any furniture from your 1st Box / Storage
                                                    room?<br/>
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
                                                    Are you taking any furniture from your 2nd Box / Storage
                                                    room?<br/>
                                                    <input type="checkbox" class="toggle" id="second_box_storage_room"
                                                           name="second_box_storage_room">
                                                    <label
                                                        for="second_box_storage_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>3rd Box / Storage Room</h4>
                                                <label for="third_box_storage_room"><img
                                                        src="images/quote-imgs/box_storage_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    Are you taking any furniture from your 3rd Box / Storage
                                                    room?<br/>
                                                    <input type="checkbox" class="toggle" id="third_box_storage_room"
                                                           name="third_box_storage_room">
                                                    <label
                                                        for="third_box_storage_room"><span>Yes</span><span>No</span></label>
                                                </div>
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
                                                  class="form-control other_rooms"></textarea>
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
                                <h3><span class="greenIcon"><i class="fa fa-wrench"></i></span>Furniture Dismantling and
                                    Assembly</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>Does any furniture need dismantling?</p>
                                                <input type="checkbox" class="toggle" id="furniture_need_dismantling"
                                                       name="furniture_need_dismantling">
                                                <label for="furniture_need_dismantling"><span>Yes</span><span>No</span></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group" id="imgFld">
                                                    <label>Click here to add pictures</label>
                                                    <input type="file" id="furniture_dismantling_pictures" multiple="multiple" data-file_list="#furniture_dismantling_files">
                                                    <input type="hidden" id="furniture_dismantling_files" name="furniture_dismantling_files">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Comments on Furniture Dismantling and Assembly</p>
                                        <textarea class="form-control" id="furniture_dismantling_comments"
                                                  name="furniture_dismantling_comments"></textarea>
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
                                <h3><span class="greenIcon"><i class="fa fa-wrench" aria-hidden="true"></i></span>Packing
                                    and Unpacking Service
                                </h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="packing_service">Would you like to add Packing Service?</label>
                                            <input type="checkbox" class="toggle" id="packing_service"
                                                   name="packing_service">
                                            <label for="packing_service"><span>Yes</span><span>No</span></label>
                                        </div>

                                        <div class="form-group">
                                            <label for="unpacking_service">Would you like to add Unpacking
                                                Service?</label>
                                            <input type="checkbox" class="toggle"
                                                   id="unpacking_service"
                                                   name="unpacking_service">
                                            <label
                                                for="unpacking_service"><span>Yes</span><span>No</span></label>
                                        </div>

                                        <div class="form-group">
                                            <label for="partial_packing_service">Would you like to add Partial Packing
                                                Service (fragile items only)?</label>
                                            <input type="checkbox" class="toggle"
                                                   id="partial_packing_service"
                                                   name="partial_packing_service">
                                            <label
                                                for="partial_packing_service"><span>Yes</span><span>No</span></label>
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
                                <h3><span class="greenIcon"><i class="fa fa-plus"></i></span>Additional Information
                                </h3>
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
                        <input type="hidden" name="subject" value="We Move and Clean - Removals Contact Form">
                    </div>
                </div>
            </form>
        </section>
        <section class="content-container collapse" id="office-collapse">
            <form id="contact_form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="service" value="Office Removals">
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
                                            <input type="date" class="form-control required" id="from_date"
                                                   name="from_date">
                                            <span id="from_date_error" class="error">From date is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>To</label>
                                            <input type="date" class="form-control required" id="to_date"
                                                   name="to_date">
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
                                    <div class="col-md-3">
                                        <label for="company_name">Company Name</label>
                                        <input type="text" class="form-control" id="company_name" name="company_name">
                                    </div>
                                </div>
                                <br>
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
                    <div class="col-md-6">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-truck"></i></span>Collection Info</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Property number and street name</label>
                                            <input type="text" class="form-control" id="pty_number" name="pty_number">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
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
                                        <div class="form-group">
                                            <label>Parking <span class="red">*</span></label>
                                            <select class="form-control required" id="collection_parking"
                                                    name="collection_parking">
                                                <option value="">--- Select ---</option>
                                                <option value="Company Car Park">Company Car Park</option>
                                                <option value="Driveway">Driveway</option>
                                                <option value="Street (same side as the property)">Street (same side as
                                                    the property)
                                                </option>
                                                <option value="Street (opposite side to the property)">Street (opposite
                                                    side to the property)
                                                </option>
                                                <option value="Pay & Display Parking">pay and display parking</option>
                                            </select>
                                            <span class="error">Collection parking is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Distance from the door <span class="red">*</span></label>
                                            <select class="form-control required" id="collection_door_distance"
                                                    name="collection_door_distance">
                                                <option value="">--- Select ---</option>
                                                <option value="Less than 16 feet (5 meters)">Less than 16 feet (5
                                                    meters)
                                                </option>
                                                <option value="Less than 50 feet (15 meters)">Less than 50 feet (15
                                                    meters)
                                                </option>
                                                <option value="Less than 100 feet (30 meters)">Less than 100 feet (30
                                                    meters)
                                                </option>
                                            </select>
                                            <span class="error">Collection door distance is required</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="collection_floor_number">Floor <span
                                                                class="red">*</span></label>
                                                        <select class="form-control required"
                                                                id="collection_floor_number"
                                                                name="collection_floor_number" data-toggle_field="true"
                                                                data-fields="#office_collection_floor_hidden">
                                                            <option value="">--- Select ---</option>
                                                            <option value="ground">Ground</option>
                                                            <option value="1stfloor">1</option>
                                                            <option value="2ndfloor">2</option>
                                                            <option value="3rdfloor">3</option>
                                                            <option value="4thfloor">4</option>
                                                            <option value="5thfloor">5</option>
                                                            <option value="6thfloor">6</option>
                                                            <option value="7thfloor">7</option>
                                                            <option value="8thfloor">8</option>
                                                            <option value="9thfloor">9</option>
                                                        </select>
                                                        <span class="error">Floor field is required.</span>
                                                    </div>
                                                </div>
                                                <div id="office_collection_floor_hidden" class="soft-hide">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="collection_lift">Access to lift <span
                                                                    class="red">*</span></label>
                                                            <select class="form-control"
                                                                    id="collection_lift"
                                                                    name="collection_lift">
                                                                <option value="">--- Select ---</option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>

                                                            </select>
                                                            <span class="error">Floor field is required.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-truck"></i></span>Delivery Info</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Property number and street name</label>
                                            <input type="text" class="form-control" id="delivery_pty_number"
                                                   name="delivery_pty_number">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Postcode <span class="red">*</span></label>
                                            <input type="text" class="form-control required" id="delivery_postcode"
                                                   name="delivery_postcode">
                                            <span id="delivery_postcode_error" class="error">Postcode is required</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Parking <span class="red">*</span></label>
                                            <select class="form-control required" id="delivery_parking"
                                                    name="delivery_parking">
                                                <option value="">--- Select ---</option>
                                                <option value="Company Car Park">Company Car Park</option>
                                                <option value="Driveway">Driveway</option>
                                                <option value="Street (same side as the property)">Street (same side as
                                                    the property)
                                                </option>
                                                <option value="Street (opposite side to the property)">Street (opposite
                                                    side to the property)
                                                </option>
                                                <option value="Pay & Display Parking">pay and display parking</option>
                                            </select>
                                            <span class="error">Delivery parking is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Distance from the door <span class="red">*</span></label>
                                            <select class="form-control required" id="delivery_door_distance"
                                                    name="delivery_door_distance">
                                                <option value="">--- Select ---</option>
                                                <option value="Less than 16 feet (5 meters)">Less than 16 feet (5
                                                    meters)
                                                </option>
                                                <option value="Less than 50 feet (15 meters)">Less than 50 feet (15
                                                    meters)
                                                </option>
                                                <option value="Less than 100 feet (30 meters)">Less than 100 feet
                                                    (30
                                                    meters)
                                                </option>
                                            </select>
                                            <span class="error">Delivery door distance is required</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="delivery_floor_number">Floor <span
                                                                class="red">*</span></label>
                                                        <select class="form-control required"
                                                                id="delivery_floor_number"
                                                                name="delivery_floor_number" data-toggle_field="true"
                                                                data-fields="#office_delivery_floor_hidden">
                                                            <option value="">--- Select ---</option>
                                                            <option value="ground">Ground</option>
                                                            <option value="1stfloor">1</option>
                                                            <option value="2ndfloor">2</option>
                                                            <option value="3rdfloor">3</option>
                                                            <option value="4thfloor">4</option>
                                                            <option value="5thfloor">5</option>
                                                            <option value="6thfloor">6</option>
                                                            <option value="7thfloor">7</option>
                                                            <option value="8thfloor">8</option>
                                                            <option value="9thfloor">9</option>
                                                        </select>
                                                        <span class="error">Floor field is required.</span>
                                                    </div>
                                                </div>
                                                <div id="office_delivery_floor_hidden" class="soft-hide">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="delivery_lift">Access to lift <span
                                                                    class="red">*</span></label>
                                                            <select class="form-control"
                                                                    id="delivery_lift"
                                                                    name="delivery_lift">
                                                                <option value="">--- Select ---</option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>

                                                            </select>
                                                            <span class="error">Floor field is required.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                <h3><span class="greenIcon"><i class="fa fa-th-list"></i></span>List of inventory
                                </h3>
                            </div>
                            <div class="serviceFormBox__content serviceFormBox__content--alt">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="office_furniture">Please describe what office furniture needs
                                                moving:</label>
                                            <textarea id="office_furniture" name="office_furniture"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="office_electrical">Please describe what computer / electrical
                                                equipment needs moving:</label>
                                            <textarea id="office_electrical" name="office_electrical"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="other_items">Please point out any other items that need
                                                moving:</label>
                                            <textarea id="other_items" name="other_items"
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
                                <h3><span class="greenIcon"><i class="fa fa-wrench"></i></span>Furniture Dismantling
                                    and
                                    Assembly</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>Does any furniture need dismantling?</p>
                                                <input type="checkbox" class="toggle"
                                                       id="office_furniture_need_dismantling"
                                                       name="office_furniture_need_dismantling">
                                                <label
                                                    for="office_furniture_need_dismantling"><span>Yes</span><span>No</span></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group" id="imgFld">
                                                    <label>Click here to add pictures</label>
                                                    <input type="file" id="office_furniture_dismantling_pictures" multiple="multiple" data-file_list="#office_furniture_dismatling_files">
                                                    <input type="hidden" id="office_furniture_dismatling_files" name="office_furniture_dismatling_files">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Comments on Furniture Dismantling and Assembly</p>
                                        <textarea class="form-control" id="office_furniture_dismantling_comments"
                                                  name="office_furniture_dismantling_comments"></textarea>
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
                                <h3><span class="greenIcon"><i class="fa fa-wrench" aria-hidden="true"></i></span>Packing
                                    and Unpacking Service</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="office_packing_service">Would you like to add Packing
                                                Service?</label>
                                            <input type="checkbox" class="toggle" id="office_packing_service"
                                                   name="office_packing_service">
                                            <label for="office_packing_service"><span>Yes</span><span>No</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="office_unpacking_service">Would you like to add Unpacking
                                                Service?</label>
                                            <input type="checkbox" class="toggle" id="office_unpacking_service"
                                                   name="office_unpacking_service">
                                            <label
                                                for="office_unpacking_service"><span>Yes</span><span>No</span></label>
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
                                <h3><span class="greenIcon"><i class="fa fa-wrench"></i></span>Crate Hire</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>Would you like to add Crate Hire?</p>
                                                <input type="checkbox" class="toggle"
                                                       id="crate_hire"
                                                       name="crate_hire">
                                                <label
                                                    for="crate_hire"><span>Yes</span><span>No</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <input type="date" class="form-control"
                                                           id="crate_from_date"
                                                           name="crate_from_date">
                                                    <span id="crate_from_date_error"
                                                          class="error">From date is required</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>To</label>
                                                    <input type="date" class="form-control" id="crate_to_date"
                                                           name="crate_to_date">
                                                    <span id="crate_to_date_error"
                                                          class="error">From date is required</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>Would you like to add Office Move Package?</p>
                                                <input type="checkbox" class="toggle"
                                                       id="office_move_package"
                                                       name="office_move_package">
                                                <label
                                                    for="office_move_package"><span>Yes</span><span>No</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <input type="date" class="form-control"
                                                           id="office_move_package_from_date"
                                                           name="office_move_package_from_date">
                                                    <span id="office_move_package_from_date_error" class="error">From date is required</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>To</label>
                                                    <input type="date" class="form-control"
                                                           id="office_move_package_to_date"
                                                           name="office_move_package_to_date">
                                                    <span id="office_move_package_to_date_error" class="error">From date is required</span>
                                                </div>
                                            </div>
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
                                <h3><span class="greenIcon"><i class="fa fa-plus"></i></span>Additional Information
                                </h3>
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
                        <input type="hidden" name="subject" value="We Move and Clean - Removals Contact Form">
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