<?php
global $page_title, $page_link;
$page_title = "Cleaning Services";
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
                            <li role="presentation" class="active"><a href="#domestic" aria-controls="domestic"
                                                                      role="tab"
                                                                      data-toggle="tab">Domestic</a></li>
                            <li role="presentation"><a href="#commercial" aria-controls="commercial" role="tab"
                                                       data-toggle="tab">Commercial</a></li>
                            <li role="presentation"><a href="#endtenancy" aria-controls="endtenancy" role="tab"
                                                       data-toggle="tab">End of Tenancy</a></li>
                            <li role="presentation"><a href="#pretenancy" aria-controls="pretenancy" role="tab"
                                                       data-toggle="tab">Pre-Tenancy</a></li>
                            <li role="presentation"><a href="#spring" aria-controls="spring" role="tab"
                                                       data-toggle="tab">One-Off / Spring</a></li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade in active" id="domestic">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/TcGa0HzELtc?rel=0" frameborder="0"
                                        allowfullscreen></iframe>
                            </div>
                            <!-- 16:9 aspect ratio -->
                            <!--                            <div class="embed-responsive embed-responsive-16by9">-->
                            <!--                                <video width="320" height="240" controls autoplay>-->
                            <!--                                    <source src="videos/MoveClean_Cleaning_Full%20HD.mp4" type="video/mp4">-->
                            <!--                                </video>-->
                            <!--                            </div>-->
                        </div>
                        <div class="col-md-6 one-line-padding">
                            <p>This service is ideal for:</p>
                            <ul>
                                <li>people who require their property to be professionally cleaned on a regular basis
                                </li>
                            </ul>
                            <p>Most of our customers add:</p>
                            <p>&lsquo;<a href="services-carpet-cleaning.php">Carpet Cleaning</a>&rsquo; and &lsquo;<a
                                    href="services-clearance.php">Clearance</a>&rsquo;</p>
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="contact-btn">
                                        <a href="#domestic-collapse" class="btn" data-toggle="collapse"
                                           data-untoggle="#commercial-collapse;#end-of-tenancy-collapse;#pre-tenancy-collapse;#spring-collapse">Get
                                            A Quote</a>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="contact-btn">
                                        <a href="#why-us-domestic-collapse" class="btn" data-toggle="collapse"
                                           data-untoggle="#why-us-eot-collapse;#why-us-commercial-collapse;#why-us-pre-collapse;#why-us-once-collapse">Why
                                            Us?</a>
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
                            <img src="images/we-move-and-clean-service-2.jpg" class="img-responsive respond"
                                 alt="We Move & Clean - Cleaning Commercial">
                        </div>
                        <div class="col-md-6 one-line-padding">
                            <p>This service is ideal for:</p>
                            <ul>
                                <li>people who require their office / commercial space to be professionally cleaned on a
                                    regular basis or as a one-off service
                                </li>
                            </ul>
                            <p>Most of our customers add:</p>
                            <p>&lsquo;<a href="services-carpet-cleaning.php">Carpet Cleaning</a>&rsquo; and &lsquo;<a
                                    href="services-clearance.php">Clearance</a>&rsquo;</p>
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="contact-btn">
                                        <a href="#commercial-collapse" class="btn" data-toggle="collapse"
                                           data-untoggle="#domestic-collapse;#end-of-tenancy-collapse;#pre-tenancy-collapse;#spring-collapse">Get
                                            A Quote</a>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="contact-btn">
                                        <a href="#why-us-commercial-collapse" class="btn" data-toggle="collapse"
                                           data-untoggle="#why-us-domestic-collapse;#why-us-eot-collapse;#why-us-pre-collapse;#why-us-once-collapse">Why
                                            Us?</a>
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
                <div role="tabpanel" class="tab-pane fade" id="endtenancy">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/TcGa0HzELtc?rel=0" frameborder="0"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-6 one-line-padding">
                            <p>There are 2 types of &lsquo;End of Tenancy Cleaning&rsquo;:</p>
                            <p><strong>END OF TENANCY CLEANING</strong></p>
                            <p>Ideal for:</p>
                            <ul>
                                <li>people who move out and would like to guarantee they&rsquo;ll get their rent deposit
                                    back, with confirmation of professional cleaning having been carried out (applies to
                                    most Letting Agencies)
                                </li>
                            </ul>
                            <ul>
                                <li>people who move out and require their whole property to be professionally cleaned
                                </li>
                            </ul>
                            <p><strong>PARTIAL END OF TENANCY CLEANING</strong></p>
                            <p>Ideal for:</p>
                            <ul>
                                <li>people who move out and don&rsquo;t require confirmation of professional cleaning
                                    (applies to most Private Landlords or situation where you&rsquo;re selling your
                                    property)
                                </li>
                            </ul>
                            <ul>
                                <li>people who move out and feel comfortable cleaning a part of their property
                                    themselves but would like to leave the most demanding areas (kitchen with white
                                    goods, bathrooms, shower rooms, toilet rooms etc.) to us
                                </li>
                            </ul>
                            <p>Most of our customers add:</p>
                            <p>&lsquo;<a href="services-carpet-cleaning.php">Carpet Cleaning</a>&rsquo; and &lsquo;<a
                                    href="services-clearance.php">Clearance</a>&rsquo;</p>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contact-btn-orange text-center">
                                        <a href="#" class="btn">Download your essential checklist</a>
                                    </div>
                                    <br />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="contact-btn">
                                        <a href="#end-of-tenancy-collapse" class="btn" data-toggle="collapse"
                                           data-untoggle="#domestic-collapse;#commercial-collapse;#pre-tenancy-collapse;#spring-collapse">Get
                                            A Quote</a>
                                    </div>

                                </div>

                                <div class="col-xs-4">
                                    <div class="contact-btn">
                                        <a href="#why-us-eot-collapse" class="btn" data-toggle="collapse"
                                           data-untoggle="#why-us-domestic-collapse;#why-us-commercial-collapse;#why-us-pre-collapse;#why-us-once-collapse">Why
                                            Us?</a>
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
                <div role="tabpanel" class="tab-pane fade" id="pretenancy">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/TcGa0HzELtc?rel=0" frameborder="0"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-6 one-line-padding">
                            <p>There are 2 types of &lsquo;Pre-Tenancy Cleaning&rsquo;:</p>
                            <strong>PRE- TENANCY CLEANING</strong>
                            <p>Ideal for:</p>
                            <ul>
                                <li>people who require their whole property to be professionally cleaned before they
                                    move in
                                </li>
                            </ul>
                            <strong>PARTIAL PRE- TENANCY CLEANING</strong>
                            <p>Ideal for:</p>
                            <ul>
                                <li>people who feel comfortable cleaning a part of their property themselves but would
                                    like to leave the most demanding areas (kitchen with white goods, bathrooms, shower
                                    rooms, toilet rooms etc.) to us before they move in
                                </li>
                            </ul>
                            <p>Most of our customers add:</p>
                            <p>&lsquo;<a href="services-carpet-cleaning.php">Carpet Cleaning</a>&rsquo; and &lsquo;<a
                                    href="services-clearance.php">Clearance</a>&rsquo;</p>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contact-btn-orange text-center">
                                        <a href="#" class="btn">Download your essential checklist</a>
                                    </div>
                                    <br />
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="contact-btn">
                                        <a href="#pre-tenancy-collapse" class="btn" data-toggle="collapse"
                                           data-untoggle="#domestic-collapse;#commercial-collapse;#spring-collapse;#end-of-tenancy-collapse">Get
                                            A Quote</a>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="contact-btn">
                                        <a href="#why-us-pre-collapse" class="btn" data-toggle="collapse"
                                           data-untoggle="#why-us-domestic-collapse;#why-us-commercial-collapse;#why-us-eot-collapse;#why-us-once-collapse">Why
                                            Us?</a>
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
                <div role="tabpanel" class="tab-pane fade" id="spring">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/TcGa0HzELtc?rel=0" frameborder="0"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-6 one-line-padding">
                            <p>There are 2 types of &lsquo;One-off / Spring Cleaning&rsquo;</p>
                            <p><strong>ONE-OFF / SPRING CLEANING</strong></p>
                            <p>Ideal for:</p>
                            <ul>
                                <li>people who already live at their property and require it to be professionally
                                    cleaned
                                </li>
                            </ul>
                            <p><strong>PARTIAL ONE-OFF / SPRING CLEANING</strong></p>
                            <p>Ideal for:</p>
                            <ul>
                                <li>people who already live at their property and would like to have only a part of it
                                    professionally cleaned (kitchen with white goods, bathrooms, shower rooms, toilet
                                    rooms etc.)
                                </li>
                            </ul>
                            <p>Most of our customers add:</p>
                            <p>&lsquo;<a href="services-carpet-cleaning.php">Carpet Cleaning</a>&rsquo; and &lsquo;<a
                                    href="services-clearance.php">Clearance</a>&rsquo;</p>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contact-btn-orange text-center">
                                        <a href="#" class="btn">Download your essential checklist</a>
                                    </div>
                                    <br />
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="contact-btn">
                                        <a href="#spring-collapse" class="btn" data-toggle="collapse"
                                           data-untoggle="#domestic-collapse;#commercial-collapse;#end-of-tenancy-collapse;#pre-tenancy-collapse">Get
                                            A Quote</a>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="contact-btn">
                                        <a href="#why-us-once-collapse" class="btn" data-toggle="collapse"
                                           data-untoggle="#why-us-domestic-collapse;#why-us-commercial-collapse;#why-us-eot-collapse;#why-us-pre-collapse">Why
                                            Us?</a>
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

        <section class="content-container collapse" id="why-us-domestic-collapse">
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
                        We’ve got more than a decade of combined experience in the cleaning industry. What’s more, your
                        property and your belongings are covered by ‘Public
                        Liability Insurance (£1,000,000)’
                    </p>
                    <p>
                        <strong>YOU CAN TRUST US </strong>
                        We’ve been checked and are regularly monitored by ‘<a
                            href="https://www.buywithconfidence.gov.uk/home/?usertype=consumer">Trading Standards</a>’
                        and ‘<a href="http://www.checkatrade.com/WeMoveAndClean/">Checkatrade</a>’.
                    </p>
                    <p>
                        <strong>YOU WILL HIRE PROFESSIONALS </strong>
                        We use specialised equipment (like deep steam cleaning equipment etc.) which removes 99.99% of
                        bacteria and viruses and our staff are fully trained and
                        uniformed.
                    </p>
                    <p>
                        <strong>YOU KNOW WHAT'S GOING ON</strong>
                        <strong> </strong>
                        You'll know in advance what the plan of action is and you'll always be kept updated.
                    </p>
                    <p>
                        <strong>YOU WILL SAVE TIME AND MONEY </strong>
                        If you wish to add ‘<a href="services-carpet-cleaning.php">Carpet Cleaning</a>’ or ‘<a
                            href="services-clearance.php">Clearance</a>’ service to your <a
                            href="services-cleaning.php">Domestic Cleaning</a> you’ll save time by contacting only one
                        company. You’ll save money
                        due to our huge discounts when taking two or more services.
                    </p>
                    <p>
                        <strong>YOU CHOOSE, YOU DECIDE </strong>
                        You’re always in control so it’s up to you how frequently you’d like our friendly team to visit
                        you.
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

        <section class="content-container collapse" id="why-us-commercial-collapse">
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
                        We’ve got more than a decade of combined experience in the cleaning industry. What’s more, your
                        property and your belongings are covered by ‘Public
                        Liability Insurance (£1,000,000)’
                    </p>
                    <p>
                        <strong>YOU CAN TRUST US </strong>
                        We’ve been checked and are regularly monitored by ‘<a
                            href="https://www.buywithconfidence.gov.uk/home/?usertype=consumer">Trading Standards</a>’
                        and ‘<a href="http://www.checkatrade.com/WeMoveAndClean/">Checkatrade</a>’.
                    </p>
                    <p>
                        <strong>YOU WILL HIRE PROFESSIONALS </strong>
                        We use specialised equipment (like deep steam cleaning equipment etc.) which removes 99.99% of
                        bacteria and viruses and our staff are fully trained and
                        uniformed.
                    </p>
                    <p>
                        <strong>YOU KNOW WHAT'S GOING ON</strong>
                        <strong> </strong>
                        You'll know in advance what the plan of action is and you'll always be kept updated.
                    </p>
                    <p>
                        <strong>YOU WILL SAVE TIME AND MONEY </strong>
                        If you wish to add ‘<a href="services-carpet-cleaning.php">Carpet Cleaning</a>’ or ‘<a
                            href="services-clearance.php">Clearance</a>’ service to your ‘<a
                            href="services-cleaning.php#commercial">Commercial Cleaning</a>’ you’ll save time by
                        contacting only one company. You’ll save
                        money due to our huge discounts when taking two or more services.
                    </p>
                    <p>
                        <strong>YOU CHOOSE, YOU DECIDE </strong>
                        You’re always in control so it’s up to you how frequently you’d like our friendly team to visit
                        you.
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

        <section class="content-container collapse" id="why-us-eot-collapse">
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
                        We’ve got more than a decade of combined experience in the cleaning industry. What’s more, your
                        property and your belongings are covered by ‘Public
                        Liability Insurance (£1,000,000)’
                    </p>
                    <p>
                        <strong>YOU CAN TRUST US </strong>
                        We’ve been checked and are regularly monitored by ‘<a
                            href="https://www.buywithconfidence.gov.uk/home/?usertype=consumer">Trading Standards</a>’
                        and ‘<a href="http://www.checkatrade.com/WeMoveAndClean/">Checkatrade</a>’.
                    </p>
                    <p>
                        <strong>YOU WILL HIRE PROFESSIONALS </strong>
                        We use specialised equipment (like deep steam cleaning equipment etc.) which removes 99.99% of
                        bacteria and viruses and our staff are fully trained and
                        uniformed.
                    </p>
                    <p>
                        <strong>YOU KNOW WHAT'S GOING ON</strong>
                        <strong> </strong>
                        You'll know in advance what the plan of action is and you'll always be kept updated.
                    </p>
                    <p>
                        <strong>YOU WILL SAVE TIME AND MONEY </strong>
                        If you wish to add ‘<a href="services-carpet-cleaning.php">Carpet Cleaning</a>’ or ‘<a
                            href="services-clearance.php">Clearance</a>’ service to your End of Tenancy Cleaning you’ll
                        save time by contacting only one company. You’ll save
                        money due to our huge discounts when taking two or more services.
                    </p>
                    <p>
                        <strong>YOU CHOOSE, YOU DECIDE </strong>
                        You’re always in control so it’s up to you if you’d like to choose Full End of Tenancy Cleaning
                        or Partial End of Tenancy Cleaning.
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

        <section class="content-container collapse" id="why-us-pre-collapse">
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
                        We’ve got more than a decade of combined experience in the cleaning industry. What’s more, your
                        property and your belongings are covered by ‘Public
                        Liability Insurance (£1,000,000)’
                    </p>
                    <p>
                        <strong>YOU CAN TRUST US </strong>
                        We’ve been checked and are regularly monitored by ‘<a
                            href="https://www.buywithconfidence.gov.uk/home/?usertype=consumer">Trading Standards</a>’
                        and ‘<a href="http://www.checkatrade.com/WeMoveAndClean/">Checkatrade</a>’.
                    </p>
                    <p>
                        <strong>YOU WILL HIRE PROFESSIONALS </strong>
                        We use specialised equipment (like deep steam cleaning equipment etc.) which removes 99.99% of
                        bacteria and viruses and our staff are fully trained and
                        uniformed.
                    </p>
                    <p>
                        <strong>YOU KNOW WHAT'S GOING ON</strong>
                        <strong> </strong>
                        You'll know in advance what the plan of action is and you'll always be kept updated.
                    </p>
                    <p>
                        <strong>YOU WILL SAVE TIME AND MONEY </strong>
                        If you wish to add ’<a href="services-carpet-cleaning.php">Carpet Cleaning</a>’ or ‘<a
                            href="services-clearance.php">Clearance</a>’ service to your Pre-Tenancy Cleaning you’ll
                        save time by contacting only one company. You’ll save money
                        due to our huge discounts when taking two or more services.
                    </p>
                    <p>
                        <strong>YOU CHOOSE, YOU DECIDE </strong>
                        You’re always in control so it’s up to you if you’d like to choose ‘Full Pre-Tenancy Cleaning’
                        or ‘Partial Pre-Tenancy Cleaning’.
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

        <section class="content-container collapse" id="why-us-once-collapse">
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
                        We’ve got more than a decade of combined experience in the cleaning industry. What’s more, your
                        property and your belongings are covered by ‘Public
                        Liability Insurance (£1,000,000)’
                    </p>
                    <p>
                        <strong>YOU CAN TRUST US </strong>
                        We’ve been checked and are regularly monitored by ‘<a
                            href="https://www.buywithconfidence.gov.uk/home/?usertype=consumer">Trading Standards</a>’
                        and ‘<a href="http://www.checkatrade.com/WeMoveAndClean/">Checkatrade</a>’.
                    </p>
                    <p>
                        <strong>YOU WILL HIRE PROFESSIONALS </strong>
                        We use specialised equipment (like deep steam cleaning equipment etc.) which removes 99.99% of
                        bacteria and viruses and our staff are fully trained and
                        uniformed.
                    </p>
                    <p>
                        <strong>YOU KNOW WHAT'S GOING ON</strong>
                        <strong> </strong>
                        You'll know in advance what the plan of action is and you'll always be kept updated.
                    </p>
                    <p>
                        <strong>YOU WILL SAVE TIME AND MONEY </strong>
                        If you wish to add ‘<a href="services-carpet-cleaning.php">Carpet Cleaning</a>’ or ‘<a
                            href="services-clearance.php">Clearance</a>’ service to your ‘<a
                            href="services-cleaning.php#spring">One-off / Spring Cleaning</a>’ you’ll save time by
                        contacting only one company. You’ll
                        save money due to our huge discounts when taking two or more services.
                    </p>
                    <p>
                        <strong>YOU CHOOSE, YOU DECIDE </strong>
                        You’re always in control so it’s up to you if you’d like to choose ‘<a
                            href="services-cleaning.php#spring">Full One-off / Spring Cleaning</a>’ or ‘<a
                            href="services-cleaning.php#spring">Partial One-off / Spring Cleaning</a>’
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

        <section class="content-container collapse" id="domestic-collapse">
            <form id="contact_form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="service" value="Domestic Cleaning">
                <div class="row">
                    <div class="col-md-6">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-calendar"></i></span>Days of the week & time
                                </h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <br/>
                                        <label>Monday</label>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>From</label>
                                            <select class="form-control" id="monday_from" name="monday_from">
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>To</label>
                                            <select class="form-control" id="monday_to" name="monday_to">
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
                                <div class="row">
                                    <div class="col-md-4">
                                        <br/>
                                        <label>Tuesday</label>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>From</label>
                                            <select class="form-control" id="tuesday_from" name="tuesday_from">
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>To</label>
                                            <select class="form-control" id="tuesday_to" name="tuesday_to">
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
                                <div class="row">
                                    <div class="col-md-4">
                                        <br/>
                                        <label>Wednesday</label>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>From</label>
                                            <select class="form-control" id="wednesday_from" name="wednesday_from">
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>To</label>
                                            <select class="form-control" id="wednesday_to" name="wednesday_to">
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
                                <div class="row">
                                    <div class="col-md-4">
                                        <br/>
                                        <label>Thursday</label>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>From</label>
                                            <select class="form-control" id="thursday_from" name="thursday_from">
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>To</label>
                                            <select class="form-control" id="thursday_to" name="thursday_to">
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
                                <div class="row">
                                    <div class="col-md-4">
                                        <br/>
                                        <label>Friday</label>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>From</label>
                                            <select class="form-control" id="friday_from" name="friday_from">
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>To</label>
                                            <select class="form-control" id="friday_to" name="friday_to">
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
                                <div class="row">
                                    <div class="col-md-4">
                                        <br/>
                                        <label>Saturday</label>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>From</label>
                                            <select class="form-control" id="saturday_from" name="saturday_from">
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>To</label>
                                            <select class="form-control" id="saturday_to" name="saturday_to">
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
                                <div class="row">
                                    <div class="col-md-4">
                                        <br/>
                                        <label>Sunday</label>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>From</label>
                                            <select class="form-control" id="sunday_from" name="sunday_from">
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>To</label>
                                            <select class="form-control" id="sunday_to" name="sunday_to">
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
                    <div class="col-md-6">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-calendar"></i></span>Time</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Frequency</label>
                                            <select class="form-control" id="frequency" name="frequency">
                                                <option value="">-- Select --</option>
                                                <option value="Weekly">Weekly</option>
                                                <option value="Fortnightly">Fortnightly</option>
                                                <option value="Monthly">Monthly</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="serviceFormBox min-height-415">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-user"></i></span>Personal Info</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <select class="form-control valid" id="title" name="title">
                                                <option value="Mr">Mr</option>
                                                <option value="Mrs">Mrs</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                            <span id="name_error" class="error">Name is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Email <span class="red">*</span></label>
                                            <input type="text" class="form-control required" id="email" name="email">
                                            <span id="email_error" class="error">Email is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-2"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
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
                                    <div class="col-md-12">
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
                    <div class="col-md-6">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-th-list"></i></span>Additional Services</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    Ironing
                                                </div>
                                                <div class="col-md-11">
                                                    <input type="checkbox" class="toggle" id="ironing" name="ironing">
                                                    <label for="ironing"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    Food Shopping
                                                </div>
                                                <div class="col-md-11">
                                                    <input type="checkbox" class="toggle" id="food_shopping"
                                                           name="food_shopping">
                                                    <label for="food_shopping"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    Dog Walking
                                                </div>
                                                <div class="col-md-11">
                                                    <input type="checkbox" class="toggle" id="dog_walking"
                                                           name="dog_walking">
                                                    <label for="dog_walking"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    Other
                                                </div>
                                                <div class="col-md-11">
                                                    <input type="checkbox" class="toggle" id="other" name="other">
                                                    <label for="other"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="other_specified">(please specify below)</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea name="other_specified" id="other_specified" rows="4"
                                                              class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="serviceFormBox min-height-454">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-plus"></i></span>Additional Information</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="additional_message">Write your notes or message</label>
                                            <textarea id="additional_message" name="additional_message" rows="10"
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
                        <input type="hidden" name="subject" value="We Move and Clean - Cleaning Contact Form">
                    </div>
                </div>
            </form>
        </section>

        <section class="content-container collapse" id="commercial-collapse">
            <form id="contact_form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="service" value="Commercial Cleaning">
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
                                            <label for="from_date">From</label>
                                            <input type="date" class="form-control" id="from_date" name="from_date">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="to_date">To</label>
                                            <input type="date" class="form-control" id="to_date" name="to_date">
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
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Property type <span class="red">*</span></label>
                                            <select class="form-control required" id="cleaning_pty_type"
                                                    name="cleaning_pty_type">
                                                <option value="">--- Select ---</option>
                                                <option value="Bungalowfurn">Bungalow</option>
                                                <option value="">-------</option>
                                                <option value="1 bed housefurn">1 bed house</option>
                                                <option value="2 bed housefurn">2 bed house</option>
                                                <option value="3 bed housefurn">3 bed house</option>
                                                <option value="4 bed housefurn">4 bed house</option>
                                                <option value="">------------</option>
                                                <option value="Studioflatfurn">Studio flat</option>
                                                <option value="1bedflatfurn">1 bed flat</option>
                                                <option value="2bedflatfurn">2 bed flat</option>
                                                <option value="3bedflatfurn">3 bed flat</option>
                                                <option value="4bedflatfurn">4 bed flat</option>
                                            </select>
                                            <span class="error">Property type is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="cleaning_furniture_number">Furniture <span
                                                    class="red">*</span></label>
                                            <select class="form-control required"
                                                    id="cleaning_furniture_number"
                                                    name="cleaning_furniture_number">
                                                <option value="">--- Select ---</option>
                                                <option value="full-furnished">Fully Furnished</option>
                                                <option value="part-furnished">Partly Furnished</option>
                                                <option value="unfurnished">Unfurnished</option>

                                            </select>
                                            <span class="error">Furniture field is required.</span>
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
                                                <input type="checkbox" class="toggle"
                                                       id="commercial-electricity_available"
                                                       name="commercial-electricity_available">
                                                <label
                                                    for="commercial-electricity_available"><span>Yes</span><span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                I will arrange parking space for "We Move and Clean" staff
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <input type="checkbox" class="toggle" id="commercial-parking_for_staff"
                                                       name="commercial-parking_for_staff">
                                                <label
                                                    for="commercial-parking_for_staff"><span>Yes</span><span>No</span></label>
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
                                                <input type="checkbox" class="toggle" id="commercial-water_available"
                                                       name="commercial-water_available">
                                                <label for="commercial-water_available"><span>Yes</span><span>No</span></label>
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
                    <div class="col-md-6">
                        <div class="serviceFormBox">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-wrench"></i></span>Type of Cleaning</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="requirements">Please select what type of cleaning you would like
                                                us to do for you.</label>
                                            <select class="form-control required" id="type_of_cleaning"
                                                    name="type_of_cleaning">
                                                <option value="">--- Select ---</option>
                                                <option value="regular">Regular</option>
                                                <option value="one-off">One-Off</option>
                                            </select>
                                            <span class="error">Type of Cleaning is required</span>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="serviceFormBox adjust-height-cleaning-requirements">
                            <div class="serviceFormBox__title">
                                <h3><span class="greenIcon"><i class="fa fa-wrench"></i></span>Requirements</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="requirements">Please describe what you would like us to do for
                                                you</label>
                                            <textarea id="requirements" name="requirements"
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
                        <input type="hidden" name="subject" value="We Move and Clean - Cleaning Contact Form">
                    </div>
                </div>
            </form>
        </section>

        <section class="content-container collapse" id="end-of-tenancy-collapse">
            <form id="contact_form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="service" value="End of Tenancy Cleaning">
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
                                            <label for="from_date">From</label>
                                            <input type="date" class="form-control" id="from_date" name="from_date">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="to_date">To</label>
                                            <input type="date" class="form-control" id="to_date" name="to_date">
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
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Property type <span class="red">*</span></label>
                                            <select class="form-control required" id="cleaning_pty_type"
                                                    name="cleaning_pty_type">
                                                <option value="">--- Select ---</option>
                                                <option value="Bungalowfurn">Bungalow</option>
                                                <option value="">-------</option>
                                                <option value="1 bed housefurn">1 bed house</option>
                                                <option value="2 bed housefurn">2 bed house</option>
                                                <option value="3 bed housefurn">3 bed house</option>
                                                <option value="4 bed housefurn">4 bed house</option>
                                                <option value="">------------</option>
                                                <option value="Studioflatfurn">Studio flat</option>
                                                <option value="1bedflatfurn">1 bed flat</option>
                                                <option value="2bedflatfurn">2 bed flat</option>
                                                <option value="3bedflatfurn">3 bed flat</option>
                                                <option value="4bedflatfurn">4 bed flat</option>
                                            </select>
                                            <span class="error">Property type is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="cleaning_furniture_number">Furniture <span
                                                    class="red">*</span></label>
                                            <select class="form-control required"
                                                    id="cleaning_furniture_number"
                                                    name="cleaning_furniture_number">
                                                <option value="">--- Select ---</option>
                                                <option value="full-furnished">Fully Furnished</option>
                                                <option value="part-furnished">Partly Furnished</option>
                                                <option value="unfurnished">Unfurnished</option>

                                            </select>
                                            <span class="error">Furniture field is required.</span>
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
                                                <input type="checkbox" class="toggle" id="eot_electricity_available"
                                                       name="eot_electricity_available">
                                                <label
                                                    for="eot_electricity_available"><span>Yes</span><span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                I will arrange parking space for "We Move and Clean" staff
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <input type="checkbox" class="toggle" id="eot_parking_for_staff"
                                                       name="eot_parking_for_staff">
                                                <label
                                                    for="eot_parking_for_staff"><span>Yes</span><span>No</span></label>
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
                                                <input type="checkbox" class="toggle" id="eot_water_available"
                                                       name="eot_water_available">
                                                <label for="eot_water_available"><span>Yes</span><span>No</span></label>
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
                                <span class="error img_check_error">You must select at least one room</span>
                            </div>
                            <div class="serviceFormBox__content serviceFormBox__content--alt">
                                <div class="imgCheckList rooms_list">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Kitchen</h4>
                                                <label for="eot-kitchen"><img src="images/quote-imgs/kitchen.jpg"
                                                                              class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="eot-kitchen"
                                                           name="eot-kitchen_room">
                                                    <label for="eot-kitchen"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Living Room</h4>
                                                <label for="eot-living_room"><img
                                                        src="images/quote-imgs/living_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="eot-living_room"
                                                           name="eot-living_room">
                                                    <label for="eot-living_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Dining Room</h4>
                                                <label for="eot-dining_room"><img
                                                        src="images/quote-imgs/dining_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="eot-dining_room"
                                                           name="eot-dining_room">
                                                    <label for="eot-dining_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Bathroom</h4>
                                                <label for="eot-bathroom_room"><img src="images/quote-imgs/bathroom.jpg"
                                                                                    class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="eot-bathroom_room"
                                                           name="eot-bathroom_room">
                                                    <label
                                                        for="eot-bathroom_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>1st Shower Room</h4>
                                                <label for="eot-first_shower_room"><img
                                                        src="images/quote-imgs/shower_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="eot-first_shower_room"
                                                           name="eot-first_shower_room">
                                                    <label
                                                        for="eot-first_shower_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>2nd Shower Room</h4>
                                                <label for="eot-second_shower_room"><img
                                                        src="images/quote-imgs/shower_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="eot-second_shower_room"
                                                           name="eot-second_shower_room">
                                                    <label for="eot-second_shower_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>3rd Shower Room</h4>
                                                <label for="eot-third_shower_room"><img
                                                        src="images/quote-imgs/shower_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="eot-third_shower_room"
                                                           name="eot-third_shower_room">
                                                    <label
                                                        for="eot-third_shower_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Toilet Room</h4>
                                                <label for="eot-toilet_room"><img
                                                        src="images/quote-imgs/toilet_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="eot-toilet_room"
                                                           name="eot-toilet_room">
                                                    <label for="eot-toilet_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>1st Bedroom</h4>
                                                <label for="eot-first_bedroom"><img src="images/quote-imgs/bedroom.jpg"
                                                                                    class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="eot-first_bedroom"
                                                           name="eot-first_bedroom">
                                                    <label
                                                        for="eot-first_bedroom"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>2nd Bedroom</h4>
                                                <label for="eot-second_bedroom"><img src="images/quote-imgs/bedroom.jpg"
                                                                                     class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="eot-second_bedroom"
                                                           name="eot-second_bedroom">
                                                    <label
                                                        for="eot-second_bedroom"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>3rd Bedroom</h4>
                                                <label for="eot-third_bedroom"><img src="images/quote-imgs/bedroom.jpg"
                                                                                    class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="eot-third_bedroom"
                                                           name="eot-third_bedroom">
                                                    <label
                                                        for="eot-third_bedroom"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>4th Bedroom</h4>
                                                <label for="eot-fourth_bedroom"><img src="images/quote-imgs/bedroom.jpg"
                                                                                     class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="eot-fourth_bedroom"
                                                           name="eot-fourth_bedroom">
                                                    <label
                                                        for="eot-fourth_bedroom"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>1st Box / Storage Room</h4>
                                                <label for="eot-first_box_storage_room"><img
                                                        src="images/quote-imgs/box_storage_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle"
                                                           id="eot-first_box_storage_room"
                                                           name="eot-first_box_storage_room">
                                                    <label
                                                        for="eot-first_box_storage_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>2nd Box / Storage Room</h4>
                                                <label for="eot-second_box_storage_room"><img
                                                        src="images/quote-imgs/box_storage_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle"
                                                           id="eot-second_box_storage_room"
                                                           name="eot-second_box_storage_room">
                                                    <label
                                                        for="eot-second_box_storage_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Lounge</h4>
                                                <label for="eot-lounge"><img src="images/quote-imgs/lounge.jpg"
                                                                             class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="eot-lounge"
                                                           name="eot-lounge_room">
                                                    <label for="eot-lounge"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Conservatory Room</h4>
                                                <label for="eot-conservatory_room"><img
                                                        src="images/quote-imgs/conservatory_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="eot-conservatory_room"
                                                           name="eot-conservatory_room">
                                                    <label
                                                        for="eot-conservatory_room"><span>Yes</span><span>No</span></label>
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
                                <h3><span class="greenIcon"><i class="fa fa-wrench"></i></span>White Goods</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>What type of fridge do you have?</label>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="standard_type_of_fridge">Standard <span
                                                            class="red">*</span></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-control required" id="standard_type_of_fridge"
                                                            name="standard_type_of_fridge">
                                                        <option value="">--- Select ---</option>
                                                        <option value="0">-- 0 --</option>
                                                        <option value="1">-- 1 --</option>
                                                        <option value="2">-- 2 --</option>
                                                        <option value="3">-- 3 --</option>
                                                    </select>
                                                    <span class="error">Amount of standard style fridges required</span>

                                                    <br/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="american_type_of_fridge">American Style <span
                                                            class="red">*</span></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-control required" id="american_type_of_fridge"
                                                            name="american_type_of_fridge">
                                                        <option value="">--- Select ---</option>
                                                        <option value="0">-- 0 --</option>
                                                        <option value="1">-- 1 --</option>
                                                        <option value="2">-- 2 --</option>
                                                        <option value="3">-- 3 --</option>
                                                    </select>
                                                    <span class="error">Amount of american style fridges required</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>What type of hob & oven do you have?</label>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="standard_type_of_oven">Standard (single, double) up to
                                                        90cm x 90cm<span class="red">*</span> </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-control required" id="standard_type_of_oven"
                                                            name="standard_type_of_oven">
                                                        <option value="">--- Select ---</option>
                                                        <option value="0">-- 0 --</option>
                                                        <option value="1">-- 1 --</option>
                                                        <option value="2">-- 2 --</option>
                                                        <option value="3">-- 3 --</option>
                                                    </select>
                                                    <span
                                                        class="error">Amount of standard style ovens & hob required</span>
                                                    <br/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="large_type_of_fridge">Rangemaster, AGA over 90cm x
                                                        90cm <span class="red">*</span></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-control required" id="large_type_of_oven"
                                                            name="large_type_of_oven">
                                                        <option value="">--- Select ---</option>
                                                        <option value="0">-- 0 --</option>
                                                        <option value="1">-- 1 --</option>
                                                        <option value="2">-- 2 --</option>
                                                        <option value="3">-- 3 --</option>
                                                    </select>
                                                    <span
                                                        class="error">Amount of large style ovens & hob required</span>
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
                        <input type="hidden" name="subject" value="We Move and Clean - Cleaning Contact Form">
                    </div>
                </div>
            </form>
        </section>

        <section class="content-container collapse" id="pre-tenancy-collapse">
            <form id="contact_form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="service" value="Pre Tenancy Cleaning">
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
                                            <label for="from_date">From</label>
                                            <input type="date" class="form-control" id="from_date" name="from_date">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="to_date">To</label>
                                            <input type="date" class="form-control" id="to_date" name="to_date">
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
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Property type <span class="red">*</span></label>
                                            <select class="form-control required" id="cleaning_pty_type"
                                                    name="cleaning_pty_type">
                                                <option value="">--- Select ---</option>
                                                <option value="Bungalowfurn">Bungalow</option>
                                                <option value="">-------</option>
                                                <option value="1 bed housefurn">1 bed house</option>
                                                <option value="2 bed housefurn">2 bed house</option>
                                                <option value="3 bed housefurn">3 bed house</option>
                                                <option value="4 bed housefurn">4 bed house</option>
                                                <option value="">------------</option>
                                                <option value="Studioflatfurn">Studio flat</option>
                                                <option value="1bedflatfurn">1 bed flat</option>
                                                <option value="2bedflatfurn">2 bed flat</option>
                                                <option value="3bedflatfurn">3 bed flat</option>
                                                <option value="4bedflatfurn">4 bed flat</option>
                                            </select>
                                            <span class="error">Property type is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="cleaning_furniture_number">Furniture <span
                                                    class="red">*</span></label>
                                            <select class="form-control required"
                                                    id="cleaning_furniture_number"
                                                    name="cleaning_furniture_number">
                                                <option value="">--- Select ---</option>
                                                <option value="full-furnished">Fully Furnished</option>
                                                <option value="part-furnished">Partly Furnished</option>
                                                <option value="unfurnished">Unfurnished</option>

                                            </select>
                                            <span class="error">Furniture field is required.</span>
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
                                                <input type="checkbox" class="toggle" id="pre_electricity_available"
                                                       name="pre_electricity_available">
                                                <label
                                                    for="pre_electricity_available"><span>Yes</span><span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                I will arrange parking space for "We Move and Clean" staff
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <input type="checkbox" class="toggle" id="pre_parking_for_staff"
                                                       name="pre_parking_for_staff">
                                                <label
                                                    for="pre_parking_for_staff"><span>Yes</span><span>No</span></label>
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
                                                <input type="checkbox" class="toggle" id="pre_water_available"
                                                       name="pre_water_available">
                                                <label for="pre_water_available"><span>Yes</span><span>No</span></label>
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
                                <span class="error img_check_error">You must select at least one room</span>
                            </div>
                            <div class="serviceFormBox__content serviceFormBox__content--alt">
                                <div class="imgCheckList rooms_list">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Kitchen</h4>
                                                <label for="pre-kitchen_room"><img src="images/quote-imgs/kitchen.jpg"
                                                                                   class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="pre-kitchen_room"
                                                           name="pre-kitchen_room">
                                                    <label
                                                        for="pre-kitchen_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Living Room</h4>
                                                <label for="pre-living_room"><img
                                                        src="images/quote-imgs/living_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="pre-living_room"
                                                           name="pre-living_room">
                                                    <label for="pre-living_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Dining Room</h4>
                                                <label for="pre-dining_room"><img
                                                        src="images/quote-imgs/dining_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="pre-dining_room"
                                                           name="pre-dining_room">
                                                    <label for="pre-dining_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Bathroom</h4>
                                                <label for="pre-bathroom"><img src="images/quote-imgs/bathroom.jpg"
                                                                               class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="pre-bathroom"
                                                           name="pre-bathroom">
                                                    <label for="pre-bathroom"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>1st Shower Room</h4>
                                                <label for="pre-first_shower_room"><img
                                                        src="images/quote-imgs/shower_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="pre-first_shower_room"
                                                           name="pre-first_shower_room">
                                                    <label
                                                        for="pre-first_shower_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>2nd Shower Room</h4>
                                                <label for="pre-second_shower_room"><img
                                                        src="images/quote-imgs/shower_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="pre-second_shower_room"
                                                           name="pre-second_shower_room">
                                                    <label for="pre-second_shower_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>3rd Shower Room</h4>
                                                <label for="pre-third_shower_room"><img
                                                        src="images/quote-imgs/shower_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="pre-third_shower_room"
                                                           name="pre-third_shower_room">
                                                    <label
                                                        for="pre-third_shower_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Toilet Room</h4>
                                                <label for="pre-toilet_room"><img
                                                        src="images/quote-imgs/toilet_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="pre-toilet_room"
                                                           name="pre-toilet_room">
                                                    <label for="pre-toilet_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>1st Bedroom</h4>
                                                <label for="pre-first_bedroom"><img src="images/quote-imgs/bedroom.jpg"
                                                                                    class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="pre-first_bedroom"
                                                           name="pre-first_bedroom">
                                                    <label
                                                        for="pre-first_bedroom"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>2nd Bedroom</h4>
                                                <label for="pre-second_bedroom"><img src="images/quote-imgs/bedroom.jpg"
                                                                                     class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="pre-second_bedroom"
                                                           name="pre-second_bedroom">
                                                    <label
                                                        for="pre-second_bedroom"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>3rd Bedroom</h4>
                                                <label for="pre-third_bedroom"><img src="images/quote-imgs/bedroom.jpg"
                                                                                    class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="pre-third_bedroom"
                                                           name="pre-third_bedroom">
                                                    <label
                                                        for="pre-third_bedroom"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>4th Bedroom</h4>
                                                <label for="pre-fourth_bedroom"><img src="images/quote-imgs/bedroom.jpg"
                                                                                     class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="pre-fourth_bedroom"
                                                           name="pre-fourth_bedroom">
                                                    <label
                                                        for="pre-fourth_bedroom"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>1st Box / Storage Room</h4>
                                                <label for="pre-first_box_storage_room"><img
                                                        src="images/quote-imgs/box_storage_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle"
                                                           id="pre-first_box_storage_room"
                                                           name="pre-first_box_storage_room">
                                                    <label
                                                        for="pre-first_box_storage_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>2nd Box / Storage Room</h4>
                                                <label for="pre-second_box_storage_room"><img
                                                        src="images/quote-imgs/box_storage_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle"
                                                           id="pre-second_box_storage_room"
                                                           name="pre-second_box_storage_room">
                                                    <label
                                                        for="pre-second_box_storage_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Lounge</h4>
                                                <label for="pre-lounge_room"><img src="images/quote-imgs/lounge.jpg"
                                                                                  class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="pre-lounge_room"
                                                           name="pre-lounge_room">
                                                    <label for="pre-lounge_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Conservatory Room</h4>
                                                <label for="pre-conservatory_room"><img
                                                        src="images/quote-imgs/conservatory_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="pre-conservatory_room"
                                                           name="pre-conservatory_room">
                                                    <label
                                                        for="pre-conservatory_room"><span>Yes</span><span>No</span></label>
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
                                <h3><span class="greenIcon"><i class="fa fa-wrench"></i></span>White Goods</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>What type of fridge do you have?</label>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="standard_type_of_fridge">Standard <span
                                                            class="red">*</span></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-control required" id="standard_type_of_fridge"
                                                            name="standard_type_of_fridge">
                                                        <option value="">--- Select ---</option>
                                                        <option value="0">-- 0 --</option>
                                                        <option value="1">-- 1 --</option>
                                                        <option value="2">-- 2 --</option>
                                                        <option value="3">-- 3 --</option>
                                                    </select>
                                                    <span class="error">Amount of standard style fridges required</span>

                                                    <br/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="american_type_of_fridge">American Style <span
                                                            class="red">*</span></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-control required" id="american_type_of_fridge"
                                                            name="american_type_of_fridge">
                                                        <option value="">--- Select ---</option>
                                                        <option value="0">-- 0 --</option>
                                                        <option value="1">-- 1 --</option>
                                                        <option value="2">-- 2 --</option>
                                                        <option value="3">-- 3 --</option>
                                                    </select>
                                                    <span class="error">Amount of american style fridges required</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>What type of hob & oven do you have?</label>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="standard_type_of_oven">Standard (single, double) up to
                                                        90cm x 90cm<span class="red">*</span> </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-control required" id="standard_type_of_oven"
                                                            name="standard_type_of_oven">
                                                        <option value="">--- Select ---</option>
                                                        <option value="0">-- 0 --</option>
                                                        <option value="1">-- 1 --</option>
                                                        <option value="2">-- 2 --</option>
                                                        <option value="3">-- 3 --</option>
                                                    </select>
                                                    <span
                                                        class="error">Amount of standard style ovens & hob required</span>
                                                    <br/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="large_type_of_fridge">Rangemaster, AGA over 90cm x
                                                        90cm <span class="red">*</span></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-control required" id="large_type_of_oven"
                                                            name="large_type_of_oven">
                                                        <option value="">--- Select ---</option>
                                                        <option value="0">-- 0 --</option>
                                                        <option value="1">-- 1 --</option>
                                                        <option value="2">-- 2 --</option>
                                                        <option value="3">-- 3 --</option>
                                                    </select>
                                                    <span
                                                        class="error">Amount of large style ovens & hob required</span>
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
                        <input type="hidden" name="subject" value="We Move and Clean - Cleaning Contact Form">
                    </div>
                </div>
            </form>
        </section>

        <section class="content-container collapse" id="spring-collapse">
            <form id="contact_form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="service" value="One-Off / Spring Cleaning">
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
                                            <label for="from_date">From</label>
                                            <input type="date" class="form-control" id="from_date" name="from_date">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="to_date">To</label>
                                            <input type="date" class="form-control" id="to_date" name="to_date">
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
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Property type <span class="red">*</span></label>
                                            <select class="form-control required" id="cleaning_pty_type"
                                                    name="cleaning_pty_type">
                                                <option value="">--- Select ---</option>
                                                <option value="Bungalowfurn">Bungalow</option>
                                                <option value="">-------</option>
                                                <option value="1 bed housefurn">1 bed house</option>
                                                <option value="2 bed housefurn">2 bed house</option>
                                                <option value="3 bed housefurn">3 bed house</option>
                                                <option value="4 bed housefurn">4 bed house</option>
                                                <option value="">------------</option>
                                                <option value="Studioflatfurn">Studio flat</option>
                                                <option value="1bedflatfurn">1 bed flat</option>
                                                <option value="2bedflatfurn">2 bed flat</option>
                                                <option value="3bedflatfurn">3 bed flat</option>
                                                <option value="4bedflatfurn">4 bed flat</option>
                                            </select>
                                            <span class="error">Property type is required</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="cleaning_furniture_number">Furniture <span
                                                    class="red">*</span></label>
                                            <select class="form-control required"
                                                    id="cleaning_furniture_number"
                                                    name="cleaning_furniture_number">
                                                <option value="">--- Select ---</option>
                                                <option value="full-furnished">Fully Furnished</option>
                                                <option value="part-furnished">Partly Furnished</option>
                                                <option value="unfurnished">Unfurnished</option>

                                            </select>
                                            <span class="error">Furniture field is required.</span>
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
                                                <input type="checkbox" class="toggle" id="one_off_electricity_available"
                                                       name="one_off_electricity_available">
                                                <label
                                                    for="one_off_electricity_available"><span>Yes</span><span>No</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                I will arrange parking space for "We Move and Clean" staff
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <input type="checkbox" class="toggle" id="one_off_parking_for_staff"
                                                       name="one_off_parking_for_staff">
                                                <label
                                                    for="one_off_parking_for_staff"><span>Yes</span><span>No</span></label>
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
                                                <input type="checkbox" class="toggle" id="one_off_water_available"
                                                       name="one_off_water_available">
                                                <label
                                                    for="one_off_water_available"><span>Yes</span><span>No</span></label>
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
                                <span class="error img_check_error">You must select at least one room</span>
                            </div>
                            <div class="serviceFormBox__content serviceFormBox__content--alt">
                                <div class="imgCheckList rooms_list">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Kitchen</h4>
                                                <label for="spring-kitchen_room"><img
                                                        src="images/quote-imgs/kitchen.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="spring-kitchen_room"
                                                           name="spring-kitchen_room">
                                                    <label
                                                        for="spring-kitchen_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Living Room</h4>
                                                <label for="spring-living_room"><img
                                                        src="images/quote-imgs/living_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="spring-living_room"
                                                           name="spring-living_room">
                                                    <label
                                                        for="spring-living_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Dining Room</h4>
                                                <label for="spring-dining_room"><img
                                                        src="images/quote-imgs/dining_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="spring-dining_room"
                                                           name="spring-dining_room">
                                                    <label
                                                        for="spring-dining_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Bathroom</h4>
                                                <label for="spring-bathroom"><img src="images/quote-imgs/bathroom.jpg"
                                                                                  class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="spring-bathroom"
                                                           name="spring-bathroom">
                                                    <label for="spring-bathroom"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>1st Shower Room</h4>
                                                <label for="spring-first_shower_room"><img
                                                        src="images/quote-imgs/shower_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="spring-first_shower_room"
                                                           name="spring-first_shower_room">
                                                    <label
                                                        for="spring-first_shower_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>2nd Shower Room</h4>
                                                <label for="spring-second_shower_room"><img
                                                        src="images/quote-imgs/shower_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="spring-second_shower_room"
                                                           name="spring-second_shower_room">
                                                    <label
                                                        for="spring-second_shower_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>3rd Shower Room</h4>
                                                <label for="spring-third_shower_room"><img
                                                        src="images/quote-imgs/shower_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="spring-third_shower_room"
                                                           name="spring-third_shower_room">
                                                    <label
                                                        for="spring-third_shower_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Toilet Room</h4>
                                                <label for="spring-toilet_room"><img
                                                        src="images/quote-imgs/toilet_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="spring-toilet_room"
                                                           name="spring-toilet_room">
                                                    <label
                                                        for="spring-toilet_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>1st Bedroom</h4>
                                                <label for="spring-first_bedroom"><img
                                                        src="images/quote-imgs/bedroom.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="spring-first_bedroom"
                                                           name="spring-first_bedroom">
                                                    <label
                                                        for="spring-first_bedroom"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>2nd Bedroom</h4>
                                                <label for="spring-second_bedroom"><img
                                                        src="images/quote-imgs/bedroom.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="spring-second_bedroom"
                                                           name="spring-second_bedroom">
                                                    <label
                                                        for="spring-second_bedroom"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>3rd Bedroom</h4>
                                                <label for="spring-third_bedroom"><img
                                                        src="images/quote-imgs/bedroom.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="spring-third_bedroom"
                                                           name="spring-third_bedroom">
                                                    <label
                                                        for="spring-third_bedroom"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>4th Bedroom</h4>
                                                <label for="spring-fourth_bedroom"><img
                                                        src="images/quote-imgs/bedroom.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="spring-fourth_bedroom"
                                                           name="spring-fourth_bedroom">
                                                    <label
                                                        for="spring-fourth_bedroom"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>1st Box / Storage Room</h4>
                                                <label for="spring-first_box_storage_room"><img
                                                        src="images/quote-imgs/box_storage_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle"
                                                           id="spring-first_box_storage_room"
                                                           name="spring-first_box_storage_room">
                                                    <label
                                                        for="spring-first_box_storage_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>2nd Box / Storage Room</h4>
                                                <label for="spring-second_box_storage_room"><img
                                                        src="images/quote-imgs/box_storage_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle"
                                                           id="spring-second_box_storage_room"
                                                           name="spring-second_box_storage_room">
                                                    <label
                                                        for="spring-second_box_storage_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Lounge</h4>
                                                <label for="spring-lounge_room"><img src="images/quote-imgs/lounge.jpg"
                                                                                     class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="spring-lounge_room"
                                                           name="spring-lounge_room">
                                                    <label
                                                        for="spring-lounge_room"><span>Yes</span><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="imgCheck center">
                                                <h4>Conservatory Room</h4>
                                                <label for="spring-conservatory_room"><img
                                                        src="images/quote-imgs/conservatory_room.jpg"
                                                        class="img-responsive"></label>
                                                <div class="center">
                                                    <input type="checkbox" class="toggle" id="spring-conservatory_room"
                                                           name="spring-conservatory_room">
                                                    <label
                                                        for="spring-conservatory_room"><span>Yes</span><span>No</span></label>
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
                                <h3><span class="greenIcon"><i class="fa fa-wrench"></i></span>White Goods</h3>
                            </div>
                            <div class="serviceFormBox__content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>What type of fridge do you have?</label>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="standard_type_of_fridge">Standard <span
                                                            class="red">*</span></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-control required" id="standard_type_of_fridge"
                                                            name="standard_type_of_fridge">
                                                        <option value="">--- Select ---</option>
                                                        <option value="0">-- 0 --</option>
                                                        <option value="1">-- 1 --</option>
                                                        <option value="2">-- 2 --</option>
                                                        <option value="3">-- 3 --</option>
                                                    </select>
                                                    <span class="error">Amount of standard style fridges required</span>

                                                    <br/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="american_type_of_fridge">American Style <span
                                                            class="red">*</span></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-control required" id="american_type_of_fridge"
                                                            name="american_type_of_fridge">
                                                        <option value="">--- Select ---</option>
                                                        <option value="0">-- 0 --</option>
                                                        <option value="1">-- 1 --</option>
                                                        <option value="2">-- 2 --</option>
                                                        <option value="3">-- 3 --</option>
                                                    </select>
                                                    <span class="error">Amount of american style fridges required</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>What type of hob & oven do you have?</label>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="standard_type_of_oven">Standard (single, double) up to
                                                        90cm x 90cm<span class="red">*</span> </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-control required" id="standard_type_of_oven"
                                                            name="standard_type_of_oven">
                                                        <option value="">--- Select ---</option>
                                                        <option value="0">-- 0 --</option>
                                                        <option value="1">-- 1 --</option>
                                                        <option value="2">-- 2 --</option>
                                                        <option value="3">-- 3 --</option>
                                                    </select>
                                                    <span
                                                        class="error">Amount of standard style ovens & hob required</span>
                                                    <br/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="large_type_of_fridge">Rangemaster, AGA over 90cm x
                                                        90cm <span class="red">*</span></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-control required" id="large_type_of_oven"
                                                            name="large_type_of_oven">
                                                        <option value="">--- Select ---</option>
                                                        <option value="0">-- 0 --</option>
                                                        <option value="1">-- 1 --</option>
                                                        <option value="2">-- 2 --</option>
                                                        <option value="3">-- 3 --</option>
                                                    </select>
                                                    <span
                                                        class="error">Amount of large style ovens & hob required</span>
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
                        <input type="hidden" name="subject" value="We Move and Clean - Cleaning Contact Form">
                    </div>
                </div>
            </form>
        </section>

        <!--        <section class="content-container collapse" id="spring-collapse">-->
        <!--            <form id="contact_form" method="post" enctype="multipart/form-data">-->
        <!--                <input type="hidden" name="service" value="One-Off / Spring Cleaning">-->
        <!--                <div class="row">-->
        <!--                    <div class="col-md-6">-->
        <!--                        <div class="serviceFormBox">-->
        <!--                            <div class="serviceFormBox__title">-->
        <!--                                <h3><span class="greenIcon"><i class="fa fa-calendar"></i></span>Date</h3>-->
        <!--                            </div>-->
        <!--                            <div class="serviceFormBox__content">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="from_date">From</label>-->
        <!--                                            <input type="date" class="form-control" id="from_date" name="from_date">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="to_date">To</label>-->
        <!--                                            <input type="date" class="form-control" id="to_date" name="to_date">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-md-6">-->
        <!--                        <div class="serviceFormBox">-->
        <!--                            <div class="serviceFormBox__title">-->
        <!--                                <h3><span class="greenIcon"><i class="fa fa-calendar"></i></span>Time</h3>-->
        <!--                            </div>-->
        <!--                            <div class="serviceFormBox__content">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label>From</label>-->
        <!--                                            <select class="form-control" id="from_time" name="from_time">-->
        <!--                                                <option value="6.00">6.00</option>-->
        <!--                                                <option value="6.30">6.30</option>-->
        <!--                                                <option value="7.00">7.00</option>-->
        <!--                                                <option value="7.30">7.30</option>-->
        <!--                                                <option value="8.00">8.00</option>-->
        <!--                                                <option value="8.30">8.30</option>-->
        <!--                                                <option value="9.00">9.00</option>-->
        <!--                                                <option value="9.30">9.30</option>-->
        <!--                                                <option value="10.00">10.00</option>-->
        <!--                                                <option value="10.30">10.30</option>-->
        <!--                                                <option value="11.00">11.00</option>-->
        <!--                                                <option value="11.30">11.30</option>-->
        <!--                                                <option value="12.00">12.00</option>-->
        <!--                                                <option value="12.30">12.30</option>-->
        <!--                                                <option value="13.00">13.00</option>-->
        <!--                                                <option value="13.30">13.30</option>-->
        <!--                                                <option value="14.00">14.00</option>-->
        <!--                                                <option value="14.30">14.30</option>-->
        <!--                                                <option value="15.00">15.00</option>-->
        <!--                                                <option value="15.30">15.30</option>-->
        <!--                                                <option value="16.00">16.00</option>-->
        <!--                                                <option value="16.30">16.30</option>-->
        <!--                                                <option value="17.00">17.00</option>-->
        <!--                                                <option value="17.30">17.30</option>-->
        <!--                                                <option value="18.00">18.00</option>-->
        <!--                                                <option value="18.30">18.30</option>-->
        <!--                                                <option value="19.00">19.00</option>-->
        <!--                                                <option value="19.30">19.30</option>-->
        <!--                                                <option value="20.00">20.00</option>-->
        <!--                                                <option value="20.30">20.30</option>-->
        <!--                                                <option value="21.00">21.00</option>-->
        <!--                                                <option value="21.30">21.30</option>-->
        <!--                                                <option value="22.00">22.00</option>-->
        <!--                                                <option value="22.30">22.30</option>-->
        <!--                                                <option value="23.00">23.00</option>-->
        <!--                                            </select>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label>To</label>-->
        <!--                                            <select class="form-control" id="to_time" name="to_time">-->
        <!--                                                <option value="6.00">6.00</option>-->
        <!--                                                <option value="6.30">6.30</option>-->
        <!--                                                <option value="7.00">7.00</option>-->
        <!--                                                <option value="7.30">7.30</option>-->
        <!--                                                <option value="8.00">8.00</option>-->
        <!--                                                <option value="8.30">8.30</option>-->
        <!--                                                <option value="9.00">9.00</option>-->
        <!--                                                <option value="9.30">9.30</option>-->
        <!--                                                <option value="10.00">10.00</option>-->
        <!--                                                <option value="10.30">10.30</option>-->
        <!--                                                <option value="11.00">11.00</option>-->
        <!--                                                <option value="11.30">11.30</option>-->
        <!--                                                <option value="12.00">12.00</option>-->
        <!--                                                <option value="12.30">12.30</option>-->
        <!--                                                <option value="13.00">13.00</option>-->
        <!--                                                <option value="13.30">13.30</option>-->
        <!--                                                <option value="14.00">14.00</option>-->
        <!--                                                <option value="14.30">14.30</option>-->
        <!--                                                <option value="15.00">15.00</option>-->
        <!--                                                <option value="15.30">15.30</option>-->
        <!--                                                <option value="16.00">16.00</option>-->
        <!--                                                <option value="16.30">16.30</option>-->
        <!--                                                <option value="17.00">17.00</option>-->
        <!--                                                <option value="17.30">17.30</option>-->
        <!--                                                <option value="18.00">18.00</option>-->
        <!--                                                <option value="18.30">18.30</option>-->
        <!--                                                <option value="19.00">19.00</option>-->
        <!--                                                <option value="19.30">19.30</option>-->
        <!--                                                <option value="20.00">20.00</option>-->
        <!--                                                <option value="20.30">20.30</option>-->
        <!--                                                <option value="21.00">21.00</option>-->
        <!--                                                <option value="21.30">21.30</option>-->
        <!--                                                <option value="22.00">22.00</option>-->
        <!--                                                <option value="22.30">22.30</option>-->
        <!--                                                <option value="23.00">23.00</option>-->
        <!--                                            </select>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="row">-->
        <!--                    <div class="col-md-12">-->
        <!--                        <div class="serviceFormBox">-->
        <!--                            <div class="serviceFormBox__title">-->
        <!--                                <h3><span class="greenIcon"><i class="fa fa-user"></i></span>Personal Info</h3>-->
        <!--                            </div>-->
        <!--                            <div class="serviceFormBox__content">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-3">-->
        <!--                                        <label for="company_name">Company Name</label>-->
        <!--                                        <input type="text" class="form-control" id="company_name" name="company_name">-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <br>-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-2">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label>Title</label>-->
        <!--                                            <select class="form-control valid" id="title" name="title">-->
        <!--                                                <option value="Mr">Mr</option>-->
        <!--                                                <option value="Mrs">Mrs</option>-->
        <!--                                            </select>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-3">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label>Name</label>-->
        <!--                                            <input type="text" class="form-control" id="name" name="name">-->
        <!--                                            <span id="name_error" class="error">Name is required</span>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-4">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label>Email <span class="red">*</span></label>-->
        <!--                                            <input type="text" class="form-control required" id="email" name="email">-->
        <!--                                            <span id="email_error" class="error">Email is required</span>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-3">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label>Contact Number</label>-->
        <!--                                            <input type="text" class="form-control" id="contact_number"-->
        <!--                                                   name="contact_number">-->
        <!--                                            <span id="contact_number_error"-->
        <!--                                                  class="error">Contact Number is required</span>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="row">-->
        <!--                    <div class="col-md-12">-->
        <!--                        <div class="serviceFormBox">-->
        <!--                            <div class="serviceFormBox__title">-->
        <!--                                <h3><span class="greenIcon"><i class="fa fa-home"></i></span>Your Property</h3>-->
        <!--                            </div>-->
        <!--                            <div class="serviceFormBox__content">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-4">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label>Property number and street name</label>-->
        <!--                                            <input type="text" class="form-control" id="pty_number" name="pty_number">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-2">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label>Postcode <span class="red">*</span></label>-->
        <!--                                            <input type="text" class="form-control required" id="postcode"-->
        <!--                                                   name="postcode">-->
        <!--                                            <span id="postcode_error" class="error">Postcode is required</span>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-3">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label>Property type <span class="red">*</span></label>-->
        <!--                                            <select class="form-control required" id="cleaning_pty_type"-->
        <!--                                                    name="cleaning_pty_type">-->
        <!--                                                <option value="">--- Select ---</option>-->
        <!--                                                <option value="Bungalowfurn">Bungalow</option>-->
        <!--                                                <option value="">-------</option>-->
        <!--                                                <option value="1 bed housefurn">1 bed house</option>-->
        <!--                                                <option value="2 bed housefurn">2 bed house</option>-->
        <!--                                                <option value="3 bed housefurn">3 bed house</option>-->
        <!--                                                <option value="4 bed housefurn">4 bed house</option>-->
        <!--                                                <option value="">------------</option>-->
        <!--                                                <option value="Studioflatfurn">Studio flat</option>-->
        <!--                                                <option value="1bedflatfurn">1 bed flat</option>-->
        <!--                                                <option value="2bedflatfurn">2 bed flat</option>-->
        <!--                                                <option value="3bedflatfurn">3 bed flat</option>-->
        <!--                                                <option value="4bedflatfurn">4 bed flat</option>-->
        <!--                                            </select>-->
        <!--                                            <span class="error">Property type is required</span>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-3">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="cleaning_furniture_number">Furniture <span-->
        <!--                                                    class="red">*</span></label>-->
        <!--                                            <select class="form-control required"-->
        <!--                                                    id="cleaning_furniture_number"-->
        <!--                                                    name="cleaning_furniture_number">-->
        <!--                                                <option value="">--- Select ---</option>-->
        <!--                                                <option value="full-furnished">Fully Furnished</option>-->
        <!--                                                <option value="part-furnished">Partly Furnished</option>-->
        <!--                                                <option value="unfurnished">Unfurnished</option>-->
        <!---->
        <!--                                            </select>-->
        <!--                                            <span class="error">Furniture field is required.</span>-->
        <!--                                        </div>-->
        <!---->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="row">-->
        <!--                                            <div class="col-xs-12 col-md-6">-->
        <!--                                                Is there electricity at your property?-->
        <!--                                            </div>-->
        <!---->
        <!--                                            <div class="col-xs-12 col-md-6">-->
        <!--                                                <input type="checkbox" class="toggle" id="electricity_available"-->
        <!--                                                       name="electricity_available">-->
        <!--                                                <label-->
        <!--                                                    for="electricity_available"><span>Yes</span><span>No</span></label>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="row">-->
        <!--                                            <div class="col-xs-12 col-md-6">-->
        <!--                                                I will arrange parking space for "We Move and Clean" staff-->
        <!--                                            </div>-->
        <!--                                            <div class="col-xs-12 col-md-6">-->
        <!--                                                <input type="checkbox" class="toggle" id="parking_for_staff"-->
        <!--                                                       name="parking_for_staff">-->
        <!--                                                <label for="parking_for_staff"><span>Yes</span><span>No</span></label>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="row">-->
        <!--                                            <div class="col-xs-12 col-md-6">-->
        <!--                                                Is there hot water at the property?-->
        <!--                                            </div>-->
        <!--                                            <div class="col-xs-12 col-md-6">-->
        <!--                                                <input type="checkbox" class="toggle" id="water_available"-->
        <!--                                                       name="water_available">-->
        <!--                                                <label for="water_available"><span>Yes</span><span>No</span></label>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <p>(Resident's Parking Scheme - a temporary permit must be provided)</p>-->
        <!--                                        <p>(Pay and Display Parking - parking charge will be added to the final-->
        <!--                                            bill)</p>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!---->
        <!--                <div class="row">-->
        <!--                    <div class="col-md-12">-->
        <!--                        <div class="serviceFormBox">-->
        <!--                            <div class="serviceFormBox__title">-->
        <!--                                <h3><span class="greenIcon"><i class="fa fa-th-list"></i></span>List of Rooms in your Property</h3>-->
        <!--                                <span class="error img_check_error">You must select at least one room</span>-->
        <!--                            </div>-->
        <!--                            <div class="serviceFormBox__content serviceFormBox__content--alt">-->
        <!--                                <div class="imgCheckList rooms_list">-->
        <!--                                    <div class="row">-->
        <!--                                        <div class="col-md-3">-->
        <!--                                            <div class="imgCheck center">-->
        <!--                                                <h4>Kitchen</h4>-->
        <!--                                                <label for="spring-kitchen"><img src="images/quote-imgs/kitchen.jpg"-->
        <!--                                                                          class="img-responsive"></label>-->
        <!--                                                <div class="center">-->
        <!--                                                    Are you taking any white goods from your kitchen ?-->
        <!--                                                    <br/>-->
        <!--                                                    <input type="checkbox" class="toggle" id="spring-kitchen"-->
        <!--                                                           name="kitchen_room">-->
        <!--                                                    <label for="spring-kitchen"><span>Yes</span><span>No</span></label>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                        <div class="col-md-3">-->
        <!--                                            <div class="imgCheck center">-->
        <!--                                                <h4>Living Room</h4>-->
        <!--                                                <label for="spring-living_room"><img src="images/quote-imgs/living_room.jpg"-->
        <!--                                                                              class="img-responsive"></label>-->
        <!--                                                <div class="center">-->
        <!--                                                    Are you taking any furniture from your living room?-->
        <!--                                                    <br/>-->
        <!--                                                    <input type="checkbox" class="toggle" id="spring-living_room"-->
        <!--                                                           name="living_room">-->
        <!--                                                    <label for="spring-living_room"><span>Yes</span><span>No</span></label>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                        <div class="col-md-3">-->
        <!--                                            <div class="imgCheck center">-->
        <!--                                                <h4>Dining Room</h4>-->
        <!--                                                <label for="spring-dining_room"><img src="images/quote-imgs/dining_room.jpg"-->
        <!--                                                                              class="img-responsive"></label>-->
        <!--                                                <div class="center">-->
        <!--                                                    Are you taking any furniture from your dining Room?-->
        <!--                                                    <br/>-->
        <!--                                                    <input type="checkbox" class="toggle" id="spring-dining_room"-->
        <!--                                                           name="dining_room">-->
        <!--                                                    <label for="spring-dining_room"><span>Yes</span><span>No</span></label>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                        <div class="col-md-3">-->
        <!--                                            <div class="imgCheck center">-->
        <!--                                                <h4>Garden / Shed</h4>-->
        <!--                                                <label for="spring-garden-shed"><img src="images/quote-imgs/garden_shed.jpg"-->
        <!--                                                                              class="img-responsive"></label>-->
        <!--                                                <div class="center">-->
        <!--                                                    Are you taking any items form your garden / shed?-->
        <!--                                                    <br/>-->
        <!--                                                    <input type="checkbox" class="toggle" id="spring-garden-shed"-->
        <!--                                                           name="bathroom">-->
        <!--                                                    <label for="spring-garden-shed"><span>Yes</span><span>No</span></label>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="row">-->
        <!--                                        <div class="col-md-3">-->
        <!--                                            <div class="imgCheck center">-->
        <!--                                                <h4>1st Bedroom</h4>-->
        <!--                                                <label for="spring-first_bedroom"><img src="images/quote-imgs/bedroom.jpg"-->
        <!--                                                                                class="img-responsive"></label>-->
        <!--                                                <div class="center">-->
        <!--                                                    Are you taking any furniture from your 1st bedroom?-->
        <!--                                                    <br/>-->
        <!--                                                    <input type="checkbox" class="toggle" id="spring-first_bedroom"-->
        <!--                                                           name="first_bedroom">-->
        <!--                                                    <label for="spring-first_bedroom"><span>Yes</span><span>No</span></label>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                        <div class="col-md-3">-->
        <!--                                            <div class="imgCheck center">-->
        <!--                                                <h4>2nd Bedroom</h4>-->
        <!--                                                <label for="spring-second_bedroom"><img src="images/quote-imgs/bedroom.jpg"-->
        <!--                                                                                 class="img-responsive"></label>-->
        <!--                                                <div class="center">-->
        <!--                                                    Are you taking any furniture from your 2nd bedroom?-->
        <!--                                                    <br/>-->
        <!--                                                    <input type="checkbox" class="toggle" id="spring-second_bedroom"-->
        <!--                                                           name="second_bedroom">-->
        <!--                                                    <label for="spring-second_bedroom"><span>Yes</span><span>No</span></label>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                        <div class="col-md-3">-->
        <!--                                            <div class="imgCheck center">-->
        <!--                                                <h4>3rd Bedroom</h4>-->
        <!--                                                <label for="spring-third_bedroom"><img src="images/quote-imgs/bedroom.jpg"-->
        <!--                                                                                class="img-responsive"></label>-->
        <!--                                                <div class="center">-->
        <!--                                                    Are you taking any furniture from your 3rd bedroom?<br/>-->
        <!--                                                    <input type="checkbox" class="toggle" id="spring-third_bedroom"-->
        <!--                                                           name="third_bedroom">-->
        <!--                                                    <label for="spring-third_bedroom"><span>Yes</span><span>No</span></label>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                        <div class="col-md-3">-->
        <!--                                            <div class="imgCheck center">-->
        <!--                                                <h4>4th Bedroom</h4>-->
        <!--                                                <label for="spring-fourth_bedroom"><img src="images/quote-imgs/bedroom.jpg"-->
        <!--                                                                                 class="img-responsive"></label>-->
        <!--                                                <div class="center">-->
        <!--                                                    Are you taking any furniture from your 4th bedroom?-->
        <!--                                                    <br/>-->
        <!--                                                    <input type="checkbox" class="toggle" id="spring-fourth_bedroom"-->
        <!--                                                           name="fourth_bedroom">-->
        <!--                                                    <label for="spring-fourth_bedroom"><span>Yes</span><span>No</span></label>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="row">-->
        <!--                                        <div class="col-md-3">-->
        <!--                                            <div class="imgCheck center">-->
        <!--                                                <h4>Conservatory Room</h4>-->
        <!--                                                <label for="spring-conservatory_room"><img-->
        <!--                                                        src="images/quote-imgs/conservatory_room.jpg"-->
        <!--                                                        class="img-responsive"></label>-->
        <!--                                                <div class="center">-->
        <!--                                                    Are you taking any furniture from your-->
        <!--                                                    conservatory?<br/>-->
        <!--                                                    <input type="checkbox" class="toggle" id="spring-conservatory_room"-->
        <!--                                                           name="conservatory_room">-->
        <!--                                                    <label-->
        <!--                                                        for="spring-conservatory_room"><span>Yes</span><span>No</span></label>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                        <div class="col-md-3">-->
        <!--                                            <div class="imgCheck center">-->
        <!--                                                <h4>Garage</h4>-->
        <!--                                                <label for="spring-garage"><img-->
        <!--                                                        src="images/quote-imgs/garage.jpg"-->
        <!--                                                        class="img-responsive"></label>-->
        <!--                                                <div class="center">-->
        <!--                                                    Are you taking any items from your garage?<br/>-->
        <!--                                                    <input type="checkbox" class="toggle" id="spring-garage"-->
        <!--                                                           name="garage">-->
        <!--                                                    <label-->
        <!--                                                        for="spring-garage"><span>Yes</span><span>No</span></label>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                        <div class="col-md-3">-->
        <!--                                            <div class="imgCheck center">-->
        <!--                                                <h4>Loft</h4>-->
        <!--                                                <label for="spring-loft"><img-->
        <!--                                                        src="images/quote-imgs/loft.jpg"-->
        <!--                                                        class="img-responsive"></label>-->
        <!--                                                <div class="center">-->
        <!--                                                    Are you taking any items from your loft?<br/>-->
        <!--                                                    <input type="checkbox" class="toggle" id="spring-loft"-->
        <!--                                                           name="loft">-->
        <!--                                                    <label-->
        <!--                                                        for="spring-loft"><span>Yes</span><span>No</span></label>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                        <div class="col-md-3">-->
        <!--                                            <div class="imgCheck center">-->
        <!--                                                <h4>Basement</h4>-->
        <!--                                                <label for="spring-basement"><img-->
        <!--                                                        src="images/quote-imgs/basement.jpg"-->
        <!--                                                        class="img-responsive"></label>-->
        <!--                                                <div class="center">-->
        <!--                                                    Are you taking any items from your basement?<br/>-->
        <!--                                                    <input type="checkbox" class="toggle" id="spring-basement"-->
        <!--                                                           name="basement">-->
        <!--                                                    <label-->
        <!--                                                        for="spring-basement"><span>Yes</span><span>No</span></label>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="row">-->
        <!--                                        <div class="col-md-3">-->
        <!--                                            <div class="imgCheck center">-->
        <!--                                                <h4>Lounge</h4>-->
        <!--                                                <label for="spring-lounge"><img src="images/quote-imgs/lounge.jpg"-->
        <!--                                                                         class="img-responsive"></label>-->
        <!--                                                <div class="center">-->
        <!--                                                    Are you taking any furniture from your lounge?<br/>-->
        <!--                                                    <input type="checkbox" class="toggle" id="spring-lounge"-->
        <!--                                                           name="lounge_room">-->
        <!--                                                    <label for="spring-lounge"><span>Yes</span><span>No</span></label>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                        <div class="col-md-3">-->
        <!--                                            <div class="imgCheck center">-->
        <!--                                                <h4>1st Box / Storage Room</h4>-->
        <!--                                                <label for="spring-first_box_storage_room"><img-->
        <!--                                                        src="images/quote-imgs/box_storage_room.jpg"-->
        <!--                                                        class="img-responsive"></label>-->
        <!--                                                <div class="center">-->
        <!--                                                    Are you taking any furniture from your 1st Box / Storage-->
        <!--                                                    room?<br/>-->
        <!--                                                    <input type="checkbox" class="toggle" id="spring-first_box_storage_room"-->
        <!--                                                           name="first_box_storage_room">-->
        <!--                                                    <label-->
        <!--                                                        for="spring-first_box_storage_room"><span>Yes</span><span>No</span></label>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                        <div class="col-md-3">-->
        <!--                                            <div class="imgCheck center">-->
        <!--                                                <h4>2nd Box / Storage Room</h4>-->
        <!--                                                <label for="spring-second_box_storage_room"><img-->
        <!--                                                        src="images/quote-imgs/box_storage_room.jpg"-->
        <!--                                                        class="img-responsive"></label>-->
        <!--                                                <div class="center">-->
        <!--                                                    Are you taking any furniture from your 2nd Box / Storage-->
        <!--                                                    room?<br/>-->
        <!--                                                    <input type="checkbox" class="toggle" id="spring-second_box_storage_room"-->
        <!--                                                           name="second_box_storage_room">-->
        <!--                                                    <label-->
        <!--                                                        for="spring-second_box_storage_room"><span>Yes</span><span>No</span></label>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                        <div class="col-md-3">-->
        <!--                                            <div class="imgCheck center">-->
        <!--                                                <h4>3rd Box / Storage Room</h4>-->
        <!--                                                <label for="spring-third_box_storage_room"><img-->
        <!--                                                        src="images/quote-imgs/box_storage_room.jpg"-->
        <!--                                                        class="img-responsive"></label>-->
        <!--                                                <div class="center">-->
        <!--                                                    Are you taking any furniture from your 3rd Box / Storage-->
        <!--                                                    room?<br/>-->
        <!--                                                    <input type="checkbox" class="toggle" id="spring-third_box_storage_room"-->
        <!--                                                           name="third_box_storage_room">-->
        <!--                                                    <label-->
        <!--                                                        for="spring-third_box_storage_room"><span>Yes</span><span>No</span></label>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <div class="row">-->
        <!--                                <div class="col-md-12">-->
        <!--                                    <div class="form-group">-->
        <!--                                        <label for="other_rooms">Please point out any other room which is not listed-->
        <!--                                            above:</label>-->
        <!--                                        <textarea id="other_rooms" name="other_rooms"-->
        <!--                                                  class="form-control other_rooms"></textarea>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!---->
        <!--                <div class="row">-->
        <!--                    <div class="col-md-6">-->
        <!--                        <div class="serviceFormBox">-->
        <!--                            <div class="serviceFormBox__title">-->
        <!--                                <h3><span class="greenIcon"><i class="fa fa-wrench"></i></span>Type of Cleaning</h3>-->
        <!--                            </div>-->
        <!--                            <div class="serviceFormBox__content">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-12">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="requirements">Please select what type of cleaning you would like-->
        <!--                                                us to do for you.</label>-->
        <!--                                            <select class="form-control required" id="type_of_cleaning"-->
        <!--                                                    name="type_of_cleaning">-->
        <!--                                                <option value="">--- Select ---</option>-->
        <!--                                                <option value="regular">Regular</option>-->
        <!--                                                <option value="one-off">One-Off</option>-->
        <!--                                            </select>-->
        <!--                                            <span class="error">Type of Cleaning is required</span>-->
        <!--                                            <br>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-md-6">-->
        <!--                        <div class="serviceFormBox">-->
        <!--                            <div class="serviceFormBox__title">-->
        <!--                                <h3><span class="greenIcon"><i class="fa fa-wrench"></i></span>Requirements</h3>-->
        <!--                            </div>-->
        <!--                            <div class="serviceFormBox__content">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-12">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="requirements">Please describe what you would like us to do for-->
        <!--                                                you</label>-->
        <!--                                            <textarea id="requirements" name="requirements"-->
        <!--                                                      class="form-control"></textarea>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!---->
        <!--                <div class="row">-->
        <!--                    <div class="col-md-12">-->
        <!--                        <div class="serviceFormBox">-->
        <!--                            <div class="serviceFormBox__title">-->
        <!--                                <h3><span class="greenIcon"><i class="fa fa-wrench"></i></span>White Goods</h3>-->
        <!--                            </div>-->
        <!--                            <div class="serviceFormBox__content">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label>What type of fridge do you have?</label>-->
        <!--                                            <br/>-->
        <!--                                            <div class="row">-->
        <!--                                                <div class="col-md-6">-->
        <!--                                                    <label for="standard_type_of_fridge">Standard <span-->
        <!--                                                            class="red">*</span></label>-->
        <!--                                                </div>-->
        <!--                                                <div class="col-md-6">-->
        <!--                                                    <select class="form-control required" id="standard_type_of_fridge"-->
        <!--                                                            name="standard_type_of_fridge">-->
        <!--                                                        <option value="">--- Select ---</option>-->
        <!--                                                        <option value="0">-- 0 --</option>-->
        <!--                                                        <option value="1">-- 1 --</option>-->
        <!--                                                        <option value="2">-- 2 --</option>-->
        <!--                                                        <option value="3">-- 3 --</option>-->
        <!--                                                    </select>-->
        <!--                                                    <span class="error">Amount of standard style fridges required</span>-->
        <!---->
        <!--                                                    <br/>-->
        <!--                                                </div>-->
        <!--                                                <div class="col-md-6">-->
        <!--                                                    <label for="american_type_of_fridge">American Style <span-->
        <!--                                                            class="red">*</span></label>-->
        <!--                                                </div>-->
        <!--                                                <div class="col-md-6">-->
        <!--                                                    <select class="form-control required" id="american_type_of_fridge"-->
        <!--                                                            name="american_type_of_fridge">-->
        <!--                                                        <option value="">--- Select ---</option>-->
        <!--                                                        <option value="0">-- 0 --</option>-->
        <!--                                                        <option value="1">-- 1 --</option>-->
        <!--                                                        <option value="2">-- 2 --</option>-->
        <!--                                                        <option value="3">-- 3 --</option>-->
        <!--                                                    </select>-->
        <!--                                                    <span class="error">Amount of american style fridges required</span>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <div class="col-md-6">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label>What type of hob & oven do you have?</label>-->
        <!--                                            <br/>-->
        <!--                                            <div class="row">-->
        <!--                                                <div class="col-md-6">-->
        <!--                                                    <label for="standard_type_of_oven">Standard (single, double) up to-->
        <!--                                                        90cm x 90cm<span class="red">*</span> </label>-->
        <!--                                                </div>-->
        <!--                                                <div class="col-md-6">-->
        <!--                                                    <select class="form-control required" id="standard_type_of_oven"-->
        <!--                                                            name="standard_type_of_oven">-->
        <!--                                                        <option value="">--- Select ---</option>-->
        <!--                                                        <option value="0">-- 0 --</option>-->
        <!--                                                        <option value="1">-- 1 --</option>-->
        <!--                                                        <option value="2">-- 2 --</option>-->
        <!--                                                        <option value="3">-- 3 --</option>-->
        <!--                                                    </select>-->
        <!--                                                    <span-->
        <!--                                                        class="error">Amount of standard style ovens & hob required</span>-->
        <!--                                                    <br/>-->
        <!--                                                </div>-->
        <!--                                                <div class="col-md-6">-->
        <!--                                                    <label for="large_type_of_fridge">Rangemaster, AGA over 90cm x-->
        <!--                                                        90cm <span class="red">*</span></label>-->
        <!--                                                </div>-->
        <!--                                                <div class="col-md-6">-->
        <!--                                                    <select class="form-control required" id="large_type_of_oven"-->
        <!--                                                            name="large_type_of_oven">-->
        <!--                                                        <option value="">--- Select ---</option>-->
        <!--                                                        <option value="0">-- 0 --</option>-->
        <!--                                                        <option value="1">-- 1 --</option>-->
        <!--                                                        <option value="2">-- 2 --</option>-->
        <!--                                                        <option value="3">-- 3 --</option>-->
        <!--                                                    </select>-->
        <!--                                                    <span-->
        <!--                                                        class="error">Amount of large style ovens & hob required</span>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!---->
        <!--                <div class="row">-->
        <!--                    <div class="col-md-12">-->
        <!--                        <div class="serviceFormBox">-->
        <!--                            <div class="serviceFormBox__title">-->
        <!--                                <h3><span class="greenIcon"><i class="fa fa-plus"></i></span>Additional Information</h3>-->
        <!--                            </div>-->
        <!--                            <div class="serviceFormBox__content">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-12">-->
        <!--                                        <div class="form-group">-->
        <!--                                            <label for="additional_message">Write your notes or message</label>-->
        <!--                                            <textarea id="additional_message" name="additional_message"-->
        <!--                                                      class="form-control"></textarea>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!---->
        <!--                <div class="row">-->
        <!--                    <div class="col-md-12">-->
        <!--                        <span class="success">Message Sent!</span>-->
        <!--                        <span class="error failed">Message failed to send. Contact the system administrator.</span>-->
        <!--                        <span class="error validation">Validation error. Please check your entries.</span>-->
        <!--                        <button type="submit" class="btn btn--green send_message">Submit</button>-->
        <!--                        <input type="hidden" name="subject" value="We Move and Clean - Cleaning Contact Form">-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </form>-->
        <!--        </section>-->

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