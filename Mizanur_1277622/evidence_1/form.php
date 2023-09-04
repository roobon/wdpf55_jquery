<?php 
$db = new mysqli("localhost", "root", "", "wdpf55");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h3>Students List</h3>
    <form action="" method="post">
    <?php $sql = "SELECT * FROM students" ;
                $result = $db->query($sql);
                //$row = $result->fetch_assoc();
                ?>
        <table border=1>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
            </thead>


            <?php while ($row = $result->fetch_assoc()) {  ?>
            
            <tbody>
                <tr>
                    <td><?php echo $row["ID"]?></td>
                    <td><?php echo $row["Name"]?></td>
                    <td><?php echo $row["Phone"]?></td>
                    <td><?php echo $row["Email"]?></td>
                </tr>
            </tbody>

            <?php };?>

        </table>
    </form>
</body>
</html>