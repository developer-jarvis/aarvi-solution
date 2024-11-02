<!-- ===================================head start========================================== -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Security Services - Aarvi, Best Website Designs Company </title>
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
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,500;0,600;0,700;0,800;1,300;1,400&amp;family=Poppins:wght@200;300;400;500;600;700;800&amp;display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800&amp;display=swap"
    rel="stylesheet">

  <!--Slick Slider Css-->
  <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
    integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
    integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="assets/css/othere_page.css">
  <!-- Add this in the head section of your HTML -->
  <script src="code.jquery.com/jquery-3.6.4.min.js"></script>

</head>
<!-- ================================head end========================================================= -->

<body>

  <?php include 'include/header.php'; ?>

  <style>
    #active_product {
      color: var(--secondary-color);
      font-weight: 700;
    }

    .product_body .left_side .category a.active_security .boxs i {
      display: block;
    }
  </style>

<div class="breadcumb">
    <div class="text-center d-flex justify-content-center align-items-center" style="height: 150px">
    <h1 class="text-white">Buy Package According Your needs</h1>
    </div>
  </div>

  <div class="product_body">
    <div class="left_side">
      <div class="select_btn">
        <button id="selectBtn" style="display: flex;">
          <div class="box" style="width: 90%;">Select Category</div>
          <div class="box" style="text-align: right; width: 10%;"><i class="fa-solid fa-angle-down"></i></div>
        </button>
      </div>

      <div class="category" id="categoryShow">
        <a href="website-designs.php" class="btn active_website">
          <div class="box">
            <img src="assets/icon/website.webp" alt=""> Website Designs
          </div>
          <div class="boxs"> <i class="fa-regular fa-badge-check"></i>
          </div>
        </a>

        <a href="google-ads.php" class="btn active_google">
          <div class="box">
            <img src="assets/icon/google_ads.webp" alt=""> Google Advertisement
          </div>
          <div class="boxs"> <i class="fa-regular fa-badge-check"></i>
          </div>
        </a>

        <a href="facebook-ads.php" class="btn active_facebook">
          <div class="box">
            <img src="assets/icon/facebook-ads.webp" alt=""> Facebook Advertisement
          </div>
          <div class="boxs"> <i class="fa-regular fa-badge-check"></i>
          </div>
        </a>

        <a href="instagram-ads.php" class="btn active_instagram">
          <div class="box">
            <img src="assets/icon/instagram_ads.webp" alt=""> Instagram Advertisement
          </div>
          <div class="boxs"> <i class="fa-regular fa-badge-check"></i>
          </div>
        </a>

        <a href="youtube-ads.php" class="btn active_youtube">
          <div class="box">
            <img src="assets/icon/youtube_ads.webp" alt=""> Youtube Advertisement
          </div>
          <div class="boxs"> <i class="fa-regular fa-badge-check"></i>
          </div>
        </a>

        <a href="seo-services.php" class="btn active_seo">
          <div class="box">
            <img src="assets/icon/seo-services.webp" alt=""> SEO / ORM Services
          </div>
          <div class="boxs"> <i class="fa-regular fa-badge-check"></i>
          </div>
        </a>

        <a href="software-developments.php" class="btn active_software">
          <div class="box">
            <img src="assets/icon/software-development.webp" alt=""> Software Development
          </div>
          <div class="boxs"> <i class="fa-regular fa-badge-check"></i>
          </div>
        </a>

        <a href="business-promotions.php" class="btn active_business">
          <div class="box">
            <img src="assets/icon/business-promotion.webp" alt=""> Business Promotions
          </div>
          <div class="boxs"> <i class="fa-regular fa-badge-check"></i>
          </div>
        </a>

        <a href="web-security.php" class="btn active_security">
          <div class="box">
            <img src="assets/icon/web-security.webp" alt=""> Web Security Services
          </div>
          <div class="boxs"> <i class="fa-regular fa-badge-check"></i>
          </div>
        </a>

        <a href="graphic-designs-services.php" class="btn active_graphic">
          <div class="box">
            <img src="assets/icon/graphic-designs.webp" alt=""> Graphic Designs Services
          </div>
          <div class="boxs"> <i class="fa-regular fa-badge-check"></i>
          </div>
        </a>

        <a href="on-demand-services.php" class="btn active_ondemand">
          <div class="box">
            <img src="assets/icon/ondemand.webp" alt=""> On Demand Services
          </div>
          <div class="boxs"> <i class="fa-regular fa-badge-check"></i>
          </div>
        </a>

        <a href="domain-hosting-services.php" class="btn active_hosting">
          <div class="box">
            <img src="assets/icon/domain-hosting.webp" alt=""> Domain Hosting Services
          </div>
          <div class="boxs"> <i class="fa-regular fa-badge-check"></i>
          </div>
        </a>
      </div>
    </div>
    <div class="right_side">
      <div class="product_box row justify-content-center align-items-center">
        <div class="col-md-4">
          <img src="product/product/ssl-certificate.webp" alt="Lazy-loaded image" loading="lazy" decoding="async"
            class="lazy">
        </div>
        <div class="col-md-6">
          <h4>SSL Certificate Fixed</h4>
          <h5>All type of website</h5>
          <hr>
          <ul>
            <li>Universal SSL certificate Add</li>
            <li>Comodo SSL certificate ADD</li>
            <li>premium SSL certificate add</li>
            <li>Install ssl certificate</li>
            <li>Fix SSl certificate & http to https redirection</li>
            <li>Compatible with all major browsers and mobile devices</li>
            <li>Displays the green text & Lock icon on address bar</li>
            <li>Protect your site from DDOS or Mailsious Attack</li>
            <li>Certificate Validity One Year</li>
            <li>Universal SSL Comes free CDN</li>
          </ul>
        </div>
        <div class="col-md-2">
         
                <a href="contact.php"><button class="details">Contact Now </button></a>
        </div>
      </div>

      <div class="product_box row justify-content-center align-items-center">
        <div class="col-md-4">
          <img src="product/product/phishing-website.webp" alt="Lazy-loaded image" loading="lazy" decoding="async"
            class="lazy">
        </div>
        <div class="col-md-6">
          <h4>Phishing Attack Recovery</h4>
          <h5>Any Website</h5>
          <hr>
          <ul>
            <li>Google Search Console Assessment</li>
            <li>Isolate and Quarantine</li>
            <li>Malware Scanning and Removal</li>
            <li>Review and Clean Code</li>
            <li>Data Backup and Restoration</li>
            <li>Update and Patch</li>
            <li>Reputation Management</li>
            <li>User Notification and Education</li>
            <li>Enhanced Security Measures</li>
            <li>Continuous Monitoring and Incident Response Plan</li>
          </ul>
        </div>
        <div class="col-md-2">
         
                <a href="contact.php"><button class="details">Contact Now </button></a>
        </div>
      </div>

      <div class="product_box row justify-content-center align-items-center">
        <div class="col-md-4">
          <img src="product/product/website-hacking.webp" alt="Lazy-loaded image" loading="lazy" decoding="async"
            class="lazy">
        </div>
        <div class="col-md-6">
          <h4>WEBSITE HACKING & Sql Injection Fix</h4>
          <h5>Any Website</h5>
          <hr>
          <ul>
            <li>Isolate and Quarantine</li>
            <li>Backup and Restore</li>
            <li>Patch and Update</li>
            <li>Security Audit and Code Review</li>
            <li>SQL Injection Remediation</li>
            <li>Web Application Firewall (WAF)</li>
            <li>Monitoring and Intrusion Detection</li>
            <li>User Authentication and Authorization Review</li>
            <li>Educate Website Administrators</li>
            <li>Incident Response Plan</li>
          </ul>
        </div>
        <div class="col-md-2">
         
                <a href="contact.php"><button class="details">Contact Now </button></a>
        </div>
      </div>

      <div class="product_box row justify-content-center align-items-center">
        <div class="col-md-4">
          <img src="product/product/brute-force-website.webp" alt="Lazy-loaded image" loading="lazy" decoding="async"
            class="lazy">
        </div>
        <div class="col-md-6">
          <h4>DDOS & BRUTE FORCE ATTACK</h4>
          <h5>Any Website</h5>
          <hr>
          <ul>
            <li>Traffic Analysis and Filtering</li>
            <li>DDoS Mitigation Services</li>
            <li>Load Balancing and Failover Mechanisms</li>
            <li>Web Application Firewall</li>
            <li>Incident Response Plan</li>
            <li>Logging and Monitoring</li>
            <li>IP Blocking and Whitelisting</li>
            <li>Password Policy Strengthening</li>
            <li>Communication and Transparency</li>
            <li>Post-Incident Analysis and Remediation</li>
          </ul>
        </div>
        <div class="col-md-2">
          
                <a href="contact.php"><button class="details">Contact Now </button></a>
        </div>
      </div>

      <div class="product_box row justify-content-center align-items-center ">
        <div class="col-md-4">
          <img src="product/product/unknown-code.webp" alt="Lazy-loaded image" loading="lazy" decoding="async"
            class="lazy">
        </div>
        <div class="col-md-6">
          <h4>FIX UNKNOWN OR THIRD-PARTY CODE</h4>
          <h5>Any Website</h5>
          <hr>
          <ul>
            <li>Code Review and Analysis</li>
            <li>Vendor or Third-Party Verification</li>
            <li>Isolation of Suspicious Code</li>
            <li>Patch or Remove Unapproved Code</li>
            <li>Security Testing</li>
            <li>Review Development and Deployment Processes</li>
            <li>Update Security Policies</li>
            <li>Continuous Monitoring and Auditing</li>
            <li>Incident Response Plan</li>
          </ul>
        </div>
        <div class="col-md-2">
         
                <a href="contact.php"><button class="details">Contact Now </button></a>
        </div>
      </div>
    </div>
  </div>







  <?php include 'include/footer.php'; ?>

</body>

</html>