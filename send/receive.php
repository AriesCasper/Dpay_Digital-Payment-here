<?php
// Initialize the session
session_start();
 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="icon" />
<title>Dpay - Digital Payment here...</title>
 

<!-- Web Fonts
============================================= -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
 <link rel="stylesheet" type="text/css" href="boot.css" />
<link rel="stylesheet" type="text/css" href="font.css" />
<link rel="stylesheet" type="text/css" href="select.css" />
<link rel="stylesheet" type="text/css" href="currency.css" />
<link rel="stylesheet" type="text/css" href="owl_c.css" />
<link rel="stylesheet" type="text/css" href="style2.css" />
<!-- Colors Css -->
<link id="color-switcher" type="text/css" rel="stylesheet" href="#" />
</head>
<body>

<!-- Preloader -->
<div id="preloader">
  <div data-loader="dual-ring"></div>
</div>
<!-- Preloader End --> 

<!-- Document Wrapper   
============================================= -->
<div id="main-wrapper"> 
  
  <!-- Header
  ============================================= -->
  <header id="header">
    <div class="container">
      <div class="header-row">
        <div class="header-column justify-content-start"> 
          <!-- Logo
          ============================= -->
           <div class="logo me-3"> <a class="d-flex" href="index.html" title="Dpay - Digital payment here"><img src="logo2.png" alt="Dpay" width="80" height="60" /></a> </div>
          <!-- Logo end --> 
          <!-- Collapse Button
          ============================== -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header-nav"> <span></span> <span></span> <span></span> </button>
          <!-- Collapse Button end --> 
          
          <!-- Primary Navigation
          ============================== -->
           <nav class="primary-menu navbar navbar-expand-lg">
            <div id="header-nav" class="collapse navbar-collapse">
              <ul class="navbar-nav me-auto">
                <li class="http://localhost/Impact/send/send.php"><a href=" ">Send</a></li>
                <li><a href="http://localhost/Impact/send/receive.php">Receive</a></li>
                <li><a href="http://localhost/Impact/aboutus.php">About Us</a></li>
                 
                <li><a href="http://localhost/Impact/help.php">Help</a></li>
                
                      </ul>
                    </li>
                    
          </nav>
          <!-- Primary Navigation end --> 
        </div>
        <div class="header-column justify-content-end"> 
          <!-- Login & Signup Link
          ============================== -->
          <nav class="login-signup navbar navbar-expand">
            <ul class="navbar-nav">
              <li><a href="http://localhost/Impact/php_dashboard/login.php">Login</a> </li>
              <li class="align-items-center h-auto ms-sm-3"><a class="btn btn-primary" href="http://localhost/Impact/php_dashboard/register.php">Sign Up</a></li>
            </ul>
          </nav>
          <!-- Login & Signup Link end --> 
        </div>
      </div>
    </div>
  </header>
  <!-- Header End --> 
  
  <!-- Content
  ============================================= -->
  <div id="content"> 
    
    <!-- Send Money
    ============================================= -->
    <section class="hero-wrap">
      <div class="hero-mask opacity-9 bg-primary"></div>
      <div class="hero-bg" style="background-image:url('images/bg/image-5.jpg');"></div>
      <div class="hero-content d-flex flex-column fullscreen-with-header">
        <div class="container my-auto py-5 text-center">
          <h2 class="text-14 text-white">Receive Money from Around The World with Dpay</h2>
          <p class="text-5 text-white mb-4">Quickly and easily receive and request money online with Dpay.<br class="d-none d-lg-block">
            Over 180 countries and 120 currencies supported.</p>
          <a class="btn btn-light video-btn" href="#" data-src="https://www.youtube.com/embed/7e90gBu4pas" data-bs-toggle="modal" data-bs-target="#videoModal"><span class="text-2 me-3"><i class="fas fa-play"></i></span>See How it Works</a> </div>
      </div>
    </section>
    <!-- Send Money End --> 
    
    <!-- How it works
    ============================================= -->
    <section class="section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-xl-10 mx-auto">
            <div class="row">
              <div class="col-md-5 col-lg-6 text-center my-auto order-2 order-md-1"> <img class="img-fluid shadow" src="images/request-money.png" alt=""> </div>
              <div class="col-md-7 col-lg-6 order-1 order-md-2">
                <h2 class="text-9"> The simple way to Receive Money</h2>
                <p class="text-3 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="row gy-4">
                  <div class="col-12">
                    <div class="featured-box style-3">
                      <div class="featured-box-icon text-light"><span class="w-100 text-20 fw-500">1</span></div>
                      <h3>Sign Up Your Account</h3>
                      <p>Become a register user first, then log in to your account and enter your card or bank details.</p>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="featured-box style-3">
                      <div class="featured-box-icon text-light"><span class="w-100 text-20 fw-500">2</span></div>
                      <h3>Enter Payer Details</h3>
                      <p>Enter your payer name, email address then add an amount with currency to request payment.</p>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="featured-box style-3">
                      <div class="featured-box-icon text-light"><span class="w-100 text-20 fw-500">3</span></div>
                      <h3>Receive Money</h3>
                      <p>After the request payment, the payer will be notified via an email for payment.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- How it works End --> 
    
    <!-- Why choose us
    ============================================= -->
    <section class="section">
    <div class="container">
      <h2 class="text-9 text-center">Why choose Dpay?</h2>
      <p class="lead text-center mb-4">Here’s Top 4 reasons why using a Payyed account for manage your money.</p>
      <div class="row">
        <div class="col-xl-10 mx-auto">
          <div class="row">
            <div class="col-sm-6">
              <div class="featured-box style-1">
                <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
                <h3>Over 180 countries</h3>
                <p>Essent lisque persius interesset his et, in quot quidam.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="featured-box style-1">
                <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
                <h3>Lower Fees</h3>
                <p>Lisque persius interesset his et, in quot quidam persequeris.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="featured-box style-1">
                <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
                <h3>Easy to Use</h3>
                <p>Essent lisque persius interesset his et, in quot quidam.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="featured-box style-1">
                <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
                <h3>Faster Payments</h3>
                <p>Quidam lisque persius interesset his et, in quot quidam.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="featured-box style-1">
                <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
                <h3>100% secure</h3>
                <p>Essent lisque persius interesset his et, in quot quidam.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="featured-box style-1">
                <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
                <h3>24/7 customer service</h3>
                <p>Quidam lisque persius interesset his et, in quot quidam.</p>
              </div>
            </div>
          </div>
          <div class="text-center mt-4"><a href="#" class="btn btn-outline-primary shadow-none text-uppercase">Sign up Now</a></div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <!-- Why choose us End --> 
  
  <!-- How work
  ============================================= -->
  <section class="section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 order-2 order-lg-1">
          <div class="hero-wrap section h-100 p-5 mx-4 rounded-pill">
            <div class="hero-mask rounded-pill opacity-7 bg-dark"></div>
            <div class="hero-bg rounded-pill" style="background-image:url('./images/bg/image-6.jpg');"></div>
            <div class="hero-content text-center py-5 my-5"> <a class="video-btn d-inline-flex" href="#" data-src="https://www.youtube.com/embed/7e90gBu4pas" data-bs-toggle="modal" data-bs-target="#videoModal"> <span class="playButton playButton-pulsing bg-white m-auto"><i class="fas fa-play"></i></span> </a> </div>
          </div>
        </div>
        <div class="col-lg-5 my-auto text-center text-lg-start order-1 order-lg-2 mb-5 mb-lg-0">
          <h2 class="text-9">How does it work?</h2>
          <p class="lead">Here’s Top reasons why using a Payyed account.</p>
          <p class="text-3">Quidam lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure in quot quidam mea essent possim iriure.</p>
          <p class="text-3">Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. lisque persius interesset his et, in quot quidam mea essent possim iriure.</p>
          <a href="#" class="btn-link text-4">Learn more<i class="fas fa-chevron-right text-2 ms-2"></i></a> </div>
      </div>
    </div>
  </section>
  <!-- How work End --> 
  
  <!-- Testimonial
  ============================================= -->
  <section class="section">
    <div class="container">
      <h2 class="text-9 text-center">What people say about Dpay</h2>
      <p class="lead text-center mb-5">A payments experience people love to talk about</p>
      <div class="row g-4">
        <div class="col-lg-6">
          <div class="testimonial rounded text-center p-4">
            <p class="text-4">“Easy to use, reasonably priced simply dummy text of the printing and typesetting industry. Quidam lisque persius interesset his et, in quot quidam possim iriure.”</p>
            <strong class="d-block fw-500">Jay Shah</strong> <span class="text-muted">Founder at Icomatic Pvt Ltd</span> </div>
        </div>
        <div class="col-lg-6">
          <div class="testimonial rounded text-center p-4">
            <p class="text-4">“I am happy Working with printing and typesetting industry. Quidam lisque persius interesset his et, in quot quidam persequeris essent possim iriure.”</p>
            <strong class="d-block fw-500">Patrick Cary</strong> <span class="text-muted">Freelancer from USA</span> </div>
        </div>
        <div class="col-lg-6">
          <div class="testimonial rounded text-center p-4">
            <p class="text-4">“Only trying it out since a few days. But up to now excellent. Seems to work flawlessly. I'm only using it for sending money to friends at the moment.”</p>
            <strong class="d-block fw-500">Dennis Jacques</strong> <span class="text-muted">User from USA</span> </div>
        </div>
        <div class="col-lg-6">
          <div class="testimonial rounded text-center p-4">
            <p class="text-4">“I have used them twice now. Good rates, very efficient service and it denies high street banks an undeserved windfall. Excellent.”</p>
            <strong class="d-block fw-500">Chris Tom</strong> <span class="text-muted">User from UK</span> </div>
        </div>
      </div>
      <div class="text-center mt-5"><a href="#" class="btn-link text-4">See more people review<i class="fas fa-chevron-right text-2 ms-2"></i></a></div>
    </div>
  </section>
  <!-- Testimonial end --> 
  
  <!-- Frequently asked questions
    ============================================= -->
  <section class="section bg-white">
    <div class="container">
      <h2 class="text-9 text-center">Frequently Asked Questions</h2>
      <p class="lead text-center mb-4 mb-sm-5">Can't find it here? Check out our <a class="btn-link" href="help.html">Help center</a></p>
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto">
          <hr class="mb-0">
          <div class="accordion accordion-flush arrow-end" id="popularTopics">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        What is Dpay?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#popularTopics">
      <div class="accordion-body">Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        How to receive money online?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#popularTopics">
      <div class="accordion-body">
	  <p>Pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Ad vegan excepteur butcher vice lomo.</p>
	  Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Ad vegan excepteur butcher vice lomo.
	  </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Is my money safe with Dpay?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#popularTopics">
      <div class="accordion-body">
		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	  </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        How much fees does Dpay charge?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#popularTopics">
      <div class="accordion-body">
		Pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	  </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        What is the fastest way to receive money abroad?
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#popularTopics">
      <div class="accordion-body">
		Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
	  </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseFive">
        Can I open an Dpay account for business?
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#popularTopics">
      <div class="accordion-body">
		Enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	  </div>
    </div>
  </div>
