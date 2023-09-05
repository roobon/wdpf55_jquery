<?php 
$db = new mysqli("localhost", "root", "", "idb_bisew");

// Check if the database connection is successful
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$result = $db->query("SELECT * FROM student");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show data</title>
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Address</td>
            <td>Mobile</td>
        </tr>
        <?php while($row = $result->fetch_object()):?>
        <tr>
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->address; ?></td>
            <td><?php echo $row->mobile; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <h3>New Students</h3>
    <form action="" method="post">
        <input type="text" name="name" id="" placeholder="Enter Name"> <br>
        <select name="address" id="">
            <option value="">Select One</option>
            <option value="1">Dhaka</option>
            <option value="2">Bhola</option>
            <option value="3">Barisal</option>
            <option value="4">Cumilla</option>
        </select> <br>
        <input type="text" name="mobile" id="" placeholder="Enter Phone"> <br>
        <button type="button" id="btn">Submit</button>
    </form>
    <div class="show"></div>
    <script>
        $(function () {
            $("#btn").click(function () {  
                $.post("student_submit.php", $("form").serialize(), function (data, status) {  
                    $(".show").html(data);
                   Location: reload(true)
                });
            });
        });
    </script>
</body>
</html>
