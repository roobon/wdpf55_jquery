<?php 
$db = new mysqli("localhost", "root", "", "sadid");
$result = $db->query("SELECT * FROM students")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show data</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Gender</td>
            <td>District</td>
        </tr>
        <?php while($row = $result->fetch_object()):?>
        <tr>
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->gender; ?></td>
            <td><?php echo $row->district; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>