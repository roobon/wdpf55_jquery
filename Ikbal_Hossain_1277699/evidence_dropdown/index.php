<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "wdpf55_jquery";

$db = new mysqli($server_name, $user_name, $password, $database_name);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    <h3>Batch wise Students </h3>
    <form action="">
        <select name="" id="batchId">
            <option value="">Select one</option>
            <?php
            $result = $db->query("SELECT * FROM batch_info");
            while ($row = $result->fetch_object()) :
            ?>
                <option value="<?php echo $row->batch_id ?>"> "<?php echo $row->batch_name?>" </option>
            <?php endwhile ?>
        </select>
    </form>

    <div class="studentList"></div>

    <script>
        $(function() {
            $("#batchId").change(function() {
                var batchId
                $.post("student_list.php", {}, function(data, status) {
                    $("#studentList").html(data);
                });
            });
        });
    </script>
</body>

</html>