<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry - Aarvi, Best Website Design Company In Boring Road Patna </title>
    <link rel="stylesheet" href="cdn.jsdelivr.net/npm/sweetalert2%4011.0.19/dist/sweetalert2.min.css">

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
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,500;0,600;0,700;0,800;1,300;1,400&amp;family=Poppins:wght@200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">

    <!--Slick Slider Css-->
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/css/othere_page.css">

</head>

<body>


    <?php include 'include/header.php'; ?>
    <style>
        @media only screen and (max-width: 600px) {
            .breadcumb {
                text-align: center;
                padding: 50px 10px 30px;
                background: linear-gradient(290deg, #f9ae0cb1, #f904a8ea), url(assets/img/web-designs.webp);
                background-position: top left;
                background-size: cover;
            }

            .breadcumb h4 {
                font-size: 30px;
                font-weight: 700;
            }

            .breadcumb p,
            .breadcumb p a {
                font-size: 14px;
            }
        }
    </style>
    <!--Bradecumbe-->
    <div class="breadcumb">
        <h4>Let's Create Your Dream Together</h4>
        <p>Kindly complete the form with your specifications, and we will promptly respond to your inquiry. <br> For
            more information call <a href="tel: +91 8603999789" style="color: blue;"> +91 8603999789</a></p>
    </div>

    <div class="enquiry">
        <div class="row">
            <div class="col-md-8">
                <h4>Have a Question? Send us Your Requirement</h4>
                <hr>
                <form action="#" method="POST">
                    <div class="col-md-12 row width_mobile">
                        <div class="col-md-6">
                            <label for="Name">Name <span>*</span></label>
                            <input type="text" name="name" id="name" placeholder="Enter Your Full Name.." required>
                            <p class="error" id="nameError"></p>
                        </div>

                        <div class="col-md-6">
                            <label for="Email">Email <span>*</span></label>
                            <input type="email" name="email" id="email" placeholder="Enter Your Email.." required>
                        </div>

                        <div class="col-md-6">
                            <label for="Contact Number">Contact Number <span>*</span></label>
                            <input type="number" name="phone" id="phone" placeholder="Enter Contact no.." required>
                            <p class="error" id="phoneError"></p>
                        </div>

                        <div class="col-md-6">
                            <label for="City">City <span>*</span></label>
                            <input type="text" name="city" id="city" placeholder="Enter Your City Name.." required>
                            <p class="error" id="cityError"></p>
                        </div>

                        <div class="col-md-6">
                            <label for="Budget">Approximate Budget <span>*</span></label>
                            <select name="budget" id="budget" required>
                                <option hidden>Select Your Budget...</option>
                                <option value="Less than 5000 ($60)">Less than 5000 ($60)</option>
                                <option value="₹ 5000 - ₹ 10000 ($60 - $120)">₹ 5000 - ₹ 10000 ($60 - $120)</option>
                                <option value="₹ 10000 - ₹ 15000 ($120 - $180)">₹ 10000 - ₹ 15000 ($120 - $180)</option>
                                <option value="₹ 15000 - ₹ 20000 ($180 - $250)">₹ 15000 - ₹ 20000 ($180 - $250)</option>
                                <option value="More than ₹ 20000 ($250)">More than ₹ 20000 ($250)</option>
                                <option value="Negotiable">Negotiable</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="Services">Services Looking <span>*</span></label>
                            <select name="service" id="service" required>
                                <option value="" hidden>Select Service *</option>
                                <option value="Website Designs">Website Designs</option>
                                <option value="Software Development">Software Development</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="SEO">Search Engine Optimization [SEO]</option>
                                <option value="Facebook Advertisement">Facebook Advertisement</option>
                                <option value="Google Advertisement">Google Advertisement</option>
                                <option value="Graphic Designing">Graphic Designing</option>
                                <option value="Logo Designing">Logo Designing</option>
                                <option value="Domain booking">Domain Booking</option>
                                <option value="Hosting Buy / Connect">Hosting Buy / Connect</option>
                                <option value="App Development">App Development</option>
                                <option value="Website Security">Website Security</option>
                                <option value="Business Promotions">Business Promotions</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="Requirement">Requirement <span>*</span></label>
                            <textarea name="requirement" id="requirement"
                                placeholder="Properly describe your requirements" required></textarea>
                        </div>

                        <div class="col-md-12">
                            <button id="enquirySubmit" name="send">Submit Enquiry</button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-4 right_box">
                <div class="section row" style="text-align: left;">
                    <h4>Benifits & Advantages for our clients</h4>
                    <hr>
                    <div class="boxs col-md-6 row">
                        <div class="col-3">
                            <img src="assets/img/benifits.webp" alt="">
                        </div>
                        <div class="col-9">
                            <h5>500%</h5>
                            <p>GROWTH IN SALES</p>
                        </div>
                    </div>

                    <div class="boxs col-md-6 row">
                        <div class="col-3">
                            <img src="assets/img/benifits.webp" alt="">
                        </div>
                        <div class="col-9">
                            <h5>100%</h5>
                            <p>LOCAL CUSTOMER OPTIMIZATION</p>
                        </div>
                    </div>

                    <div class="boxs col-md-6 row">
                        <div class="col-3">
                            <img src="assets/img/benifits.webp" alt="">
                        </div>
                        <div class="col-9">
                            <h5>100%</h5>
                            <p>SEO & USER FRIENDLY</p>
                        </div>
                    </div>

                    <div class="boxs col-md-6 row">
                        <div class="col-3">
                            <img src="assets/img/benifits.webp" alt="">
                        </div>
                        <div class="col-9">
                            <h5>400%</h5>
                            <p>BOOST TRAFFICS</p>
                        </div>
                    </div>

                    <div class="boxs col-md-6 row">
                        <div class="col-3">
                            <img src="assets/img/benifits.webp" alt="">
                        </div>
                        <div class="col-9">
                            <h5>500%</h5>
                            <p>RISES IN THE GENERATION OF LEADS</p>
                        </div>
                    </div>

                    <div class="boxs col-md-6 row">
                        <div class="col-3">
                            <img src="assets/img/benifits.webp" alt="">
                        </div>
                        <div class="col-9">
                            <h5>200%</h5>
                            <p>GAINS IN REVENUE FOR THE CLIENT</p>
                        </div>
                    </div>

                    <div class="row box">
                        <div class="col-11 row">
                            <div class="col-12">
                                <h4>General Information &amp; Billing/Order</h4>
                            </div>
                            <div class="col-1">
                                <i class="fa-regular fa-phone-volume"></i>
                            </div>
                            <div class="col-11">
                                <h5>Phone Number</h5>
                                <p><a href="tel:+91 8603999789">+91 8603999789</a></p>
                            </div>
                            <div class="col-1">
                                <i class="fa-light fa-envelope"></i>
                            </div>
                            <div class="col-11">
                                <h5>Email Add.</h5>
                                <p><a href="mailto:aarvisolution21@gmail.com">aarvisolution21@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="col-1 icon">
                            <i class="fa-sharp fa-light fa-user-headset"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include 'mail.php'; ?>

    <script src="code.jquery.com/jquery-3.6.4.min.js"></script>







    <!--Footer-->
    <?php include 'include/footer.php'; ?>
</body>


</html>