<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Exam</title>
    <meta name="description" content="template">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
</head>

<body>
    <section class="login-dark" style="background: var(--bs-gray-900);">
        <form action="Login/logAdmin"method="post" style="background: var(--bs-white);">
            <h2 class="visually-hidden">TAKALO</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline" style="background: var(--bs-white);color: var(--bs-gray-dark);"></i></div>
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: var(--bs-gray-900);">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a><button class="btn btn-primary" type="button" style="margin-left: 80px;background: var(--bs-gray-900);">Sign in</button>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/creative.js"></script>
    <?php 
    $this->load->view('Footer');
?>
</body>

</html>