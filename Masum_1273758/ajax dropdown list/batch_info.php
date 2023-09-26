<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        body{
            background-color:royalblue;
        }
        h2{
            color: white;
        }
        select{
            width: 200px;
            height:60px;
            text-align: center;
            color:saddlebrown;
        }
    </style>

</head>
<body>
    <?php 
    $myDB = new mysqli("localhost","root","","ajax_evidence");
    $sql  = "SELECT * FROM  batch_info";
    $result = $myDB->query($sql);

    
    ?>
   <h2>Student Batch Info</h2> 
   <form action="">
   <select id="batchId">
   <option value="">Select One</option>
    <?php 
    while($row=$result->fetch_object()):
 ?>
    <option value="<?php echo $row->Id ?>"><?php echo $row->Btc_Name ?></option>
    <?php endwhile ?>
</select>
   </form>
   <div id="displaydata"></div>
   <script>
    $(function(){
        $("#batchId").change(function(){
            // alert($("#batchId").val());
            var batch_Id = $("#batchId").val();
            $.post("student_list.php",{id:batch_Id},function(data,status){
                $("#displaydata").html(data);
            })
        })
    })
   </script>
</body>
</html>