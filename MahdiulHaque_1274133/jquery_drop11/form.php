<?php 

 $db= new mysqli("localhost" , "root", "" , "divison_district");
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
    <h2>Divison List</h2>
    <form action="">
        <select name="" id="divison">
            <option value="">Select One</option>
        
    
    <?php 
        $result = $db->query("SELECT * FROM divison");
        while($row = $result->fetch_assoc()):
    ?>
    <option value="<?php echo $row["id"]?>"><?php echo $row["name"]?></option>
    <?php endwhile?>
    </select>
    </form>
    


    <select id="display">
        <option value="">Select One</option>
    </select>
    <script>
        $(document).ready(function () {
            $("#divison").change(function(){
                var divison = $("#divison").val();
                $.post("district.php", {id:divison}, function(data, status){
                    $("#display").html(data);
                })
            })
        });
    </script>
</body>
</html>