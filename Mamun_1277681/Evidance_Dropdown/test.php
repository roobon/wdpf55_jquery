<?php 
$connec = new mysqli("localhost", "root", "", "wdpf55_batches");
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
    <h3>Batchwise Students</h3>
    <form action="">
        <select name="batch" id="batchid">
            <option value="">Select One</option>
            <?php 
           $result = $connec->query("SELECT * FROM batch_info");
           while($row = $result->fetch_assoc()):
            ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['batch_name']; ?></option>
            <?php 
            endwhile;
            ?>
        </select>
    </form>
    <div id="studentList"></div>
    <script>
        $(function(){
            $("#batchid").change(function(){
                var batchid = $("#batchid").val();
                $.post("student_list.php", { id: batchid }, function(data, status) { 
                    $("#studentList").html(data);
                });
            });
        });
    </script>
</body>
</html>
