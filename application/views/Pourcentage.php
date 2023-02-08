<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/css/bootstrap.min.css")?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap">
    <link rel="stylesheet" href="<?php echo site_url("assets/fonts/fontawesome-all.min.css")?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/fonts/font-awesome.min.css")?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/fonts/fontawesome5-overrides.min.css")?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/Search-Input-responsive.css")?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/accueil.css")?>">

</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <?php $this->load->view("header"); ?>

    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row ">
                <?php
                if($price==null){
                    echo "<p> pas d'objet correspondant</p>";
                }
                else{
                    foreach ($price as $object) { ?>
                    <div class="col-sm-6 col-md-4 portfolio-item object-element"><a class="portfolio-link" href="#portfolioModal1" data-bs-toggle="modal">
                            <img class="img-fluid" src="<?php echo site_url("assets/img/objet/tshirt1.jpg")?>">
                        </a>
                        <div class="portfolio-caption" style="padding: 4%">
                            <h4><?php echo $object["nom_objet"]; ?>  <?php echo $object["prix_objet"] ;?> Ar</h4>
                            <h5><?php echo $object["nom_categorie"]; ?></h5>
                            <p class="text-muted">de <?php echo $object["id_user"]; ?></p>
                        </div>
                        <div class="portfolio-hover" style="float: right;position: relative;top: -50px;right: 25px;z-index: 5">
                            <a href=""><div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div></a>
                        </div>
                    </div>
                    <?php } } ?>
                
                <!-- <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal4" data-bs-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/4-thumbnail.jpg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Ordinateur</h4>
                        <p class="text-muted">de ...</p>
                    </div>
                </div> -->

            </div>
        </div>
    </section>
   <?php $this->load->view("Footer"); ?>