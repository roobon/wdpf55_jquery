
<?php 
$host = "localhost";
$user  ="root";
$password = "";
$database ="auth_users";
$myDB = new mysqli("$host","$user","$password","$database");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- <script src="../evidence_login/jquery.min.js"></script> -->
</head>
<body>
   <h3>Batch wise Students</h3>
   <form action="">
    <select  id="batchid">
        <option value="">Select one</option>
        <?php
        $sql = "SELECT * FROM batch_info";
        $result= $myDB->query($sql);
    while($row=$result->fetch_assoc()):
        ?>
        <option value="<?php echo $row['id'] ?>"><?php echo  $row['name'] ?></option>
        <?php endwhile ?>

    </select>
   </form> 
   <div id="studentList"></div>
   <script>
    $(function (){
        $("#batchid").change(function(){
            var batchid= $("#batchid").val();
            $.post("student_list.php",{id:batchid},function(data, status){
                $("#studentList").html(data);
            })
        })
    })
   </script>
</body>
</html>