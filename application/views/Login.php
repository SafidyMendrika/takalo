
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url()?>assets/style.css">
    <title>Login</title>
</head>
<body>
<div id="all">
    <form action="" method="get">
        <div class="row">
            <h1>Coucou les amis</h1>
            <p>Email :</p><input type="email" name="email" >
        </div>
        <div class="row">
            <p>Password :</p><input type="passwprd" name="password" >
        </div>
        <p><input type="submit" value="Log"></p>
        <p>Si vous etes Admin, cliquer <a href="<?php echo base_url('login/adminLoginPage')?>"> ici </a></p>
    </form>
</div>
</body>
</html>