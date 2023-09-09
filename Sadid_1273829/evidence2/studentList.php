<?php 
    $conn = new mysqli("localhost", "root", "", "wdpf55_batches");
    $id = $_POST['id'];
    $result = $conn->query("SELECT * FROM students WHERE batch = '$id'");
?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>date of Birth</th>
            <th>Email</th>
        </tr>
        <?php while($row = $result->fetch_object()) : ?>
        <tr>
            <td><?php echo $row->id?></td>
            <td><?php echo $row->name?></td>
            <td><?php echo $row->gender?></td>
            <td><?php echo $row->dob?></td>
            <td><?php echo $row->email?></td>
        </tr>
        <?php endwhile; ?>
    </table>