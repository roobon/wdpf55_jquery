<?php 
$myDB  = new mysqli("localhost","root","","division")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <style>
        body{
            background-color:darkgreen;
        }
        form,option{
            color:darkslateblue ;
        }
        #display{
         font-size: 80px;
         color: white;
         padding: 30px;
         width: 150px;
        }
    </style>
</head>
<body>
    <?php 
    $sql = "SELECT * FROM division";
    $result = $myDB->query($sql);
?>
<form action="">
    <select id="div_id">
        <option value="">Select One</option>
        <?php while($row=$result->fetch_assoc()){ ?>
        <option value="<?php echo $row['Div_Id']?>"><?php echo $row['Div_Name'] ?></option>
        <?php } ?>
    </select>
</form>
<div id="display"></div>
<script>
    $(function(){
    $("#div_id").change(function(){
        // alert($("#div_id").val());
        var division_Id =$("#div_id").val();
        $.post("district.php",{id:division_Id},function(data,status){
            $("#display").html(data);
        })
    })
    })
</script>
</body>
</html>