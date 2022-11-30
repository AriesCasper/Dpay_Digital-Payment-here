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
<title>Dpay-Digital Payment here</title>
 

<!-- Web Fonts
============================================= -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/all.min.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!-- Colors Css -->

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
          <div class="logo me-3"> <a class="d-flex" href="http://localhost/Impact/index.php" title="Dpay - Digital Payment here"><img src=" logo2.png" alt="Dpay" width="80" height="60" /></a> </div>
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
                <li class="active"><a href="dashboard.html">Dashboard</a></li>
                <li><a href="http://localhost/Impact/userdashboard/transcation/index.php">Transactions</a></li>
                <li><a href="http://localhost/Impact/userdashboard/send_request/index.php">Send/Request</a></li>
                <li><a href="help.html">Help</a></li>
                            
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
          
          <!-- Profile Completeness
          =============================== -->
          <div class="bg-white shadow-sm rounded p-4 mb-4">
            <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Profile Completeness<span class="border text-success rounded-pill fw-500 text-2 px-3 py-1 ms-2">50%</span></h3>
            <hr class="mb-4 mx-n4">
            <div class="row gy-4 profile-completeness">
              <div class="col-sm-6 col-md-3">
                <div class="border rounded text-center px-3 py-4"> <span class="d-block text-10 text-light mt-2 mb-3"><i class="fas fa-mobile-alt"></i></span> <span class="text-5 d-block text-success mt-4 mb-3"><i class="fas fa-check-circle"></i></span>
                  <p class="mb-0">Mobile Added</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="border rounded text-center px-3 py-4"> <span class="d-block text-10 text-light mt-2 mb-3"><i class="fas fa-envelope"></i></span> <span class="text-5 d-block text-success mt-4 mb-3"><i class="fas fa-check-circle"></i></span>
                  <p class="mb-0">Email Added</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="position-relative border rounded text-center px-3 py-4"> <span class="d-block text-10 text-light mt-2 mb-3"><i class="fas fa-credit-card"></i></span> <span class="text-5 d-block text-light mt-4 mb-3"><i class="far fa-circle "></i></span>
                  <p class="mb-0"><a class="btn-link stretched-link" href="">Add Card</a></p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="position-relative border rounded text-center px-3 py-4"> <span class="d-block text-10 text-light mt-2 mb-3"><i class="fas fa-university"></i></span> <span class="text-5 d-block text-light mt-4 mb-3"><i class="far fa-circle "></i></span>
                  <p class="mb-0"><a class="btn-link stretched-link" href="">Add Bank Account</a></p>
                </div>
              </div>
            </div>
          </div>
          <!-- Profile Completeness End --> 
          
          <!-- Recent Activity
          =============================== -->
          <div class="bg-white shadow-sm rounded py-4 mb-4">
            <h3 class="text-5 fw-400 d-flex align-items-center px-4 mb-4">Recent Activity</h3>
            
            <!-- Title
            =============================== -->
            <div class="transaction-title py-2 px-4">
              <div class="row fw-00">
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
            
            <!-- View all Link
            =============================== -->
            <div class="text-center mt-4"><a href="transactions.html" class="btn-link text-3">View all<i class="fas fa-chevron-right text-2 ms-2"></i></a></div>
            <!-- View all Link End --> 
            
          </div>
          <!-- Recent Activity End --> 
        </div>
        <!-- Middle Panel End --> 
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
            <p class="text-center text-lg-start mb-2 mb-lg-0">Copyright &copy; 2022 <a href="#">Dpay</a>. All Rights Reserved.</p>
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

 
<!-- Styles Switcher End --> 

<!-- Script --> 
<script src="js/jquery.js"></script> 
<script src="js/bundle.js"></script> 
<!-- Style Switcher --> 
<script src="js/switcher.min.js"></script> 
<script src="js/theme.js"></script>
</body>
</html>