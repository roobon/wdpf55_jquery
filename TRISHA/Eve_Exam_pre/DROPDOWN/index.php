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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
    <h3>Batch wise Students</h3>
    <form action="">
        <select id="batchid">
            <option value="">Select one</option>
            <?php 
                $resullt = $db->query("SELECT * FROM batchinfo");
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
                $.post("list.php", {id:batchid}, function(data, status){
                    $("#studentList").html(data);
                })
            })
        });
    </script>
    
</body>
</html>