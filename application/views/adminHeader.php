
<link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css") ?>">

<script src="<?php echo site_url("assets/bootstrap/js/bootstrap.min.js"); ?>" defer></script>
<ul class="nav nav-tabs" style="background: var(--bs-white);color: var(--bs-gray-900);">
    <li class="nav-item"><a class="nav-link active" href="#" style="background: var(--bs-gray-900);color: var(--bs-light);">TAKALO&lt;&gt;TAKALO</a></li>
    <li class="nav-item"><a class="nav-link" href="#" style="margin-left: 776px;color: var(--bs-gray-900);"><?php echo $admin_name; ?>(Admin)</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo base_url("login/logout" )?>" style="color: var(--bs-gray-900);">Log out&nbsp;</a></li>
</ul>
<ul class="nav nav-tabs" style="background: var(--bs-gray);">
    <li class="nav-item" style="background: var(--bs-gray-600);"><a class="nav-link active" href="<?php echo site_url("home/adminHome")?>" style="background: var(--bs-gray);color: var(--bs-gray-900);">Gerer les Categories</a></li>
    <li class="nav-item" style="background: var(--bs-gray);"><a class="nav-link" href="<?php echo base_url("admin/ajoutCategorie") ?>" style="color: var(--bs-gray-900);">Ajouter un categorie</a></li>
    <li class="nav-item">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" href="#" style="background: var(--bs-gray);color: var(--bs-gray-900);">A propos de mon compte</a></li>
            <li class="nav-item"><a class="nav-link" href="#" style="color: var(--bs-gray-900);">Recherche de produits</a></li>
            <li class="nav-item"></li>
        </ul>
    </li>

    <li class="nav-item" style="background: var(--bs-gray-600);"><a class="nav-link active" href="<?php echo base_url("admin/statistique") ?>" style="background: var(--bs-gray);color: var(--bs-gray-900);">Statistiques</a></li>
</ul>
