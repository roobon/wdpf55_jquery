
<?php 
$id = $_POST['id'];
// echo $id
$myDB = new mysqli("localhost","root","","ajax_evidence");

$sql = "SELECT *  FROM  student WHERE batch='$id'";
$result = $myDB->query($sql);
if($result->num_rows>0){
    echo "<table border=2>";
    echo "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Email</th><th>Address</th><th>Mobile</th></tr>";
    while($row=$result->fetch_object()){?>
        <tr>
           <td><?php echo $row->Id ?></td> 
           <td><?php echo $row->Name ?></td> 
           <td><?php echo $row->Gender ?></td> 
           <td><?php echo $row->Email?></td> 
           <td><?php echo $row->Address ?></td> 
           <td><?php echo $row->Mobile?></td> 
        </tr>
    <?php }} else{ "<h3> No Data Found</h3>";}?>