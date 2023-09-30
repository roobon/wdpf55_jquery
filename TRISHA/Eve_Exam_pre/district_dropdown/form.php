<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
     <?php 
     $db= new mysqli("localhost", "root" ,  "", "divition_district");
     $sql =("SELECT * FROM division");
     $result =$db->query($sql);
     ?>



<form action="">
        <select id="select" name="division">
            <option value="">Select One</option>
            <?php while($data = $result->fetch_assoc()){ ?>
                <option value=" <?php echo $data['id']; ?>">
                <?php echo $data ['name']; ?></option>

            <?php } ?>
            </select>
    </form>

    <div id="display"></div>


    <script>
        $(function(){
            $("#select").change(function(){
                // alert($("#select").val());
                var div_id = $("#select").val();
                $.post("district_list.php" ,{id:div_id},function(data, status){
                    $("#display").html(data);
                })
                   
                })
            })
    
            
        
    </script>
</body>
</html>