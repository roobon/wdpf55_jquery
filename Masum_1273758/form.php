<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <style>
        body{
            background-color:darkslategray;
        }
        form,select{
           color:blue;
           padding: 30px;
           border-radius: 20px;
           width: 300px;
        }
    </style>
</head>
<body>
    <form action="">
    <?php 
    $myDB = new mysqli("localhost","root","","division");
    $sql = "SELECT * FROM  division";
    $result = $myDB->query($sql);
    
    ?>
        <select id="divisionid">
           
            <?php while($row = $result->fetch_assoc()):
                ?>
                
<option value="<?php echo $row['Id']?>"><?php echo  $row['Name']?>
</option>
<?php endwhile ?>
        </select>
        <!-- <button type="button" id="divisionid">Click Button</button> -->
        
        </form>
            <div id="display"></div>
        <script>
            $(function(){
            $("#divisionid").change(function(){
                // alert($("#divisionid").val())
                var divison_id = $("#divisionid").val();
                $.post("district_list.php",{id:divison_id},function(data, status) {
                    $("#display").html(data);
                })

            })
            })
        </script>
</body>
</html>