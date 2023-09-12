<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .table{
        width: 80%;
        margin: auto;
    }
</style>

<?php 
    $db= new mysqli("localhost" , "root" , "" , "wdpf55_batches");

    $id = $_POST["id"];
    $result = $db->query("SELECT * FROM students WHERE Batch = '$id'");

    if($result->num_rows>0){
        echo "<br>";
        echo "<table class='display compact table table-striped table-dark table-bordered'";
        echo "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Dob</th><th>Email</th></tr>";
        while($row = $result->fetch_object()){?>
            <tr>
                <td><?php echo $row->st_id?></td>
                <td><?php echo $row->Name?></td>
                <td><?php echo $row->Gender?></td>
                <td><?php echo $row->Dob?></td>
                <td><?php echo $row->Email?></td>
            </tr>
        <?php }} else{
            echo "<h3>No data found</h3>";
        }?>