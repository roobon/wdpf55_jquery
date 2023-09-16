<?php 
    $db= new mysqli("localhost" , "root" , "" , "bangladesh"); 
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
    <h2>Division & District</h2>
    <form action="">
        <select name="" id="division">
            <option value="">Select</option>
            <?php 
                $result = $db->query("SELECT * FROM  division");
                while($row = $result->fetch_assoc()):
            ?>
            <option value="<?php echo $row["id"]?>"><?php echo $row["name"]?></option>
            <?php endwhile?>
        </select>
    </form><br>

    <select id="district">
        <option value="">Select One</option>
    </select><br><br>
    <select id="upazila">
        <option value="">Select One</option>
    </select>
    <script>
    $(document).ready(function () {
        $("#division").change(function(){
            var division = $("#division").val()
            $.post("districts.php",{id:division},function(data,status){
                    $("#district").html(data)
                })
        })
        $("#district").change(function(){
            var district = $("#district").val()
            $.post("upazila.php",{id:district},function(data,status){
                    $("#upazila").html(data)
                })
        })
    });
</script>
</body>
</html>
