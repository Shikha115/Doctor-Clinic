<?php
$appVersion = "1.0.5";
$pagename = strtolower(basename($_SERVER['PHP_SELF']));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
  <title>Doctors Clinic</title>
  <meta name="description" content="Doctors Clinic" />
  <meta name="keyword" content="Doctors Clinic" />
  <meta name="google" content="notranslate">
  <meta name="theme-color" content="#ffffff">
  <meta name="msapplication-navbutton-color" content="#ffffff">
  <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff">
  <link rel="shortcut icon" type="image/png" href="./favicon.png">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link href="css/app.css?v=<?php echo $appVersion ?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/layers.css">
  <link rel="stylesheet" type="text/css" href="css/swiper-plugin.css">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,400;1,500&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.theme.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

  <div class="wrapper clearfix">
   
    <header class="header-main">
    <div class="header-1">
      <div class="container">
        <div class="row align-items-center justify-content-end">
          <div class="col-2">
                
            <a href="./" class="brand">
              <img src="images/logo.png" alt="logo">  
            </a>
                
          </div>
          
          <div class="col-10 ml-auto">
            <div class="row justify-content-end">
              <div class="col-12 col-md-3 col-sm-3">
                <div class="head-detail">
                  <div class="item-icon">
                    <i class="icon-envelope-o"></i>
                  </div>
                  <div class="item-text mail">
                    <p>
                      Mail US
                      
                    </p>
                    <a href="mailto:info@doctor.com">info@doctor.com</a>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-5  col-sm-3">
                <div class="head-detail border-head">
                  <div class="item-icon">
                    <i class="icon-location"></i>
                  </div>
                  <div class="item-text address">
                    <p>Address</p>
                    <span>506-507,ITL Northex Tower,A09 Netaji Subhash Place,Pitampura, Delhi-110034</span>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-3 col-sm-3">
                <div class="head-phone-det">
                  <div class="item-icon">
                    <i class="icon-phone"></i>
                  </div>
                  <div class="item-text call">
                    <h2>Call Now</h2>
                    <p>
                      (24 hours / 7 days)
                    </p>
                    <a href="tel:+088123654987">+088 123 654 987</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        
        <div class="head-menu">
          <div class="container">
            <div class="row align-items-center">
               <div class="col-auto">
                <a href="javascript:void(0)" class="d-xl-none hamburger">
                            <span class="h-top"></span>
                            <span class="h-middle"></span>
                            <span class="h-bottom"></span>
                </a>
                  <nav class="main-nav">
                     
                        <ul class="nav flex-column flex-xl-row flex-xl-nowrap align-items-xl-center justify-content-xl-start">
                          <li>
                            <a href="./">Home</a>
                          </li>
                          <li>
                                <a href="about.php">About Us</a>
                                <!-- <span class="toggle-submenu">+</span>
                                <div class="submenu">
                                    <ul class="list-unstyled">
                                        <li><a href="javascript:void(0)">Brand</a></li>
                                        <li><a href="javascript:void(0)">Community</a></li>
                                        <li><a href="javascript:void(0)">Team</a></li>
                                        <li><a href="javascript:void(0)">Sustainability</a></li>
                                    </ul>
                                </div> -->
                                
                            </li>
                            <li>
                                <a href="services.php">Services</a>
                                 <span class="toggle-submenu">+</span> 
                                 <div class="submenu">
                                  <div class="d-flex row flex-nowrap">
                                    <ul class="list-unstyled col-6">
                                        <li><a href="javascript:void(0)">Women's Health Services</a></li>
                                        <li><a href="javascript:void(0)">Pregnancy Care</a></li>
                                        <li><a href="javascript:void(0)">Gynecologic oncologists</a></li>
                                        <li><a href="javascript:void(0)">Land, Property & Real Estate Consultant</a></li>
                                        <li><a href="javascript:void(0)">RERA Consultant</a></li>
                                        <li><a href="javascript:void(0)">Cross Border Transactions Consultant</a></li>
                                        <li><a href="javascript:void(0)">Foreign Direct Investment & FEMA Consultant</a></li>
                                        <li><a href="javascript:void(0)">Municipal Matters PAN India Consultant</a></li>
                                        
                                    </ul>
                                    <ul class="list-unstyled col-6">
                                        <li><a href="javascript:void(0)">Treatments</a></li>
                                        <li><a href="javascript:void(0)">Blood Tests</a></li>
                                        <li><a href="javascript:void(0)">Echocardiography</a></li>
                                        <li><a href="javascript:void(0)">Public Relations (PR) Consultant</a></li>
                                        <li><a href="javascript:void(0)">Material & Services Procurement Consultant – Domestic & International</a></li>
                                        <li><a href="javascript:void(0)">Business Setup Worldwide Services </a></li>
                                        <li><a href="javascript:void(0)">Intangible Property Rights Consultants</a></li>
                                    </ul>
                                    </div>
                                </div> 
                                
                            </li>
                            
                          
                            
                            
                            
                            <li>
                                <a href="contact-us.php">Contact Us</a>
                                
                            </li>
                             
                                                        
                            
                                </ul>
                               
                            
                    </nav>
                </div>

                <div class="col-auto ml-auto">
                  <div class="end-btn">
                    <ul class="head-social list-unstyled">
                      <li>
                        <a href="facebook.com" target="blank">
                          <i class="icon-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="instagram.com" target="blank">
                          <i class="icon-instagram-sketched"></i>
                        </a>
                      </li>
                      <li>
                        <a href="linkedin.com" target="blank">
                          <i class="icon-linkedin2"></i>
                        </a>
                      </li>
                      <li>
                        <a href="twitter.com" target="blank">
                          <i class="icon-twitter"></i>
                        </a>
                      </li>
                    </ul>
                    <a href="contact-us.php" class="btn btn-primary">
                      <i class="icon-mail-forward"></i> Appointment
                    </a>
                  </div>
                </div>
            </div>
            
        </div>
      </div>

      
    </header>
   
  <main>