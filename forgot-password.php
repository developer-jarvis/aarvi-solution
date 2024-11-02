<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.Aarvi.in/forgot-password by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 09:28:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aarvi</title>
    <!--Favicon-->

        <link rel="icon" type="image/x-icon" href="assets/img/favicon.jpg">
    <!--Style CSS-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Font-Awesome-->
    <link rel="stylesheet" href="assets/font-awesome/font-awesome-pro-v6-6/css/all.css">
    <!--Bootstarp Cdn-->
    <link rel="stylesheet" href="cdn.jsdelivr.net/npm/bootstrap%405.2.3/dist/css/bootstrap.min.css">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,500;0,600;0,700;0,800;1,300;1,400&amp;family=Poppins:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!--Slick Slider Css-->
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/css/othere_page.css">

</head>
<body>
    

 <!--=========================header start============================  -->
 <?php include 'include/header.php'; ?>
    <!-- =======================header end================================ -->
     
    <!-- Login Page -->
    <div class="login_section row">
        <div class="col-md-6">
            <img src="assets/img/login-left.webp" alt="">
        </div>
        <div class="col-md-6">
            <div class="section">
                <h4>Forgot password?</h4>
                <p>Changing password is quick & secure. Just verify your Email & we will help you reset the password.</p>
                <form action="#" method="post" id="loginForm">
                    <div class="row">
                        <div class="col-12">
                            <label for="username">Email</label>
                            <input type="email" name="username" id="username" required>
                        </div>
            
                        <div class="error_sms">
                            <p style="margin-top: -15px; margin-bottom: 15px; color: rgb(246, 67, 36); font-weight: 500; line-height: 1.2em; font-size: 14px; margin-left: 10px;"></p>
                        </div>
                        <div class="col-7">
                            <button type="submit" id="loginFormSubmit"><i class="fa-duotone fa-lock"></i> Verify Email</button>
                        </div>
                        <div class="col-5 forgot" style="text-align: right;">
                            <p><a href="login.php">Back to Login</a></p>
                        </div>
                        <div class="col-12">
                            <p class="notice">Before logging in, please ensure that the URL on the address bar starts with “https” or has a padlock icon. The communication of your private information from any address beginning with "https" is encrypted and secured using SSL.</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    
<script src="code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $("#loginForm").submit(function (e) {
            e.preventDefault();

            $('#preloaderOverlay').show();

            var formData = $(this).serialize();

            $.ajax({
                type: "POST",
                url: "include/forgot_pass.php",
                data: formData,
                success: function (response) {
                    // console.log("Server Response:", response);
                    if (response === "success") {
                        $('#preloaderOverlay').hide();
                        $(".error_sms p").text("We Send Forgot Password link on Your Email, Please check.");
                        document.getElementById("loginForm").reset();

                    } else {
                        setTimeout(function () {
                            $('#preloaderOverlay').hide();
                        }, 500);
                        $(".error_sms p").text("This Email not Registerd. Please Enter Registerd Email");
                    }
                },
                error: function (xhr, status, error) {
                    console.error("AJAX Error: " + status, error);
                }
            });
        });
    });

</script>




    <!--Footer-->

