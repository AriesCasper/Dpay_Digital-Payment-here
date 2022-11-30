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
<title>Dpay_Digital Payment here</title>
 

<!-- Web Fonts
============================================= -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/all.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/select.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/flags.min.css" />
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
          <div class="logo me-3"> <a class="d-flex" href="http://localhost/Impact/index.php" title="Dpay_Digital Payment here"><img src=" logo2.png" alt="Dpay" width="80" height="60" /></a> </div>
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
                <li><a href="dashboard.html">Dashboard</a></li>
                <li><a href="transactions.html">Transactions</a></li>
                <li class="active"><a href="send-money.html">Send/Request</a></li>
                 
                       
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <!-- Primary Navigation end --> 
        </div>
        <div class="header-column justify-content-end"> 
          <!-- My Profile
          ============================== -->
          <nav class="login-signup navbar navbar-expand">
            <ul class="navbar-nav">
              <li class="dropdown language"> <a class="dropdown-toggle" href="#">En</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">English</a></li>
                  <li><a class="dropdown-item" href="#">French</a></li>
                  <li><a class="dropdown-item" href="#">Русский</a></li>
                  <li><a class="dropdown-item" href="#">简体中文</a></li>
                  <li><a class="dropdown-item" href="#">Türkçe</a></li>
                </ul>
              </li>
              <li class="dropdown notifications"> <a class="dropdown-toggle" href="#"><span class="text-5"><i class="far fa-bell"></i></span><span class="count">3</span></a>
                <ul class="dropdown-menu">
                  <li class="text-center text-3 py-2">Notifications (3)</li>
                  <li class="dropdown-divider mx-n3"></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>A new digital FIRC document is available for you to download<span class="text-1 text-muted d-block">22 Jul 2021</span></a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>Updates to our privacy policy. Please read.<span class="text-1 text-muted d-block">04 March 2021</span></a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>Update about Dpay fees<span class="text-1 text-muted d-block">18 Feb 2021</span></a></li>
                  <li class="dropdown-divider mx-n3"></li>
                  <li><a class="dropdown-item text-center text-primary px-0" href="notifications.html">See all Notifications</a></li>
                </ul>
              </li>
              <li class="dropdown profile ms-2"> <a class="px-0 dropdown-toggle" href="#"><img class="rounded-circle" src="images/profile-thumb-sm.jpg" alt=""></a>
                <ul class="dropdown-menu">
                  <li class="text-center text-3 py-2">Hi, Smith Rhodes</li>
                  <li class="dropdown-divider mx-n3"></li>
                  <li><a class="dropdown-item" href="settings-profile.html"><i class="fas fa-user"></i>My Profile</a></li>
                  <li><a class="dropdown-item" href="settings-Security.html"><i class="fas fa-shield-alt"></i>Security</a></li>
                  <li><a class="dropdown-item" href="settings-payment-methods.html"><i class="fas fa-credit-card"></i>Payment Methods</a></li>
                  <li><a class="dropdown-item" href="settings-notifications.html"><i class="fas fa-bell"></i>Notifications</a></li>
                  <li class="dropdown-divider mx-n3"></li>
                  <li><a class="dropdown-item" href="help.html"><i class="fas fa-life-ring"></i>Need Help?</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i>Sign Out</a></li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- My Profile end --> 
        </div>
      </div>
    </div>
  </header>
  <!-- Header End --> 
  
  <!-- Secondary menu
  ============================================= -->
  <div class="bg-primary">
    <div class="container d-flex justify-content-center">
      <ul class="nav nav-pills alternate nav-lg border-bottom-0">
        <li class="nav-item"> <a class="nav-link active" href="send-money.html">Send</a></li>
        <li class="nav-item"> <a class="nav-link" href="request-money.html">Request</a></li>
      </ul>
    </div>
  </div>
  <!-- Secondary menu end --> 
  
  <!-- Content
  ============================================= -->
  <div id="content" class="py-4">
    <div class="container"> 
      
      <!-- Steps Progress bar -->
      <div class="row mt-4 mb-5">
        <div class="col-lg-11 mx-auto">
          <div class="row widget-steps">
            <div class="col-4 step active">
              <div class="step-name">Details</div>
              <div class="progress">
                <div class="progress-bar"></div>
              </div>
              <a href="#" class="step-dot"></a> </div>
            <div class="col-4 step disabled">
              <div class="step-name">Confirm</div>
              <div class="progress">
                <div class="progress-bar"></div>
              </div>
              <a href="#" class="step-dot"></a> </div>
            <div class="col-4 step disabled">
              <div class="step-name">Success</div>
              <div class="progress">
                <div class="progress-bar"></div>
              </div>
              <a href="#" class="step-dot"></a> </div>
          </div>
        </div>
      </div>
      <h2 class="fw-400 text-center mt-3">Send Money</h2>
      <p class="lead text-center mb-4">Send your money on anytime, anywhere in the world.</p>
      <div class="row">
        <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
          <div class="bg-white shadow-sm rounded p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-4">
            <h3 class="text-5 fw-400 mb-3 mb-sm-4">Personal Details</h3>
            <hr class="mx-n3 mx-sm-n5 mb-4">
            <!-- Send Money Form
            ============================ -->
            <form id="form-send-money" method="post">
              <div class="mb-3">
                <label for="emailID" class="form-label">Recipient</label>
                <input type="text" value="" class="form-control" data-bv-field="emailid" id="emailID" required placeholder="Enter Email Address">
              </div>
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
                      <option value="" data-divider="true">divider</option>
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
                      <option value="" data-divider="true">divider</option>
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
              <p class="text-muted text-center">The current exchange rate is <span class="fw-500">1 USD = 1.42030 AUD</span></p>
              <hr>
              <p>Total Fees<span class="float-end">7.21 USD</span></p>
              <hr>
              <p class="text-4 fw-500">Total To Pay<span class="float-end">1,000.00 USD</span></p>
              <div class="d-grid"><button class="btn btn-primary">Continue</button></div>
            </form>
            <!-- Send Money Form end --> 
          </div>
        </div>
      </div>
    </div>
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
            <p class="text-center text-lg-start mb-2 mb-lg-0">Copyright &copy; 2022 <a href="#">Payyed</a>. All Rights Reserved.</p>
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
<script src="vendor/jquery.min.js"></script> 
<script src="vendor/bundel.min.js"></script> 
<script src="vendor/select.min.js"></script> 
<!-- Style Switcher --> 
<script src="js/switcher.min.js"></script> 
<script src="js/theme.js"></script>
</body>
</html>