<?php
global $page_title, $page_link;
$page_title = "Crate Hire Services";
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
                            <li role="presentation" class="active"><a href="#crate" aria-controls="crate" role="tab"
                                                                      data-toggle="tab">Crate Hire</a></li>
                            <li role="presentation"><a href="#house" aria-controls="house" role="tab"
                                                       data-toggle="tab">House Move Package</a></li>
                            <li role="presentation"><a href="#office" aria-controls="office" role="tab"
                                                       data-toggle="tab">Office Move Package</a></li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade in active" id="crate">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/we-move-and-clean-service-crate-hire-2.jpg" class="img-responsive respond"
                                 alt="We Move & Clean - Crate Hire">
                        </div>
                        <div class="col-md-6 one-line-padding">
                            <p>This service is ideal for:</p>
                            <ul>
                                <li>People who would like to do the packing themselves</li>
                                <li>People who would like to be sure that their goods (especially fragile items) will &lsquo;survive&rsquo; the journey; crates are far superior to cardboard boxes due to their durability</li>
                                <li>People who don&rsquo;t want to be left with cardboard boxes after their house move</li>
                                <li>People who value convenience; crates will be delivered and collected wherever the customer wishes</li>
                            </ul>
                            <p>Most of our customers add:</p>
                            <p>&lsquo;<a href="services-removals.php">Removals</a>&rsquo;, &lsquo;<a href="services-van-with-driver-hire.php">Van &amp; Driver Hire</a>&rsquo;</p>



                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="contact-btn">
                                        <a href="#crate-collapse" class="btn" data-toggle="collapse"
                                           data-untoggle="#office-move-collapse;#house-move-collapse">Get A Quote</a>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="contact-btn">
                                        <a href="#why-us-crate-collapse" class="btn" data-toggle="collapse" data-untoggle="#why-us-house-collapse;#why-us-office-collapse">Why Us?</a>
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

            <div role="tabpanel" class="tab-pane fade" id="house">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/we-move-and-clean-service-crate-hire-2.jpg" class="img-responsive respond"
                             alt="We Move & Clean - Crate Hire">
                    </div>
                    <div class="col-md-6 one-line-padding">
                        <p>This service is ideal for:</p>
                        <ul>
                            <li>People who would like to do the packing of their office themselves</li>
                            <li>People who would like to be sure that their goods (especially fragile items) will &lsquo;survive&rsquo; the journey; crates are far superior to cardboard boxes due to their durability</li>
                            <li>People who don&rsquo;t want to be left with cardboard boxes and other packing material after their relocation</li>
                            <li>People who value convenience since the &lsquo;The Package&rsquo; will be delivered and collected where the customer wishes</li>
                        </ul>
                        <p>Most of our customers add:</p>
                        <p>&lsquo;<a href="services-removals.php">House Removal</a>&rsquo;, &lsquo;<a href="services-van-with-driver-hire.php">Van &amp; Driver Hire</a>&rsquo;</p>



                        <div class="row">
                            <div class="col-xs-5">
                                <div class="contact-btn">
                                    <a href="#house-move-collapse" class="btn" data-toggle="collapse"
                                       data-untoggle="#crate-collapse;#office-move-collapse">Get A Quote</a>
                                </div>
                            </div>

                            <div class="col-xs-4">
                                <div class="contact-btn">
                                    <a href="#why-us-house-collapse" class="btn" data-toggle="collapse" data-untoggle="#why-us-crate-collapse;#why-us-office-collapse">Why Us?</a>
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
                        <img src="images/we-move-and-clean-service-crate-hire-2.jpg" class="img-responsive respond"
                             alt="We Move & Clean - Crate Hire">
                    </div>
                    <div class="col-md-6 one-line-padding">
                        <p>This service is ideal for:</p>
                        <ul>
                            <li>People who would like to do the packing themselves</li>
                            <li>People who would like to be sure that their goods (especially fragile items) will &lsquo;survive&rsquo; the journey; crates are far superior to cardboard boxes due to their durability</li>
                            <li>People who don&rsquo;t want to be left with cardboard boxes and other packing material after their house move</li>
                            <li>People who value convenience since the &lsquo;The Package&rsquo; will be delivered and collected wherever the customer wishes</li>
                        </ul>
                        <p>Most of our customers add:</p>
                        <p>&lsquo;<a href="services-removals.php#office">Office Removal</a>&rsquo;, &lsquo;<a href="services-van-with-driver-hire.php">Van &amp; Driver Hire</a>&rsquo;,</p>


                        <div class="row">
                            <div class="col-xs-5">
                                <div class="contact-btn">
                                    <a href="#office-move-collapse" class="btn" data-toggle="collapse"
                                       data-untoggle="#house-move-collapse;#crate-collapse">Get A Quote</a>
                                </div>

                            </div>

                            <div class="col-xs-4">
                                <div class="contact-btn">
                                    <a href="#why-us-office-collapse" class="btn" data-toggle="collapse" data-untoggle="#why-us-house-collapse;#why-us-crate-collapse">Why Us?</a>
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
        </section>

        <section class="content-container collapse" id="why-us-crate-collapse">
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
                        Insurance (£1,000,000)’
                    </p>
                    <p>
                        <strong>YOU CAN TRUST US </strong>
                        We’ve been checked and are regularly monitored by ‘<a href="https://www.buywithconfidence.gov.uk/home/?usertype=consumer#">Trading Standards</a>’ and ‘<a href="http://www.checkatrade.com/WeMoveAndClean/">Checkatrade</a>’.
                    </p>
                    <p>
                        <strong>YOU WILL HIRE PROFESSIONALS </strong>
                        We’ll always be on time and the crates we provide are of the best quality and durability which means your items will always be safe and secure in them.
                    </p>
                    <p>
                        <strong>YOU KNOW WHAT'S GOING ON</strong>
                        <strong> </strong>
                        You'll know in advance what the plan of action is and you'll always be kept updated.
                    </p>
                    <p>
                        <strong>YOU WILL SAVE TIME AND MONEY </strong>
                        If you wish to add ‘<a href="services-removals.php">Removals</a>’ or ‘<a href="services-van-with-driver-hire.php">Van &amp; Driver Hire</a>’ to this service you’ll save time by contacting only one company. You’ll save money due to our huge
                        discounts when taking two or more services.
                    </p>
                    <p>
                        <strong>YOU CHOOSE, YOU DECIDE </strong>
                        You’re always in control so it’s up to you how many crates and how long you’d like to hire them for.
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
                        Insurance (£1,000,000)’
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
                        If you wish to add ‘<a href="services-removals.php">House Removal</a>’ or ‘<a href="services-van-with-driver-hire.php">Van &amp; Driver Hire</a>’ to this service you’ll save time by contacting only one company. You’ll save money due to our
                        huge discounts when taking two or more services.
                    </p>
                    <p>
                        <strong>YOU CHOOSE, YOU DECIDE </strong>
                        You’re always in control so it’s up to you how long you’d like to hire the ‘House Move Package’ for.
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
                        Insurance (£1,000,000)’
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
                        If you wish to add ‘<a href="services-removals.php#office">Office Removal</a>’ or ‘<a href="services-van-with-driver-hire.php">Van &amp; Driver Hire</a>’ to this service you’ll save time by contacting only one company. You’ll save money due to
                        our huge discounts when taking two or more services.
                    </p>
                    <p>
                        <strong>YOU CHOOSE, YOU DECIDE </strong>
                        You’re always in control so it’s up to you how long you’d like to hire the ‘Office Move Package’ for.
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

        <section class="content-container collapse" id="crate-collapse">
            <form id="contact_form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="service" value="Crate Hire">
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
                                <h3><span class="greenIcon"><i class="fa fa-calendar"></i></span>Rental Start Date</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" class="form-control required" id="from_date"
                                                   name="from_date">
                                            <span id="from_date_error" class="error">From date is required</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-calendar"></i></span>Rental End Date</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="date" class="form-control required" id="to_date"
                                                       name="to_date">
                                                <span id="to_date_error" class="error">To date is required</span>
                                            </div>
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
                                                <option value="Pay and Display">Pay and Display Parking</option>
                                            </select>
                                            <span class="error">Collection parking is required</span>
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
                                            <input type="text" class="form-control" id="delivery_pty_number" name="delivery_pty_number">
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
                                                <option value="Pay and Display">Pay and Display Parking</option>
                                            </select>
                                            <span class="error">Delivery parking is required</span>
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
                                <h3><span class="greenIcon"><i class="fa fa-plus"></i></span>Quantity</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><span class="red">*</span> Please note you will receieve labels and
                                                crate security seals that match the number of crates you have
                                                ordered</label>
                                            <select class="form-control required" id="crate_quantity"
                                                    name="crate_quantity">
                                                <option value="">--- Select ---</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                                <option value="50">50</option>
                                                <option value="60">60</option>
                                                <option value="70">70</option>
                                                <option value="80">80</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <span class="error">Quantity is required</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="serviceFormBox services-crate-hire-add">
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
                        <input type="hidden" name="subject" value="We Move and Clean - Crate Hire Contact Form">
                    </div>
                </div>
            </form>
        </section>
        <section class="content-container collapse" id="house-move-collapse">
            <form id="contact_form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="service" value="Crate - House Move Package">
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
                                <h3><span class="greenIcon"><i class="fa fa-calendar"></i></span>Rental Start Date</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" class="form-control required" id="from_date"
                                                   name="from_date">
                                            <span id="from_date_error" class="error">From date is required</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-calendar"></i></span>Rental End Date</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="date" class="form-control required" id="to_date"
                                                       name="to_date">
                                                <span id="to_date_error" class="error">To date is required</span>
                                            </div>
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
                                                <option value="Driveway">Driveway</option>
                                                <option value="Street (same side as the property)">Street (same side as
                                                    the property)
                                                </option>
                                                <option value="Street (opposite side to the property)">Street (opposite
                                                    side to the property)
                                                </option>
                                                <option value="Pay and Display">Pay and Display Parking</option>
                                            </select>
                                            <span class="error">Collection parking is required</span>
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
                                            <input type="text" class="form-control" id="delivery_pty_number" name="delivery_pty_number">
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
                                                <option value="Driveway">Driveway</option>
                                                <option value="Street (same side as the property)">Street (same side as
                                                    the property)
                                                </option>
                                                <option value="Street (opposite side to the property)">Street (opposite
                                                    side to the property)
                                                </option>
                                                <option value="Pay and Display">Pay and Display Parking</option>
                                            </select>
                                            <span class="error">Delivery parking is required</span>
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
                                <h3><span class="greenIcon"><i class="fa fa-th-list"></i></span>Package Size</h3>
                                <span class="error img_check_error">You must select at least one package</span>
                            </div>
                            <div class="serviceFormBox__content serviceFormBox__content--alt">
                                <div class="imgCheckList package_list">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Package 1</h4>
                                                <br>
                                                <label for="package_1">
                                                    <ul class="list-unstyled">
                                                        <li>20 x crates</li>
                                                        <li>20 x crate security labels</li>
                                                        <li>20 x labels</li>
                                                        <li>2 x wardrobe boxes</li>
                                                        <li>1 x keyboard sleeve</li>
                                                        <li>1 x computer screen protector</li>
                                                        <li>1 x marker pen</li>
                                                        <li>1 x small set of bubble bags</li>
                                                    </ul>
                                                </label>
                                                <div class="center">
                                                    <br/>
                                                    <br/>
                                                    <input type="checkbox" class="toggle" id="package_1"
                                                           name="package_1">
                                                    <label for="package_1"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Package 2</h4>
                                                <br>
                                                <label for="package_2">
                                                    <ul class="list-unstyled">
                                                        <li>30 x crates</li>
                                                        <li>30 x crate security labels</li>
                                                        <li>30 x labels</li>
                                                        <li>3 x wardrobe boxes</li>
                                                        <li>1 x keyboard sleeve</li>
                                                        <li>1 x computer screen protector</li>
                                                        <li>1 x marker pen</li>
                                                        <li>1 x small set of bubble bags</li>
                                                    </ul>
                                                </label>
                                                <div class="center">
                                                    <br/>
                                                    <br/>
                                                    <input type="checkbox" class="toggle" id="package_2"
                                                           name="package_2">
                                                    <label for="package_2"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Package 3</h4>
                                                <br>
                                                <label for="package_3">
                                                    <ul class="list-unstyled">
                                                        <li>40 x crates</li>
                                                        <li>40 x crate security labels</li>
                                                        <li>40 x labels</li>
                                                        <li>4 x wardrobe boxes</li>
                                                        <li>2 x keyboard sleeve</li>
                                                        <li>2 x computer screen protector</li>
                                                        <li>2 x marker pen</li>
                                                        <li>1 x medium set of bubble bags</li>
                                                    </ul>
                                                </label>
                                                <div class="center">
                                                    <br/>
                                                    <br/>
                                                    <input type="checkbox" class="toggle" id="package_3"
                                                           name="package_3">
                                                    <label for="package_3"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Package 4</h4>
                                                <br>
                                                <label for="package_4">
                                                    <ul class="list-unstyled">
                                                        <li>50 x crates</li>
                                                        <li>50 x crate security labels</li>
                                                        <li>50 x labels</li>
                                                        <li>5 x wardrobe boxes</li>
                                                        <li>2 x keyboard sleeve</li>
                                                        <li>2 x computer screen protector</li>
                                                        <li>2 x marker pen</li>
                                                        <li>1 x medium set of bubble bags</li>
                                                    </ul>
                                                </label>
                                                <div class="center">
                                                    <br/>
                                                    <br/>
                                                    <input type="checkbox" class="toggle" id="package_4"
                                                           name="package_4">
                                                    <label for="package_4"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Package 5</h4>
                                                <br>
                                                <label for="package_5">
                                                    <ul class="list-unstyled">
                                                        <li>60 x crates</li>
                                                        <li>60 x crate security labels</li>
                                                        <li>60 x labels</li>
                                                        <li>6 x wardrobe boxes</li>
                                                        <li>3 x keyboard sleeve</li>
                                                        <li>3 x computer screen protector</li>
                                                        <li>3 x marker pen</li>
                                                        <li>1 x large set of bubble bags</li>
                                                    </ul>
                                                </label>
                                                <div class="center">
                                                    <br/>
                                                    <br/>
                                                    <input type="checkbox" class="toggle" id="package_5"
                                                           name="package_5">
                                                    <label for="package_5"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Package 6</h4>
                                                <br>
                                                <label for="package_6">
                                                    <ul class="list-unstyled">
                                                        <li>70 x crates</li>
                                                        <li>70 x crate security labels</li>
                                                        <li>70 x labels</li>
                                                        <li>7 x wardrobe boxes</li>
                                                        <li>3 x keyboard sleeve</li>
                                                        <li>3 x computer screen protector</li>
                                                        <li>3 x marker pen</li>
                                                        <li>1 x large set of bubble bags</li>
                                                    </ul>
                                                </label>
                                                <div class="center">
                                                    <br/>
                                                    <br/>
                                                    <input type="checkbox" class="toggle" id="package_6"
                                                           name="package_6">
                                                    <label for="package_6"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Package 7</h4>
                                                <br>
                                                <label for="package_7">
                                                    <ul class="list-unstyled">
                                                        <li>80 x crates</li>
                                                        <li>80 x crate security labels</li>
                                                        <li>80 x labels</li>
                                                        <li>8 x wardrobe boxes</li>
                                                        <li>3 x keyboard sleeve</li>
                                                        <li>3 x computer screen protector</li>
                                                        <li>4 x marker pen</li>
                                                        <li>1 x XL set of bubble bags</li>
                                                    </ul>
                                                </label>
                                                <div class="center">
                                                    <br/>
                                                    <br/>
                                                    <input type="checkbox" class="toggle" id="package_7"
                                                           name="package_7">
                                                    <label for="package_7"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Package 8</h4>
                                                <br>
                                                <label for="package_8">
                                                    <ul class="list-unstyled">
                                                        <li>90 x crates</li>
                                                        <li>90 x crate security labels</li>
                                                        <li>90 x labels</li>
                                                        <li>9 x wardrobe boxes</li>
                                                        <li>3 x keyboard sleeve</li>
                                                        <li>3 x computer screen protector</li>
                                                        <li>4 x marker pen</li>
                                                        <li>1 x XL set of bubble bags</li>
                                                    </ul>
                                                </label>
                                                <div class="center">
                                                    <br/>
                                                    <br/>
                                                    <input type="checkbox" class="toggle" id="package_8"
                                                           name="package_8">
                                                    <label for="package_8"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="other_items">Please point out any additional items you would like to
                                            receive from the list above:</label>
                                        <textarea id="other_items" name="other_items"
                                                  class="form-control"></textarea>
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
                        <input type="hidden" name="subject" value="We Move and Clean - Crate Hire Form">
                    </div>
                </div>
            </form>
        </section>
        <section class="content-container collapse" id="office-move-collapse">
            <form id="contact_form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="service" value="Crate - Office Move Package">
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
                                <h3><span class="greenIcon"><i class="fa fa-calendar"></i></span>Rental Start Date</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" class="form-control required" id="from_date"
                                                   name="from_date">
                                            <span id="from_date_error" class="error">From date is required</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-calendar"></i></span>Rental End Date</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="date" class="form-control required" id="to_date"
                                                       name="to_date">
                                                <span id="to_date_error" class="error">To date is required</span>
                                            </div>
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
                                                <option value="Pay and Display">Pay and Display Parking</option>
                                            </select>
                                            <span class="error">Collection parking is required</span>
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
                                            <input type="text" class="form-control" id="delivery_pty_number" name="delivery_pty_number">
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
                                                <option value="Pay and Display">Pay and Display Parking</option>
                                            </select>
                                            <span class="error">Delivery parking is required</span>
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
                                <h3><span class="greenIcon"><i class="fa fa-th-list"></i></span>Package Size</h3>
                                <span class="error img_check_error">You must select at least one package</span>
                            </div>
                            <div class="serviceFormBox__content serviceFormBox__content--alt">
                                <div class="imgCheckList package_list">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Package 1</h4>
                                                <br>
                                                <label for="office_package_1">
                                                    <ul class="list-unstyled">
                                                        <li>20 x crates</li>
                                                        <li>20 x crate security labels</li>
                                                        <li>20 x labels</li>
                                                        <li>2 x keyboard sleeve</li>
                                                        <li>2 x computer screen protector</li>
                                                        <li>1 x IT comp moving crate</li>
                                                        <li>1 x marker pen</li>
                                                        <li>1 x small set of bubble bags</li>
                                                    </ul>
                                                </label>
                                                <div class="center">
                                                    <br/>
                                                    <br/>
                                                    <input type="checkbox" class="toggle" id="office_package_1"
                                                           name="office_package_1">
                                                    <label
                                                        for="office_package_1"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Package 2</h4>
                                                <br>
                                                <label for="office_package_2">
                                                    <ul class="list-unstyled">
                                                        <li>30 x crates</li>
                                                        <li>30 x crate security labels</li>
                                                        <li>30 x labels</li>
                                                        <li>2 x keyboard sleeve</li>
                                                        <li>2 x computer screen protector</li>
                                                        <li>1 x IT comp moving crate</li>
                                                        <li>1 x marker pen</li>
                                                        <li>1 x small set of bubble bags</li>
                                                    </ul>
                                                </label>
                                                <div class="center">
                                                    <br/>
                                                    <br/>
                                                    <input type="checkbox" class="toggle" id="office_package_2"
                                                           name="office_package_2">
                                                    <label
                                                        for="office_package_2"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Package 3</h4>
                                                <br>
                                                <label for="office_package_3">
                                                    <ul class="list-unstyled">
                                                        <li>40 x crates</li>
                                                        <li>40 x crate security labels</li>
                                                        <li>40 x labels</li>
                                                        <li>4 x keyboard sleeve</li>
                                                        <li>4 x computer screen protector</li>
                                                        <li>2 x IT comp moving crate</li>
                                                        <li>2 x marker pen</li>
                                                        <li>1 x medium set of bubble bags</li>
                                                    </ul>
                                                </label>
                                                <div class="center">
                                                    <br/>
                                                    <br/>
                                                    <input type="checkbox" class="toggle" id="office_package_3"
                                                           name="office_package_3">
                                                    <label
                                                        for="office_package_3"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Package 4</h4>
                                                <br>
                                                <label for="office_package_4">
                                                    <ul class="list-unstyled">
                                                        <li>50 x crates</li>
                                                        <li>50 x crate security labels</li>
                                                        <li>50 x labels</li>
                                                        <li>4 x keyboard sleeve</li>
                                                        <li>4 x computer screen protector</li>
                                                        <li>2 x IT comp moving crate</li>
                                                        <li>2 x marker pen</li>
                                                        <li>1 x medium set of bubble bags</li>
                                                    </ul>
                                                </label>
                                                <div class="center">
                                                    <br/>
                                                    <br/>
                                                    <input type="checkbox" class="toggle" id="office_package_4"
                                                           name="office_package_4">
                                                    <label
                                                        for="office_package_4"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Package 5</h4>
                                                <br>
                                                <label for="office_package_5">
                                                    <ul class="list-unstyled">
                                                        <li>60 x crates</li>
                                                        <li>60 x crate security labels</li>
                                                        <li>60 x labels</li>
                                                        <li>6 x keyboard sleeve</li>
                                                        <li>6 x computer screen protector</li>
                                                        <li>3 x IT comp moving crate</li>
                                                        <li>3 x marker pen</li>
                                                        <li>1 x large set of bubble bags</li>
                                                    </ul>
                                                </label>
                                                <div class="center">
                                                    <br/>
                                                    <br/>
                                                    <input type="checkbox" class="toggle" id="office_package_5"
                                                           name="office_package_5">
                                                    <label
                                                        for="office_package_5"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Package 6</h4>
                                                <br>
                                                <label for="office_package_6">
                                                    <ul class="list-unstyled">
                                                        <li>70 x crates</li>
                                                        <li>70 x crate security labels</li>
                                                        <li>70 x labels</li>
                                                        <li>6 x keyboard sleeve</li>
                                                        <li>6 x computer screen protector</li>
                                                        <li>3 x IT comp moving crate</li>
                                                        <li>3 x marker pen</li>
                                                        <li>1 x large set of bubble bags</li>
                                                    </ul>
                                                </label>
                                                <div class="center">
                                                    <br/>
                                                    <br/>
                                                    <input type="checkbox" class="toggle" id="office_package_6"
                                                           name="office_package_6">
                                                    <label
                                                        for="office_package_6"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Package 7</h4>
                                                <br>
                                                <label for="office_package_7">
                                                    <ul class="list-unstyled">
                                                        <li>80 x crates</li>
                                                        <li>80 x crate security labels</li>
                                                        <li>80 x labels</li>
                                                        <li>8 x keyboard sleeve</li>
                                                        <li>8 x computer screen protector</li>
                                                        <li>4 x IT comp moving crate</li>
                                                        <li>4 x marker pen</li>
                                                        <li>1 x XL set of bubble bags</li>
                                                    </ul>
                                                </label>
                                                <div class="center">
                                                    <br/>
                                                    <br/>
                                                    <input type="checkbox" class="toggle" id="office_package_7"
                                                           name="office_package_7">
                                                    <label
                                                        for="office_package_7"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Package 8</h4>
                                                <br>
                                                <label for="office_package_8">
                                                    <ul class="list-unstyled">
                                                        <li>90 x crates</li>
                                                        <li>90 x crate security labels</li>
                                                        <li>90 x labels</li>
                                                        <li>8 x keyboard sleeve</li>
                                                        <li>8 x computer screen protector</li>
                                                        <li>4 x IT comp moving crate</li>
                                                        <li>4 x marker pen</li>
                                                        <li>1 x XL set of bubble bags</li>
                                                    </ul>
                                                </label>
                                                <div class="center">
                                                    <br/>
                                                    <br/>
                                                    <input type="checkbox" class="toggle" id="office_package_8"
                                                           name="office_package_8">
                                                    <label
                                                        for="office_package_8"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="other_rooms">Please point out any other additional items you would
                                            like to receive from the list above:</label>
                                        <textarea id="other_items" name="other_items"
                                                  class="form-control"></textarea>
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
                        <input type="hidden" name="subject" value="We Move and Clean - Crate Hire Form">
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