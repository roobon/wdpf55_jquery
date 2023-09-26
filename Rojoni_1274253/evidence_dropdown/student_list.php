<?php 
    $db = new mysqli("localhost", "root", "", "wdpf55_batches");
    $id = $_POST['abc'];
    echo "SELECT * FROM students WHERE Batch = '$id'";
    $result = $db->query("SELECT * FROM students WHERE Batch = '$id'");

    if($result->num_rows>0){
        echo "<br>";
        echo "<table border = '1'>";
        echo "<tr><th>ID</th><th>Name</th><th>Gender</th><th>DOB</th><th>Email</th></tr>";

        while($row = $result->fetch_object()){ ?>
        <tr>
            <td><?php echo $row->ID; ?></td>
            <td><?php echo $row->Name; ?></td>
            <td><?php echo $row->Gender; ?></td>
            <td><?php echo $row->DOB; ?></td>
            <td><?php echo $row->Email; ?></td>
        </tr>
    <?php  
    }} else{
        echo "No Data Found";
    }



?>




 