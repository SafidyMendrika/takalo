<?php
$this->load->model("DAO_model");
$this->load->model("PDO_Connector");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HOME</h1>
    <hr>
    <h2>message : </h2>
    <p><?php echo $msg ?></p>
<hr>
<hr>
<?php
$connector = new PDO_Connector();
$connection = $connector->connect();

$allPopo = DAO_model::selectAll($connection,"popo"," name='popo' ");

var_dump($allPopo);
?>
</body>
</html>