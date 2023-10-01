<?php 
$host ="localhost";
$user  ="root";
$password = "";
$database ="ajax_evidence";
$myDB = new mysqli($host,$user,$password,$database);
$id = $_POST['id'];
$sql = "SELECT * FROM  student WHERE batch = '$id'";
$result=$myDB->query($sql);
if($myDB->affected_rows){

    echo "<table border=2>";
    echo "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Email</th><th>Address</th><th>Mobile</th></tr>";
    while($row=$result->fetch_assoc()) {?>
    <tr>
        <td><?php echo $row['Id'] ?></td>
       
        <td><?php echo $row['Name'] ?></td>
        <td><?php echo $row['Gender'] ?></td>
        <td><?php echo $row['Email'] ?></td>
        <td><?php echo $row['Address'] ?></td>
        <td><?php echo $row['Mobile'] ?></td>

    </tr>
<?php }} ?>


