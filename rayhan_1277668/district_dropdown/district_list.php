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

$sql = " SELECT * FROM  district WHERE div_id = '$id'  ";
$result = $db->query($sql);
echo $id ;
?>

<select name="">
    <option value=""> select District </option>
<?php  while( $data = $result->fetch_assoc() ) {?>
    <option value=" <?php echo $data['div_id']  ?> "> <?php echo $data['name']  ?>  </option>
<?php  }?>
</select>


</body>
</html>