<div class="footer">

    <div class="section">

        <div class="tablet_view">

            <div class="box">

                <h4>About company</h4>

                <hr>

                <ul>

                    <li><a href="index.php"><i class="fa-light fa-chevrons-right"></i> Home</a></li>

                    <li><a href="about.php"><i class="fa-light fa-chevrons-right"></i> About</a></li>

                    <li><a href="mision-vision.php"><i class="fa-light fa-chevrons-right"></i> Mision Vision</a></li>

                    <li><a href="https://g.page/r/CfDxuMaiRisnEBM/review" target="_blank"><i class="fa-light fa-chevrons-right"></i> Feedback</a></li>

                    <li><a href="https://www.google.com/search?q=Aarvi.IN+-+Best+Website+Design+Company+in+Siliguri.+SEO%2C+Social+Media+Marketing+App+Designs%2C+Graphic+Designs%2C&amp;oq=we&amp;gs_lcrp=EgZjaHJvbWUqBggCEEUYOzIGCAAQRRg8MgYIARBFGDkyBggCEEUYOzIGCAMQRRg7MgYIBBBFGDwyBggFEEUYPTIGCAYQRRg8MgYIBxBFGDzSAQgyNDY0ajBqNKgCALACAA&amp;sourceid=chrome&amp;ie=UTF-8#lrd=0x39e4692624ff8c73:0x272b46a2c6b8f1f0,1,,,," target="_blank"><i class="fa-light fa-chevrons-right"></i> Testimonials</a></li>

                    <li><a href="portfolio.php"><i class="fa-light fa-chevrons-right"></i> Portfolio</a></li>

                    <li><a href="blog.php"><i class="fa-light fa-chevrons-right"></i> Blogs</a></li>

                    <li><a href="sitemap.php"><i class="fa-light fa-chevrons-right"></i> Sitemap</a></li>

                </ul>

            </div>

            <div class="box">

                <h4>Digital Services</h4>

                <hr>

                <ul>

                    <li><a href="website-design.php"><i class="fa-light fa-chevrons-right"></i> Website Designs</a></li>

                    <li><a href="software-development.php"><i class="fa-light fa-chevrons-right"></i> Software Development</a></li>

                    <li><a href="digital-marketing.php"><i class="fa-light fa-chevrons-right"></i> Digital Marketing</a></li>

                    <li><a href="search-engine-optimization.php"><i class="fa-light fa-chevrons-right"></i> Search Engine Optimization [SEO]</a></li>

                    <li><a href="paid-ad-service.php"><i class="fa-light fa-chevrons-right"></i> Paid Ads Services</a></li>

                    <li><a href="social-media-marketing.php"><i class="fa-light fa-chevrons-right"></i> Social Media Marketing</a></li>

                    <li><a href="websecurity.php"><i class="fa-light fa-chevrons-right"></i> Website Security & Hacking removal</a></li>

                    <li><a href="graphic-design.php"><i class="fa-light fa-chevrons-right"></i> Graphic Design</a></li>

                    <li><a href="mobile-app.php"><i class="fa-light fa-chevrons-right"></i> Mobile App</a></li>

                    <li><a href="business-promotion.php"><i class="fa-light fa-chevrons-right"></i> Business Promotion</a></li>

                </ul>

            </div>

        </div>

        <div class="tablet_view margin_top">

            <div class="box">

                <h4>Important Links</h4>

                <hr>

                <ul>

                    <li><a href="product/index.php"><i class="fa-light fa-chevrons-right"></i> Product & Pricing</a></li>

                    <li><a href="privacy-policy.php"><i class="fa-light fa-chevrons-right"></i> Privacy & policy</a></li>

                    <li><a href="terms-condition.php"><i class="fa-light fa-chevrons-right"></i> Terms of Services</a></li>

                    <li><a href="refund-policy.php"><i class="fa-light fa-chevrons-right"></i> Refund Policy</a></li>

                    <li><a href="renewal-policy.php"><i class="fa-light fa-chevrons-right"></i> Renewal Policy</a></li>

                    <li><a href="Career-2.php"><i class="fa-light fa-chevrons-right"></i> Career</a></li>

                    <li><a href="hosting-services.php"><i class="fa-light fa-chevrons-right"></i> Hosting Service</a></li>

                    <li><a href="domain-booking-service.php"><i class="fa-light fa-chevrons-right"></i> Domain Booking Service</a></li>

                    <li><a href="login.php"><i class="fa-light fa-chevrons-right"></i> Login</a></li>

                </ul>

            </div>

            <div class="box">

                <h4>Join Our Newsletter</h4>

                <hr>

                <p class="newslater_p">Subscribe to email alerts. We promise not to spam your inbox.</p>

                <form action="#" method="post" class="newslater" id="newsLater">

                    <input type="email" placeholder="Enter Your Email Address" name="email" required class="email"><input type="submit" class="submit" value="Subscribe">

                    <div class="output"><p style="color: #f9ae0c; font-size: 13px; font-weight: 600; font-family: nunito; margin-top: 2px; margin-bottom: 0;"></p></div>

                </form>

                <div class="section" style="margin-top: 20px;">

                    <div class="box">

                        <i class="fa-duotone fa-phone-volume"></i>

                    </div>

                    <div class="boxs">

                        <h4>Phone No</h4>

                        <hr>

                        <p><a href="tel:919641030831">+91 96410 30831</a></p>

                    </div>

                </div>

                <div class="section">

                    <div class="box">

                        <i class="fa-brands fa-whatsapp"></i>

                    </div>

                    <div class="boxs">

                        <h4>Whatsapp No</h4>

                        <hr>

                        <p><a href="https://wa.me/919641030831">+91 96410 30831</a></p>

                    </div>

                </div>

                <div class="section">

                    <div class="box">

                        <i class="fa-light fa-envelope-circle-check"></i>

                    </div>

                    <div class="boxs">

                        <h4>Email Address</h4>

                        <hr>

                        <p><a href="mailto:info@Aarvi.in">info@Aarvi.in</a><br><a href="mailto:contact@Aarvi.in">contact@Aarvi.in</a></p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <br>

    <hr>

    <div class="foo_bottom">

        <div class="box">

            <a href="https://www.facebook.com/Aarvi.in/"><i class="fa-brands fa-facebook-f"></i></a>

            <a href="https://www.instagram.com/Aarvi.in/"><i class="fa-brands fa-instagram"></i></a>

            <a href="https://twitter.com/Aarvi_in"><i class="fa-brands fa-twitter"></i></a>

            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>

            <a href="#"><i class="fa-brands fa-reddit-alien"></i></a>

            <a href="#"><i class="fa-brands fa-youtube"></i></a>

        </div>

        <div class="boxs">

            <p>© Copyright 2018 - 2024 | All rights reserved </p>

        </div>

    </div>

