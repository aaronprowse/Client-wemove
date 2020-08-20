<section class="contactBlock">
    <form class="row" id="call_back_form">
        <div class="col-md-3">
            <h4>Request A Call Back</h4>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control required" id="name" name="name">
                <span class="error">Name is required</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="phone">Telephone</label>
                <input type="tel" class="form-control required" id="phone" name="phone">
                <span class="error">Telephone is required</span>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label></label>
                <input type="submit" id="send_message_call_back" class="form-control send_message footer-submit">
                <span class="success">Message Sent!</span>
                <span class="error failed">Message failed to send. Contact the system administrator.</span>
                <span class="error validation">Validation error. Please check your entries.</span>
                <input type="hidden" name="subject" value="We Move and Clean - Call Back Request">
                <input type="hidden" name="email" value="info@wemoveandclean.co.uk">
            </div>
        </div>
    </form>
    <script type="text/javascript">
        (function ($) {
            $(document).ready(function () {
                $("*[data-toggle_field='true'").change(function () {
                    var $elements = $($(this).data("fields"));
                    if ($(this).val().indexOf("flat") == "-1" && $(this).val().indexOf("floor") == "-1") {
                        $elements.hide().children("input, select, textarea").each(function () {
                            $(this).prop("disabled", true);
                        });
                    } else {
                        $elements.show().children("input, select, textarea").each(function () {
                            $(this).prop("disabled", false);
                        });
                    }
                });

                $('input[type="file"]').change(function(event) {
                    var files = event.target.files,
                        data = new FormData(),
                        form = $(this).parents("form"),
                        fileList = $($(this).data("file_list"));

                    $.each(files, function(key, value) {
                        data.append(key, value);
                    });

                    $.ajax({
                        url: '/includes/email/upload_files.php',
                        type: 'POST',
                        data: data,
                        cache: false,
//                        dataType: 'json',
                        processData: false, // Don't process the files
                        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                        success: function(data, textStatus, jqXHR)
                        {
                            if(typeof data.error === 'undefined')
                            {
                                // Success so call function to process the form
                                console.log(data);
                                fileList.val(data);
                            }
                            else
                            {
                                // Handle errors here
                                console.log('ERRORS: ' + data.error);
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown)
                        {
                            // Handle errors here
                            console.log('ERRORS: ' + textStatus);
                            // STOP LOADING SPINNER
                        }
                    });

                });

                $('.send_message').click(function (e) {
                    e.preventDefault();

                    var error = false;
                    var form = $(this).parents("form");
                    var rooms_list = form.find(".rooms_list");
                    var package_list = form.find(".package_list");
                    var other_rooms = form.find(".other_rooms");
                    var btn = $(this);

                    //Error messages
                    form.find("input.required, textarea.required, select.required").each(function () {
                        if ($(this).val().length == 0) {
                            error = true;
                            $(this).parent().addClass("has-error");
                            $(this).siblings(".error").fadeIn(500);
                        } else {
                            $(this).parent().removeClass("has-error");
                            $(this).siblings(".error").fadeOut(500);
                        }
                    });

                    if (rooms_list.length > 0) {
                        var img_no_checked = 0;
                        rooms_list.find("input[type=checkbox]:checked").each(function () {
                            img_no_checked++
                        });

                        if (img_no_checked == 0 && other_rooms.val().length == 0) {
                            error = true;
                            form.find('.img_check_error').fadeIn(500);
                        } else {
                            form.find('.img_check_error').fadeOut(500);
                        }
                    }

                    if (package_list.length > 0) {
                        var package_no_checked = 0;
                        package_list.find("input[type=checkbox]:checked").each(function () {
                            package_no_checked++
                        });

                        if (package_no_checked == 0) {
                            error = true;
                            form.find('.img_check_error').fadeIn(500);
                        } else {
                            form.find('.img_check_error').fadeOut(500);
                        }
                    }

                    if (error == false) {
                        btn.attr({'disabled': 'true', 'value': 'Sending...'});
                        btn.siblings(".error").fadeOut(500);

                        $.post("/includes/email/send_email.php", form.serialize(), function (result) {
                            //Debug - coincides with the debug in the email php file
//                            console.log(result);

                            if (result == 'sent') {
                                btn.siblings(".success").fadeIn(500);
                            } else {
                                btn.siblings("." + result).fadeIn(500);
                                btn.removeAttr('disabled').attr('value', 'Submit');
                            }
                        });
                    } else {
                        btn.siblings(".validation").fadeIn(500);
                    }
                });
            });
        }(jQuery));
    </script>
</section>
<footer>
    <div class="content-container">
        <div class="row">
            <div class="col-md-4">
                <h4>About We Move and Clean</h4>
                <p>
                    Our care and attention makes relocation seamless we can help you through every step of your move from careful packing each box to reassembling the
                    furniture in your new home. What sets us apart is not only our ability to look after the whole process but also the experience of all of our staff.
                </p>
                <ul class="socialIcons socialIconsFooter">
                    <li><a href="https://www.facebook.com/We-Move-and-Clean-Removals-Cleaning-Carpet-Cleaning-Clearance-880788931931324/"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/WeMoveAndClean"><i class="fa fa-twitter"></i></a></li>
<!--                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>-->
                    <li><a href="https://plus.google.com/100558127946005129894/about"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCvy4_EbgyLDLZRZQwihzcHg"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h4>Quick Find</h4>
                <ul class="quickLinks">
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                    <li>
                        <a href="services.php">Services</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
        </div>
        <div class="row copyright">
            <div class="col-md-6">
                <p>Created By: <a href="http://www.cherry-designs.net/" target="_blank">Cherry Designs</a></p>
            </div>
<!--            <div class="col-md-6 floatRight">-->
<!--                <ul class="footerLinks">-->
<!--                    <li><a href="termsandconditions.php">Terms and Conditions</a></li>-->
<!--                    <li><a href="privacypolicy.php">Privacy Policy</a></li>-->
<!--                </ul>-->
<!--            </div>-->
        </div>
    </div>
</footer>

<a href="#0" class="scroll_top"><i class="fa fa-chevron-up"></i></a>

<script src="js/bootstrap.min.js"></script>
<script src="js/youtube.js"></script>
<script src="js/app.js"></script>
</div>
</body>
</html>