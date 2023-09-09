<?php 
    $conn = new mysqli("localhost", "root","", "wdpf55_batches");
    $result = $conn->query("SELECT * FROM batch_info");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>Index</title>
</head>
<body>
    <form action="" method="post">
        <select name="id" id="batch">
            <option value="">select one</option>
            <?php while($row = $result->fetch_object()):?>
            <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
            <?php endwhile; ?>
        </select>
    </form>
    <div id="studentList"></div>

    <script>
        $(function () {
            $("#batch").change(function(){
                var batchid = $("#batch").val();
                // alert(batchid);
                $.post("studentList.php",{id: batchid},function(data,status){
                    $("#studentList").html(data);
                })
            })
        });
    </script>
</body>
</html>