</div>



<div class="desktop_contact">

    <div class="boxs">

        <a href="tel:+919641030831" class="phone"><i class="fa-sharp fa-regular fa-phone-volume"></i></a>

        

        <a href="https://wa.me/919641030831" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>

    </div>

    <div class="boxs boxxx">

        

    </div>

</div>

<div class="mobile_footer">

    <div class="box box1">

        <a href="enquiry.php">

            <i class="fa-regular fa-paper-plane-top"></i>

            <p>Enquiry</p>

        </a>

    </div>

    <div class="box box2">

        <a href="mailto:info@Aarvi.in">

            <i class="fa-sharp fa-regular fa-envelope"></i>

            <p>Email</p>

        </a>

    </div>

    <div class="box box3">

        <a href="tel:+919641030831">

            <i class="fa-sharp fa-regular fa-phone-volume"></i>

            <p>Call</p>

        </a>

    </div>

    <div class="box box4">

        <a href="https://wa.me/919641030831" target="_blank">

            <i class="fa-brands fa-whatsapp"></i>

            <p>WhatsApp</p>

        </a>

    </div>

    <div class="box box5">

        <a href="https://tawk.to/chat/64537bb44247f20fefef48f0/1gvj1met1" target="_blank">

            <i class="fa-regular fa-user-headset"></i>

            <p>Live Chat</p>

        </a>

    </div>

</div>


<!--Start of Tawk.to Script-->

<script type="text/javascript">

    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();

    (function(){

    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];

    s1.async=true;

    s1.src='https://embed.tawk.to/64537bb44247f20fefef48f0/1gvj1met1';

    s1.charset='UTF-8';

    s1.setAttribute('crossorigin','*');

    s0.parentNode.insertBefore(s1,s0);

    })();

</script>

<!--End of Tawk.to Script-->





<!--Slick Slider js cdn-->

<script src="ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script src="cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>





<!--Bootstarp JS-->

<script src="cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>



<!--Custom JS-->

<script src="assets/js/style.js"></script>

<script src="assets/js/function.js"></script>



<script>

    $(document).ready(function () {

        $("#newsLater").submit(function (e) {

            e.preventDefault();



            var formData = $(this).serialize();



            $.ajax({

                type: "POST",

                url: "include/newslater.php",

                data: formData,

                success: function(response) {

                    // console.log("Server Response:", response);

                    $('.output p').text("Thank you for subscribing!");

                    $('#newsLater')[0].reset();

                },

                error: function(xhr, status, error) {

                    // console.log("Server Response:", response);

                    $('.output p').text("Something wrong");

                    console.error(error);

                }

            });

        });

    });

</script>

</body>


<!-- Mirrored from www.Aarvi.in/forgot-password by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 09:28:27 GMT -->
</html>