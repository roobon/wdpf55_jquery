<?php 
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "wdpf55_school_project";

$db = new mysqli($server_name, $user_name,$password, $database_name);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Batch wise Students</h3>
    <form action="">
        <select id="batchinfo">
    <option value="">Select One</option>

    <?php 
    $result =$db->query("SELECT * FROM batchinfo");
    while($row= $result->fetch_assoc());
    ?>

    <option value=""><?php echo $row['name']?></option>

    
    <?php 
    ?>

        </select>
    </form>
</body>
</html>