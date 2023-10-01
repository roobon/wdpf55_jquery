<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <style>
        body{
            background-color:lightseagreen;
        }
        select{
            color:teal;
            width: 200px;
            height: 80px;
            text-align: center;
            border-radius: 20px;
        }
        table{
            background-color:coral;
            color:whit;
        }
    </style>
</head>
<body>
    <?php
    $host ="localhost";
    $user  ="root";
    $password = "";
    $database ="ajax_evidence";
    $myDB = new mysqli($host,$user,$password,$database);
    $sql = "SELECT * FROM batch_info";
    $result = $myDB->query($sql);
    
    ?>
    <form action="">
        <select id="batch_infoID">
            <option value="">Select One</option>
            <?php while($row=$result->fetch_assoc()):?>
            <option value="<?php echo $row['Id'] ?>"><?php echo $row['Btc_Name'] ?></option>
            <?php endwhile ?>
        </select>
    </form>
    <div id="datashow"></div>
    <script>
        $(document).ready(function(){
            $("#batch_infoID").change(function(){
            // alert($("#batch_infoID").val());
            var batc_info = $("#batch_infoID").val();
            $.post("student_list.php",{id:batc_info},function(data,status){
                $("#datashow").html(data);
            })
            })
        })
    </script>
</body>
</html>