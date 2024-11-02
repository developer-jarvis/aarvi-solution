<script src="code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- <script src="cdn.jsdelivr.net/npm/sweetalert2%4011.0.19/dist/sweetalert2.all.min.js"></script> -->

<script src="assets/js/contact_bottom.js"></script>

<!--Footer-->
<style>
    :root{
  --secondary-color:#071f56;
  --color-primary:#fe9101;
}
    /*===========footer css=========*/
.footer{
  padding: 70px 50px 30px;
  background: #071f56;
  background-position: center right;
  background-repeat: no-repeat;
}
.footer .section{
  display: flex;
}
.footer .section .box{
  width: 50%;
}
.footer .section .box h4{
  color: aliceblue;
  font-size: 20px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}
.footer .section .box hr{
  width: 80%;
  border-top: 2px solid aliceblue;
  margin: 3px 0 10px;
}
.footer .section .box ul li{
  list-style: none;
  margin: 8px 0;
  margin-left: -30px;
}
.footer .section .box ul li a{
  color: aliceblue;
  text-decoration: none;
  font-size: 12px;
  font-weight: 400;
  font-family: nunito;
  letter-spacing: 0.7px;
  text-transform: uppercase;
  transition: margin-left 0.3s ease-in-out;
}
.footer .section .box ul li a:hover{
  margin-left: 10px;
}
.footer .section .box ul li a i{
  font-size: 10px !important;
  margin-right: 3px;
}
.footer .section .box .newslater{
  margin-top: 20px;
}
.footer .section .box .newslater input.email{
  font-size: 15px;
  background-color: aliceblue;
  border: 0;
  border-radius: 30px 0 0 30px;
  padding: 11px 20px;
}
.footer .section .box .newslater input.submit{
  font-size: 13px;
  border: 0;
  border-radius: 0 30px 30px 0;
  padding: 12.5px 20px;
  text-transform: uppercase;
  font-weight: bold;
  letter-spacing: 0.5px;
  background: var(--color-primary);
  transition: margin-left 0.3s ease-in-out;
  color: aliceblue;
}
.footer .section .box .section{
  display: flex;
  margin: 10px 0 25px;
}
.footer .section .box .section .box{
  width: auto;
}
.footer .section .box .section .box i{
  background-color: aliceblue;
  font-size: 16px;
  padding: 14px;
  border-radius: 100%;
  color: #00688B;
}
.footer .section .box .section .box .fa-phone-volume{
  rotate: -35deg;
}
.footer .section .box .section .box .fa-whatsapp{
  padding: 14px 15px;
}
.footer .section .box .section .box .fa-envelope-circle-check{
  padding: 14px 11px 14px 12px;
}
.footer .section .box .section .boxs{
  margin-left: 8px;
}
.footer .section .box .section .boxs h4{
  font-size: 17px;
}
.footer .section .box .section .boxs hr{
  width: 35px;
  margin: -5px 0 5px;
}
.footer .section .box .section .boxs p{
  font-size: 15px;
}
.footer .section .box .section .boxs p,
.footer .section .box .section .boxs p a{
  margin: 0px 0 0;
  color: aliceblue;
  text-decoration: none;
  font-size: 13px;
  transition: margin-left 0.3s ease-in-out;
  font-weight: 400;
  font-family: nunito;
  letter-spacing: 0.5px;
}
.footer .section .box .section .boxs p a:hover{
  margin-left: 10px;
}

.footer hr{
  border-top: 3px solid aliceblue ;
}
.footer .foo_bottom{
  display: flex;
}
.footer .foo_bottom .box{
  width: 50%;
  text-align: start;
}
.footer .foo_bottom .box a{
  margin-right: 5px;
}
.footer .foo_bottom .box a i{
  color: #00688B;
  background-color: aliceblue;
  padding: 10px 11px;
  border-radius: 30px;
  font-size: 15px;
  transition: transform 0.5s;
}
.footer .foo_bottom .box a i:hover{
  transform: scale(0.9);
}
.footer .foo_bottom .box a .fa-facebook-f{
  padding: 10px 13px;
}
.footer .foo_bottom .box a .fa-reddit-alien{
  padding: 10px;
}
.footer .foo_bottom .box a .fa-youtube{
  padding: 10px 9px;
}
.footer .foo_bottom .boxs{
  text-align: right;
  width: 50%;
  padding-top: 10px;
}
.footer .foo_bottom .boxs p{
  color: aliceblue;
  font-size: 15px;
  font-weight: 400;
  letter-spacing: 0.5px;
}
.footer .foo_bottom .boxs p a img{
  width: 85px;
}
.footer .section .tablet_view{
  display: flex;
  width: 50%;
}
.footer .section .box .newslater input.email{
  width: 70%;
}
.footer .section .box .newslater input.submit{
  width: 30%;
}
.footer .section .box .newslater_p{
  margin: 0px 0 -15px;
  color: aliceblue;
  text-decoration: none;
  font-size: 13px;
  transition: margin-left 0.3s ease-in-out;
  font-weight: 400;
  font-family: nunito;
  letter-spacing: 0.5px;
}


