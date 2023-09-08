

<?php 

$db = new mysqli("localhost", "root", "", "student_batches");

$id =  $_POST['id'];


$sql = " SELECT * FROM student_batches WHERE id = '$id' ";
$result = $db->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student_batches</title>
    <style>
        table, tr, td, th {
            border: 2px solid black;
            margin-top: 20px;
            text-align: center;
            padding: 5px;
        }
    </style>
</head>
<body>
 
<table border="2">
<tr>
    <th>Student Name</th>
    <th>Subject</th>
    <th>Batch</th>
</tr>
<?php  while( $data = $result->fetch_assoc()) : ?>
    <tr>
        <td> <?php echo $data['student_name'] ?> </td>
        <td> <?php echo $data['Subject'] ?> </td>
        <td> <?php echo $data['Batch'] ?> </td>
    </tr>
<?php  endwhile ; ?>

</table>

</body>
</html>