<?php $db = new mysqli("localhost", "root", "", "div_dis"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../../jquery_3.6.4_jquery.min.js"></script>
</head>
<body>
    <div class="container">
    <h3>Division List</h3>
    <form action="" method="post">
       
        <select name="" id="divid">
            <option value="">Select one</option>
        <?php 
            $sql = "SELECT * FROM division ";
            $result = $db->query($sql);
            while($row = $result->fetch_assoc()):
        
        ?>
            <option value="<?php echo $row['ID'] ?>"><?php echo $row['Name'] ?></option>
            <?php endwhile; ?>
        </select>

        <div>
        <h3>District List</h3>
        <form action="">
            <select name="" id="district">
                <option value="">select one</option>
            </select>
        </form>
    </div>
        
    </form>
    </div>
    
    <script>
        $(document).ready(function(){
            $("#divid").change(function(){
                var divid = $("#divid").val();
                // alart(divid);
                $.post("district.php", {abc:divid}, function(data, status){
                    $("#district").html(data);
                });
            })
        })
    </script>
</body>
</html>