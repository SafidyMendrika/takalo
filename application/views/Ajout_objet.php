<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout</title>
</head>
<body>
    <div id="all">
        <div class="content">
            <h1>Ajout objet</h1>
            <form action="insert"  method="post" enctype ="multipart/form-data">
                <p> Nom <input type="text" name="nom"></p>
                <p> Prix <input type="number" name="prix"></p>
                <p>Image <input type="file" name="image"></p>
                <p><input type="submit" value="Ajouter"></p>
            </form>
        </div>
    </div>
</body>
</html>