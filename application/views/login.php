
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url("assets/style.css")?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href=https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href=https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="<?php echo site_url("assets/fonts/font-awesome.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/fonts/ionicons.min.css"); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/Login-Form-Dark.css"); ?>">
    <title>Login</title>
</head>
<body>
<section class="login-dark" style="background: var(--bs-gray-900);">
<?php if(isset($error)) echo $error; ?>
<?php if (isset($page) && $page == "client") { ?>
            <form action="<?php echo site_url("login/log") ?>"method="post" style="background: var(--bs-white);">
                <h2 class="visually">TAKALO Client</h2>
                <div class="illustration"><i class="icon ion-ios-locked-outline" style="background: var(--bs-white);color: var(--bs-gray-dark);"></i></div>
                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" value="rasoa@mail.com"></div>
                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" value="sosoa"></div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: var(--bs-gray-900);">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a><button class="btn btn-primary" type="button" style="margin-left: 80px;background: var(--bs-gray-900);">Sign in</button>
                <div class="mb-3" style="padding:2% 0% 0% 0%"><p>Log as <a href="<?php echo base_url('login/adminLoginPage')?>"> Admin </a></p></div>
                 
            </form>
    <?php }else if (isset($page) && $page == "admin") {?>

            <form action="<?php echo site_url("login/logAdmin") ?>"method="post" style="background: var(--bs-white);">
                <h2 class="visually">TAKALO Admin</h2>
                <div class="illustration"><i class="icon ion-ios-locked-outline" style="background: var(--bs-white);color: var(--bs-gray-dark);"></i></div>
                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" value="mendrika@mail.com"></div>
                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" value="mendrika"></div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: var(--bs-gray-900);">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a><button class="btn btn-primary" type="button" style="margin-left: 80px;background: var(--bs-gray-900);">Sign in</button>
                <div class="mb-3" style="padding:2% 0% 0% 0%"><p>Log as <a href="<?php echo base_url('login/')?>"> Client </a></p></div>
                
            </form>

    <?php } ?>

        </section>
<script src="<?php echo site_url("assets/bootstrap/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo site_url("assets/js/bs-init.js"); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="<?php echo site_url("assets/js/creative.js"); ?>"></script>
    <?php
    $this->load->view('Footer');
    ?>
</body>

</html>
