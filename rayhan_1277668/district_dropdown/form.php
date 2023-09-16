<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<style>
    body {
        background-color: lightblue;
    }
    select {
        padding: 10px;
        background-color: lightpink;
        width: 200px;
        border-radius: 10px;
        box-shadow: 20px 40px 60px 60px lightgrey;

    }
    .option {
        border-radius: 20px;
    }
    #display {
        margin-top: 20px;

    }
 

</style>
<body>
    
<form action="" method="post">

<?php 
$db = new mysqli("localhost", "root", "", "division_district");
$sql = "SELECT * FROM division";
$result = $db->query($sql);

?>

<select name="" id="select_id">
    <option value=""> Select One </option>
    <?php while ( $data = $result->fetch_assoc() ) {?>

    <option value=" <?php echo $data['id'] ;?> ">  <?php echo $data['name'] ;?> </option>

    <?php } ?>
</select>
</form>
<div id="display"> </div>

<script>
    $(function(){
        $("#select_id").change(function () {
            // alert($("#select_id").val())
            var div_id = $("#select_id").val();
            $.post("district_list.php", { id:div_id }, function ( data , status ) {
                $("#display").html(data);
            })
        })
    });

    
</script>
</body>
</html>