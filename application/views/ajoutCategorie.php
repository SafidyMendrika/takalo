<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/categorie.css") ?>">
</head>

<body style="">
<?php $this->load->view("adminHeader"); ?>
    <main>
        <form action="<?php echo base_url("admin/saveCategorie");    ?>" method="post">
            <h2>Ajout d'un nouveau categorie</h2>
            <input type="text" name="categorie" placeholder="Nom du categorie" >
            <input type="submit" value="enregistrer">
        </form>
    </main>
<?php $this->load->view("Footer"); ?>
</body>
</html>