<?php 
    $server_name= "localhost";
    $user_name= "root";
    $password= "";
    $database_name= "wdpf55_batches";
    
    $db= new mysqli($server_name , $user_name , $password , $database_name); 
    $id =  $_POST["id"];
    $result = $db->query("SELECT * FROM  students WHERE batch = '$id'");
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Name</th><th>Gender</th><th>DOB</th><th>Email</th><th>Batch</th><th>Address</th><th>Hobbies</th></tr>";
    
        while ($rows = $result->fetch_object()) {
            echo "<tr>";
            echo "<td>{$rows->id}</td>";
            echo "<td>{$rows->name}</td>";
            echo "<td>{$rows->gender}</td>";
            echo "<td>{$rows->dob}</td>";
            echo "<td>{$rows->email}</td>";
            echo "<td>{$rows->batch}</td>";
            echo "<td>{$rows->address}</td>";
            echo "<td>{$rows->hobbies}</td>";
            echo "</tr>";
        }
    
        echo "</table>";
    } else {
        echo "<h3>No data found</h3>";
    }
    ?>
   <?php 
    $id = $_POST['id'];
    $result = $db->query("SELECT FROM students WHERE batch = '$id'");
    if($result->num_rows>0){
        echo "<table border = '1'>";
        echo" <tr><th>ID</th><th>Name</th><th>Gender</th><th>Dob</th><th>Email</th><th>Batch</th><th>Address</th><th>Hobbies</th> </tr>";
        while($rows = $result->fetch_object()){
            echo "<tr>";
            echo "<td>$rows->id</td>";
            echo "<td>$rows->name</td>";
            echo "<td>$rows->gender</td>";
            echo "<td>$rows->dob</td>";
            echo "<td>$rows->email</td>";
            echo "<td>$rows->batch</td>";
            echo "<td>$rows->address</td>";
            echo "<td>$rows->hobbies</td>";
            echo "</tr>";
        }
           
        echo "</table>";
        else{
            
        }
       
    }
    
    ?>
    
   
   