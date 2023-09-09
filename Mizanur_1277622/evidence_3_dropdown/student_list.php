<?php 
$db = new mysqli("localhost", "root", "", "wdpf55_batches");
//echo $_POST["id"];
$id = $_POST["id"];
$result = $db->query("SELECT * FROM  students WHERE Batch = '$id' ")


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2>Student list by Batch</h2>
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Batch</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_object()){?>
            <tr>
                <td><?php echo $row->ID?></td>
                <td><?php echo $row->Batch?></td>
                <td><?php echo $row->Name?></td>
                <td><?php echo $row->Phone?></td>
                <td><?php echo $row->Email?></td>
            </tr>
            <?php };?>
        </tbody>
    </table>
</body>
</html>