<?php 
    $db= new mysqli("localhost" , "root" , "" , "wdpf55_batches"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.min.js"></script>
</head>
<body>
    <h2>Batch wise students</h2>
    <form action="" method="">
        <select id="batchid">
            <option value="">Select One</option>
            <?php 
                $result = $db->query("SELECT * FROM batchinfo");
                while($row = $result->fetch_assoc()):
            ?>
            <option value="<?php echo $row["id"]?>"><?php echo $row["name"]?></option>
            <?php endwhile?>
        </select>    
    </form>
    <div id="display"></div>
    <script>
        $(document).ready(function () {
            $("#batchid").change(function(){
                var batchid = $("#batchid").val()
                $.post("student_list.php",{id:batchid},function(data,status){
                    $("#display").html(data)
                })
            })
        });
    </script>
</body>
</html>