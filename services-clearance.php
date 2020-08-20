<?php
global $page_title, $page_link;
$page_title = "Clearance Services";
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
                            <li role="presentation"><a href="#rubbish" aria-controls="rubbish" role="tab"
                                                       data-toggle="tab">Rubbish</a></li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade in active" id="house">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/we-move-and-clean-rubbish-clearance-house.jpg"
                                 class="img-responsive respond"
                                 alt="We Move & Clean - House Rubbish Clearance">
                        </div>
                        <div class="col-md-6 one-line-padding">
                            <p>This service is ideal for people who would like to dispose of household items due to:</p>
                            <ul>
                                <li>Moving into an already furnished property</li>
                                <li>The condition of items (old / broken)</li>
                                <li>Bereavement</li>
                            </ul>
                            <p>Most of our customers add:</p>
                            <p>&lsquo;<a href="services-cleaning.php">Cleaning</a>&rsquo; and &lsquo;<a
                                    href="services-carpet-cleaning.php">Carpet Cleaning</a>&rsquo;</p>


                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="contact-btn">
                                        <a href="#house-collapse" class="btn" data-toggle="collapse"
                                           data-untoggle="#office-collapse;#rubbish-collapse">Get A Quote</a>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="contact-btn">
                                        <a href="#why-us-house-collapse" class="btn" data-toggle="collapse" data-untoggle="#why-us-office-collapse;#why-us-rubbish-collapse">Why Us?</a>
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
                            <img src="images/we-move-and-clean-clearance-office.jpg" class="img-responsive respond"
                                 alt="We Move & Clean - Office Clearance">
                        </div>
                        <div class="col-md-6 one-line-padding">
                            <p>This service is ideal for:</p>
                            <ul>
                                <li>People wanting to dispose of old office furniture</li>
                            </ul>
                            <p>Most of our customers add:</p>
                            <p>&lsquo;<a href="services-cleaning.php#commercial">Office / Commercial
                                    Cleaning</a>&rsquo;, &lsquo;<a href="services-carpet-cleaning.php#commercial">Commercial
                                    Carpet Cleaning</a>&rsquo;</p>

                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="contact-btn">
                                        <a href="#office-collapse" class="btn" data-toggle="collapse"
                                           data-untoggle="#house-collapse;#rubbish-collapse">Get A Quote</a>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="contact-btn">
                                        <a href="#why-us-office-collapse" class="btn" data-toggle="collapse" data-untoggle="#why-us-house-collapse;#why-us-rubbish-collapse">Why Us?</a>
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
                <div role="tabpanel" class="tab-pane fade" id="rubbish">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/we-move-and-clean-rubbish-clearance.jpg"
                                 class="img-responsive respond"
                                 alt="We Move & Clean - Rubbish Clearance">
                        </div>
                        <div class="col-md-6 one-line-padding">
                            <p>This service is ideal for:</p>
                            <ul>
                                <li>People wanting to dispose of rubbish from their house, office, garden, shed, loft,
                                    garage, basement etc.
                                </li>
                            </ul>
                            <p>Most of our customers add:</p>
                            <p>&lsquo;<a href="services-cleaning.php">Cleaning</a>&rsquo;, &lsquo;<a
                                    href="services-carpet-cleaning.php">Carpet Cleaning</a>&rsquo; &nbsp;</p>

                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="contact-btn">
                                        <a href="#rubbish-collapse" class="btn" data-toggle="collapse"
                                           data-untoggle="#house-collapse;#office-collapse">Get A Quote</a>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="contact-btn">
                                        <a href="#why-us-rubbish-collapse" class="btn" data-toggle="collapse" data-untoggle="#why-us-office-collapse;#why-us-house-collapse">Why Us?</a>
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
                        We’ve got more than a decade of combined experience in the waste disposal industry. What’s more, we’re fully licensed due to our Waste Carrier’s License
                        from The Environmental Agency and your property is covered by ‘Public Liability Insurance (£1,000,000)’
                    </p>
                    <p>
                        <strong>YOU CAN TRUST US </strong>
                        We’ve been checked and are regularly monitored by ‘<a href="https://www.buywithconfidence.gov.uk/home/?usertype=consumer">Trading Standards</a>’ and ‘<a href="http://www.checkatrade.com/WeMoveAndClean/">Checkatrade</a>’.
                    </p>
                    <p>
                        <strong>YOU WILL HIRE PROFESSIONALS </strong>
                        We aim to recycle at least 80% of what we collect and our staff are fully trained and uniformed.
                    </p>
                    <p>
                        <strong>YOU KNOW WHAT'S GOING ON</strong>
                        <strong> </strong>
                        You'll know in advance what the plan of action is and you'll always be kept updated.
                    </p>
                    <p>
                        <strong>YOU WILL SAVE TIME AND MONEY </strong>
                        You don’t have to waste time on applying for a Skip Hire Permit and doing the work yourself. In most cases we beat quotes for hiring a skip.    <strong> </strong>
                    </p>
                    <p>
                        <strong>YOU CHOOSE, YOU DECIDE </strong>
                        Our rates are based on volume we collect so you’re always in control of your budget. It’s up to you if you’d like to dispose of only a few items or the
                        contents of a whole property.
                    </p>
                    <p align="center">
                        We accept last minute bookings and if necessary work on Sundays and bank holidays
                    </p>
                </div>
                <div class="col-md-4">
                    <a href="http://www.checkatrade.com/WeMoveAndClean" target="_blank">
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
                        We’ve got more than a decade of combined experience in the waste disposal industry. What’s more, we’re fully licensed due to our Waste Carrier’s License
                        from The Environmental Agency and your property is covered by ‘Public Liability Insurance (£1,000,000)’
                    </p>
                    <p>
                        <strong>YOU CAN TRUST US </strong>
                        We’ve been checked and are regularly monitored by ‘<a href="https://www.buywithconfidence.gov.uk/home/?usertype=consumer">Trading Standards</a>’ and ‘<a href="http://www.checkatrade.com/WeMoveAndClean/">Checkatrade</a>’.
                    </p>
                    <p>
                        <strong>YOU WILL HIRE PROFESSIONALS </strong>
                        We aim to recycle at least 80% of what we collect and our staff are fully trained and uniformed.
                    </p>
                    <p>
                        <strong>YOU KNOW WHAT'S GOING ON</strong>
                        <strong> </strong>
                        You'll know in advance what the plan of action is and you'll always be kept updated.
                    </p>
                    <p>
                        <strong>YOU WILL SAVE TIME AND MONEY </strong>
                        You don’t have to waste time on applying for Skip Hire Permit and doing the work yourself. In most cases we beat quotes for hiring a skip.    <strong> </strong>
                    </p>
                    <p>
                        <strong>YOU CHOOSE, YOU DECIDE </strong>
                        Our rates are based on volume we collect so you’re always in control of your budget. It’s up to you if you’d like to dispose of only a few items or the
                        contents of a whole property.
                    </p>
                    <p align="center">
                        We accept last minute bookings and if necessary work on Sundays and bank holidays
                    </p>
                </div>
                <div class="col-md-4">
                    <a href="http://www.checkatrade.com/WeMoveAndClean" target="_blank">
                        <img src="http://www.checkatrade.com/Reputation/ApiChart/WeMoveAndClean.png" alt="Checkatrade information for We Move and Clean "/>
                    </a>
                </div>
            </div>
        </section>

        <section class="content-container collapse" id="why-us-rubbish-collapse">
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
                        We’ve got more than a decade of combined experience in the waste disposal industry. What’s more, we’re fully licensed due to our Waste Carrier’s License
                        from The Environmental Agency and your property is covered by ‘Public Liability Insurance (£1,000,000)’
                    </p>
                    <p>
                        <strong>YOU CAN TRUST US </strong>
                        We’ve been checked and are regularly monitored by ‘<a href="https://www.buywithconfidence.gov.uk/home/?usertype=consumer">Trading Standards</a>’ and ‘<a href="http://www.checkatrade.com/WeMoveAndClean/">Checkatrade</a>’.
                    </p>
                    <p>
                        <strong>YOU WILL HIRE PROFESSIONALS </strong>
                        We aim to recycle at least 80% of what we collect and our staff are fully trained and uniformed.
                    </p>
                    <p>
                        <strong>YOU KNOW WHAT'S GOING ON</strong>
                        <strong> </strong>
                        You'll know in advance what the plan of action is and you'll always be kept updated.
                    </p>
                    <p>
                        <strong>YOU WILL SAVE TIME AND MONEY </strong>
                        You don’t have to waste time on applying for a Skip Hire Permit and doing the work yourself. In most cases we beat quotes for hiring a skip.    <strong> </strong>
                    </p>
                    <p>
                        <strong>YOU CHOOSE, YOU DECIDE </strong>
                        Our rates are based on volume we collect so you’re always in control of your budget. It’s up to you if you’d like to dispose of only a few items or
                        contents of a whole property
                    </p>
                    <p align="center">
                        We accept last minute bookings and if necessary work on Sundays and bank holidays
                    </p>
                </div>
                <div class="col-md-4">
                    <a href="http://www.checkatrade.com/WeMoveAndClean" target="_blank">
                        <img src="http://www.checkatrade.com/Reputation/ApiChart/WeMoveAndClean.png" alt="Checkatrade information for We Move and Clean "/>
                    </a>
                </div>
            </div>
        </section>

        <section class="content-container collapse" id="house-collapse">
            <form id="contact_form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="service" value="House Clearance">
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
                                <br/>
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
                                                            data-fields="#collection_flat_hidden">
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
                                                <div class="col-md-6">
                                                    <div id="collection_flat_hidden" class="soft-hide">
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
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-th-list"></i></span>Description</h3>
                            </div>
                            <div class="serviceFormBox__content serviceFormBox__content--alt">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="furniture_disposal">Please describe what furniture you would
                                                like to dispose of:</label>
                                            <textarea id="furniture_disposal" name="furniture_disposal"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="kitchen_disposal">Please describe what white goods / kitchen
                                                appliances you would like to dispose of:</label>
                                            <textarea id="kitchen_disposal" name="kitchen_disposal"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="other_disposal">Please describe any other items you would like
                                                to dispose of:</label>
                                            <textarea id="other_disposal" name="other_disposal"
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
                                                       id="house_furniture_need_dismantling"
                                                       name="house_furniture_need_dismantling">
                                                <label
                                                    for="house_furniture_need_dismantling"><span>Yes</span><span>No</span></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group" id="imgFld">
                                                    <label>Click here to add pictures</label>
                                                    <input type="file" id="qut_furniture_dismantling_pictures" multiple="multiple" data-file_list="#furniture_dismantling_files">
                                                    <input type="hidden" id="furniture_dismantling_files" name="furniture_dismantling_files">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Comments on Furniture Dismantling and Assembly</p>
                                        <textarea class="form-control" id="qut_furniture_dismantling_comments"
                                                  name="qut_furniture_dismantling_comments"></textarea>
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
                        <input type="hidden" name="subject" value="We Move and Clean - House Clearance Contact Form">
                    </div>
                </div>
            </form>
        </section>
        <section class="content-container collapse" id="office-collapse">
            <form id="contact_form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="service" value="Office Clearance">
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
                                        <br/>
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
                                                        <select class="form-control"
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
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-th-list"></i></span>Description</h3>
                            </div>
                            <div class="serviceFormBox__content serviceFormBox__content--alt">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="furniture_disposal">Please describe what office furniture you
                                                would like to dispose of:</label>
                                            <textarea id="furniture_disposal" name="furniture_disposal"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="kitchen_disposal">Please describe what computer / electronical
                                                equipment you would like to dispose of:</label>
                                            <textarea id="kitchen_disposal" name="kitchen_disposal"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="other_disposal">Please describe any other items you would like
                                                to dispose of:</label>
                                            <textarea id="other_disposal" name="other_disposal"
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
                                                    <input type="file" id="office_furniture_dismantling_pictures" multiple="multiple" data-file_list="#office_furniture_dismantling_files">
                                                    <input type="hidden" id="office_furniture_dismantling_files" name="office_furniture_dismantling_files">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Comments on Furniture Dismantling and Assembly</p>
                                        <textarea class="form-control" id="qut_furniture_dismantling_comments"
                                                  name="qut_furniture_dismantling_comments"></textarea>
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
                        <input type="hidden" name="subject" value="We Move and Clean - Office Clearance Contact Form">
                    </div>
                </div>
            </form>
        </section>

        <section class="content-container collapse" id="rubbish-collapse">
            <form id="contact_form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="service" value="Rubbish Clearance">
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
                    <div class="col-md-12">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-truck"></i></span>Collection Info</h3>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-wrench"></i></span>Description</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dispose_of">Please describe the items / rubbish you would like
                                                to dispose of</label>
                                            <textarea id="dispose_of" name="dispose_of" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="size_of_load">Approximate size of the load <span
                                                    class="red">*</span></label>
                                            <select class="form-control required" id="size_of_load" name="size_of_load">
                                                <option value="">-- Select --</option>
                                                <option value="5 cubic yards">5 cubic yards</option>
                                                <option value="7 cubic yards">7 cubic yards</option>
                                                <option value="10 cubic yards">10 cubic yards</option>
                                            </select>
                                            <span class="error">Size of load is required</span>
                                            <p><em>Please note that 1 cubic yard is about the same size as 2 wheelie
                                                    bins or standard domestic fridge-freezer</em></p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="waste_contained">How is the waste contained? <span
                                                    class="red">*</span></label>
                                            <select class="form-control required" id="waste_contained"
                                                    name="waste_contained">
                                                <option value="">-- Select --</option>
                                                <option value="Loose">Loose</option>
                                                <option value="Sacks">Sacks</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <span class="error">How the waste is contained is required</span>
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
                                <h3><span class="greenIcon"><i class="fa fa-truck"></i></span>Parking</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="parking">Parking <span class="red">*</span></label>
                                            <select class="form-control required" id="parking" name="parking">
                                                <option value="">-- Select --</option>
                                                <option value="Driveway">Driveway</option>
                                                <option value="Street Same Side">Street (same side as property)</option>
                                                <option value="Street Opposite Side">Street (opposite side of
                                                    property)
                                                </option>
                                            </select>
                                            <span class="error">Parking is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="distance_from_load">Distance from the load <span
                                                    class="red">*</span></label>
                                            <select class="form-control required" id="distance_from_load"
                                                    name="distance_from_load">
                                                <option value="">-- Select --</option>
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
                                            <span class="error">Distance from load is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <label for="load_location">Location of the load <span
                                                class="red">*</span></label>
                                        <select class="form-control required" id="load_location" name="load_location">
                                            <option value="">-- Select --</option>
                                            <option value="Inside (downstairs)">Inside (downstairs)</option>
                                            <option value="Inside (upstairs)">Inside (upstairs)</option>
                                            <option value="Outside (front garden / yard)">Outside (front garden /
                                                yard)
                                            </option>
                                            <option value="Outside (back garden / yard)">Outside (back garden / yard)
                                            </option>
                                            <option value="All over the place">All over the place</option>
                                            <option value="Somewhere else (please specify below)">Somewhere else (please
                                                specify below)
                                            </option>
                                        </select>
                                        <span class="error">Location of load is required</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="pull-left">I will arrange parking space for "We Move and Clean" staff</span>
                                            <div class="pull-right">
                                                <input type="checkbox" class="toggle" id="parking_for_staff"
                                                       name="parking_for_staff">
                                                <label for="parking_for_staff"><span>Yes</span><span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="parking_comments">Additional Comments</label>
                                        <textarea id="parking_comments" name="parking_comments"
                                                  class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row">
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
                        <input type="hidden" name="subject" value="We Move and Clean - Rubbish Clearance Contact Form">
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