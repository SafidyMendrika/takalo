<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/statistique.css") ?>">
    <title>Document</title>
</head>
<body>
<?php $this->load->view("adminHeader"); ?>

<main>
    <div class="element">
        <div class="title">
            <h2>Nombres d'utilisateurs inscrits</h2>
        </div>
        <div class="text">
            <h2><?php echo $userCount; ?> Utilisateurs</h2>
        </div>
    </div>
    <div class="element">
        <div class="title">
            <h2>Nombres d'echanges sur le site</h2>
        </div>
        <div class="text">
            <h2><?php echo $exchangeCount; ?> echanges</h2>
        </div>
    </div>
</main>

<?php
$this->load->view('Footer');
?>
</body>
</html>