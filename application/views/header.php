<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
    <div class="container"><a class="navbar-brand" href="#page-top"><span style="color: rgb(234, 238, 235);">Takalo-Takalo</span></a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <div class="float-start float-md-end mt-5 mt-md-0 search-area"><i class="fas fa-search float-start search-icon"></i></div>
            <form action="<?php  echo base_url("search/search")?>" method="post">
                <input class="float-start float-sm-end custom-search-input" type="search" name="name" placeholder="Type to search">
                <select name="categorie">
                    <?php foreach ($categories as $categorie) { ?>
                        <option value="<?php echo $categorie["id"]; ?>" ><?php echo $categorie["nom"]; ?> </option>
                    <?php } ?>
                </select>
                <input type="submit" value="go" style="color: black ;" style="border-radius: 30px;">
            </form>
            <ul class="navbar-nav ms-auto text-uppercase">
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url("home/clientHome"); ?>">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url("object/ObjectsOf"); ?>">Mes Objets</a></li>

                <li class="nav-item"><a class="nav-link" href="<?php echo base_url("ajout/ajouter"); ?>">Ajouter Objet</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(""); ?>">Mes propositions</a></li>
                <li class="nav-item"><a class="nav-link" href="">Actu</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url("login/logout"); ?>">Log out</a></li>
            </ul>
        </div>
    </div>
</nav>