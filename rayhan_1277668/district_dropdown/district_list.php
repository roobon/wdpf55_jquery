<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$db = new mysqli("localhost", "root", "", "division_district");
$id = $_POST['id'];

$sql = " SELECT * FROM  division WHERE id = '$id'  ";
$result = $db->query($sql);
echo $id ;
?>

<ul>
<?php  while( $data = $result->fetch_assoc() ) {?>
    <li>   <?php echo $data['name']  ?>   </li>
<?php  }?>
</ul>


</body>
</html>