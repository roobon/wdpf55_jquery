 <?php 
   $server_name= "localhost";
   $user_name= "root";
   $password= "";
   $database_name= "wdpf55_batches";
   $db= new mysqli($server_name , $user_name , $password , $database_name);
 
   $id =  $_POST['id'];
  
  $result = $db->query("SELECT * FROM student where Batch = '$id'");
 
   if($result->num_rows>0){
    echo "<br>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>NAME</th><th>GENDER</th><th>Dob</th><th>Address</th><th>Email</th></tr>";
     while($row = $result->fetch_object()){ ?>
      <tr>
        <td><?php echo $row->ID; ?></td>
        <td><?php echo $row->NAME; ?></td>
        <td><?php echo $row->GENDER; ?></td>
        <td><?php echo $row->Dob; ?></td>
        <td><?php echo $row->Address; ?></td>
        <td><?php echo $row->Email; ?></td>

      </tr>
      <?php } } else {
           echo "<h3>No data found</h3>";
      } 
      
      ?>

  
 
 