@keyframes shadow-back {
	0% {
		box-shadow: 0 0 0 0 #25D366;
	}
	100% {
		box-shadow: 0 0 0 15px transparent;
	}
}
.mobile_footer{
  display: none;
}
@media only screen and (max-width: 1050px){
  .footer .section{
    display: block;
  }
  .footer .section .tablet_view{
    display: flex;
    width: auto;
  }
  .footer .section .margin_top{
    margin-top: 30px;
  }
  .footer .foo_bottom .box {
    width: 33%;
  }
  .footer .foo_bottom .boxs {
    width: 67%;
    margin-top: -4px;
  }
  .footer .foo_bottom .box a {
    margin-right: 3px;
  }
  .footer .foo_bottom .box a i {
    padding: 8px 9px;
  }
  .footer .foo_bottom .box a .fa-facebook-f {
    padding: 8px 11px;
  }
  .footer .foo_bottom .box a .fa-reddit-alien {
    padding: 8px;
  }
  .footer .foo_bottom .box a .fa-youtube {
    padding: 8px 7px;
  }
}
@media only screen and (max-width: 600px){
  .footer{
    padding: 50px 15px 30px;
  }
  .footer .section .tablet_view {
    display: block;
    width: auto;
  }
  .footer .section .box {
    width: auto;
    margin-bottom: 35px;
  }
  .footer .section .box h4 {
    font-size: 18px;
  }
  .footer .section .box .newslater input.email{
    width: 70%;
  }
  .footer .section .box .newslater input.submit{
    width: 30%;
  }
  .footer .section .box .section {
    margin: 0;
  }
  .footer .section .box .section .boxs h4 {
    font-size: 15px;
  }
  .footer hr {
    margin-top: -40px;
    margin-bottom: 25px;
  }
  .footer .foo_bottom {
    display: block;
  }
  .footer .foo_bottom .box,
  .footer .foo_bottom .boxs{
    width: auto;
    text-align: center;
  }

  
  .mobile_footer{
    display: flex;
    position: sticky;
    bottom: 0;
    width: 100%;
    align-items: center;
    text-align: center;
    background:var(--color-primary);
    color: var(--secondary-color);
    padding: 3px 5px 2px;
  }
  .mobile_footer .box{
    width: 20%;
  }
  .mobile_footer .box a{
    color: #010a14;
    text-decoration: none;
    color: var(--secondary-color);
  }
  .mobile_footer .box a i{
    font-size: 20px;
    color: var(--secondary-color);
  }
  .mobile_footer .box a .fa-paper-plane-top{
    rotate: -30deg;
  }
  .mobile_footer .box3{
    margin-top: -25px;
  }
  .mobile_footer .box a .fa-phone-volume{
    background:var(--color-primary);
    padding: 15px;
    border-radius: 30px;
    font-size: 20px;
    rotate: -30deg;
    margin-bottom: -2px;
    animation: shadow-pulse 1s infinite;
  }
  .mobile_footer .box a p{
    font-family: nunito;
    font-size: 10.5px;
    font-weight: 800;
    letter-spacing: 0.5px;
    margin: 0;
    text-transform: uppercase;
  }
}


