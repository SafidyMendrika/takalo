
<link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css") ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/css/adminHeader.css"); ?>">

<script src="<?php echo site_url("assets/bootstrap/js/bootstrap.min.js"); ?>" defer></script>
<header>
<ul class="nav nav-tabs" style="">
    <li class="nav-item" style="padding: 1%"><a class="nav-link active" href="#" style="background: var(--bs-gray-900);color: var(--bs-light);">TAKALO&lt;&gt;TAKALO</a></li>
    <li class="nav-item" style="padding: 1%"><a class="nav-link" href="#" style="margin-left: 776px;color: var(--bs-gray-900);"><?php echo $admin_name; ?>(Admin)</a></li>
    <li class="nav-item" style="padding: 1%"><a class="nav-link" href="<?php echo base_url("login/logout/admin" )?>" style="color: var(--bs-gray-900);">Log out&nbsp;</a></li>
</ul>
<ul class=" nav" style="display: flex;justify-content: space-around;padding: 1%">
    <li class="nav-item item" ><a class="nav-link " href="<?php echo site_url("home/adminHome")?>" >Gerer les Categories</a></li>
    <li class="nav-item item" style=""><a class="nav-link" href="<?php echo base_url("admin/ajoutCategorie") ?>" >Ajouter un categorie</a></li>
    <li class="nav-item item"><a class="nav-link " href="" >A propos de mon compte</a></li>
    <li class="nav-item item"><a class="nav-link" href="" >Recherche de produits</a></li>
    <li class="nav-item item"><a class="nav-link active" href="<?php echo base_url("admin/statistique") ?>" >Statistiques</a></li>
</ul>

</header>