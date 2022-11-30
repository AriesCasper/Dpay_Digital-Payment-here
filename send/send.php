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
<title>Dpay-Digital Payment here...</title>
 
<!-- Web Fonts
============================================= -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">


<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="boot.css" />
<link rel="stylesheet" type="text/css" href="font.css" />
<link rel="stylesheet" type="text/css" href="select.css" />
<link rel="stylesheet" type="text/css" href="currency.css" />
<link rel="stylesheet" type="text/css" href="owl_c.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
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
          <div class="logo me-3"> <a class="d-flex" href="http://localhost/Impact/index.php" title="Dpay - Digital payment here"><img src="logo2.png" alt="Dpay" width="80" height="60" /></a> </div>
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
      <div class="hero-mask opacity-7 bg-dark"></div>
      <div class="hero-bg" style="background-image:url('images/bg/image-6.jpg');"></div>
      <div class="hero-content d-flex flex-column fullscreen-with-header">
        <div class="container my-auto py-5">
          <div class="row">
            <div class="col-lg-6 col-xl-7 my-auto text-center text-lg-start pb-5 pb-lg-0">
              <h2 class="text-17 text-white"><span class="fw-400 text-15">A better way to</span> <br>
                Send Money</h2>
              <p class="text-4 text-white mb-4"> Send money with a better exchange rate and avoid excessive bank fees.</p>
              <a class="btn btn-outline-light video-btn" href="#" data-src="https://www.youtube.com/embed/7e90gBu4pas" data-bs-toggle="modal" data-bs-target="#videoModal"><span class="text-2 me-3"><i class="fas fa-play"></i></span>See How it Works</a> </div>
            <div class="col-lg-6 col-xl-5 my-auto">
              <div class="bg-white rounded shadow-md p-4">
                <h3 class="text-5 mb-4 text-center">Send Money</h3>
                <hr class="mb-4 mx-n4">
                <form id="form-send-money" method="post">
                  <div class="mb-3">
                    <label for="youSend" class="form-label">You Send</label>
                    <div class="input-group">
                      <span class="input-group-text">$</span>
                      <input type="text" class="form-control" data-bv-field="youSend" id="youSend" value="1,000" placeholder="">
                      <span class="input-group-text p-0">
                        <select id="youSendCurrency" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                          <optgroup label="Popular Currency">
                          <option data-icon="currency-flag currency-flag-usd me-1" data-subtext="United States dollar" selected="selected" value="">USD</option>
                          <option data-icon="currency-flag currency-flag-aud me-1" data-subtext="Australian dollar" value="">AUD</option>
                          <option data-icon="currency-flag currency-flag-inr me-1" data-subtext="Indian rupee" value="">INR</option>
                          </optgroup>
                          <option data-divider="true"></option>
                          <optgroup label="Other Currency">
                          <option data-icon="currency-flag currency-flag-aed me-1" data-subtext="United Arab Emirates dirham" value="">AED</option>
                          <option data-icon="currency-flag currency-flag-ars me-1" data-subtext="Argentine peso" value="">ARS</option>
                          <option data-icon="currency-flag currency-flag-aud me-1" data-subtext="Australian dollar" value="">AUD</option>
                          <option data-icon="currency-flag currency-flag-bdt me-1" data-subtext="Bangladeshi taka" value="">BDT</option>
                          <option data-icon="currency-flag currency-flag-bgn me-1" data-subtext="Bulgarian lev" value="">BGN</option>
                          <option data-icon="currency-flag currency-flag-brl me-1" data-subtext="Brazilian real" value="">BRL</option>
                          <option data-icon="currency-flag currency-flag-cad me-1" data-subtext="Canadian dollar" value="">CAD</option>
                          <option data-icon="currency-flag currency-flag-chf me-1" data-subtext="Swiss franc" value="">CHF</option>
                          <option data-icon="currency-flag currency-flag-clp me-1" data-subtext="Chilean peso" value="">CLP</option>
                          <option data-icon="currency-flag currency-flag-cny me-1" data-subtext="Chinese yuan" value="">CNY</option>
                          <option data-icon="currency-flag currency-flag-czk me-1" data-subtext="Czech koruna" value="">CZK</option>
                          <option data-icon="currency-flag currency-flag-dkk me-1" data-subtext="Danish krone" value="">DKK</option>
                          <option data-icon="currency-flag currency-flag-egp me-1" data-subtext="Egyptian pound" value="">EGP</option>
                          <option data-icon="currency-flag currency-flag-eur me-1" data-subtext="Euro" value="">EUR</option>
                          <option data-icon="currency-flag currency-flag-gbp me-1" data-subtext="British pound" value="">GBP</option>
                          <option data-icon="currency-flag currency-flag-gel me-1" data-subtext="Georgian lari" value="">GEL</option>
                          <option data-icon="currency-flag currency-flag-ghs me-1" data-subtext="Ghanaian cedi" value="">GHS</option>
                          <option data-icon="currency-flag currency-flag-hkd me-1" data-subtext="Hong Kong dollar" value="">HKD</option>
                          <option data-icon="currency-flag currency-flag-hrk me-1" data-subtext="Croatian kuna" value="">HRK</option>
                          <option data-icon="currency-flag currency-flag-huf me-1" data-subtext="Hungarian forint" value="">HUF</option>
                          <option data-icon="currency-flag currency-flag-idr me-1" data-subtext="Indonesian rupiah" value="">IDR</option>
                          <option data-icon="currency-flag currency-flag-ils me-1" data-subtext="Israeli shekel" value="">ILS</option>
                          <option data-icon="currency-flag currency-flag-inr me-1" data-subtext="Indian rupee" value="">INR</option>
                          <option data-icon="currency-flag currency-flag-jpy me-1" data-subtext="Japanese yen" value="">JPY</option>
                          <option data-icon="currency-flag currency-flag-kes me-1" data-subtext="Kenyan shilling" value="">KES</option>
                          <option data-icon="currency-flag currency-flag-krw me-1" data-subtext="South Korean won" value="">KRW</option>
                          <option data-icon="currency-flag currency-flag-lkr me-1" data-subtext="Sri Lankan rupee" value="">LKR</option>
                          <option data-icon="currency-flag currency-flag-mad me-1" data-subtext="Moroccan dirham" value="">MAD</option>
                          <option data-icon="currency-flag currency-flag-mxn me-1" data-subtext="Mexican peso" value="">MXN</option>
                          <option data-icon="currency-flag currency-flag-myr me-1" data-subtext="Malaysian ringgit" value="">MYR</option>
                          <option data-icon="currency-flag currency-flag-ngn me-1" data-subtext="Nigerian naira" value="">NGN</option>
                          <option data-icon="currency-flag currency-flag-nok me-1" data-subtext="Norwegian krone" value="">NOK</option>
                          <option data-icon="currency-flag currency-flag-npr me-1" data-subtext="Nepalese rupee" value="">NPR</option>
                          <option data-icon="currency-flag currency-flag-nzd me-1" data-subtext="New Zealand dollar" value="">NZD</option>
                          <option data-icon="currency-flag currency-flag-pen me-1" data-subtext="Peruvian nuevo sol" value="">PEN</option>
                          <option data-icon="currency-flag currency-flag-php me-1" data-subtext="Philippine peso" value="">PHP</option>
                          <option data-icon="currency-flag currency-flag-pkr me-1" data-subtext="Pakistani rupee" value="">PKR</option>
                          <option data-icon="currency-flag currency-flag-pln me-1" data-subtext="Polish złoty" value="">PLN</option>
                          <option data-icon="currency-flag currency-flag-ron me-1" data-subtext="Romanian leu" value="">RON</option>
                          <option data-icon="currency-flag currency-flag-rub me-1" data-subtext="Russian rouble" value="">RUB</option>
                          <option data-icon="currency-flag currency-flag-sek me-1" data-subtext="Swedish krona" value="">SEK</option>
                          <option data-icon="currency-flag currency-flag-sgd me-1" data-subtext="Singapore dollar" value="">SGD</option>
                          <option data-icon="currency-flag currency-flag-thb me-1" data-subtext="Thai baht" value="">THB</option>
                          <option data-icon="currency-flag currency-flag-try me-1" data-subtext="Turkish lira" value="">TRY</option>
                          <option data-icon="currency-flag currency-flag-uah me-1" data-subtext="Ukrainian hryvnia" value="">UAH</option>
                          <option data-icon="currency-flag currency-flag-ugx me-1" data-subtext="Ugandan shilling" value="">UGX</option>
                          <option data-icon="currency-flag currency-flag-vnd me-1" data-subtext="Vietnamese dong" value="">VND</option>
                          <option data-icon="currency-flag currency-flag-zar me-1" data-subtext="South African rand" value="">ZAR</option>
                          </optgroup>
                        </select>
                        </span>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="recipientGets" class="form-label">Recipient Gets</label>
                    <div class="input-group">
                      <span class="input-group-text">$</span>
                      <input type="text" class="form-control" data-bv-field="recipientGets" id="recipientGets" value="1,410.06" placeholder="">
                      <span class="input-group-text p-0">
                        <select id="recipientCurrency" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                          <optgroup label="Popular Currency">
                          <option data-icon="currency-flag currency-flag-usd me-1" data-subtext="United States dollar" value="">USD</option>
                          <option data-icon="currency-flag currency-flag-aud me-1" data-subtext="Australian dollar" selected="selected"  value="">AUD</option>
                          <option data-icon="currency-flag currency-flag-inr me-1" data-subtext="Indian rupee" value="">INR</option>
                          </optgroup>
                          <option data-divider="true"></option>
                          <optgroup label="Other Currency">
                          <option data-icon="currency-flag currency-flag-aed me-1" data-subtext="United Arab Emirates dirham" value="">AED</option>
                          <option data-icon="currency-flag currency-flag-ars me-1" data-subtext="Argentine peso" value="">ARS</option>
                          <option data-icon="currency-flag currency-flag-aud me-1" data-subtext="Australian dollar" value="">AUD</option>
                          <option data-icon="currency-flag currency-flag-bdt me-1" data-subtext="Bangladeshi taka" value="">BDT</option>
                          <option data-icon="currency-flag currency-flag-bgn me-1" data-subtext="Bulgarian lev" value="">BGN</option>
                          <option data-icon="currency-flag currency-flag-brl me-1" data-subtext="Brazilian real" value="">BRL</option>
                          <option data-icon="currency-flag currency-flag-cad me-1" data-subtext="Canadian dollar" value="">CAD</option>
                          <option data-icon="currency-flag currency-flag-chf me-1" data-subtext="Swiss franc" value="">CHF</option>
                          <option data-icon="currency-flag currency-flag-clp me-1" data-subtext="Chilean peso" value="">CLP</option>
                          <option data-icon="currency-flag currency-flag-cny me-1" data-subtext="Chinese yuan" value="">CNY</option>
                          <option data-icon="currency-flag currency-flag-czk me-1" data-subtext="Czech koruna" value="">CZK</option>
                          <option data-icon="currency-flag currency-flag-dkk me-1" data-subtext="Danish krone" value="">DKK</option>
                          <option data-icon="currency-flag currency-flag-egp me-1" data-subtext="Egyptian pound" value="">EGP</option>
                          <option data-icon="currency-flag currency-flag-eur me-1" data-subtext="Euro" value="">EUR</option>
                          <option data-icon="currency-flag currency-flag-gbp me-1" data-subtext="British pound" value="">GBP</option>
                          <option data-icon="currency-flag currency-flag-gel me-1" data-subtext="Georgian lari" value="">GEL</option>
                          <option data-icon="currency-flag currency-flag-ghs me-1" data-subtext="Ghanaian cedi" value="">GHS</option>
                          <option data-icon="currency-flag currency-flag-hkd me-1" data-subtext="Hong Kong dollar" value="">HKD</option>
                          <option data-icon="currency-flag currency-flag-hrk me-1" data-subtext="Croatian kuna" value="">HRK</option>
                          <option data-icon="currency-flag currency-flag-huf me-1" data-subtext="Hungarian forint" value="">HUF</option>
                          <option data-icon="currency-flag currency-flag-idr me-1" data-subtext="Indonesian rupiah" value="">IDR</option>
                          <option data-icon="currency-flag currency-flag-ils me-1" data-subtext="Israeli shekel" value="">ILS</option>
                          <option data-icon="currency-flag currency-flag-inr me-1" data-subtext="Indian rupee" value="">INR</option>
                          <option data-icon="currency-flag currency-flag-jpy me-1" data-subtext="Japanese yen" value="">JPY</option>
                          <option data-icon="currency-flag currency-flag-kes me-1" data-subtext="Kenyan shilling" value="">KES</option>
                          <option data-icon="currency-flag currency-flag-krw me-1" data-subtext="South Korean won" value="">KRW</option>
                          <option data-icon="currency-flag currency-flag-lkr me-1" data-subtext="Sri Lankan rupee" value="">LKR</option>
                          <option data-icon="currency-flag currency-flag-mad me-1" data-subtext="Moroccan dirham" value="">MAD</option>
                          <option data-icon="currency-flag currency-flag-mxn me-1" data-subtext="Mexican peso" value="">MXN</option>
                          <option data-icon="currency-flag currency-flag-myr me-1" data-subtext="Malaysian ringgit" value="">MYR</option>
                          <option data-icon="currency-flag currency-flag-ngn me-1" data-subtext="Nigerian naira" value="">NGN</option>
                          <option data-icon="currency-flag currency-flag-nok me-1" data-subtext="Norwegian krone" value="">NOK</option>
                          <option data-icon="currency-flag currency-flag-npr me-1" data-subtext="Nepalese rupee" value="">NPR</option>
                          <option data-icon="currency-flag currency-flag-nzd me-1" data-subtext="New Zealand dollar" value="">NZD</option>
                          <option data-icon="currency-flag currency-flag-pen me-1" data-subtext="Peruvian nuevo sol" value="">PEN</option>
                          <option data-icon="currency-flag currency-flag-php me-1" data-subtext="Philippine peso" value="">PHP</option>
                          <option data-icon="currency-flag currency-flag-pkr me-1" data-subtext="Pakistani rupee" value="">PKR</option>
                          <option data-icon="currency-flag currency-flag-pln me-1" data-subtext="Polish złoty" value="">PLN</option>
                          <option data-icon="currency-flag currency-flag-ron me-1" data-subtext="Romanian leu" value="">RON</option>
                          <option data-icon="currency-flag currency-flag-rub me-1" data-subtext="Russian rouble" value="">RUB</option>
                          <option data-icon="currency-flag currency-flag-sek me-1" data-subtext="Swedish krona" value="">SEK</option>
                          <option data-icon="currency-flag currency-flag-sgd me-1" data-subtext="Singapore dollar" value="">SGD</option>
                          <option data-icon="currency-flag currency-flag-thb me-1" data-subtext="Thai baht" value="">THB</option>
                          <option data-icon="currency-flag currency-flag-try me-1" data-subtext="Turkish lira" value="">TRY</option>
                          <option data-icon="currency-flag currency-flag-uah me-1" data-subtext="Ukrainian hryvnia" value="">UAH</option>
                          <option data-icon="currency-flag currency-flag-ugx me-1" data-subtext="Ugandan shilling" value="">UGX</option>
                          <option data-icon="currency-flag currency-flag-vnd me-1" data-subtext="Vietnamese dong" value="">VND</option>
                          <option data-icon="currency-flag currency-flag-zar me-1" data-subtext="South African rand" value="">ZAR</option>
                          </optgroup>
                        </select>
                        </span>
                    </div>
                  </div>
                  <p class="text-muted mb-1">Total fees - <span class="fw-500">7.21 USD</span></p>
                  <p class="text-muted">The current exchange rate is <span class="fw-500">1 USD = 1.42030 AUD</span></p>
				  <!-- <div class="d-grid"><a href="http://localhost/Impact/gateway/TxnTest.php"><button class="btn btn-primary">Continue</button></div> -->
             <div class="d-grid">
            <a href="http://localhost/Impact/gateway/TxnTest.php" class="btn btn-outline-light text-nowrap ms-0 ms-md-4" style="background: #2dbe60 !important;">Continue</a> </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Send Money End --> 
    
    <!-- How it works
    ============================================= -->
    <section class="section bg-white">
      <div class="container">
        <h2 class="text-9 text-center"> The simple way to send money</h2>
        <p class="lead text-center mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <div class="row g-4">
          <div class="col-lg-4">
            <div class="featured-box style-3">
              <div class="featured-box-icon text-light"><span class="w-100 text-20 fw-500">1</span></div>
              <h3>Sign Up Your Account</h3>
              <p class="text-3">Become a register user first, then log in to your account and enter your card or bank details that is required for you.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="featured-box style-3">
              <div class="featured-box-icon text-light"><span class="w-100 text-20 fw-500">2</span></div>
              <h3>Select Your Recipient</h3>
              <p class="text-3">Enter your recipient's email address then add an amount with currency to send securely.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="featured-box style-3">
              <div class="featured-box-icon text-light"><span class="w-100 text-20 fw-500">3</span></div>
              <h3>Send Money</h3>
              <p class="text-3">After sending money, the recipient will be notified via an email when money has been transferred to their account.</p>
            </div>
          </div>
        </div>
        <div class="text-center mt-3"><a href="http://localhost/Impact/php_dashboard/register.php" class="btn btn-outline-primary shadow-none text-uppercase">Sign up Now</a></div>
      </div>
    </section>
    <!-- How it works End --> 
    
    <!-- Why choose us
    ============================================= -->
    <section class="section">
      <div class="container">
        <h2 class="text-9 text-center">Why choose Dpay?</h2>
        <p class="lead text-center mb-5">Here’s Top 4 reasons why using a Dpay account for manage your money.</p>
        <div class="row gy-4">
          <div class="col-md-6">
            <div class="hero-wrap section h-100 p-5 rounded">
              <div class="hero-mask rounded opacity-6 bg-dark"></div>
              <div class="hero-bg rounded" style="background-image:url('./images/bg/image-6.jpg');"></div>
              <div class="hero-content">
                <h2 class="text-6 text-white mb-3">Why Dpay?</h2>
                <p class="text-light mb-5">Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet.</p>
                <h2 class="text-6 text-white mb-3">Send Money with Dpay</h2>
                <p class="text-light">Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet.</p>
                <p class="text-light mb-0">Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="featured-box style-1">
              <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
              <h3>Over 180 countries</h3>
              <p>Essent lisque persius interesset his et, in quot quidam.</p>
            </div>
            <div class="featured-box style-1">
              <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
              <h3>Lower Fees</h3>
              <p>Lisque persius interesset his et, in quot quidam persequeris.</p>
            </div>
            <div class="featured-box style-1">
              <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
              <h3>Easy to Use</h3>
              <p>Essent lisque persius interesset his et, in quot quidam.</p>
            </div>
            <div class="featured-box style-1">
              <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
              <h3>Faster Payments</h3>
              <p>Quidam lisque persius interesset his et, in quot quidam.</p>
            </div>
            <div class="featured-box style-1">
              <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
              <h3>100% secure</h3>
              <p>Essent lisque persius interesset his et, in quot quidam.</p>
            </div>
            <div class="featured-box style-1">
              <div class="featured-box-icon text-primary"> <i class="far fa-check-circle"></i> </div>
              <h3>24/7 customer service</h3>
              <p>Quidam lisque persius interesset his et, in quot quidam.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Why choose us End --> 
    
    <!-- How work
    ============================================= -->
    <section class="hero-wrap section shadow-md">
      <div class="hero-mask opacity-9 bg-primary"></div>
      <div class="hero-bg" style="background-image:url('images/bg/image-1.jpg');"></div>
      <div class="hero-content my-3 my-lg-5">
        <div class="container text-center">
          <h2 class="text-10 text-white mb-4 mb-lg-5">How does send money work?</h2>
          <a class="video-btn d-inline-flex" href="#" data-src="https://www.youtube.com/embed/7e90gBu4pas" data-bs-toggle="modal" data-bs-target="#videoModal"> <span class="playButton playButton-pulsing bg-white m-auto"><i class="fas fa-play"></i></span> </a> </div>
      </div>
    </section>
    <!-- How work End --> 
    
    <!-- Testimonial
    ============================================= -->
    <section class="section">
      <div class="container">
        <h2 class="text-9 text-center">What people say about Dpay</h2>
        <p class="lead text-center mb-4">A payments experience people love to talk about</p>
        <div class="row">
          <div class="col-lg-10 col-xl-8 mx-auto">
            <div class="owl-carousel owl-theme" data-autoplay="true" data-nav="true" data-loop="true" data-margin="30" data-stagepadding="5" data-items-xs="1" data-items-sm="1" data-items-md="1" data-items-lg="1">
              <div class="item">
                <div class="testimonial rounded text-center p-4">
                  <p class="text-9 text-muted opacity-2 mb-2"><i class="fa fa-quote-left"></i></p>
				  <p class="text-4">“Easy to use, reasonably priced simply dummy text of the printing and typesetting industry. Quidam lisque persius interesset his et, in quot quidam possim iriure.”</p>
                  <strong class="d-block fw-500">Jay Shah</strong> <span class="text-muted">Founder at Icomatic Pvt Ltd</span> </div>
              </div>
              <div class="item">
                <div class="testimonial rounded text-center p-4">
                  <p class="text-9 text-muted opacity-2 mb-2"><i class="fa fa-quote-left"></i></p>
				  <p class="text-4">“I am happy Working with printing and typesetting industry. Quidam lisque persius interesset his et, in quot quidam persequeris essent possim iriure.”</p>
                  <strong class="d-block fw-500">Patrick Cary</strong> <span class="text-muted">Freelancer from USA</span> </div>
              </div>
              <div class="item">
                <div class="testimonial rounded text-center p-4">
                  <p class="text-9 text-muted opacity-2 mb-2"><i class="fa fa-quote-left"></i></p>
				  <p class="text-4">“Fast easy to use transfers to a different currency. Much better value that the banks.”</p>
                  <strong class="d-block fw-500">De Mortel</strong> <span class="text-muted">Online Retail</span> </div>
              </div>
              <div class="item">
                <div class="testimonial rounded text-center p-4">
                  <p class="text-9 text-muted opacity-2 mb-2"><i class="fa fa-quote-left"></i></p>
				  <p class="text-4">“I have used them twice now. Good rates, very efficient service and it denies high street banks an undeserved windfall. Excellent.”</p>
                  <strong class="d-block fw-500">Chris Tom</strong> <span class="text-muted">User from UK</span> </div>
              </div>
              <div class="item">
                <div class="testimonial rounded text-center p-4">
                  <p class="text-9 text-muted opacity-2 mb-2"><i class="fa fa-quote-left"></i></p>
				  <p class="text-4">“It's a real good idea to manage your money by payyed. The rates are fair and you can carry out the transactions without worrying!”</p>
                  <strong class="d-block fw-500">Mauri Lindberg</strong> <span class="text-muted">Freelancer from Australia</span> </div>
              </div>
              <div class="item">
                <div class="testimonial rounded text-center p-4">
                  <p class="text-9 text-muted opacity-2 mb-2"><i class="fa fa-quote-left"></i></p>
				  <p class="text-4">“Only trying it out since a few days. But up to now excellent. Seems to work flawlessly. I'm only using it for sending money to friends at the moment.”</p>
                  <strong class="d-block fw-500">Dennis Jacques</strong> <span class="text-muted">User from USA</span> </div>
              </div>
            </div>
            <div class="text-center mt-4"><a href="#" class="btn-link text-4">See more people review<i class="fas fa-chevron-right text-2 ms-2"></i></a></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial end --> 
    
    <!-- Frequently asked questions
    ============================================= -->
    <section class="section bg-white">
      <div class="container">
        <h2 class="text-9 text-center">Frequently Asked Questions</h2>
        <p class="lead text-center mb-4 mb-sm-5">Can't find it here? Check out our <a class="btn-link" href="http://localhost/Impact/help.php">Help center</a></p>
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
        How to send money online?
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
        What is the fastest way to send money abroad?
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
          <a href="http://localhost/Impact/php_dashboard/register.php" class="btn btn-outline-light text-nowrap ms-0 ms-md-4">Sign up Now</a> </div>
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

 
 
<!-- Script --> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.bundle.min.js"></script> 
<script src="js/bootstrap-select.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<!-- Style Switcher --> 
<script src="js/switcher.min.js"></script> 
<script src="js/theme.js"></script>
</body>
</html>