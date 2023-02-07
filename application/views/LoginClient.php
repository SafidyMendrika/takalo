<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled5</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Login-Box-En-login-box-en.css">
</head>

<body style="background: var(--bs-black);">
    <div class="d-flex flex-column justify-content-center" id="login-box">
        <div class="login-box-header">
            <h4 style="color: rgb(139,139,139);margin-bottom: 0px;font-weight: 400;font-size: 27px;">Login</h4>
        </div>
        <div class="login-box-content">
            <div class="fb-login box-shadow"><a class="d-flex flex-row align-items-center social-login-link" href="#"><i class="fa fa-facebook" style="margin-left: 0px;padding-right: 20px;padding-left: 22px;width: 56px;"></i>Login with Facebook</a></div>
            <div class="gp-login box-shadow"><a class="d-flex flex-row align-items-center social-login-link" style="margin-bottom: 10px;background: var(--bs-teal);" href="#"><i class="fa fa-google" style="color: rgb(255,255,255);width: 56px;"></i>Login with Google+</a></div>
        </div>
        <div class="d-flex flex-row align-items-center login-box-seperator-container">
            <div class="login-box-seperator"></div>
            <div class="login-box-seperator-text">
                <p style="margin-bottom: 0px;padding-left: 10px;padding-right: 10px;font-weight: 400;color: rgb(201,201,201);">or</p>
            </div>
            <div class="login-box-seperator"></div>
        </div>
        <div class="email-login" style="background-color: #ffffff;"><input type="email" class="email-imput form-control" style="margin-top: 10px;" required="" placeholder="Email" minlength="6"><input type="password" class="password-input form-control" style="margin-top: 10px;" required="" placeholder="Password" minlength="6"></div>
        <div class="submit-row" style="margin-bottom: 8px;padding-top: 0px;"><button class="btn btn-primary d-block box-shadow w-100" id="submit-id-submit" type="submit" style="background: var(--bs-gray-900);">Login</button>
            <div class="d-flex justify-content-between">
                <div class="form-check form-check-inline" id="form-check-rememberMe"><input class="form-check-input" type="checkbox" id="formCheck-1" for="remember" style="cursor: pointer;" name="check"><label class="form-check-label" for="formCheck-1"><span class="label-text">Remember Me</span></label></div><a id="forgot-password-link" href="#">Forgot Password?</a>
            </div>
        </div>
        <div id="login-box-footer" style="padding: 10px 20px;padding-bottom: 23px;padding-top: 18px;">
            <p style="margin-bottom: 0px;">Don't you have an account?<a id="register-link" href="#">Sign Up!</a></p>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>