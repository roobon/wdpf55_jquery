<?php 
$db = new mysqli("localhost", "root", "", "wdpf55_batches");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h2>Select Batch for See Students</h2>
    <form action="">
        <select id="batchid">
            <option value="">Select One</option>
            <?php 
                $result = $db->query("SELECT * FROM batch_info");
                while($row = $result->fetch_assoc()){
            ?>
            <option value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>
            <?php };?>
        </select>
    </form>
    <div id="studentList"></div>

    <script>
        $(function(){
            $("#batchid").change(function(){
                var batchid = $("#batchid").val();
                $.post("student_list.php", {id:batchid}, function(data, status){
                    $("#studentList").html(data);
                })
            })
        })
    </script>
</body>
</html>