<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
// Include config file
require_once "config.php";
require_once "php_login.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Signin Simple</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- --------------style css --------------->
<link rel="stylesheet" href="assets/styles.css">

</head>
<body>
<div class="login-form">
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="text-center">
            <a href="http://localhost/Impact/index.php" aria-label="Space">
                <img class="mb-3" src="logo2.png" alt="Logo" width="80" height="60">
            </a>
          </div>
        <div class="text-center mb-4">
            <h1 class="h3 mb-0">Please sign in</h1>
            <p>Signin to manage your account.</p>
        </div>
     
        <div class="js-form-message mb-3" <?= (!empty($email_err)) ? 'has-error' : ''; ?>">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <i class="fa fa-user form__text-inner"></i>
                </span>
              </div>
              <input type="email" class="form-control form__input" name="email" placeholder="Email" aria-label="Email" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success" value="<?= $email; ?>">
            </div>
            <span class="help-block"><?= $email_err; ?></span>
        </div>
		<div class="form-group"<?= (!empty($password_err)) ? 'has-error' : ''; ?>">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </span>                    
                </div>
                <input type="password" class="form-control" name="password" placeholder="Password">				
            </div>
            <span class="help-block"><?= $password_err; ?></span>

        </div>        
        <div class="row mb-3">
            <div class="col-6">
              <!-- Checkbox -->
              <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                <input type="checkbox" class="custom-control-input" id="rememberMeCheckbox">
                <label class="custom-control-label" for="rememberMeCheckbox">
                  Remember Me
                </label>
              </div>
              <!-- End Checkbox -->
            </div>
            <div class="col-6 text-right">
              <a class="float-right" href="recover-account.html">Forgot Password?</a>
            </div>
        </div>
        <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary login-btn btn-block">Signin</button>
        </div>
        
        <div class="text-center mb-3">
            <p class="text-muted">Do not have an account? <a href="http://localhost/Impact/php_dashboard/register.php">Signup</a></p>
        </div>
		<div class="or-seperator"><i>OR</i></div>
        
        <div class="row mx-gutters-2 mb-4">
            <div class="col-sm-6 mb-2 mb-sm-0">
              <button type="button" class="btn btn-block btn-sm btn-facebook">
                <i class="fa fa-facebook mr-2"></i>
                Signin with Facebook
              </button>
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-block btn-sm btn-twitter">
                <i class="fa fa-twitter mr-2"></i>
                Signin with Twitter
              </button>
            </div>
        </div>
        <p class="small text-center text-muted mb-0">All rights reserved. © Space. 2022 Aries_Casper</p>
    </form>
</div>

</body>
</html>