</style>
<div class="footer">

    <div class="section">

        <div class="tablet_view">

            <div class="box">

                <h4>About company</h4>

                <hr>

                <ul>

                    <li><a href="index.php"><i class="fa-light fa-chevrons-right"></i> Home</a></li>

                    <li><a href="about-us.php"><i class="fa-light fa-chevrons-right"></i> About</a></li>

                    <li><a href="mision-vision.php"><i class="fa-light fa-chevrons-right"></i> Mision Vision</a>
                    </li>

                    <li><a href="" target="_blank"><i
                                class="fa-light fa-chevrons-right"></i> Feedback</a></li>

                    <li><a href=""
                            target="_blank"><i class="fa-light fa-chevrons-right"></i> Testimonials</a></li>

                    <li><a href="portfolio.php"><i class="fa-light fa-chevrons-right"></i> Portfolio</a></li>

                   

                </ul>

            </div>

            <div class="box">

                <h4>Digital Services</h4>

                <hr>

                <ul>

                    <li><a href="website-designs.php"><i class="fa-light fa-chevrons-right"></i> Website Designs</a>
                    </li>

                    <li><a href="software-development.php"><i class="fa-light fa-chevrons-right"></i> Software
                            Development</a></li>

                    <li><a href="digital-marketing.php"><i class="fa-light fa-chevrons-right"></i> Digital
                            Marketing</a></li>

                    <li><a href="search-engine-optimization.php"><i class="fa-light fa-chevrons-right"></i> Search
                            Engine Optimization [SEO]</a></li>

                    <li><a href="paid-ad-service.php"><i class="fa-light fa-chevrons-right"></i> Paid Ads
                            Services</a></li>

                    <li><a href="social-media-marketing.php"><i class="fa-light fa-chevrons-right"></i> Social
                            Media Marketing</a></li>

                    <li><a href="websecurity.php"><i class="fa-light fa-chevrons-right"></i> Website Security &
                            Hacking removal</a></li>

                    <li><a href="graphic-design.php"><i class="fa-light fa-chevrons-right"></i> Graphic Design</a>
                    </li>

                    <li><a href="mobile-app.php"><i class="fa-light fa-chevrons-right"></i> Mobile App</a></li>

                    <li><a href="business-promotion.php"><i class="fa-light fa-chevrons-right"></i> Business
                            Promotion</a></li>

                </ul>

            </div>

        </div>

        <div class="tablet_view margin_top">

            <div class="box">

                <h4>Important Links</h4>

                <hr>

                <ul>

                    <li><a href="website-designs.php"><i class="fa-light fa-chevrons-right"></i> Product &
                            Pricing</a></li>

                    <li><a href="privacy-policy.php"><i class="fa-light fa-chevrons-right"></i> Privacy &
                            policy</a></li>

                    <li><a href="terms-condition.php"><i class="fa-light fa-chevrons-right"></i> Terms of
                            Services</a></li>

                    <!-- <li><a href="refund-policy.php"><i class="fa-light fa-chevrons-right"></i> Refund Policy</a>
                    </li> -->

                    <li><a href="renewal-policy.php"><i class="fa-light fa-chevrons-right"></i> Renewal Policy</a>
                    </li>

                    <!-- <li><a href="Career-2.php"><i class="fa-light fa-chevrons-right"></i> Career</a></li> -->

                    <li><a href="hosting-services.php"><i class="fa-light fa-chevrons-right"></i> Hosting
                            Service</a></li>

                    <li><a href="domain-booking-service.php"><i class="fa-light fa-chevrons-right"></i> Domain
                            Booking Service</a></li>

                    <li><a href="login.php"><i class="fa-light fa-chevrons-right"></i> Login</a></li>

                </ul>

            </div>
            <div class="box">

                <h4>Join Our Newsletter</h4>

                <hr>

                <p class="newslater_p">Subscribe to email alerts. We promise not to spam your inbox.</p>

                <form action="#" method="post" class="newslater" id="newsLater">

                    <input type="email" placeholder="Enter Your Email Address" name="email" required
                        class="email"><input type="submit" class="submit" value="Subscribe">

                    <div class="output">
                        <p
                            style="color: #f9ae0c; font-size: 13px; font-weight: 600; font-family: nunito; margin-top: 2px; margin-bottom: 0;">
                        </p>
                    </div>

                </form>

                <div class="section" style="margin-top: 20px;">

                    <div class="box">

                        <i class="fa-duotone fa-phone-volume"></i>

                    </div>

                    <div class="boxs">

                        <h4>Phone No</h4>

                        <hr>

                        <p><a href="tel:918603999789">+91 8603999789</a></p>

                    </div>

                </div>

                <div class="section">

                    <div class="box">

                        <i class="fa-brands fa-whatsapp"></i>

                    </div>

                    <div class="boxs">

                        <h4>Whatsapp No</h4>

                        <hr>

                        <p><a href="https://wa.me/918603999789">+91 8603999789</a></p>

                    </div>

                </div>

                <div class="section">

                    <div class="box">

                        <i class="fa-light fa-envelope-circle-check"></i>

                    </div>

                    <div class="boxs">

                        <h4>Email Address</h4>

                        <hr>

                        <p><a href="mailto:aarvisolution21@gmail.com">aarvisolution21@gmail.com</a></p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <br>

    <hr>

    <div class="foo_bottom">

        <div class="box">

            <a href="https://www.facebook.com/As-Aarvi.in/"><i class="fa-brands fa-facebook-f"></i></a>

            <a href="https://www.instagram.com/As-Aarvi.in/"><i class="fa-brands fa-instagram"></i></a>

            <a href="https://twitter.com/As-Aarvi_in"><i class="fa-brands fa-twitter"></i></a>

            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>

            <a href="#"><i class="fa-brands fa-youtube"></i></a>

        </div>

        <div class="boxs">

            <p>© 2024 All Rights Reserved. Made With ❤️ By <a href="genmish.com"> Genmish.Com</a></p>

        </div>

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

        <a href="mailto:aarvisolution21@gmail.com">

            <i class="fa-sharp fa-regular fa-envelope"></i>

            <p>Email</p>

        </a>

    </div>

    <div class="box box3">

        <a href="tel:+918603999789">

            <i class="fa-sharp fa-regular fa-phone-volume"></i>

            <p>Call</p>

        </a>

    </div>

    <div class="box box4">

        <a href="https://wa.me/918603999789" target="_blank">

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
<!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/66eebb76e5982d6c7bb246e1/1i8a8oi1g';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
<!--End of Tawk.to Script-->


<!--Slick Slider js cdn-->

<script src="ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script src="cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
   
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>





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

                success: function (response) {

                    // console.log("Server Response:", response);

                    $('.output p').text("Thank you for subscribing!");

                    $('#newsLater')[0].reset();

                },

                error: function (xhr, status, error) {

                    // console.log("Server Response:", response);

                    $('.output p').text("Something wrong");

                    console.error(error);

                }

            });

        });

    });

</script>

</body>
