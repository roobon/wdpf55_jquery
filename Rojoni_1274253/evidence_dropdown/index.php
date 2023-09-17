<?php 
$db = new mysqli("localhost", "root", "", "wdpf55_batches");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery_3.6.4_jquery.min.js"></script>
    
    
</head>
<body>
    <h3>Batch wise Students</h3>
    <form action="">
        <select name="" id="batchid">
    <option value="">Select one</option>
        <?php 
            $result = $db->query("SELECT * FROM batchinfo ");
            while($row = $result->fetch_assoc()):
        
        ?>
        <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
        <?php endwhile; ?>
        </select>
    </form>
    <div id="studentlist">
       
    </div>

    <script>
        $(function(){
            $("#batchid").change(function(){
                var batchid = $("#batchid").val();
                $.post("student_list.php", {abc:batchid}, function(data, status){
                    $("#studentlist").html(data);
                });
            });
        });
    </script>
</body>
</html>