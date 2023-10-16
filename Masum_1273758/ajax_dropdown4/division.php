<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>
    <?php 
$myDB = new mysqli("localhost","root","","division");
$sql = "SELECT * FROM division";
$result = $myDB->query($sql);
?>
<h1>Division List</h1>
<form action="">
    <select id="div_id">
        <option value="">Select One</option>
        <?php 
        while($row=$result->fetch_assoc()):
        
        ?>
        <option value="<?php echo $row['Div_Id'] ?>"><?php echo $row['Div_Name'] ?></option>
        <?php endwhile ?>
    </select>
    <div id="showdata"></div>
    <script>
        $(document).ready(function(){
            $("#div_id").change(function(){
                // alert($("#div_id").val());
                var division_id = $("#div_id").val();
                post("district.php", {id:division_id},function(data,status){
                    $("#showdata").html();
                })

            })
        })
    </script>
</form>
</body>
</html>