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
<link rel="stylesheet" type="text/css" href="vendor/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/all.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/date.css" />
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
          <div class="logo me-3"> <a class="d-flex" href="http://localhost/Impact/index.php" title="Dpay-Digital Payment here"><img src=" logo2.png" alt="Dpay" width="80" height="60" /></a> </div>
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
                <li class="active"><a href="transactions.html">Transactions</a></li>
                <li><a href="send-money.html">Send/Request</a></li>
                <li><a href="help.html">Help</a></li>
                <li class="dropdown"> <a class="dropdown-toggle" href="#">Features</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Headers</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.html">Light Version (Default)</a></li>
                        <li><a class="dropdown-item" href="feature-header-dark.html">Dark Version</a></li>
                        <li><a class="dropdown-item" href="feature-header-primary.html">Primary Version</a></li>
                        <li><a class="dropdown-item" href="index-2.html">Transparent Version</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Navigation DropDown</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.html">Light Version (Default)</a></li>
                        <li><a class="dropdown-item" href="feature-navigation-dropdown-dark.html">Dark Version</a></li>
                        <li><a class="dropdown-item" href="feature-navigation-dropdown-primary.html">Primary Version</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Second Navigation</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="send-money.html">Default Version</a></li>
                        <li><a class="dropdown-item" href="deposit-money.html">Alternate Version</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Page Headers</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="feature-page-header-left-alignment.html">Left Alignment</a></li>
                        <li><a class="dropdown-item" href="feature-page-header-center-alignment.html">Center Alignment</a></li>
                        <li><a class="dropdown-item" href="feature-page-header-light.html">Light Version</a></li>
                        <li><a class="dropdown-item" href="feature-page-header-dark.html">Dark Version</a></li>
                        <li><a class="dropdown-item" href="feature-page-header-primary.html">Primary Version</a></li>
                        <li><a class="dropdown-item" href="feature-page-header-custom-background.html">Custom Background</a></li>
                        <li><a class="dropdown-item" href="feature-page-header-custom-background-with-transparent-header.html">Custom Background 2</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Footer</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.html">Light Version Default</a></li>
                        <li><a class="dropdown-item" href="index-2.html">Alternate Version</a></li>
                        <li><a class="dropdown-item" href="feature-footer-dark.html">Dark Version</a></li>
                        <li><a class="dropdown-item" href="feature-footer-primary.html">Primary Version</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="feature-layout-boxed.html">Layout Boxed</a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-mega"> <a class="dropdown-toggle" href="#">Pages</a>
                  <ul class="dropdown-menu">
                    <li>
                      <div class="dropdown-mega-content">
                        <div class="row">
                          <div class="col-lg"> <span class="sub-title">Homepage</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="index.html">Home Version 1</a></li>
                              <li><a class="dropdown-item" href="index-2.html">Home Version 2</a></li>
                              <li><a class="dropdown-item" href="landing-page-send.html">Landing Page - Send</a></li>
                              <li><a class="dropdown-item" href="landing-page-receive.html">Landing Page - Receive</a></li>
                            </ul>
                          </div>
                          <div class="col-lg"> <span class="sub-title">Account</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="settings-profile.html">My Profile</a></li>
                              <li><a class="dropdown-item" href="settings-security.html">Security</a></li>
                              <li><a class="dropdown-item" href="settings-payment-methods.html">Payment Methods</a></li>
                              <li><a class="dropdown-item" href="settings-notifications.html">Notifications</a></li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Login</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="login.html">Login Page 1</a></li>
                                  <li><a class="dropdown-item" href="login-2.html">Login Page 2</a></li>
                                  <li><a class="dropdown-item" href="login-3.html">Login Page 3</a></li>
                                </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Signup</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="signup.html">Signup Page 1</a></li>
                                  <li><a class="dropdown-item" href="signup-2.html">Signup Page 2 </a></li>
                                  <li><a class="dropdown-item" href="signup-3.html">Signup Page 3 </a></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg"> <span class="sub-title">Dashboard</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="dashboard.html">Dashboard</a></li>
                              <li><a class="dropdown-item" href="transactions.html">Transactions</a></li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Send Money</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="send-money.html">Send Money</a></li>
                                  <li><a class="dropdown-item" href="send-money-confirm.html">Send Money Confirm</a></li>
                                  <li><a class="dropdown-item" href="send-money-success.html">Send Money Success </a></li>
                                </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Request Money</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="request-money.html">Request Money</a></li>
                                  <li><a class="dropdown-item" href="request-money-confirm.html">Request Money Confirm</a></li>
                                  <li><a class="dropdown-item" href="request-money-success.html">Request Money Success </a></li>
                                </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Deposit Money</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="deposit-money.html">Deposit Money</a></li>
                                  <li><a class="dropdown-item" href="deposit-money-confirm.html">Deposit Money Confirm</a></li>
                                  <li><a class="dropdown-item" href="deposit-money-success.html">Deposit Money Success </a></li>
                                </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Withdraw Money</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="withdraw-money.html">Withdraw Money</a></li>
                                  <li><a class="dropdown-item" href="withdraw-money-confirm.html">Withdraw Money Confirm</a></li>
                                  <li><a class="dropdown-item" href="withdraw-money-success.html">Withdraw Money Success </a></li>
                                </ul>
                              </li>
                              <li><a class="dropdown-item" href="notifications.html">Notifications</a></li>
                            </ul>
                          </div>
                          <div class="col-lg"> <span class="sub-title">Blog</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="blog.html">Blog Standard</a></li>
                              <li><a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
                              <li><a class="dropdown-item" href="blog-list.html">Blog List</a></li>
                              <li><a class="dropdown-item" href="blog-single.html">Blog Single Right Sidebar</a></li>
                              <li><a class="dropdown-item" href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                            </ul>
                          </div>
                          <div class="col-lg"> <span class="sub-title">Others</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="about-us.html">About Us</a></li>
                              <li><a class="dropdown-item" href="fees.html">Fees</a></li>
                              <li><a class="dropdown-item" href="help.html">Help</a></li>
                              <li><a class="dropdown-item" href="contact-us.html">Contact Us</a></li>
                              <li><a class="dropdown-item" href="404.html">404</a></li>
                              <li><a class="dropdown-item" href="coming-soon.html" target="_blank">Coming Soon</a></li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Elements</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="elements.html">Elements 1</a></li>
                                  <li><a class="dropdown-item" href="elements-2.html">Elements 2</a></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
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
                  <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i>Update about Payyed fees<span class="text-1 text-muted d-block">18 Feb 2021</span></a></li>
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
  
  <!-- Content
  ============================================= -->
  <div id="content" class="py-4">
    <div class="container">
      <div class="row"> 
        
        <!-- Left Panel
        ============================================= -->
        <aside class="col-lg-3"> 
          
          <!-- Profile Details
          =============================== -->
          <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
            <div class="profile-thumb mt-3 mb-4"> <img class="rounded-circle" src="images/profile-thumb.jpg" alt="">
              <div class="profile-thumb-edit bg-primary text-white" data-bs-toggle="tooltip" title="Change Profile Picture"> <i class="fas fa-camera position-absolute"></i>
                <input type="file" class="custom-file-input" id="customFile">
              </div>
            </div>
            <p class="text-3 fw-500 mb-2">Hello, Smith Rhodes</p>
            <p class="mb-2"><a href="settings-profile.html" class="text-5 text-light" data-bs-toggle="tooltip" title="Edit Profile"><i class="fas fa-edit"></i></a></p>
          </div>
          <!-- Profile Details End --> 
          
          <!-- Available Balance
          =============================== -->
          <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
            <div class="text-17 text-light my-3"><i class="fas fa-wallet"></i></div>
            <h3 class="text-9 fw-400">$2956.00</h3>
            <p class="mb-2 text-muted opacity-8">Available Balance</p>
            <hr class="mx-n3">
            <div class="d-flex"><a href="withdraw-money.html" class="btn-link me-auto">Withdraw</a> <a href="deposit-money.html" class="btn-link ms-auto">Deposit</a></div>
          </div>
          <!-- Available Balance End --> 
          
          <!-- Need Help?
          =============================== -->
          <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
            <div class="text-17 text-light my-3"><i class="fas fa-comments"></i></div>
            <h3 class="text-5 fw-400 my-4">Need Help?</h3>
            <p class="text-muted opacity-8 mb-4">Have questions or concerns regrading your account?<br>
              Our experts are here to help!.</p>
            <div class="d-grid"><a href="#" class="btn btn-primary">Chate with Us</a></div>
      </div>
          <!-- Need Help? End --> 
          
        </aside>
        <!-- Left Panel End -->
        
        <!-- Middle Panel
        ============================================= -->
        <div class="col-lg-9">
          <h2 class="fw-400 mb-3">Transactions</h2>
          
          <!-- Filter
          ============================================= -->
          <div class="row">
            <div class="col mb-2">
              <form id="filterTransactions" method="post">
                <div class="row g-3 mb-3"> 
                  <!-- Date Range
                  ========================= -->
                  <div class="col-sm-6 col-md-5">
                    <div class="position-relative">
          <input id="dateRange" type="text" class="form-control" placeholder="Date Range">
                    <span class="icon-inside"><i class="fas fa-calendar-alt"></i></span>
          </div>
          </div>
                  <!-- All Filters Link
                  ========================= -->
                  <div class="col-auto d-flex align-items-center me-auto form-group" data-bs-toggle="collapse"> <a class="btn-link" data-bs-toggle="collapse" href="#allFilters" aria-expanded="false" aria-controls="allFilters">All Filters<i class="fas fa-sliders-h text-3 ms-1"></i></a> </div>
                  
          <!-- Statements Link
                  ========================= -->
                  <div class="col-auto d-flex align-items-center ms-auto">
                    <div class="dropdown"> <a class="text-muted btn-link" href="#" role="button" id="statements" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-file-download text-3 me-1"></i>Statements</a>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="statements"> <a class="dropdown-item" href="#">CSV</a> <a class="dropdown-item" href="#">PDF</a> </div>
                    </div>
                  </div>
                  
                  <!-- All Filters collapse
                  ================================ -->
                  <div class="col-12 collapse" id="allFilters">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="allTransactions" name="allFilters" checked>
                      <label class="form-check-label" for="allTransactions">All Transactions</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="paymentsSend" name="allFilters">
                      <label class="form-check-label" for="paymentsSend">Payments Send</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="paymentsReceived" name="allFilters">
                      <label class="form-check-label" for="paymentsReceived">Payments Received</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="refunds" name="allFilters">
                      <label class="form-check-label" for="refunds">Refunds</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="withdrawal" name="allFilters">
                      <label class="form-check-label" for="withdrawal">Withdrawal</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="deposit" name="allFilters">
                      <label class="form-check-label" for="deposit">Deposit</label>
                    </div>
                  </div>
                  <!-- All Filters collapse End --> 
                </div>
              </form>
            </div>
          </div>
          <!-- Filter End --> 
          
          <!-- All Transactions
          ============================================= -->
          <div class="bg-white shadow-sm rounded py-4 mb-4">
            <h3 class="text-5 fw-400 d-flex align-items-center px-4 mb-4">All Transactions</h3>
            <!-- Title
            =============================== -->
            <div class="transaction-title py-2 px-4">
              <div class="row">
                <div class="col-2 col-sm-1 text-center"><span class="">Date</span></div>
                <div class="col col-sm-7">Description</div>
                <div class="col-auto col-sm-2 d-none d-sm-block text-center">Status</div>
                <div class="col-3 col-sm-2 text-end">Amount</div>
              </div>
            </div>
            <!-- Title End --> 
            
            <!-- Transaction List
            =============================== -->
            <div class="transaction-list">
              <div class="transaction-item px-4 py-3" data-bs-toggle="modal" data-bs-target="#transaction-detail">
                <div class="row align-items-center flex-row">
                  <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 fw-300">16</span> <span class="d-block text-1 fw-300 text-uppercase">APR</span> </div>
                  <div class="col col-sm-7"> <span class="d-block text-4">HDFC Bank</span> <span class="text-muted">Withdraw to Bank account</span> </div>
                  <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-warning" data-bs-toggle="tooltip" title="In Progress"><i class="fas fa-ellipsis-h"></i></span> </div>
                  <div class="col-3 col-sm-2 text-end text-4"> <span class="text-nowrap">- $562</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                </div>
              </div>
              <div class="transaction-item px-4 py-3" data-bs-toggle="modal" data-bs-target="#transaction-detail">
                <div class="row align-items-center flex-row">
                  <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 fw-300">15</span> <span class="d-block text-1 fw-300 text-uppercase">APR</span> </div>
                  <div class="col col-sm-7"> <span class="d-block text-4">Envato Pty Ltd</span> <span class="text-muted">Payment Received</span> </div>
                  <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-bs-toggle="tooltip" title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                  <div class="col-3 col-sm-2 text-end text-4"> <span class="text-nowrap">+ $562</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                </div>
              </div>
              <div class="transaction-item px-4 py-3" data-bs-toggle="modal" data-bs-target="#transaction-detail">
                <div class="row align-items-center flex-row">
                  <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 fw-300">04</span> <span class="d-block text-1 fw-300 text-uppercase">APR</span> </div>
                  <div class="col col-sm-7"> <span class="d-block text-4">HDFC Bank</span> <span class="text-muted">Withdraw to Bank account</span> </div>
                  <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-bs-toggle="tooltip" title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                  <div class="col-3 col-sm-2 text-end text-4"> <span class="text-nowrap">- $106</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                </div>
              </div>
              <div class="transaction-item px-4 py-3" data-bs-toggle="modal" data-bs-target="#transaction-detail">
                <div class="row align-items-center flex-row">
                  <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 fw-300">28</span> <span class="d-block text-1 fw-300 text-uppercase">MAR</span> </div>
                  <div class="col col-sm-7"> <span class="d-block text-4">Patrick Cary</span> <span class="text-muted">Refund</span> </div>
                  <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-bs-toggle="tooltip" title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                  <div class="col-3 col-sm-2 text-end text-4"> <span class="text-nowrap">+ $60</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                </div>
              </div>
              <div class="transaction-item px-4 py-3" data-bs-toggle="modal" data-bs-target="#transaction-detail">
                <div class="row align-items-center flex-row">
                  <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 fw-300">28</span> <span class="d-block text-1 fw-300 text-uppercase">MAR</span> </div>
                  <div class="col col-sm-7"> <span class="d-block text-4">Patrick Cary</span> <span class="text-muted">Payment Sent</span> </div>
                  <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-danger" data-bs-toggle="tooltip" title="Cancelled"><i class="fas fa-times-circle"></i></span> </div>
                  <div class="col-3 col-sm-2 text-end text-4"> <span class="text-nowrap">- $60</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                </div>
              </div>
              <div class="transaction-item px-4 py-3" data-bs-toggle="modal" data-bs-target="#transaction-detail">
                <div class="row align-items-center flex-row">
                  <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 fw-300">16</span> <span class="d-block text-1 fw-300 text-uppercase">FEB</span> </div>
                  <div class="col col-sm-7"> <span class="d-block text-4">HDFC Bank</span> <span class="text-muted">Withdraw to Bank account</span> </div>
                  <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-bs-toggle="tooltip" title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                  <div class="col-3 col-sm-2 text-end text-4"> <span class="text-nowrap">- $1498</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                </div>
              </div>
              <div class="transaction-item px-4 py-3" data-bs-toggle="modal" data-bs-target="#transaction-detail">
                <div class="row align-items-center flex-row">
                  <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 fw-300">15</span> <span class="d-block text-1 fw-300 text-uppercase">FEB</span> </div>
                  <div class="col col-sm-7"> <span class="d-block text-4">Envato Pty Ltd</span> <span class="text-muted">Payment Received</span> </div>
                  <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> <span class="text-success" data-bs-toggle="tooltip" title="Completed"><i class="fas fa-check-circle"></i></span> </div>
                  <div class="col-3 col-sm-2 text-end text-4"> <span class="text-nowrap">+ $1498</span> <span class="text-2 text-uppercase">(USD)</span> </div>
                </div>
              </div>
            </div>
            <!-- Transaction List End --> 
            
            <!-- Transaction Item Details Modal
            =========================================== -->
            <div id="transaction-detail" class="modal fade" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered transaction-details" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="row g-0">
                      <div class="col-sm-5 d-flex justify-content-center bg-primary rounded-start py-4">
                        <div class="my-auto text-center">
                          <div class="text-17 text-white my-3"><i class="fas fa-building"></i></div>
                          <h3 class="text-4 text-white fw-400 my-3">Envato Pty Ltd</h3>
                          <div class="text-8 fw-500 text-white my-4">$557.20</div>
                          <p class="text-white">15 March 2021</p>
                        </div>
                      </div>
                      <div class="col-sm-7">
                        <h5 class="text-5 fw-400 m-3">Transaction Details
                          <button type="button" class="btn-close text-2 float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                        </h5>
                        <hr>
                        <div class="px-3">
                          <ul class="list-unstyled">
                            <li class="mb-2">Payment Amount <span class="float-end text-3">$562.00</span></li>
                            <li class="mb-2">Fee <span class="float-end text-3">-$4.80</span></li>
                          </ul>
                          <hr class="mb-2">
                          <p class="d-flex align-items-center fw-500 mb-0">Total Amount <span class="text-3 ms-auto">$557.20</span></p>
              <hr class="mb-4 mt-2">
                          <ul class="list-unstyled">
                            <li class="fw-500">Paid By:</li>
                            <li class="text-muted">Envato Pty Ltd</li>
                          </ul>
                          <ul class="list-unstyled">
                            <li class="fw-500">Transaction ID:</li>
                            <li class="text-muted">26566689645685976589</li>
                          </ul>
                          <ul class="list-unstyled">
                            <li class="fw-500">Description:</li>
                            <li class="text-muted">Envato March 2021 Member Payment</li>
                          </ul>
                          <ul class="list-unstyled">
                            <li class="fw-500">Status:</li>
                            <li class="text-muted">Completed<span class="text-success text-3 ms-1"><i class="fas fa-check-circle"></i></span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Transaction Item Details Modal End -->  
            
            <!-- Pagination
            ============================================= -->
            <ul class="pagination justify-content-center mt-4 mb-0">
              <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a> </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item d-flex align-content-center flex-wrap text-muted text-5 mx-1">......</li>
              <li class="page-item"><a class="page-link" href="#">15</a></li>
              <li class="page-item"> <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a> </li>
            </ul>
            <!-- Paginations end --> 
            
          </div>
          <!-- All Transactions End --> 
        </div>
        <!-- Middle End --> 
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
<script src="js/jquery.js"></script> 
<script src="js/bundel.js"></script> 
<script src="vendor/moment.min.js"></script> 
<script src="vendor/daterangepicker.js"></script> 
<script>
$(function() {
 'use strict';
 
 // Date Range Picker
 $(function() {
    var start = moment().subtract(29, 'days');
    var end = moment();
    function cb(start, end) {
        $('#dateRange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    $('#dateRange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);
    cb(start, end);
});
});
</script> 
<!-- Style Switcher --> 
<script src="js/switcher.min.js"></script> 
<script src="js/theme2.js"></script>
</body>
</html>