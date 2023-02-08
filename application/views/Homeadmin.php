<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css") ?>">
</head>

<body style="">
    <?php $this->load->view("adminHeader"); ?>
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
</body>

</html>