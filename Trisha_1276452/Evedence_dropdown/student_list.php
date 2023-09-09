<?php 
$server_name ="localhost";
$user_name = "root";
$password = "";
$database_name = "wdpf55_batches";

$db= new mysqli($server_name, $user_name, $password, $database_name);

  echo $id = $_POST['id'];
  

$result = $db->query("SELECT * FROM students WHERE Batch = '$id'");

if($result->num_rows>0){

    echo "<table border ='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Address</th></tr>";

    while($row= $result->fetch_object()){?>
    <tr>
        <td><?php echo $row->student_id;?></td>
        <td><?php echo $row->name; ?></td>
        <td><?php echo $row->email; ?></td>
        <td><?php echo $row->phone	; ?></td>
        <td><?php echo $row->address; ?></td>
    </tr>
    <?php } }else{
        echo "<h3>No data Found</h3>";
    }


?>
