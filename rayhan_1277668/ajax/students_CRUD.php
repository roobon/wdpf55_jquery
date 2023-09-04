<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studnets</title>
    <style>
        body {
            background-color: lightyellow;
            text-align: center;
        }
        table{
            text-align: center;
            width: 600px;
            height: 500px;
            background-color: lightcyan;
        }

        td:hover {
            background-color: lightcoral;
        }

        td {
            padding: 5px;
        }
    </style>
</head>
<body>
    
<table border="2"> 

<?php 
$db = new mysqli("localhost", "root", "", "template" ) ;

$sql = "SELECT * FROM students";
$result = $db->query($sql);
?>

<tr>
    <td>name</td>
    <td>Email</td>
    <td>Phone</td>
    <td>Action</td>

</tr>

<tr>

<?php 
while( $data =  $result->fetch_assoc()) :


?>
    <td> <?php echo $data['name'] ?> </td>
    <td> <?php  echo $data['email'] ?> </td>
    <td> <?php  echo $data['phone'] ?> </td>
    <td>  </td>


</tr>

<?php endwhile ; ?>


</table>

</body>
</html>