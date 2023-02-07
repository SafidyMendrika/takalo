<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css") ?>">
</head>

<body style="">
    <ul class="nav nav-tabs" style="background: var(--bs-white);color: var(--bs-gray-900);">
        <li class="nav-item"><a class="nav-link active" href="#" style="background: var(--bs-gray-900);color: var(--bs-light);">TAKALO&lt;&gt;TAKALO</a></li>
        <li class="nav-item"><a class="nav-link" href="#" style="margin-left: 776px;color: var(--bs-gray-900);"><?php echo $admin_name; ?>(Admin)</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url("login/logout" )?>" style="color: var(--bs-gray-900);">Log out&nbsp;</a></li>
    </ul>
    <ul class="nav nav-tabs" style="background: var(--bs-gray);">
        <li class="nav-item" style="background: var(--bs-gray-600);"><a class="nav-link active" href="#" style="background: var(--bs-gray);color: var(--bs-gray-900);">Gerer les Categories</a></li>
        <li class="nav-item" style="background: var(--bs-gray);"><a class="nav-link" href="#" style="color: var(--bs-gray-900);">Ajouter un categorie</a></li>
        <li class="nav-item">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="#" style="background: var(--bs-gray);color: var(--bs-gray-900);">A propos de mon compte</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="color: var(--bs-gray-900);">Recherche de produits</a></li>
                <li class="nav-item"></li>
            </ul>
        </li>
    </ul>
    <div class="table-responsive" style="margin-top: 68px;color: var(--bs-gray-900);background: var(--bs-gray-100);">
        <table class="table" style="text-align: center">
            <thead>
                <tr style="color: var(--bs-gray-dark);background: var(--bs-gray);margin-top: 0px;">
                    <th>numero</th>
                    <th>nom</th>
                    <th>categories</th>
                    <th>Prix</th>
                    <th>Liens</th>
                </tr>
            </thead>
            <tbody style="margin-top: 0px;">
            <?php for ($i = 0 ; $i < count($objects);$i++) {
                $object = $objects[$i];
                ?>
                <tr>
                    <td><?php echo $i+1;  ?></td>
                    <td><?php echo $object["nom_objet"]; ?></td>
                    <td><?php echo $object["nom_categorie"]; ?></td>
                    <td><?php echo $object["prix_objet"]; ?> Ar</td>
                    <td><a href="">Detail</a></td>
                </tr>
            <?php } ?>

            </tbody>
        </table>
    </div>
    <?php $this->load->view("Footer"); ?>
    <script src="<?php echo site_url("assets/bootstrap/js/bootstrap.min.js"); ?>"></script>
</body>

</html>