</div>
          <hr class="mt-0">
        </div>
      </div>
      <div class="text-center mt-4"><a href="#" class="btn-link text-4">See more FAQ<i class="fas fa-chevron-right text-2 ms-2"></i></a></div>
    </div>
  </section>
  <!-- Frequently asked questions end --> 
  
  <!-- Special Offer
    ============================================= -->
  <section class="hero-wrap py-5">
    <div class="hero-mask opacity-8 bg-dark"></div>
    <div class="hero-bg" style="background-image:url('images/bg/image-2.jpg');"></div>
    <div class="hero-content">
      <div class="container d-md-flex text-center text-md-start align-items-center justify-content-center">
        <h2 class="text-6 fw-400 text-white mb-3 mb-md-0">Sign up today and get your first transaction fee free!</h2>
        <a href="#" class="btn btn-outline-light text-nowrap ms-0 ms-md-4">Sign up Now</a> </div>
    </div>
  </section>
  <!-- Special Offer end --> 
</div>
<!-- Content end --> 

<!-- Footer
  ============================================= -->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg d-lg-flex align-items-center">
        <ul class="nav justify-content-center justify-content-lg-start text-3">
          <li class="nav-item"> <a class="nav-link active" href="#">About Us</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Support</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Help</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Careers</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Affiliate</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Fees</a></li>
        </ul>
      </div>
      <div class="col-lg d-lg-flex justify-content-lg-end mt-3 mt-lg-0">
        <ul class="social-icons justify-content-center">
          <li class="social-icons-facebook"><a data-bs-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
          <li class="social-icons-twitter"><a data-bs-toggle="tooltip" href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
          <li class="social-icons-google"><a data-bs-toggle="tooltip" href="http://www.google.com/" target="_blank" title="Google"><i class="fab fa-google"></i></a></li>
          <li class="social-icons-youtube"><a data-bs-toggle="tooltip" href="http://www.youtube.com/" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="footer-copyright pt-3 pt-lg-2 mt-2">
      <div class="row">
        <div class="col-lg">
          <p class="text-center text-lg-start mb-2 mb-lg-0">Copyright &copy; 2022 <a href="#">Aries_Casper</a>. All Rights Reserved.</p>
        </div>
        <div class="col-lg d-lg-flex align-items-center justify-content-lg-end">
          <ul class="nav justify-content-center">
            <li class="nav-item"> <a class="nav-link active" href="#">Security</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Terms</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Privacy</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Footer end -->

</div>
<!-- Document Wrapper end --> 

<!-- Back to Top
============================================= --> 
<a id="back-to-top" data-bs-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- Video Modal
============================================= -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-transparent border-0">
      <button type="button" class="btn-close btn-close-white ms-auto me-n3" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body p-0">
        <div class="ratio ratio-16x9">
          <iframe id="video" src="" allow="autoplay;" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Video Modal end --> 

 

<!-- Script --> 
 <script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.bundle.min.js"></script> 
<script src="js/bootstrap-select.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<!-- Style Switcher --> 
<script src="js/switcher.min.js"></script> 
<script src="js/theme2.js"></script>
</body>
</html>