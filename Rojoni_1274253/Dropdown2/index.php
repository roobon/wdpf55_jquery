<?php 
    $server_name= "localhost";
    $user_name= "root";
    $password= "";
    $database_name= "division_district";
    
    $db = new mysqli($server_name , $user_name , $password , $database_name); 
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
<h3>Division Name</h3>
    <form action="">
        <select id="divid1">
            <option value="">Select one</option>
            <?php 
                $resullt = $db->query("SELECT * FROM division");
                while($row = $resullt->fetch_assoc()):
            ?>
            <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
            <?php 
                endwhile;
            ?>        

        </select>
    </form>
    <h3>District List</h3>
    <form action="">
        <select name="" id="districtList">
                <option value="">select one</option>
        </select>
    </form>
<script>
        $(function () {
            $("#divid1").change(function(){
               var div2 = $("#divid1").val();
                $.post ("district_list.php",{abc:div2}, function(data, status){
                    $("#districtList").html(data);
                });
            })
        });
    </script>
    
   

    
</body>
</html>