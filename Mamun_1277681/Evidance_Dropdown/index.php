<?php 
    $server_name= "localhost";
    $user_name= "root";
    $password= "";
    $database_name= "wdpf55_batches";
    
    $db= new mysqli($server_name , $user_name , $password , $database_name); 
 
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
    <h3>Batch wise Students</h3>
    <form action="">
        <select id="batchid">
            <option value="">Select one</option>
            <?php 
                $resullt = $db->query("SELECT * FROM batch_info");
                while($row = $resullt->fetch_assoc()):
            ?>
            <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
            <?php 
                endwhile;
            ?>        

        </select>
    </form>

    <div id="studentList"></div>


    <script>
        $(function () {
            $("#batchid").change(function(){
                var batchid = $("#batchid").val();
                $.post("student_list.php", {id:batchid}, function(data, status){
                    $("#studentList").html(data);
                })
            })
        });
    </script>
    
</body>
<h3>Batch Wise students</h3>
<form action="" method="post">
    <select name="batchid" id="batchid">
        <option value="">Select One</option>
        <?php 
        $result = $db->query("SELECT FROM batch_info");
        while($row = $result->fetch_object()):
        ?>
        <option value="<?php echo $rows->id ?>"><?php echo $rows->name ?></option>
           <?php  endwhile;?>
    </select>
</form>
<div id="studentList"></div>
<script>
    $(function () { 
        $("#batchid").change(function () {
            var batchid = $("#batchid").val();
            $.post("student_list.php"), {id:batchid}, function (data, status) { 
                $("studentList").html(data);
             }
          })
     })
</script>
</html>