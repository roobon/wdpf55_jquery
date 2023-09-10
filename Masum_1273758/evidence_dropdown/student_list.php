<?php 
$host = "localhost";
$user  ="root";
$password = "";
$database ="auth_users";
$myDB = new mysqli("$host","$user","$password","$database");
$Id=$_POST['id'];
$result = $myDB->query("SELECT * FROM  student WHERE batch='$Id'");
if($result->num_rows>0){
echo "<table border='2'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Gender</th><th>Address</th><th>Mobile</th></tr>";
while($row=$result->fetch_object()){?>
<tr>
    <td><?php echo $row->id ?></td>
    <td><?php echo $row->name ?></td>
    <td><?php echo $row->Email ?></td>
    <td><?php echo $row->Gender?></td>
    <td><?php echo $row->adress ?></td>
    <td><?php echo $row->mobile ?></td>
    <td></td>
</tr>
<?php }} else { echo "<h3> No data found</h3>";

} ?>
    


