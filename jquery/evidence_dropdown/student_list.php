<?php 
    $server_name= "localhost";
    $user_name= "root";
    $password= "";
    $database_name= "wdpf55_batches";
    
    $db= new mysqli($server_name , $user_name , $password , $database_name); 

    $id = $_POST['id'];

    $result = $db->query("SELECT * FROM students where Batch = '$id'");

    if($result->num_rows>0){
    echo "<br>";    
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Date of Birth</th><th>Email</th></tr>";
    while($row = $result->fetch_object()){ ?>
        <tr>
            <td><?php echo $row->ID; ?></td>
            <td><?php echo $row->Name; ?></td>
            <td><?php echo $row->Gender; ?></td>
            <td><?php echo $row->DOB; ?></td>
            <td><?php echo $row->Email; ?></td>
        </tr> 
   <?php } }  else {
        echo "<h3>No data found</h3>";
   }    
   ?>


    

    